<?php  
	$connect = mysqli_connect("127.0.0.1","root", "", "Цифрограм");
	$query_text_vstavit = "INSERT INTO registration (name, age, mail, password) 
							VALUES ('".$_POST["name"]."','".$_POST["age"]."' ,'".$_POST["mail"]."', '".$_POST["password"]."')";

	$query_connect = mysqli_query($connect, $query_text_vstavit);
?>
<?php
    header("Location: profile.php");
?>