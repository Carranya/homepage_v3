<?php
namespace KG;

class Skill {
    public function __construct(public $color){
        $this->color = $color;
    }

    public function showSkill($name){
        echo "<div class=''>" . $name . "</div>";
    }
}