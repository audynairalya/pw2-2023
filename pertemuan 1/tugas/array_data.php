<?php
  $fruits = [
    ["number" => 1,
    "name" => "Mango",
    "colour" => "Yellow",
    "stock" => 99,
    "price" => 18000,
    "description" => "Yellow fruit with characteristic flavour"],
    ["number" => 2,
    "name" => "Grape",
    "colour" => "Purple",
    "stock" => 67,
    "price" => 23000,
    "description" => "Small fruit with stem"],
    ["number" => 3,
    "name" => "Strawberry",
    "colour" => "Red",
    "stock" => 56,
    "price" => 37000,
    "description" => "Fruit with sour taste and has pores"],
    ["number" => 4,
    "name" => "Dragonfruit",
    "colour" => "Pink",
    "stock" => 41,
    "price" => 15000,
    "description" => "This fruit is cover with dragon scales"],
    ["number" => 5,
    "name" => "Watermelon",
    "colour" => "Green",
    "stock" => 20,
    "price" => 26000,
    "description" => "Big fruit, when u just see it's green fruit but the inside it's red fruit"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Fruit Table</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Fruit List</h1>
    <table class="table table-striped table-hover">

      <thead class="thead-dark">
        <tr>
          <th>Number</th>
          <th>Name</th>
          <th>Colour</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($fruits as $fruit) {
            echo '<td>'.$fruit["number"].'</td>';
            echo '<td>'.$fruit["name"].'</td>';
            echo '<td>'.$fruit["colour"].'</td>';
            echo '<td>'.$fruit["stock"].'</td>';
            echo '<td>'.$fruit["price"].'</td>';
            echo '<td>'.$fruit["description"].'</td>';
            echo '<tr>';
        }
        ?>
      </tbody>

    </table>
  </div>
</body>
</html>