<?php 
include 'header.php';
include 'footer.php';
include 'class.php';

$tigrar = $_GET['tiger'];
$giraffer = $_GET['giraff'];
$apor = $_GET['apa'];
$kokosnotter = $_GET['kokosnot'];

/*print_r($tigrar);
print_r($giraffer);
print_r($apor);
print_r($kokosnotter);*/

for($i=0; $i < $tigrar; $i++){
    $tigern = new Tiger();
    $tigern->draw();
}

for($i=0; $i < $giraffer; $i++){
    $giraffen = new Giraff();
    $giraffen->draw();
}

for($i=0; $i < $apor; $i++){
    $apan = new Apa();
    $apan->draw();
}
for($i=0; $i < $kokosnotter; $i++){
    $kokosnoten = new Kokosnot();
    $kokosnoten->draw();
}


