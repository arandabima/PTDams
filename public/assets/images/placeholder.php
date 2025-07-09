<?php
// Script untuk membuat placeholder image
function createPlaceholder($width, $height, $text, $filename) {
    $image = imagecreate($width, $height);
    
    // Colors
    $bg_color = imagecolorallocate($image, 240, 240, 240);
    $text_color = imagecolorallocate($image, 100, 100, 100);
    
    // Add text
    $font_size = 5;
    $text_width = imagefontwidth($font_size) * strlen($text);
    $text_height = imagefontheight($font_size);
    
    $x = ($width - $text_width) / 2;
    $y = ($height - $text_height) / 2;
    
    imagestring($image, $font_size, $x, $y, $text, $text_color);
    
    // Save image
    imagejpeg($image, $filename);
    imagedestroy($image);
}

// Generate placeholder images
createPlaceholder(800, 600, 'Hero Image', 'hero-image.jpg');
createPlaceholder(600, 400, 'About Image', 'about-image.jpg');
createPlaceholder(400, 300, 'Company Story', 'company-story.jpg');
createPlaceholder(200, 200, 'Team Member', 'team-1.jpg');
createPlaceholder(200, 200, 'Team Member', 'team-2.jpg');
createPlaceholder(200, 200, 'Team Member', 'team-3.jpg');
createPlaceholder(200, 200, 'Team Member', 'team-4.jpg');

echo "Placeholder images created successfully!";
?>