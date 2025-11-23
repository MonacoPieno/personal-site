<?php
class Post
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
    public function GetAll(){
        $sql = 'SELECT * FROM post ORDER BY idp';
        $stmt = $this->pdo->query($sql);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}

?>