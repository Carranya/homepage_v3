<?php
namespace KG;

class Skill {
    public function __construct(public $color){
        $this->color = $color;
    }

    public function showSkill($name){
        echo "<div class='
        w-48
        h-24
        p-3
        m-5
        rounded-xl
        flex
        justify-center
        items-center
        text-white
        text-xl
        text-center
        font-bold
        hover:opacity-40
        shadow-xl
        " . $this->color . "
        '
        >" . $name . "</div>";
    }
}