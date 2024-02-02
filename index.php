<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Rock, Paper, Scissors Game</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <a href="https://www.codewithfaraz.com/" class="logo" target="_blank">
		<img src="https://www.codewithfaraz.com/InstaPic.png" alt="">
</a><h1>Rock, Paper, Scissors</h1>
  <div class="scoreboard">
    <div class="player-score">Player: 0</div>
    <div class="computer-score">Computer: 0</div>
  </div>
  <div class="choices">
    <div class="choice" id="rock">
      <i class="fas fa-hand-rock"></i>
    </div>
    <div class="choice" id="paper">
      <i class="fas fa-hand-paper"></i>
    </div>
    <div class="choice" id="scissors">
      <i class="fas fa-hand-scissors"></i>
    </div>
  </div>
  <div class="result" id="result">
    <p>Choose your weapon!</p>
  </div>
  <div id="computer-choice"></div>
  <div class="timer" id="timer">
    <p>Time left: <span id="countdown">10</span>s</p>
  </div>
  <button class="play-again" id="play-again">Play Again</button>
  <div>
	<a class="play-again" id="play-again" style="width:150px" href="logout.php" >Logout</a>
</div>
  <script src="script.js"></script>
</body>
</html>