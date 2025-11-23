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
        </div>
    <?php } ?>

</article>

<?php
getFooter();
?>