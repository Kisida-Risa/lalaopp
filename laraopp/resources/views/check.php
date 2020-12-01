
<?php
$url='https://www.google.co.jp/';
//cURLを初期化して使用可能にする
$curl=curl_init();
//オプションにURLを設定する
curl_setopt($curl,CURLOPT_URL,$url);
//CA証明書の検証をしない
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
//URLにアクセスし、結果を表示させる
curl_exec($curl);
//cURLのリソースを解放する
curl_close($curl);

?>
