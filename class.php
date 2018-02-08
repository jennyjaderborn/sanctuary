<?php

 abstract class Animal {
     protected $image;
     public abstract function onclick();

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
    protected $image = 'giraff.png';
    public function onClick() {
        return null;
    }
}

/*class Apa extends Sanctuary {
    
}
class Tiger extends Sanctuary {
    
}
class Kokosnöt extends Sanctuary {
    
}*/

$family = array(
    new Giraff(),
);
foreach ($family as $member) {
    $member->draw();
}
