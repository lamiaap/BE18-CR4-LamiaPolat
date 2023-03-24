<?php
    require_once "connect.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE ISBN = $id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $img = $_POST["image"];
        $des = $_POST["short_description"];
        $type = $_POST["type"];
        $autfn = $_POST["author_first_name"];
        $autln = $_POST["author_last_name"];
        $pubn = $_POST["publisher_name"];
        $pubad = $_POST["publisher_adress"];
        $pubda = $_POST["publish_date"];
        $sql1 = "UPDATE `products` SET `title`='$title',`image`='$img',`short_description`='$des',`type`='$type',`author_first_name`='$autfn',`author_last_name`='$autln',`publisher_name`='$pubn',`publisher_address`='$pubad',`publish_date`='$pubda' WHERE ISBN = $id";
        if(mysqli_query($connect,$sql1)){
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h1 class="fs-1 text-center text-light" >Edit Data!</h1>
    <form method="POST">
        <div class="text-light">
            <h1>Title</h1>
            <input type="text-light" value="<?= $row["title"]; ?>" name="title">
            <br><br>
            <h1>Image</h1>
            <input type="text-light"  value="<?= $row["image"]; ?>" name="image">
            <br><br>
            <h1>Description</h1>
            <input type="text-light" class="form-control" placeholder="<?= $row["short_description"]; ?>" name="short_description">
            <br><br>
            <h1> Book/CD/DVD</h1>
            <input type="text-light"  value="<?= $row["type"]; ?>" name="type">
            <br><br>
            <h1>Author</h1>
            <input type="text-light"  value="<?= $row["author_first_name"]; ?>" name="author_first_name">
            <input type="text"  value="<?= $row["author_last_name"]; ?>" name="austhor_last_name">
            <br><br>
            <h1>Publisher</h1>
            <input type="text-light"  value="<?= $row["publisher_name"]; ?>" name="publisher_name">
            <input type="text-light"  value="<?= $row["publisher_address"]; ?>" name="publisher_address">
            <br><br>
            <h1>Publishing Date</h1>
            <input type="text-light"  value="<?= $row["publish_date"]; ?>" name="publish_date">
            <br><br>
           
            <br><br>
            <input type="submit" class='btn btn-submit' name="submit" value="Save it">
            <br><br>
            <p>CopyRight Lamia </p>
        <div>
    </form>
</body>
</html>












