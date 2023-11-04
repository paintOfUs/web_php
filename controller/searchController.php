<?php
session_start();
require_once('../config.php');
require_once (DAO_PATH .'MangaDAO.php');
$searchtxt = $_POST['search'];
if (empty($searchtxt)) {
    $_REQUEST['error'] = "chưa nhập từ khóa";
    $_REQUEST['search'] = null;
    header("Location: ".BASE_URL);
} else {
    $obj = new MangaDAO();
    $manga = $obj->searchManga($searchtxt);
    if ($manga) {
        $_SESSION['search'] = $manga;
//         if(isset($_REQUEST['search'])){
//             $check = $_REQUEST['search']-> getArrayCopy();
//             for ($i = 0; $i <count($check);$i++){
//                 echo $check[$i]->getMangaName();
//                 echo "<br>";
//             }
//         }
//         else {
//             echo "incorrect";
//         }
        header("Location: ".BASE_URL);
        exit;
    } else {
        echo 'lỗi quần què';
    }
}


?>