<?php
include './includes/site_parts.php';

require_once __DIR__ . '/../privates/_db.php';
require_once __DIR__ . '/../privates/_dal_post.php';
$rec = new Post($pdo);      
$idp = $_POST['idp'];
$post =  $rec->GetAll(id: $idp);
$pdo = null;

getHead();
getNav(
    menu: [
        ['link' => 'home.php', 'name' => 'home'],
        ['link' => 'projects.php', 'name' => 'projects'],
        ['link' => 'experience.php', 'name' => 'experience'],
        ['link' => 'social.php', 'name' => 'social']
    ],
    selected_name: 'projects'
);

?>

<article>
    <h1><?=$idp?></h1>
    <form class="post" action="_actions.php" method="POST">
        <label for="title">TITLE:</label>
        <input type="text" value="<?= $post[0]['title'] ?>" id="title" name="title">

        <label for="content">CONTENT:</label>
        <textarea id="content" name="content" cols="60" rows="10"><?= $post[0]['content']?></textarea>

        <input type="hidden" id="action" name="action" value="update">
        <input type="hidden" id="idp" name="idp" value="<?=$post[0]['idp']?>">
        
        <input type="submit" value="modifica">
    </form>

</article>

<?php
getFooter();
?>