<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
img {
	height: 300px;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
<?php
$mangaArray = $_REQUEST["manga"]->getArrayCopy();
//count($mangaArray)
for ($i = 0; $i < 4; $i ++) {
        $manga = $mangaArray[$i];
?>
        <div class="col cols-4">
        				<div class="card h-100">
        					<img src="<?php echo $manga->getMangaImg();?>"
        						class="card-img-top" alt="...">
        					<div class="card-body">
        						<h3 class="card-title"><?php echo $manga->getMangaName();?></h3>
        						<h5 class="card-title">Thể loại: <?php echo $manga->getMangaType();?></h5>
        						<p class="card-text"><b>Tóm tắt: </b> <?php echo $manga->getMangaDes();?></p>
        						<div class="d-flex justify-content-between ">
        							<button class="btn btn-primary me-md-2" type="button">Chi tiết</button>
        							<button class="btn btn-danger text-end" type="button">thêm vào thư viện</button>
        						</div>
        					</div>
        					<div class="card-footer">
        						<small class="text-body-secondary">Last updated 3 mins ago</small>
        					</div>
        				</div>
        			</div>
<?php
    }
?>

		</div>
	</div>

	<br>
	<br>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled"><a class="page-link">Previous</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
</body>
</html>