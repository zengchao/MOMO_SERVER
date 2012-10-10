<?php
/*构造函数-生成缩略图+水印,参数说明:
$srcFile-图片文件名,
$dstFile-另存文件名,
$markwords-水印文字,
$markimage-水印图片,
$dstW-图片保存宽度,
$dstH-图片保存高度,
$rate-图片保存品质
makethumb("a.jpg","b.jpg","50","50");
*/

function makethumb($srcFile,$dstFile,$dstW,$dstH,$rate=100,$markwords=null,$markimage=null) 
{ 
$data = GetImageSize($srcFile); 
switch($data[2]) 
{ 
case 1: 
$im=@ImageCreateFromGIF($srcFile); 
break; 
case 2: 
$im=@ImageCreateFromJPEG($srcFile); 
break; 
case 3: 
$im=@ImageCreateFromPNG($srcFile); 
break; 
} 
if(!$im) return False; 
$srcW=ImageSX($im); 
$srcH=ImageSY($im); 
$dstX=0; 
$dstY=0; 
if ($srcW*$dstH>$srcH*$dstW) 
{ 
$fdstH = round($srcH*$dstW/$srcW); 
$dstY = floor(($dstH-$fdstH)/2); 
$fdstW = $dstW; 
} 
else 
{ 
$fdstW = round($srcW*$dstH/$srcH); 
$dstX = floor(($dstW-$fdstW)/2); 
$fdstH = $dstH; 
} 
$ni=ImageCreateTrueColor($dstW,$dstH); 
$dstX=($dstX<0)?0:$dstX; 
$dstY=($dstX<0)?0:$dstY; 
$dstX=($dstX>($dstW/2))?floor($dstW/2):$dstX; 
$dstY=($dstY>($dstH/2))?floor($dstH/s):$dstY; 
$white = ImageColorAllocate($ni,255,255,255); 
$black = ImageColorAllocate($ni,0,0,0); 
imagefilledrectangle($ni,0,0,$dstW,$dstH,$white);// 填充背景色 
ImageCopyResized($ni,$im,$dstX,$dstY,0,0,$fdstW,$fdstH,$srcW,$srcH); 
if($markwords!=null) 
{ 
$markwords=iconv("gb2312","UTF-8",$markwords); 
//转换文字编码 
ImageTTFText($ni,20,30,450,560,$black,"simhei.ttf",$markwords); //写入文字水印 
//参数依次为，文字大小|偏转度|横坐标|纵坐标|文字颜色|文字类型|文字内容 
} 
elseif($markimage!=null) 
{ 
$wimage_data = GetImageSize($markimage); 
switch($wimage_data[2]) 
{ 
case 1: 
$wimage=@ImageCreateFromGIF($markimage); 
break; 
case 2: 
$wimage=@ImageCreateFromJPEG($markimage); 
break; 
case 3: 
$wimage=@ImageCreateFromPNG($markimage); 
break; 
} 
imagecopy($ni,$wimage,500,560,0,0,88,31); //写入图片水印,水印图片大小默认为88*31 
imagedestroy($wimage); 
} 
ImageJpeg($ni,$dstFile,$rate); 
ImageJpeg($ni,$srcFile,$rate); 
imagedestroy($im); 
imagedestroy($ni); 
} 
?>