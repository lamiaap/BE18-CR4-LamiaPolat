<?php
    require_once "connect.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE ISBN = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- bootsrap -->
    <link rel="stylesheet" href="details.css">
</head>
<body>
  
        <div class="row">
        <div class="col-sm-8 text-center"><img src="https://i.weltbild.de/p/all-your-perfects-335631026.jpg?v=1&wp=_ads-scroller-mobile"<?= $row["image"]; ?>" alt="error" style="height: 500px;"></div>
        <div class="col-sm-4 text-center">
            <h2><span class="text-light">Name:</span> <?= $row["title"]; ?></h2>
            <h2><span class="text-light">Author:</span> <?= $row["author_first_name"]; $row["author_last_name"]; ?></h2>
            <h2><span class="text-light"> info:</span> <?= $row["publisher_name"]; $row["publisher_address"]; ?></h2>
            <h2><span class="text-light">Published o:</span> <?= $row["publish_date"]; ?></h2>
            <h2><span class="text-light">Type:</span> <?= $row["type"]; ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
            <h2><span class="text-light">Description:</span> <?= $row["short_description"]; ?></h2>
            <br><br>
            <p>CopyRight-Lamia </p>
        </div>
     </div>
</body>
</html>



















