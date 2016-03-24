<?php


if(isset($_POST['submit'])){ 
$purl = $_POST['purl'];
$newurl = preg_replace('!www!', 'm', $purl);
$content = file_get_contents($newurl);
$getdiv = explode("video_redirect" , $content );
$enddiv = explode("amp;source", $getdiv[1]);


echo enddiv[0];
}

?>
<html>
<head><title>Converting</title></head>

<body>

</body>

</html>
