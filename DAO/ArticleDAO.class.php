<?php 
require_once 'MyPDO.class.php';
require_once 'model/Article.class.php';

class ArticleDAO{
    protected $db;
    function __construct(){
            $this->db = MyPDO::getInstance();
    }
    function __destruct()
    {
        $this->db = null;
    }
    function list(){
        $articles=[];
        $request="SELECT * from article ";
        $query = $this->db->query($request)->fetchAll(PDO::FETCH_ASSOC);
        foreach($query as $row){
            $article = new Article($row['id'], $row['titre'], $row['contenu'],$row['dateCreation'], $row['dateModification'], $row['categorie']);
            array_push($articles, $article);
        }
        return $articles;
    }
    function findByCategory($categoryId){
        $articles=[];
        $request = "SELECT * FROM article WHERE categorie = :id";
        $stmt = $this->db->prepare($request);
        $stmt->bindParam(':id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $query = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($query as $row) {
            $article = new Article($row['id'], $row['titre'], $row['contenu'], $row['dateCreation'], $row['dateModification'], $row['categorie']);
            array_push($articles, $article);
        }
        return $articles;
    }
}