<?php
use KG\Project;
include 'data/projects.php';
?>

<div id='idPortfolio' class='bg-red-200 pb-16'>
    <div class='flex justify-center'>
        <div class='w-3/4'>
            <h1 class='mt-16 mb-5 text-4xl font-bold underline text-center italic text-blue-800'>Portfolio</h1>
            <?php
            foreach($groupe as $group){
                echo "<h1 class='m-5 text-3xl font-bold text-center text-blue-800'>$group</h1>";
                echo "<div class='flex flex-wrap justify-center'>";
                foreach($projects as $project){
                    if($group == $project['groupe']){
                        if($group != 'Aktuelle Projekte'){
                            $showProject = (new Project)->showProject($project['link'], $project['img'], $project['title'], $project['description']);
                        } else {
                            $showProject = (new Project)->showNewProject($project['link'], $project['img'], $project['title'], $project['description']);
                        }
                    }
                }
                echo "</div>";
                echo "<br><br>";
            }
            ?>
            <div class='flex justify-center mt-5'>
                    <a href='https://github.com/Carranya' target='_blank'><img src='img/icons/github.png' class='w-16 hover:scale-110 duration-100'></a>
            </div>
            <div class='flex justify-center mt-3'>
                <div>Alle Codes von meinen Projekten sind in meiner <span class='font-bold'><a href='https://github.com/Carranya' target='_blank'>GitHub Seite</a></span> einsehbar.</div>    
            </div>
        </div>
    </div>
</div>
