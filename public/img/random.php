<?php
// This is used in some email templates from My Cyberfusion (show a random image instead of a static one).

function displayRandomPic() 
{
	    $photoAreas = array("img1", "img2", "img3", "img4", "img5", "img6");

	    $randomNumber = array_rand($photoAreas);
	    $randomImage = $photoAreas[$randomNumber];

            return $randomImage;
}

header("Content-type: image/jpeg");
header("Content-Disposition: inline; filename=".'Image'."");
@readfile(displayRandomPic().'.jpg');
?>
