<?php
use Miskai\Miskas2;
use Intervention\Image\ImageManagerStatic as Image;

require __DIR__.'/../vendor/autoload.php';

$miskas = new Miskas2;

// echo $miskas->visi_gyvunai();

$img = Image::make('img.jpg');
$img->resize(rand(100, 300), rand(100, 300));
$img->save('galutinis.jpg');

header('Content-type: image/jpeg');

echo file_get_contents('galutinis.jpg');