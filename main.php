<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Random Project Code!!!</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
          <div id="cardBox">

          </div>
          <?php

            $players = array('Max', 'Layla', 'Steve');
            $deck = array("<img src='Images/A_H.png' alt='Ace of Hearts' />", "<img src='Images/2_H.png' alt='Two of Hearts' />", "2_S", "2_D", "2_C");



              for($c = 0; $c < COUNT($deck); $c++) {
                echo $deck[$c]."<br>";
              }


          ?>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
