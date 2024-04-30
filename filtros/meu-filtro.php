<?php

// class MeuFiltro extends php_user_filter
// {
//     public  $stream;
//     public function onCreate(){
//         parent::onCreate();
//         //cria stream tempor�rio que ser� enviado para $out em filter();
//         $this->stream = fopen('php://temp', 'a+');//fornece espa�o tempor�rio na mem�ria
//         return $this->stream !== false;
//         //executado ao criar o filtro
//     }

//     public function filter($in, $out, &$consumed, bool $closing){
//         /*
//         1� - Recursos - tipo de dado (arquivo, caminho de rede)
//         2� - Recursos - tipo de dado (arquivo, caminho de rede)
//         3� - N�mero de bytes consumidos no stream que est� passando pelo filtro
//         4� - Se est� sendo fechado ou n�o
//         */
//         // recebe buckets quando o arquivo � muito grande (divide o arquivo em peda�os)

//         $saida = '';
//         while($bucket = stream_bucket_make_writeable($in)){
//             //enquanto tiver coisas pra ler, eu executo esse c�digo
//             //$bucket->datalen; //tamanho da string recebida
//             //$bucket->datalen; //tamanho da string recebida

//             $linhas = explode("\n", $bucket->data); //pegando as linhas dos buckets recebidos
            
//             foreach($linhas as $linha){
//                 if (stripos($linha, 'ut') !== false){//se encontrar na linha a palavra "ut"
//                     $saida .= "$linha\n";
//                 }
//             }
//         }
//         $out = $saida;
//         $bucketSaida = stream_bucket_new($this->stream, $saida);
//         stream_bucket_append($out, $bucketSaida);

//         return PSFS_PASS_ON;
//     }

//     // public function onClose(){
//     //     parent::onClose();
//     //     //executado quando o filtro deixa de existir
//     // }
// }

class MeuFiltro extends php_user_filter
{
    public $stream;

    public function onCreate()
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing)
    {
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'ea') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);

        return PSFS_PASS_ON;
    }
}