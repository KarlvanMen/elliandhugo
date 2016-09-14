<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Elli & Hugo</title>
	<meta name="description" content="Elli & Hugo">
	<meta name="author" content="Kārlis Mendziņš">

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/pages.css">

		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
			<![endif]-->
	</head>

	<body>
		<?php
		error_reporting(E_ALL);
		ini_set('display_errors',1);
		require_once('/admin/includes/class-db.php');
		require_once('/includes/header.php');
		require_once('/includes/products.php');
		require_once('/includes/pages.php');

		$p;
		$cat;
		$page;
		$tag = $title ='';
		$path='';

		if(!empty($_GET)){
			if(!empty($_GET['p'])){
				$p = $_GET['p'];
			}
			if(!empty($_GET['path'])){
				$path = $_GET['path'];
			}
			if(!empty($_GET['cat'])){
				$cat = $_GET['cat'];
			}
			if(!empty($_GET['page'])){
				$page = $_GET['page'];
			}
			if(!empty($_GET['tag'])){
				$tag = $_GET['tag'];
			}
			if(!empty($_GET['title'])){
				$title = $_GET['title'];
			}
		}

		echo "<div class='content'>";
		if(!empty($p)){
			displayProduct($p, $path, $db);
		} else if(!empty($page)){
			showPage($page, $db);
		} else if(!empty($cat)){
			displayFilteredProducts($cat, $tag, $title, $db);
		} else {
			displayHome($db);			
		}
		echo '</div>';
		require_once('/includes/footer.php');
		?>
		<script src="js/script.js"></script>
	</body>
</html>
