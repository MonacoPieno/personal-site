<?php
include './includes/site_parts.php';

require_once __DIR__ . '/../privates/_db.php';
require_once __DIR__ . '/../privates/_dal_post.php';
$rec = new Post($pdo);
$posts = $rec->GetAll();
$pdo = null;

getHead();

getNav(
    menu: [
        ['link' => 'home.php', 'name' => 'home'],
        ['link' => '#', 'name' => 'projects'],
        ['link' => 'experience.php', 'name' => 'experience'],
        ['link' => 'social.php', 'name' => 'social']
    ],
    selected_name: 'projects'
);

?>

<article>
    <?php foreach ($posts as $post) { ?>
        <div class="post">
            <h1><?= $post['title'] ?></h1>
            <p><?= $post['content'] ?></p>
            <form method="post" action="modifica_post.php">
                <input type="hidden" name="idp" id="idp" value="<?=$post['idp']?>">
                <input type="submit" value="modifica">
            </form>
            <label for="create_date">creazione post: </label>
            <p id="create_date" name="create_date"><?=$post['pub_date']?></p>

            <label for="update_date">ultima modifica: </label>
            <p id="update_date" name="update_date"><?=$post['update_date']?></p>

        </div>
    <?php } ?>

    <form class="post" action="_actions.php" method="POST">
        <label for="title">TITLE:</label>
        <input type="text" id="title" name="title">

        <label for="content">CONTENT:</label>
        <textarea id="content" name="content" cols="60" rows="10"></textarea>

        <input type="hidden" id="action" name="action" value="create">
        <input type="hidden" id="idp" name="idp">
        
        <input type="submit" value="aggiungi post">
    </form>
</article>

<?php
getFooter();
?>