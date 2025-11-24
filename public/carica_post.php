<?php
include './includes/site_parts.php';

require_once __DIR__ . '/../privates/_db.php';
require_once __DIR__ . '/../privates/_dal_post.php';
$rec = new Post($pdo);      

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
    <form>
        <input type="text" value="<?= $title ?>">

        <input type="submit" value="modifica">
    </form>

</article>

<?php
getFooter();
?>