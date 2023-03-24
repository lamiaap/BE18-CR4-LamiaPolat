<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cr-lamia</title>
   
</head>
<body>
<?php
    require_once "connect.php"; //imports my connect to database file
    $sql = "SELECT * FROM products"; //command for selceting my table in my database
    $result = mysqli_query($connect, $sql); //combo of connect and select commands
    $layout = "";
    if(mysqli_num_rows($result) > 0){ //checks for data
        while($row = mysqli_fetch_assoc($result)){ //if there is data
            $layout .= "
            <tr>
                <th scope='col'>{$row["ISBN"]}</th>
                <th scope='col'>{$row["title"]}</th>
                <th scope='col'>{$row["image"]} </th>
                <th scope='col'>{$row["short_description"]}</th>
                <th scope='col'>{$row["type"]}</th>
                <th scope='col'>{$row["author_first_name"]}</th>
                <th scope='col'>{$row["author_last_name"]}</th>
                <th scope='col'>{$row["publisher_name"]}</th>
                <th scope='col'>{$row["publisher_address"]}</th>
                <th scope='col'>{$row["publish_date"]}</th>

                <th scope='col'><a href='edit.php?id={$row["ISBN"]}' class='btn btn-warning'>Edit</a></th>
                <th scope='col'><a href='delete.php?id={$row["ISBN"]}' class='btn btn-danger'>Delete</a></th>
                <th scope='col'><a href='details.php?id={$row["ISBN"]}' class='btn btn-primary'>Details</a></th>
            </tr>
            "; 
        }
    }else{
        $layout .= "No Result"; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cr-lamia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- bootsrap -->
  
</head>
<body>
    <div class="container text-center">
    <a href='create.php' class='btn btn-secondary'>New Data</a>
    <br><br>
    <table class="table table-primary">
  <thead>
    <tr class="table-danger"> 
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Publish Date</th>
      <th scope="col">Author firstname</th>
      <th scope="col">publisher firstname</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
        <?= $layout; ?> 
  </tbody>
</table>
    </div>
</table>
</body>
</html>







