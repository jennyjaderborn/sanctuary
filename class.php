<?php

 abstract class Animal {

    protected $image;
    protected $sound;

     private function onclick(){
        $names = array("Greta", "Henry", "Ingo", "Josefine", "Isak", "Karin", "Anders", "Sara", "Tarzan", "Leo", "James", "Rosanna", "Anna");        
        $this->namnet = $names[array_rand($names)];
        return $this->writeAlert();
     }

     public abstract function writeAlert();
        

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

   public function writeAlert() {
        return "alert(\" $this->namnet - $this->sound \");";
    }
}

class Apa extends Animal {
    protected $image = 'monkey.png';
    protected $sound = "wihihohho";
    public function writeAlert() {
        return "alert(\" $this->namnet - $this->sound \");";
    }
}
class Tiger extends Animal {
    protected $image = 'tiger.png';
    protected $sound = "GRRRw";
    public function writeAlert() {
        return "alert(\" $this->namnet - $this->sound \");";
    }
}
class Kokosnot extends Animal {//byt superclass
    protected $image = 'kokosnot.png';
    public function writeAlert() {
        return null;
    }
}

/*

for($i=0; $i < count($tigrar); $i++){
    new Tiger();
}

$family = array(
    new Giraff(),
    new Giraff(),
    new Giraff(),
    new Apa(),
    new Tiger(),
    new Kokosnot(),
);
foreach ($family as $member) {
    $member->draw();
}
*/