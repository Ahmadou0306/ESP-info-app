<?php 
require_once 'controller.php';
require_once 'DAO/ArticleDAO.class.php';
require_once 'DAO/CategorieDAO.class.php';

class HomeController extends Controller{
    private $articleDao;
    private $categorieDao;
    public function __construct() {
        $this->articleDao = new ArticleDAO();
        $this->categorieDao = new CategorieDAO();
    }

    public function index() {
        $id=1;
        $categories = $this->categorieDao->list();
        $articles = $this->articleDao->findByCategory($id);
        $this->render('show', ['articles' => $articles, 'categories' => $categories, 'activeCateg' => $id]);
    }

    public function afficherCategorie($id) {
        $categories = $this->categorieDao->list();
        $articles = $this->articleDao->findByCategory($id);
        $this->render('show', ['articles' => $articles, 'categories' => $categories, 'activeCateg' => $id]);
    }
}