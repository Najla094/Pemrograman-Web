<?php
  $fruits = [
    [
        "fruitNo" => 1,
        "fruitName" => "Strawberry", 
        "fruitColor" => "Merah",
        "fruitStock" => 20,
        "fruitHarga" => 35000,
        "fruitDeskripsi" => "Buah strawberry rasanya manis asam dan segar",
    ],
    [
        "fruitNo" => 2,
        "fruitName" => "Anggur", 
        "fruitColor" => "Merah",
        "fruitStock" => 30,
        "fruitHarga" => 33000,
        "fruitDeskripsi" => "Buah anggur merah fresh dan rasanya manis",
    ],
    [
        "fruitNo" => 3,
        "fruitName" => "Melon", 
        "fruitColor" => "Hijau",
        "fruitStock" => 25,
        "fruitHarga" => 20000,
        "fruitDeskripsi" => "Buah melon mengandung vitamin C",
    ],
    [
        "fruitNo" => 4,
        "fruitName" => "Jeruk", 
        "fruitColor" => "oranye",
        "fruitStock" =>  50,
        "fruitHarga" => 35000,
        "fruitDeskripsi" => "Buah jeruk dapat menjaga kesehatan kulit karna mengandung vitamin C ",
    ],
    [
        "fruitNo" => 5,
        "fruitName" => "Manggis", 
        "fruitColor" => "Ungu",
        "fruitStock" => 30,
        "fruitHarga" => 30000,
        "fruitDeskripsi" => "Buah manggis memiliki rasa yang manis",
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
          <?php
          foreach ($fruits as $fruit) {
          ?>
              <tr>
                <td><?= $fruit["fruitNo"] ?></td>
                <td><?= $fruit["fruitName"] ?></td>
                <td><?= $fruit["fruitColor"] ?></td>
                <td><?= $fruit["fruitStock"] ?></td>
                <td><?= $fruit["fruitHarga"] ?></td>
                <td><?= $fruit["fruitDeskripsi"] ?></td>
              
              </tr>
          <?php
          }
          ?>
      </tbody>
    </table>
  </div>
</body>
</html>