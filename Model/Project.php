<?php
namespace KG;

class Project {
    public function showProject($link, $img, $title, $description){
        if($link != ''){

            echo "<a href='" . $link . "' target='_blank'><div class='hover:scale-110 duration-100 m-5 shadow-xl bg-green-400 p-5 rounded-xl'>
            <img src='/img/portfolio/" . $img . ".jpg' class='ml-auto mr-auto w-80'>
            <div class='text-center text-blue-800 font-bold pt-3'>$title</div>
            <div class='text-center text-blue-800 pt-3'>$description</div>
            </div></a>";
        } else {
            echo "<div class='hover:scale-110 duration-100 m-5 shadow-xl bg-green-400 p-5 rounded-xl'>
            <img src='/img/portfolio/" . $img . ".jpg' class='ml-auto mr-auto w-80 opacity-40'>
            <div class='text-center text-blue-800 font-bold pt-3'>$title</div>
            <div class='text-center text-blue-800 pt-3 italic'>$description</div>
            </div>";
        }
    }
}