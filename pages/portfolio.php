<?php
use KG\Project;
?>

<div id='idPortfolio' class='bg-red-200 h-screen'>
    <div class='flex justify-center'>
        <div class='w-4/5'>
            <h1 class='mt-16 text-center'>Portfolio</h1>
            <div class='flex flex-wrap justify-center'>
            <?php
            $web = (new Project)->showWeb('', 'homepage_v1');
            $web = (new Project)->showWeb('', 'verein');
            $web = (new Project)->showWeb('', 'website_proposal_1');
            $web = (new Project)->showWeb('', 'website_proposal_2');
            $web = (new Project)->showWeb('', 'website_proposal_3');
            $web = (new Project)->showWeb('', 'website_proposal_4');
            ?>
        </div>
        </div>
    </div>
</div>