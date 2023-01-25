<?php
use KG\Skill;
?>

<div id='idIt' class='bg-blue-200 h-screen'>
    <div class='flex justify-center'>
        <div class='w-4/5'>
            <h1 class='mt-16'>IT-Kenntnisse</h1>
            <div class='flex flex-wrap justify-center'>
                <?php
                    $skills = [
                        'HTML',
                        'PHP 8.1',
                        'Javascript',
                    ];

                    $skillButton = new Skill('violet');

                    foreach($skills as $skill){
                        $skillButton->showSkill($skill);
                    }
                ?>
            </div>
        </div>
    </div>
</div>