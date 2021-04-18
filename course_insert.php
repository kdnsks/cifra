<?php  
	$connect = mysqli_connect("127.0.0.1","root", "", "Цифрограм");
	$query_text_vstavit = "INSERT INTO course (title, direction, video, descrption, price) 
							VALUES ('".$_POST["title"]."','".$_POST["direction"]."' ,'".$_POST["video"]."', '".$_POST["descrption"]."', '".$_POST["price"]."')";

	$query_connect = mysqli_query($connect, $query_text_vstavit);
?>
<?php
    header("Location: profile.php");
?>