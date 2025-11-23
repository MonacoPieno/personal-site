<?php

//i will save hear my nav template, but before i'have to create it
function getHead()
{
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fabio site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    </head>

    <body></body>
    <?php
} ?>

<?php
function getNav($menu = [], $selected_name)
{
    ?>

    <nav>
        <h1>fabio personal site</h1>
        <div>
            <?php
            foreach ($menu as $page) {
                ?>
                <a href="<?= $page['link'] ?>" class="<?php echo ($selected_name == $page['name']) ? 'selected' : ''; ?>">
                    <?= $page['name'] ?>
                </a>
                <?php
            }
            ?>
        </div>
    </nav>

    <?php
}

function getFooter()
{ ?>
    <footer>
        ciao ciao
    </footer>
    </body>

    </html>
    <?php
}
?>