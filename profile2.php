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
<body style="background-image: url(bgpic.png); background-size: 100% 140%;">
  <?php
  $connect = mysqli_connect('127.0.0.1', 'root', '', 'Цифрограм');

  $query = mysqli_query($connect,"SELECT * FROM registration WHERE mail = '".$_POST['mail']."' AND password = '".$_POST['password']."'");

  $result = $query->fetch_assoc();
 ?>
 <div class="row">
    <h1 style="font-family: Geometria-Bold; font-weight: bold; font-size: 34px; color: #FFC028;">Профиль</h1>
    <div style="width: 402px; height: 45px;" class="text-center">
      <p style="font-family: TTNorms-Regular; font-size: 16px;">Здесь можно создать собственный курс, смотреть уроки, следить за прогрессом и баллами</p>
    </div>
    <div class="col-3" style="margin-top: 20%; margin-left: 20%; width: 350px;">
        <div class="rounded-circle" >
          <img src="propic.png" class="text-center" style="width: 270px;">
        </div>
        <h4 class="text-white mt-5" style="font-family: Geometria-Regular; font-weight: 500; font-size: 20px;">Карина Иванова</h4>
        <a href="course.php"><img src="btn.png" class="mt-5"></a>
    </div>
    <div class="text-center text-white col-3" style="background-color: #7D3FFB; height: 423px; border-radius: 20px; margin-top: 22%; margin-left: 332px; word-wrap: break-word;">
      <h5 class="text-white mt-4" style="font-family: Geometria-Regular; font-size: 20px; line-height: 135%;">Каким СМИ верить лучше?</h5>
      <div class="row iconic-item wow fadeInUp">
          <img src="li.png" alt="li" style="width: 35px; margin-left: 40px;">
        <div class="ml-1" style="font-family: Geometria-Regular; font-size: 14px; line-height: 135%;">
          <p>Направление: Медиаграмотность</p>
        </div>
      </div>
      <div class="row iconic-item wow fadeInUp">
        <img src="li.png" alt="li" style="width: 35px; margin-left: 40px;">
        <div class="ml-1" style="font-family: Geometria-Regular; font-size: 14px; line-height: 135%;">
          <p>Преподаватель: Елена Ким</p>
        </div>
      </div>
      <div class="row iconic-item wow fadeInUp">
        <img src="li.png" alt="li" style="width: 35px; margin-left: 40px;">
        <div class="ml-1" style="font-family: Geometria-Regular; font-size: 14px; line-height: 135%;">
          <p>Уроков: 8</p>
        </div>
      </div>
      <div class="row iconic-item wow fadeInUp">
        <img src="li.png" alt="li" style="width: 35px; margin-left: 40px;">
        <div class="ml-1" style="font-family: Geometria-Regular; font-size: 14px; line-height: 135%;">
          <p>Тестов: 6</p>
        </div>
      </div>
      <a href="#"><img src="btn2.png" alt="btn"  style="width: 200px; height: 40px;"></a>
    </div>
    
   </div>
</body>