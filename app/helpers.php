<?php


if(!function_exists('makeAvatar')) 

{

    function makeAvatar($frontPath,$dest,$char)
    {
        $path=$dest;
        $image=imagecreate(200,200);
        $red=rand(0,255);
        $green=rand(0,255);
        $blue=rand(0,255);
        imagecollorallocate($image,$red,$green,$blue);
        $textcolor=imagecollorallocate($image,255,255,255);
        imagettftext($imge,100,0,50,150,$textcolor,$frontPath,$char);
        imagepng($image,$path);
        imagedestroy($image);

        return $path;
    }



}

?>