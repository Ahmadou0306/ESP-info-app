<?php 
require_once 'MyPDO.class.php';
require_once 'model/Categorie.class.php';

class CategorieDAO{
    protected $db;
    function __construct(){
            $this->db = MyPDO::getInstance();
        }
        function __destruct()
        {
            $this->db = null;
        }
        function list(){
            $categories=[];
            $request="SELECT * from categorie ";
            $query = $this->db->query($request)->fetchAll(PDO::FETCH_ASSOC);
            foreach($query as $row){
                $categorie = new Categorie($row['id'], $row['libelle']);
                $categorie->hydrate($row);
                array_push($categories, $categorie);
            }
            return $categories;
        }
      
        function findById($id) {
            $request = "SELECT * FROM categorie WHERE id = :id";
            $stmt = $this->db->prepare($request);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $categorie = new Categorie($row['id'], $row['libelle']);
                $categorie->hydrate($row);
                return $categorie;
            }
            return null;
        }
}