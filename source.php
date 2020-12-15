<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<button type="button" class="btn btn-primary btn-lg btn-block" onclick="src()">Click here to continue</button>
  
 
<?php
$URL = $_POST['url'];
echo "Click above button to see source code";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$URL);
curl_exec($ch);
curl_close($ch);
?>
<script>

var _0x5e56=['</pre>','replace','document','</html>','write','close','&lt;','innerHTML','getElementsByTagName','open'];(function(_0x19d4e2,_0xf0eb67){var _0x5e5654=function(_0xd0a58f){while(--_0xd0a58f){_0x19d4e2['push'](_0x19d4e2['shift']());}};_0x5e5654(++_0xf0eb67);}(_0x5e56,0x1bf));var _0xd0a5=function(_0x19d4e2,_0xf0eb67){_0x19d4e2=_0x19d4e2-0xac;var _0x5e5654=_0x5e56[_0x19d4e2];return _0x5e5654;};function src(){var _0x226748=_0xd0a5,_0x45dbfc='<html>';_0x45dbfc+=document[_0x226748(0xad)]('html')[0x0][_0x226748(0xac)],_0x45dbfc+=_0x226748(0xb2),_0x45dbfc=_0x45dbfc[_0x226748(0xb0)](/</g,_0x226748(0xb5)),_0x45dbfc='<pre>'+_0x45dbfc+_0x226748(0xaf),srcWindow=window[_0x226748(0xae)](''),srcWindow[_0x226748(0xb1)][_0x226748(0xb3)](_0x45dbfc),srcWindow[_0x226748(0xb1)][_0x226748(0xb4)]();}
</script>
