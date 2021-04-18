<meta charset="UTF-8">
<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Цифрограм');

	$query = mysqli_query($connect,"SELECT * FROM registration WHERE mail = '".$_POST['mail']."' AND password = '".$_POST['password']."'");

	$result = $query->fetch_assoc();

	echo "Привет, " .$result['name'];
	echo "<a href='profile.php'><button>Создать курс</button></a>"
 ?>