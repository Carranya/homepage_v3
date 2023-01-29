<?php
use KG\Project;
include 'data/projects.php';
?>

<div id='idPortfolio' class='bg-red-200 pb-16'>
    <div class='flex justify-center'>
        <div class='w-3/4'>
            <h1 class='mt-16 mb-5 text-4xl font-bold underline text-center italic text-blue-800'>Portfolio</h1>
                
                <!-- Webseiten -->
                <h1 class='m-5 text-3xl font-bold text-center text-blue-800'>Webseiten</h1>
                <div class='flex flex-wrap justify-center'>
                    <?php
                        foreach($webs as $web){    
                            $showWeb = (new Project)->showProject($web['link'], $web['img'], $web['title'], $web['description']); 
                        }
                    ?>
                </div>
                <br><br>

                <!-- Aktuelle Projekte -->
                <h1 class='m-5 text-3xl font-bold text-center text-blue-800'>Aktuelle Projekte</h1>
                <div class='flex flex-wrap justify-center'>
                    <?php
                        foreach($newWebs as $newWeb){    
                            $showNewWeb = (new Project)->showNewProject($newWeb['img'], $newWeb['title'], $newWeb['description']); 
                        }
                    ?>
                </div>
                <br><br>

                <!-- Webtools und Mini-Games -->
                <h1 class='m-5 text-3xl font-bold text-center text-blue-800'>Webtools und Mini-Games</h1>
                <div class='flex flex-wrap justify-center'>
                    <?php
                        foreach($tools as $tool){    
                            $showTool = (new Project)->showProject($tool['link'], $tool['img'], $tool['title'], $tool['description']); 
                        }
                    ?>
                </div>
                <br><br>

            <div class='flex justify-center mt-5'>
                    <a href='https://github.com/Carranya' target='_blank'><img src='img/icons/github.png' class='w-16 hover:scale-110 duration-100'></a>
            </div>
            <div class='flex justify-center mt-3'>
                <div>Alle Codes von meinen Projekten sind in meiner <span class='font-bold'><a href='https://github.com/Carranya' target='_blank'>GitHub Seite</a></span> einsehbar.</div>    
            </div>
        </div>
    </div>
</div>
