<?php
use KG\Skill;
include 'data/skills.php';

?>

<div id='idIt' class='bg-blue-200 h-screen'>
    <div class='flex justify-center'>
        <div class='w-3/4'>
            <h1 class='mt-16 mb-5 text-4xl font-bold underline text-center italic text-blue-800'>IT-Kenntnisse</h1>
            <h1 class='mt-5 text-3xl font-bold text-center text-blue-800'>Programmiersprachen</h1>;
            <div class='flex flex-wrap justify-center'>
                <?php
                    $skillButton = new Skill($colorSkill);
                    foreach($skills as $skill){
                        $skillButton->showSkill($skill);
                    }
                ?>
            </div>
            <br><br>
            <h1 class='mt-5 text-3xl font-bold text-center text-blue-800'>Software Kenntnisse</h1>;
            <div class='flex flex-wrap justify-center'>
                <?php
                    $appButton = new Skill($colorApp);
                    foreach($apps as $app){
                        $appButton->showSkill($app);
                    }
                ?>
            </div>
        </div>
    </div>
</div>