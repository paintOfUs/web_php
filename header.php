<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<nav id="menu" class="navbar navbar-expand-lg  stick-top" style="background-color:#84CDCA;">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
					<li class="nav-item"><a class="nav-link active" aria-current="page"
						href="index.php">Trang chủ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Tủ sách</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Hỗ trợ</a></li>
				</ul>
				<form class="d-flex me-2"  action='<?php echo BASE_URL ?>controller/searchController.php' method='post'>
					<input class="form-control me-2" type="search" placeholder="Search"
						aria-label="Search" name="search">
					<button class="btn btn-light btn-outline-danger" type="submit">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>

				<div class="d-flex  text-end">
					<a href="<?php BASE_URL?>loginForm.php"><button type="button" class="btn btn-primary px-3 me-2">Login</button></a>
					<a href="regist.php"><button type="button" class="btn btn-danger me-2">Sign up</button></a>
				</div>
			</div>
		</div>
		</div>
	</nav>
	<br>
</body>
</html>