<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    body{
      background-color: lightblue;
    }
    b{
      color: orangered;
    }
    .tables {
      margin: auto;
      padding: 30px;
    }
    </style>

    <title>Tables One To Twenty</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
  <h1 style="text-align: center; color:blueviolet;">Tables From 1 To 20</h1>
  <hr>
  <?php
  $num =1;
  while($num<21){
    ?>
    <div class="col-2 tables">
    <tr>
    <?php
    for($i =1;$i<11;$i++){
      echo $num.' X '.$i.' = <b>'.$num*$i.'</b><br>';
    }
    ?>
    </div> 
    <!-- <hr> -->
    <?php
    $num++;
  }
  ?>
<hr>
<h1 style="text-align: center; color:brown;">Satyam Tiwari</h1>
<hr>
  </div>
</div>
   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>