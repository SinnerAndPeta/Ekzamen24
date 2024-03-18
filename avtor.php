<!DOCTYPE html>
<html lang="ru" >
<head>
  <meta charset="UTF-8">
  <title>Чемпионат мира по футболу</title>
  <head>
	<meta charset="UTF-8">
	<title>Чемпионат мира по футболу</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head><link rel="stylesheet" href="avt/style.css">

</head>
<body>
<?php
 session_start();
?>  
  
<section class="forms-section">

  <h1 class="section-title">Авторизация</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Авторизация
        <span class="underline"></span>
      </button>
      <form id="myForm" class="form form-login" action="#openModal" method="POST">
	
		
        <fieldset>
          <legend>Пожалуйста, введите ваш E-mail и пароль для авторизации.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" name="Emai" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Пароль</label>
            <input id="login-password" name="pas" type="password" required>
          </div>
        </fieldset>
        <button type="submit" href="#zatemnenie" class="btn-login">Вход</button>
      </form>
    </div>
	
	<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">
<?php 
$host='localhost';
$database='ekzamen';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Emai'])&& isset($_POST['pas'])){
	$Email=$_POST['Emai'];
	$pass=$_POST['pas'];
	
	$check_user = mysqli_query($link, "SELECT Ima from polzovatel where Email='".$Email."' and Password = '".$pass."'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "Ima" => $user['Ima']
	];
			echo "Добро пожаловать!";

    } else {
        $_SESSION['message'] = 'Ошибка';
		
		echo  $_SESSION['message'];
    }
}
	
 ?>
 </h3>
        <a href="index.php" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
       
<?php 
$host='localhost';
$database='ekzamen';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Emai'])&& isset($_POST['pas'])){
	$Email=$_POST['Emai'];
	$pass=$_POST['pas'];
	
	$check_user = mysqli_query($link, "SELECT Familiya from polzovatel join rol on polzovatel.id_Rol = rol.id_Rol where Email='".$Email."' and Password = '".$pass."'");
	$check_user1 = mysqli_query($link, "SELECT Ima from polzovatel join rol on polzovatel.id_Rol = rol.id_Rol where Email='".$Email."' and Password = '".$pass."'");
	$check_user2 = mysqli_query($link, "SELECT Otchestvo from polzovatel join rol on polzovatel.id_Rol = rol.id_Rol where Email='".$Email."' and Password = '".$pass."'");
	$check_user3 = mysqli_query($link, "SELECT Nazvanie from polzovatel join rol on polzovatel.id_Rol = rol.id_Rol where Email='".$Email."' and Password = '".$pass."'");
    if (mysqli_num_rows($check_user) > 0 and mysqli_num_rows($check_user1) > 0 and mysqli_num_rows($check_user2) > 0 and mysqli_num_rows($check_user3) > 0) {
        $user = mysqli_fetch_assoc($check_user);
		$user1 = mysqli_fetch_assoc($check_user1);
		$user2 = mysqli_fetch_assoc($check_user2);
		$user3 = mysqli_fetch_assoc($check_user3);

        $_SESSION['user'] = [
            "Familiya" => $user['Familiya']
	];
	
	$_SESSION['user1'] = [
            "Ima" => $user1['Ima']
	];
	
	$_SESSION['user2'] = [
            "Otchestvo" => $user2['Otchestvo']
	];
	
	$_SESSION['user3'] = [
            "Nazvanie" => $user3['Nazvanie']
	];
	
			echo "Фамилия: ".$_SESSION['user']['Familiya']."<br>";
			echo "Имя: ".$_SESSION['user1']['Ima']."<br>";
			echo "Отчество: ".$_SESSION['user2']['Otchestvo']."<br>";
			echo "Роль: ".$_SESSION['user3']['Nazvanie']."<br>";

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль!';
		
		echo  $_SESSION['message'];
    }
}
	
 ?>
      </div>
    </div>
  </div>
</div>

<?php
$host='localhost';
$database='ekzamen';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Familiya'])&& isset($_POST['Ima'])&& isset($_POST['Otchestvo'])&& isset($_POST['Email'])&& isset($_POST['Telefon'])&& isset($_POST['pass'])){
	$Familiya=$_POST['Familiya'];
	$Ima=$_POST['Ima'];
	$Otchestvo=$_POST['Otchestvo'];
	$Email=$_POST['Email'];
	$Telefon=$_POST['Telefon'];
	$pass=$_POST['pass'];
	
		if($Familiya && $Ima && $Otchestvo && $Email && $Telefon && $pass){
		$query="insert into polzovatel(Familiya,Ima,Otchestvo,Email,Telefon,Password) values('$Familiya','$Ima','$Otchestvo','$Email','$Telefon','$pass')";
		$result=mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));
		}
	}
?>
	
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Регистрация
        <span class="underline"></span>
      </button>
      <form class="form form-signup" action="" method="POST">
        <fieldset>
          <legend>Пожалуйста, введите ваше Фамилию,Имя,Отчество,E-mail,Телефон и пароль для регистрации.</legend>
		  <div class="input-block">
            <label for="Familiya">Фамилия</label>
            <input id="signup-password-confirm" id="Familiya" name="Familiya" type="text" required>
          </div>
		  <div class="input-block">
            <label for="Ima">Имя</label>
            <input id="signup-password-confirm" id="Ima" name="Ima" type="text" required>
          </div>
		   <div class="input-block">
            <label for="Otchestvo">Отчество</label>
            <input id="signup-password-confirm" id="Otchestvo" name="Otchestvo" type="text" required>
          </div>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="Email" required>
          </div>
		   <div class="input-block">
            <label for="Telefon">Телефон</label>
            <input id="signup-password-confirm" id="Telefon" name="Telefon" type="tel" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Пароль</label>
            <input id="signup-password" name="pass" type="password" required>
          </div>
        </fieldset>
        <button type="submit" onclick="a()" class="btn-signup">Продолжить</button>
		<script>
	
			function a() {
				alert("Спасибо, за регистрацию!" );
			}
			</script>
      </form>
    </div>
  </div>
</section>
  <script  src="avt/script.js"></script>
</body>
</html>
