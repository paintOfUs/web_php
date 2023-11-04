<?php
require_once (DAO_PATH .'MangaDAO.php');

$obj = new MangaDAO();
$manga = $obj->getAllManga();
if ($manga) {
    $_REQUEST["manga"] = $manga;
} else {
    echo 'lỗi quần què';
}

//header("Location: " . BASE_URL);

?>