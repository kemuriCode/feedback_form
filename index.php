<?php

//$name = $lastName = $email = $articleRate = $comment = $category = $image = "";

 // Konfiguracja bazy danych

/*$host = "userdb1";
$db_user = "1169374_MmM";
$db_password = "2Z7Q30X6HEZt4S";
$db_name = "1169374_MmM";*/

$host = "localhost";
$db_user = "root";
$db_password = "Amsterdam.1";
$db_name = "dane";

 // Połączenie do bazy danych

$conn = new mysqli("$host", "$db_user", "$db_password", "$db_name");
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['name']) &&
    isset($_POST['last-name']) &&
    isset($_POST['email']) &&
    isset($_POST['category']) &&
    isset($_POST['image']) &&
    isset($_POST['article-rate']) &&
    isset($_POST['comment']))
{
    $name = get_post($conn, 'name');
    $lastName = get_post($conn, 'last-name');
    $email = get_post($conn, 'email');
    $category = get_post($conn, 'category');
    $image = get_post($conn, 'image');
    $articleRate = get_post($conn, 'article-rate');
    $comment = get_post($conn, 'comment');
    $query = "INSERT INTO dane VALUES " . "('$name','$lastName','$email','$category','$image','$articleRate', '$comment', NULL)";
    $result = $conn->query($query);
    if (!$result) echo "Instrukcja INSERT nie powiodła się: $query<br>" . $conn->error;
}

$image_name = $_FILES['image']['name'];
$ip=$_SERVER['REMOTE_ADDR'];

$count =$conn->query('SELECT COUNT(article_rate) as cnt FROM dane')->fetch_row()['0'];
$limit=5;
$page = isset($_GET['page']) ? intval($_GET['page']):0;
$from =$page*$limit;


$allPage=ceil($count/$limit);

echo <<<_END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="pl" />
    <title>How to make a comment box in HTML</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<style>

.rating-star
{
    color: #ffff00;
    font-size: 2.5rem;
},

.center-span, .rating-input
{
    text-align: center;
},

.pagination
{
    text-align: center;
}

</style>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <!--Form with header-->

                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Formularz Opinii</h3>
                                    <p class="m-0">Tutaj dodasz swoją opinię</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Podaj imię.." required>
                                    </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Podaj nazwisko.." required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="przykład@emial.com" required>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                        <label>
                                            <select name="category">
                                                <option  value="1" >Produkt</option>
                                                <option value="2">Firma</option>
                                                <option value="3">Inne</option>
                                            </select>
                                        </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <label>
                                                    <input type="file" name="image" accept="image/jpeg,image.png">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="center-span">Oceń: </span>
                                                <input class="rating-input" id="five-stars" type="radio" name="article-rate" value="1">
                                                <label class="rating-star" for="five-stars"><i class="fa fa-star"></i></label>

                                                <input class="rating-input" id="four-stars" type="radio" name="article-rate" value="2">
                                                <label class="rating-star" for="four-stars"><i class="fa fa-star"></i></label>

                                                <input class="rating-input" id="three-stars" type="radio" name="article-rate" value="3">
                                                <label class="rating-star" for="three-stars"><i class="fa fa-star"></i></label>

                                                <input class="rating-input" id="two-stars" type="radio" name="article-rate" value="4">
                                                <label class="rating-star" for="two-stars"><i class="fa fa-star"></i></label>

                                                <input class="rating-input" id="one-star" type="radio" name="article-rate" value="5">
                                                <label class="rating-star" for="one-star"><i class="fa fa-star"></i></label>

                                            </div>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="comment" placeholder="Wpisz komentarz.." required></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Wyślij opinię" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
_END;

// wysłasnie pliku

    $image_tmp = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $save_image = $image_name;

    if (is_uploaded_file($image_tmp)) {
        move_uploaded_file($image_tmp, "upload/$image_name");

        $img = imagecreatefromjpeg(".$save_image.");

        $width = imagesx($img);
        $height = imagesy($img);

        $width_mini = 200; // szerokosc obrazka
        $height_mini = 200; // wysokosc obrazka
        $img_mini = imagecreatetruecolor($width_mini, $height_mini);


        imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini, $height_mini, $width, $height);


        imagejpeg($img_mini, "min-" . $save_image . "", 80); // utworzona miniaturka liczba (80) oznacza jakos obrazka od 0 do 100
        imagedestroy($img);
        imagedestroy($img_mini);
        }
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
foreach  ($conn->query('SELECT * FROM dane ORDER BY id DESC LIMIT '.$from.','.$limit) as $r) {

/*
 * $z = $conn->query("SELECT * FROM dane ");
 * while ($r = $z->fetch_assoc()) {*/

    echo <<<_END
            <div class="container">
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Obrazek</th>
							<th width="10%">Imię </th>
							<th width="10%">Nazwisko</th>
                            <th width="10%">Email</th>
                            <th width="10%">Kategoria</th>
                            <th width="10%">Ocena</th>
                            <th width="20%">Komentarz</th>
                            <th width="20%">IP</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th width="10%"><a href="./upload/{$r['image']}"><img src="./upload/{$r['image']}" class="img-responsive"></a></th>
							<th width="10%">$r[first_name]</th>
							<th width="10%">$r[last_name]</th>
                            <th width="10%">$r[email]</th>
                            <th width="10%">$r[category]</th>
                            <th width="10%">$r[article_rate]</th>
                            <th width="20%">$r[comment]</th>
                            <th width="20%">$ip</th>
						</tr>
                    </tbody>
				</table>
            </div>
_END;
}
function t1($val, $min, $max){
    return ($val >= $min && $val <=$max);
}

echo '<div class="row justify-content-center"></div>';
for($i=0;$i<$allPage;$i++){
    $bold = ($i==($page));
    if(t1($i, ($page-3), ($page+5))){
        echo '<a class="link-pagination" '.$bold .' href="index.php?page='.$i.'">'.'<input type="button" class="btn btn-primary" value="'.$i.'" /></a>';
    }
}

$result->close();
$conn->close();
