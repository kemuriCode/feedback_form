<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="pl" />
    <title>Moduł Opinii</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container warp">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Formularz Opinii</h3>
                            <p class="m-0">Tutaj dodasz swoją opinię</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div>
                                <p style="color: red">* pola obowiązkowe</p>
                            </div>
                            <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Podaj imię.." required>'
                                <span style="color: red">*</span>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Podaj nazwisko.." required>
                                        <span style="color: red">*</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="przykład@emial.com" required>
                                    <span style="color: red">*</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <label>
                                            <select name="category" required>
                                                <option value="Produkt">Produkt</option>
                                                <option value="Firma">Firma</option>
                                                <option value="Inne">Inne</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <label>
                                            <input id="file" type="file" name="image" accept="image/jpeg, image/png">'
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="center-span">Oceń: </span><br>
                                        <input class="rating-input" id="five-stars" type="radio" name="article-rate" value="1" required>
                                        <label class="rating-star" for="five-stars"><i class="fa fa-star"></i></label>
                                        <input class="rating-input" id="four-stars" type="radio" name="article-rate" value="2" required>
                                        <label class="rating-star" for="four-stars"><i class="fa fa-star"></i></label>
                                        <input class="rating-input" id="three-stars" type="radio" name="article-rate" value="3" required>
                                        <label class="rating-star" for="three-stars"><i class="fa fa-star"></i></label>
                                        <input class="rating-input" id="two-stars" type="radio" name="article-rate" value="4" required>
                                        <label class="rating-star" for="two-stars"><i class="fa fa-star"></i></label>
                                        <input class="rating-input" id="one-star" type="radio" name="article-rate" value="5" required>
                                        <label class="rating-star" for="one-star"><i class="fa fa-star"></i></label>
                                        <span style="color: red">*</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                        <textarea class="form-control" name="comment" placeholder="Wpisz komentarz.."></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Wyślij opinię" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<?php
/**
 * Created by PhpStorm.
 * User: t0shi
 * Date: 13.01.19
 */
 // połączenie do bazy danych
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
require_once 'database.php';
$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_errno!=0) {
    echo "Nie udało się połączyć z bazą danych!<br />";
    echo "Error: ".$conn->connect_errno;
}
else {
    $name = $_POST['name'];
    $surname = $_POST['last-name'];
    $mail = $_POST['email'];
    $theme = $_POST['category'];
    $score = $_POST['article-rate'];
    $save_file = $_POST['image'];
    $description = $_POST['comment'];
    $check = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
    $allRight = true;

    $ip = $_SERVER['REMOTE_ADDR'];

    $count = $conn->query('SELECT COUNT(article_rate) as cnt FROM dane')->fetch_row()['0'];
    $limit = 5;
    $page = isset($_GET['page']) ? intval($_GET['page']) : 0;
    $from = $page * $limit;

    $allPage = ceil($count / $limit);

// walidacja danych
    if ((strlen($name) > 15) || (ctype_alpha($name) == false)) {
        echo '  <div class="row"><section class="col-lg-4 col-sm-2 col-md-2"></section>
                <section class="col-lg-4 col-sm-8 col-md-8"><div class="alert alert-danger" >
                <strong>BŁĄD!</strong> Nie wpisano imienia lub wpisano zbyt dużą liczbę znaków(max 15)! Dopuszczone są jedynie litery (bez polskich znaków).
                </div></section></div>';
        $allRight = false;
    }

    if ((strlen($surname) > 15) || (ctype_alpha($surname) == false)) {
        echo '  <div class="row"><section class="col-lg-4 col-sm-2 col-md-2"></section>
                <section class="col-lg-4 col-sm-8 col-md-8" ><div class="alert alert-danger" >
                <strong>BŁĄD!</strong> Nie wpisano nazwiska lub wpisano zbyt dużą liczbę znaków(max 15)! Dopuszczone są jedynie litery (bez polskich znaków).
                </div></section></div>';
        $allRight = false;
    }

    if ((strlen($description) > 200)) {
        echo '  <div class="row"><section class="col-lg-4 col-sm-2 col-md-2"></section>
                <section class="col-lg-4 col-sm-8 col-md-8"><div class="alert alert-danger">
                <strong>BŁĄD!</strong> Zbyt duża liczba znaków(max 200)!
                </div></section></div>';
        $allRight = false;
    }

    if (!preg_match($check, $mail) == 1) {
        echo '  <div class="row"><section class="col-lg-4 col-sm-2 col-md-2"></section>
                <section class="col-lg-4 col-sm-8 col-md-8"><div class="alert alert-danger">
                <strong>BŁĄD!</strong> Wpisano niepoprawny adres e-mail!
                </div></section></div>';
        $allRight = false;
    }

// upload zdjęcia
    $img_tmp = $_FILES['image']['tmp_name'];
    $img_name = $_FILES["image"]["name"];
    $save_file = $img_name;

        move_uploaded_file($img_tmp, '/upload/'.$save_file.'');

        $img = imagecreatefromjpeg(''.$save_file.'');

        $width  = imagesx($img);
        $height = imagesy($img);

        $width_mini = 100;
        $height_mini = 100;
        $img_mini = imagecreatetruecolor($width_mini, $height_mini);

        imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);

        imagejpeg($img_mini, "".$save_file."", 80); // utworzona miniaturka liczba (80) oznacza jakos obrazka od 0 do 100
        imagedestroy($img);
        imagedestroy($img_mini);
}

    if ($allRight == true) {
// dane sprawdzone.. dodanie do bazy danych
        if ($conn->query("INSERT INTO dane VALUES(NULL,'$name','$surname','$mail','$theme','$save_file','$score','$description','$ip')")) {
            echo '  <div class="row"><section class="col-lg-4 col-sm-2 col-md-2"></section>
                    <section class="col-lg-4 col-sm-8 col-md-8"><div class="alert alert-success">
                    <strong>GRATULACJE!</strong> Dodałeś opinię! 
                    </div></section></div>';

        } else {
            throw new Exception($conn->error);
        }
}

foreach  ($conn->query('SELECT * FROM dane ORDER BY id DESC LIMIT '. $from . ',' .$limit) as $r) {
    if($r['image']==NULL) {
        $r['image']='brak.png';
    }
// wyświetlanie opinii
echo <<<_END
<div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <a href="upload/{$r['image']}"><img src="upload/{$r['image']}" class="img-responsive" width="100px" height="100px"></a>    
      <div class="caption">
        <small>$r[first_name]</small>
        <small>$r[last_name]</small>
      </div>
    </div>
    <div class="col-md-9">
      <h5>Kategoria: $r[category]</h5>
      <h6>Email: $r[email]</h6>
      <h6>Ocena: $r[article_rate]/5</h6>
      <p class="review-text">$r[comment]</p>
      <small class="review-date">IP ADRES: $ip</small>
    </div>                          
  </div>  
</div>
_END;
}

// paginacja
function t1($val, $min, $max) {
    return ($val >= $min && $val <=$max);
}

echo '<section class="col-lg-4 col-md-2 col-sm-2"></section>';
for($i=0;$i<$allPage;$i++) {
    if(t1($i, ($page-3), ($page+5))) {
        echo '<a class="" href="index.php?page='.$i.'">'.' <input type="button" class="btn-default" value="'.$i.'" /></a>';
    }
}

// stopka
echo <<<_END
<footer>
   <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <img src="logo/logo.png" height="200" width="255">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                     <span>Created by</span>    
                 </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Marcin Dymek</span>       
               </ul>
           </div>   
       </div> 
</footer>
</body>
</html>
_END;

$conn->close();