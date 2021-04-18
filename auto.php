<!-- авторизация -->
<!DOCTYPE html>
<html>
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
<body style="background-image: url(rega.png); background-size: 100% 170%;">
<?php
	//Подключение к базе данных
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Цифрограм');

	//Текст запроса "выбрать всё из таблицы blog"
	$text_query = 'SELECT * FROM registration';
	
?>
<div class="col-5 mx-auto mt-5 pl-0 pr-0">
		<!-- форма -->
		<div class="col-6 pt-3 mx-auto" style="background-image: url(border.png); background-size: 100% 100%; margin-top: 100px;">

			<div class="text-center px-5 pt-1 bg-white border-0 mb-2 pt-4 rounded">
				<h2 class="mt-4 mb-4 text-center" style="font-family: Geometria-Bold; font-size: 34px;">Вход</h2>
				<form method="POST" action="profile.php" style="font-family: TTNorms-Regular; font-size: 18px;">
					<input type="text" name="mail" class="form-control border-0 pl-2 mb-0" placeholder="Электронная почта">
					<img src="line.png" class="w-100 mx-auto mb-5 pl-2 pr-2">
					<input type="password" name="password" class="form-control border-0 pl-2 mb-0" placeholder="Пароль">
					<img src="line.png" class="w-100 mx-auto mb-5 pl-2 pr-2">
					<div class="text-center mt-5 mb-1 mx-auto" style="font-family: TTNorms-Medium; font-size: 19px;">
						<input type="submit" name="submit" value="Войти" class="btn rounded-pill col-10 mx-auto" style="border-color: #405AFF; border-radius: 1px solid;">
					</div>
				</form>
			</div>
			<div class="text-center mt-2 pb-5 rounded" style="font-family: TTNorms-Regular; font-size: 14px;">
				<p>Ещё нет аккаунта? <a href="reg.php" style="color: #FFC028;">Зарегистрируйтесь</a></p>
			</div>
		</div>
</div>
</body>
</html>