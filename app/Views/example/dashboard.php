<?php return ["body" => function ($opt) { ?>
    Hello there! You have reached the DashboardController.

    <br><br>

    Check out:
    <a href="<?= $opt["root"] ?>hello/world">
        Hello World
    </a>

    <br><br>

    Data from a model:
    <ul>
        <?php foreach ($opt["examples"] as $example) { ?>
            <li>
                <?= e($example["content"]) ?>
            </li>
        <?php } ?>
    </ul>
<?php }]; ?>
