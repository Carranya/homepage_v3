<?php
namespace KG;

class Project {
    public function showWeb($link, $img){
        echo "<div class='hover:scale-110 duration-100 m-5 shadow-xl'><a href='" . $link . "'><img src='/img/portfolio/" . $img . ".jpg' class='w-80'></a></div>";
    }
}