<?php

 abstract class Animal {
    protected $image;
    protected $sound;
     public function onclick(){
        $names = array("Greta", "Henry", "Ingo", "Josefine", "Isak", "Karin", "Anders", "Sara", "Tarzan", "Leo", "James", "Rosanna", "Anna");        
        $namnet = $names[array_rand($names)];
        return "alert(\" $this->sound + $namnet\");";
     }
     //"<h1>$this->sound</h1>";

    public function draw() {
        echo "<img style='margin: 10px; width: 200px' src='".$this->image."' onclick='".$this->onClick()."' />";
    }
   /* public function __construct($antal, $sort){
        $this->antal = $antal;
        $this->sort = $sort;

    }*/
    //onclick för alert, abstract 
    //get image();
    //

}


class Giraff extends Animal {
    protected $sound = "wihhihi";
    protected $image = 'giraff.png';
}

class Apa extends Animal {
    protected $image = 'monkey.png';
}
class Tiger extends Animal {
    protected $image = 'tiger.png';
    protected $sound = "GRRRw";
}
class Kokosnot extends Animal {//byt superclass
    protected $image = 'kokosnot.png';
}

$family = array(
    new Giraff(),
    new Apa(),
    new Tiger(),
    new Kokosnot(),
);
foreach ($family as $member) {
    $member->draw();
}
