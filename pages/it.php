<?php
use KG\Skill;
include 'data/skills.php';

?>

<div id='idIt' class='bg-blue-200 h-screen'>
    <div class='flex justify-center'>
        <div class='w-3/4'>
            <h1 class='mt-16 mb-5 text-4xl font-bold underline text-center italic text-blue-800'>IT-Kenntnisse</h1>
            <h1 class='mt-5 text-3xl font-bold text-center text-blue-800'>Programmiersprachen</h1>
            <div class='flex flex-wrap justify-center'>
                <?php
                    $skillButton = new Skill($colorSkill);
                    foreach($skills as $skill){
                        $skillButton->showSkill($skill);
                    }
                ?>
            </div>
            <br><br>
            <h1 class='mt-5 text-3xl font-bold text-center text-blue-800'>Software Kenntnisse</h1>
            <div class='flex flex-wrap justify-center'>
                <?php
                    $appButton = new Skill($colorApp);
                    foreach($apps as $app){
                        $appButton->showSkill($app);
                    }
                ?>
            </div>
            <div class='flex justify-center mt-10'>
                <div class='w-72 h-28 p-3 m-5 bg-violet-600 rounded-xl flex justify-center items-center text-white text-2xl font-bold hover:scale-110 duration-100 shadow-xl'>
                    Mein Lebenslauf (PDF)
                </div>
            </div>
        </div>
    </div>
</div>