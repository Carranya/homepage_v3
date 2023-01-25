<?php
use KG\Skill;
?>

<div id='idIt' class='bg-blue-200 h-screen'>
    <div class='flex justify-center'>
        <div class='w-4/5'>
            <h1 class='mt-16'>IT-Kenntnisse</h1>
            <?php
                $skill = (new SKill('lightpink'))->showSkill('HTML');
            ?>
        </div>
    </div>
</div>