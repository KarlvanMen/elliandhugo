<<<<<<< HEAD
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
                
                <!--[if lt IE 9]>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
                <![endif]-->
        </head>
        
        <body>               
                <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors',1);
                        require_once('admin/includes/class-db.php');                        
                        require_once('includes/header.php');
                        
                        $p;
                        $path;
                        if(!empty($_GET)){
                                if(!empty($_GET['p'])){
                                        $p = $_GET['p'];
                                }
                                if(!empty($_GET['path'])){
                                        $path = $_GET['p'];
                                }
                        }
                        
                        
                        echo '<div class="content">';
                        if(empty($_GET)){
                                $query = "SELECT * FROM piedavajums ORDER BY ID";
                                $produkti = $db->select($query);
                                foreach($produkti as $prod){
                                        $images = unserialize($prod->images);
                                        $title = $prod->title;
                                        $price = unserialize($prod->price);
                                        $priceText = '';
                                        if(count($price) > 1){
                                                $least = 999999;
                                                foreach($price as $prc){
                                                        if($least > intval($prc)){
                                                                $least = intval($prc);
                                                        }
                                                }
                                                
                                                $least = '<strong>'.$least.'</strong>';
                                                $priceText = "Sākot no ".$least." €";
                                        } else {
                                                $priceText = $price['all'];
                                                if($priceText != '' && is_numeric($priceText)){
                                                        $priceText = $priceText.' €';
                                                }
                                                $priceText = '<strong>'.$priceText.'</strong>';
                                        }
                                        echo '  <a class="produkti" href="?p='.$prod->url.'">
                                                        <div class="produkti-image" style="background-image:url(img/'.$images[0].')"></div>
                                                        <p class="produkti-title">'.$title.'</p>
                                                        <p class="produkti-price">'.$priceText.'</p>
                                                </a>';
                                        //echo '<pre>'; print_r($prod); echo'</pre>';
                                }
                        } else if(!empty($p)){
                                $query = "SELECT * FROM piedavajums WHERE url = '".$p."' ORDER BY ID";
                                $produkts = $db->select($query);                                                               
                                
                                $title = $produkts[0]->title;
                                $text = $produkts[0]->text;
                                $images = unserialize($produkts[0]->images);
                                $color = unserialize($produkts[0]->color);
                                $size = unserialize($produkts[0]->size);
                                $price = unserialize($produkts[0]->price); 
                                
                                echo '<div class="section-header section-header-breadcrumb">
                                                <nav class="breadcrumb">
                                                        <a href="http://karlismendzins.co.nf/elli&hugo/" title="Back to frontpage">Home</a>
                                                        <span aria-hidden="true" class="breadcrumb_sep">›</span>';
                                                        if(!empty($path)){
                                                                foreach($path as $tp){
                                                                        echo '<a href="#" title="Back to '.$tp.'">'.$tp.'</a>
                                                                                <span aria-hidden="true" class="breadcrumb_sep">›</span>';
                                                                }
                                                        }
                                                        echo '<span>'.$title.'</span>
                                                </nav>
                                        </div>';
                                echo '<div class="produkts">';                                       
                                                                
                                echo '<div class="produkts-top">
                                        <div class="produkts-top-left">
                                                <img class="produkts-top-main-img" src="img/'.$images[0].'"/>
                                                <div class="produkts-top-img-container">';
                                                foreach($images as $img){
                                                        echo '<img class="produkts-top-img" src="img/'.$img.'"/>';
                                                }
                                        echo '</div></div>';
                                        echo '<div class="produkts-top-right">
                                                <h1 class="produkts-title">'.$title.'</h1>
                                                <p class="produkts-p-text">Color</p>';
                                                foreach($color as $clr){
                                                        echo '<div class="color-example" style="background-color:'.$clr.'"></div>';
                                                }
                                                
                                                echo '<label for="size-example" class="produkts-p-text">Size</label>
                                                              <select onchange="selectChange()" name="size-example" class="size-select" id="size-select">';
                                                              foreach($price as $key => $value){
                                                                      echo '<option value="'.$value.'">'.$key.'</option>';
                                                              }
                                                              echo '</select>';
                                                
                                                if(count($price) > 1){
                                                        $least = 999999;
                                                        foreach($price as $prc){
                                                                if($least > intval($prc)){
                                                                        $least = intval($prc);
                                                                }
                                                        }
                                                        
                                                        $least = '<strong>'.$least.'</strong>';
                                                        $priceText = $least." €";
                                                } else {
                                                        $priceText = $price['all'];
                                                        if($priceText != '' && is_numeric($priceText)){
                                                                $priceText = $priceText.' €';
                                                        }
                                                        $priceText = '<strong>'.$priceText.'</strong>';
                                                }
                                                echo '<div class="price-example" id="price">'.$priceText.'</div>';
                                echo '</div></div>';
                                
                                echo '<br/>
                                        <h4 class="produkts-desc-title">Apraksts</h4>
                                        <p class="produkts-desc-p">'.$text.'</p>';
                                
                                echo '</div>';
                        }                        
                        echo '</div>';
                ?>
                <script src="js/script.js"></script>
        </body>
</html>
=======
<?php
	echo "st!";
	echo "!!!";
?>
>>>>>>> st
