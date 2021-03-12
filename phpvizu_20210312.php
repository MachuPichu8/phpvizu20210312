<?php
header('content-type:image/png');
$image = imagecreatetruecolor(400, 300);

$pontok = array(
            200,  100,
            220,  110,
            195,  108,
);

$fekete = imagecolorallocate($image, 0, 0, 0);
$feher = imagecolorallocate($image, 255, 255, 255);
$piros = imagecolorallocate($image, 255, 0, 0);

imagefilledellipse($image, 200, 100, 50, 50, $feher);
imagefilledellipse($image, 200, 150, 75, 75, $feher);
imagefilledellipse($image, 200, 225, 100, 100, $feher);
imagefilledellipse($image, 240, 140, 25, 25, $feher);
imagefilledellipse($image, 160, 140, 25, 25, $feher);

imagefilledellipse($image, 200, 150, 10, 10, $fekete);
imagefilledellipse($image, 200, 135, 10, 10, $fekete);
imagefilledellipse($image, 200, 165, 10, 10, $fekete);

imagefilledellipse($image, 200, 225, 10, 10, $fekete);
imagefilledellipse($image, 200, 210, 10, 10, $fekete);
imagefilledellipse($image, 200, 240, 10, 10, $fekete);

imagefilledellipse($image, 190, 92, 10, 10, $fekete);
imagefilledellipse($image, 210, 92, 10, 10, $fekete);
imagefilledrectangle($image, 190, 112, 210, 114, $fekete);

imagefilledrectangle($image, 170, 60, 230, 80, $piros);
imagefilledrectangle($image, 180, 40, 220, 60, $piros);

imagefilledpolygon($image, $pontok, 3, $piros);



header("Content-type: image/png");
imagepng($image);
?>