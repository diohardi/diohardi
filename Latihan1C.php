<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kotak</title>
</head>
<body>
<?php $_A = "A";
      $_B = "B";
      $_C = "C";
?>
    <div class="container">
        <div class="kotak1">
            <?php echo $_A;
            ?>
        </div>
        <div class="kotak1">
        <?php echo $_A;
            ?>
        </div>
        <div class="kotak1">
        <?php echo $_A;
            ?>
        </div>
        <div class="kotak2">
        <?php echo $_B;
            ?>
        </div>
        <div class="kotakB">
        <?php echo $_B;
            ?>
        </div>
        <div class="kotak3">
        <?php echo $_C;
            ?>
        </div>
    </div>
    <style>
    .container {
    width: 282px;
    height: 272px;
    border: 3px solid #5F9EA0;
    border-radius: 10px;
    margin: 50px auto;
    text-align: center;
  }
  
  .kotak1,
  .kotak2,
  .kotak3,
  .kotakB {
    width: 80px;
    height: 80px;
    line-height: 80px;
    font-weight: 800;
  }
  
  .kotak1 {
    margin-top: 5px;
    margin-left: 5px;
    border: 2px solid #6495ED;
  }
  
  .kotak2 {
    margin-left: 100px;
    margin-top: -173px;
    border: 2px solid #00008B;
    margin-bottom: 5px;
  }
  
  .kotakB {
    margin-left: 100px;
    border: 2px solid #00008B;
  }
  
  .kotak3 {
    margin-left: 193px;
    border: 2px solid #0000FF;
    position: absolute;
    bottom: 278px;
  }
  
    </style>
</body>
</html>