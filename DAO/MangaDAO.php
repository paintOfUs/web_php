<?php
include '../WebComic/Database/Connection.php';
include '../Webcomic/model/Manga.php';
Class MangaDAO{
    private $list;
    function __construct(){
        $this->list = new ArrayObject();
    }

    public function getAllManga() {
        try{
            $getobj = new Connection();
            $conn = $getobj->Connect();
            
            $sql = "SELECT product_name, product_des, product_img_source, product_type FROM Products";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
//                     echo "name: " . $row["product_name"]. " - des: " . $row["product_des"]. " -url: " . $row["product_img_source"]. 
//                     " - type: " . $row["product_type"]. " <br>";
                    $manga = new Manga($row["product_name"], $row["product_des"], $row["product_img_source"],$row["product_type"]);
                    $this->list->append($manga);
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        }
        catch (PDOException $e){
            echo "loi quan que gi o day ".$e;
        }
        return $this->list;
    }
}
?>