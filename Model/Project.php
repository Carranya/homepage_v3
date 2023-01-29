<?php
namespace KG;

class Project {
    public function showProject($link, $img, $title, $description){
        echo "<div class='hover:scale-110 duration-100 m-5 shadow-xl bg-red-300 p-5 rounded-xl'>
            <a href='" . $link . "'><img src='/img/portfolio/" . $img . ".jpg' class='ml-auto mr-auto w-80'></a>
            <div class='text-center text-blue-800 font-bold pt-3'>$title</div>
            <div class='text-center text-blue-800 pt-3'>$description</div>
        </div>";
    }

    public function showNewProject($img, $title, $description){
        echo "<div class='hover:scale-110 duration-100 m-5 shadow-xl bg-red-300 p-5 rounded-xl'>
            <img src='/img/portfolio/" . $img . ".jpg' class='ml-auto mr-auto w-80 opacity-40'>
            <div class='text-center text-blue-800 font-bold pt-3'>$title</div>
            <div class='text-center text-blue-800 pt-3 italic'>$description</div>
        </div>";
    }
}