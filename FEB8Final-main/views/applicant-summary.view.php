<?php
$app = new Applicant($applicant);
?>

<div>
    <p> Name: <?= $app->get_name() ?></p>
    <p> Years of Experience: <?= $app->get_exp() ?></p>
    <p> Current level: <?= $app->get_level() ?></p>
    <p> Skills: 
        <?php foreach ($app->get_skills() as $skill): ?>
            <?= $skill . ', ' ?>
        <?php endforeach; ?>
    </p>
</div>
