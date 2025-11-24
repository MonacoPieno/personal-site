<?php
class Post
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
    public function GetAll($id = null){
        $sql = 'SELECT * FROM post WHERE 1=1';

        $params = [];
        if(!is_null($id) && is_numeric($id)){
            $sql = $sql . ' AND idp = ?';
            $params[] = $id;
        }
        $sql = $sql . ' ORDER BY update_date DESC';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function Create($title, $content) {
        $sql = 'INSERT INTO `post`(`title`, `content`, `pub_date`, `update_date`) VALUES (?,?,NOW(), NOW())';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute( [$title, $content]);
    }

    public function Update($title, $content, $id){
        $sql = 'UPDATE post SET title = ?, content = ?, update_date = now() WHERE idp = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $content, $id]);
    }
}

?>