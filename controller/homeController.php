<?php
require_once '../WebComic/DAO/MangaDAO.php';
Class homeController{
    public function doGet(){
        $obj = new MangaDAO();
        $manga = $obj->getAllManga();
        if($manga){
            $_REQUEST["manga"] = $manga;
        }
        else {
            echo 'lỗi quần què';
        }
         
    }
    public function doPost(){
        echo 'hello';
    }
}
?>