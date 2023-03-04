<?php
error_reporting(0);
//header('Content-Type:image/png');
function waf($str){
	if(strstr($str,".png")!==False){
		return $str;
	}
	else{
		die('Must get png file!!');
	}
}
$img=(!isset($_GET['img']))?"https://p1.itc.cn/images01/20230207/8a9e552d8ec047acaa638da34cea9ed1.png":waf($_GET['img']);
$imageInfo = getimagesize($img);
$content = @file_get_contents($img); 
$base64Data = 'data:'.$imageInfo['mime'].';base64,'.base64_encode($content);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Challenge</title>
</head>
<body>
	<img src=<?=$base64Data?>>
	<h2>What's the kind of animal</h2>
	<!-- Sorry We havent finish this exam system so u cant submit answer  btw we dont delete phpinfo.php:( -->
	<input type="text" name="answer">

</body>
</html>