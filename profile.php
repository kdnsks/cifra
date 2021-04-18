<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Цифрограм</title>

  <link rel="shortcut icon" href="logo.png">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<style>
   @font-face {
    font-family: Geometria-Bold;
    src: url(fonts/Geometria-Bold.ttf);
   }
    @font-face {
    font-family: Geometria-Regular;
    src: url(fonts/Geometria-Regular.ttf);
   }
    @font-face {
    font-family: Geometria-Medium;
    src: url(fonts/Geometria-Medium.ttf);
   }
   @font-face {
    font-family: TTNorms-Medium;
    src: url(fonts/TTNorms-Medium.ttf);
   }
   @font-face {
    font-family: TTNorms-Regular;
    src: url(fonts/TTNorms-Regular.ttf);
   }
</style>
<body>
  <?php
  $connect = mysqli_connect('127.0.0.1', 'root', '', 'Цифрограм');

  $query = mysqli_query($connect,"SELECT * FROM registration WHERE mail = '".$_POST['mail']."' AND password = '".$_POST['password']."'");

  $result = $query->fetch_assoc();
 ?>
 <div class="row pr-0 pl-0 pb-5" style="background-image: url(bgpic.png); background-size: 100% 100%">
  <div class="col-5" style="margin-left: 180px;">
    <div class="col-6">
      <h1 style="font-family: Geometria-Bold; font-weight: bold; font-size: 34px; color: #FFC028; margin-top: 200px;">Профиль</h1>
      <p style="font-family: TTNorms-Regular; font-size: 16px;">Здесь можно создать собственный курс, смотреть уроки, следить за прогрессом и баллами</p>
    </div>
      <div class="col-6 rounded-circle" >
        <img src="propic.png" class="text-center" style="width: 270px;">
        <h4 class="text-white mt-5" style="font-family: Geometria-Regular; font-weight: 500; font-size: 20px;">Карина Иванова</h4>
        <a href="course.php"><img src="btn.png" class="mt-5"></a>
    </div>
  </div>
  <?php 
    $con = mysqli_connect('127.0.0.1', 'root','','Цифрограм');
    $query = mysqli_query($con, "SELECT * FROM course");
    $stroka = $query->fetch_assoc();
?>    
  <div class="col-5" style="background-color: #7D3FFB; border-radius: 20px; margin-top: 200px;">
    <h5 class="text-white mt-4 text-center" style="font-family: Geometria-Regular; font-size: 20px;"><?php echo $stroka["title"]; ?></h5>
    <div class="iconic-item wow fadeInUp">
        <img src="li.png" style="margin-left: 40px; width: 20px; height: 20px;">

        <p style="font-family: Geometria-Regular; color: white ;font-size: 14px; margin-left: 10px;"><?php echo $stroka["direction"]; ?></p>
    </div>
    <div class="iconic-item wow fadeInUp">
        <img src="li.png" style="margin-left: 40px; width: 20px; height: 20px;">

        <iframe width="360" height="215" src="<?php echo $stroka["video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="iconic-item wow fadeInUp">
        <img src="li.png" style="margin-left: 40px; width: 20px; height: 20px;">

        <p style="font-family: Geometria-Regular; color: white ;font-size: 14px; margin-left: 10px;"><?php echo $stroka["descrption"];?></p>
    </div>
    <div class="iconic-item wow fadeInUp">
        <img src="li.png" style="margin-left: 40px; width: 20px; height: 20px;">

        <p style="font-family: Geometria-Regular; color: white ;font-size: 14px; margin-left: 10px;"><?php echo $stroka["price"]; ?></p>
    </div>
  </div>  
</div>

</body>
</html>
