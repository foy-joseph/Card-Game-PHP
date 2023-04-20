<?php
include("Player.php");
session_start();

if(isset($_POST['userInfo'])){
    $_SESSION['currentPlayer'] = new Player($_POST['userName'], $_POST['nickName'], $_POST['difficulty']);
    if ($_POST['difficulty'] === "Easy") {
        header("Location: init_level_1.php");
    }
    if ($_POST['difficulty'] === "Hard") {
        header("Location: init_level_2.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title>New Game</title>
    <link rel="stylesheet" href="ca_styles.css">
</head>
<body>


<div class="get-details">
    <!-- Require the user to enter details -->
    <form action="" method="post">
        <label for="userName">Name:</label>
        <input type="text" id="userName" name="userName" required><br>
        <label for="nickName">Alias :</label>
        <input type="text" id="nickName" name="nickName" required><br>
        <label for="easy">Easy</label>
        <input type ="radio" id="easy" name="difficulty" value="Easy"><br>
        <label for="hard">Hard</label>
        <input type ="radio" id="hard" name="difficulty" value="Hard"><br>
        <input class="button" type="submit" name="userInfo" value="Start">
    </form>
</div>


</body>
</html>