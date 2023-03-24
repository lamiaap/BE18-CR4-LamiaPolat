<?php
    if(isset($_POST["submit"])){
        require_once "connect.php";
        $title = $_POST["title"];
        $image = $_POST["image"];
        $des = $_POST["short_description"];
        $type = $_POST["type"];
        $autfn = $_POST["author_first_name"];
        $autln = $_POST["author_last_name"];
        $pb = $_POST["publisher_name"];
        $pubad = $_POST["publisher_address"];
        $pubda = $_POST["publish_date"];
        $sql = "INSERT INTO `products`(`title`, `image`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES ('$title', '$image','$des','$type','$autfn','$autln','$pb','$pubad','$pubda')";
        if(mysqli_query($connect, $sql)){
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
  
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <h1 class="fs-1 text-center">Create  Data</h1>
    <form method="POST">
        <div class="">
            <h1>Title</h1>
            <input type="text" placeholder="Title of product" name="title">
            <br><br>
            <h1>Image</h1>
            <input type="text" placeholder="Name of image file" name="image">
            <br><br>
            <h1>Description</h1>
            <input class="form-control" type="text" placeholder="Description of product" name="short_description">
            <br><br>
            <h1> Book/CD/DVD</h1>
            <input type="text" placeholder="type of product" name="type">
            <br><br>
            <h1>Author</h1>
            <input type="text" placeholder="Author's First Name" name="author_first_name">
            <input type="text" placeholder="Author's Last Name" name="author_last_name">
            <br><br>
            <h1>Publishers</h1>
            <input type="text" placeholder="Publisher's Name" name="publisher_name">
            <input type="text" placeholder="Adress from Publisher" name="publisher_address">
            <br><br>
            <h1>Publishing Date</h1>
            <input type="text" placeholder="(YYYY-MM-DD)" name="publish_date">
            <br><br>
            <h1>Availability of the Product</h1>
            <input type="text" placeholder="“available” or “reserved”" name="status">
            <br><br>
            <input type="submit" class='btn btn-primary' name="submit" value="Save it!">
            <br><br>
            <p>CopyRight Lamia</p>
        <div>
    </form>
</body>
</html>