<?php session_start(); /* Starts the session */
if (isset($_POST["endName"])){
		$previousFileContent = file_get_contents("score.txt");
		$data = $_POST["endName"]. "," .$_POST["endScore"]. "," .$_POST["endTime"];
		file_put_contents("score.txt", trim($previousFileContent ."\n". $data));
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Prj3 Game of Life</title>
    <link href="grid.css" type="text/css" rel="stylesheet">
	 <script type="text/javascript" src="grid.js">  </script>
	 <link href="css/style.css" rel="stylesheet">
<link rel="icon"        type="image/png"        href="goods.png">
  </head>
  <?php 	if ( isset($_SESSION['UserData']['Username'])){  ?>
  <body  onload="loadEvent()">
<?php

    require ('common.php');

	print_nav();

?> 
 <h1 id = "tit">Game of Life</h1>
    <div id="puzzle" class="five">
 <div id="statbox">
 <h1 id="population"></h1>
  <h1 id="generation">Generation: 0</h1>

 </div>
      <div id="grid">
	  <div id= "row1">
        <div class="box clear thick-top-border vertical-divider  row1"></div>
        <div class="box thick-top-border row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
		<div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
		<div class="box thick-top-border  row1" ></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border  row1"></div>
        <div class="box thick-top-border row1"></div>
        <div class="box thick-top-border row1"></div>
        <div class="box thick-top-border row1"></div>
        <div class="box thick-top-border row1"></div>
		<div class="box thick-top-border row1"></div>
        <div class="box thick-top-border row1"></div>
        <div class="box thick-top-border row1"></div></div>
		<div id= "row2">
		<div class="box clear vertical-divider row2"></div>
        <div class="box row2"></div>
		<div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
		<div class="box row2"></div>
		<div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div>
        <div class="box row2"></div> </div>
		<div id= "row3">

        <div class="box clear vertical-divider row3"></div>
        <div class="box row3"></div>
		<div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
		<div class="box row3"></div>
		<div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div>
        <div class="box row3"></div> </div>
			  <div id= "row4">

        <div class="box clear vertical-divider row4"></div>
        <div class="box row4"></div>
		<div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
		<div class="box row4"></div>
		<div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div>
        <div class="box row4"></div> </div>	  
		<div id= "row5">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div></div>
		
				<div id= "row6">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div> </div>
		
				<div id= "row7">

		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div> </div>
		
				<div id= "row8">
		
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		</div>
		
				<div id= "row9">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		</div>
		
				<div id= "row10">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		</div>
		
				<div id= "row11">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		</div>
		
				<div id= "row12">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		</div>
		
				<div id= "row13">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div></div>
				<div id= "row14">
		<div class="box clear vertical-divider"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div></div>
		
				<div id= "row15">
        <div class="box clear horizontal-divider vertical-divider"></div>
        <div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
        <div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div>
		<div class="box horizontal-divider"></div></div>

      </div>
	  <div id="player_stats">
	  <h1> Player :
	  <?php 	echo $_SESSION['UserData']['Username'];?>
	  </h1>
	  <h1 id="score">Score : 0</h1>
	  <h1 id="gametime">Time: 0 sec</h1>
	  </div>
	  <?php 
	  $scoreTable = explode("\n", file_get_contents('score.txt'));
	

		for ($x = 0; $x < count($scoreTable); $x++) {
			$myString = $scoreTable[$x];
			$myArray = explode(',', $myString);
			$tableStat[$x] = $myArray;
			}
		for ($x = 0; $x < count($tableStat); $x++) {
			$tableStat[$x][3] = round( $tableStat[$x][1] / $tableStat[$x][2], 2); 
			$indeces[ $tableStat[$x][0].$tableStat[$x][3]] = $tableStat[$x][3];
		}
		arsort($indeces);


		$j = 0;
		foreach($indeces as $x_name => $x_value) {
				for ($x = 0; $x < count($tableStat); $x++) {
					if ($tableStat[$x][0].$tableStat[$x][3] == $x_name){
						$orderedBoard[$j] = $tableStat[$x];
					}
		}
		$j = $j+1;
}	

		?>
	   <div id="score_board">
		<table>
		<th>Player Name</th>		
		<th>Score</th>		
		<th>Time</th>
		<th>S/T</th>

		<?php 
				for ($i = 0; $i < count($orderedBoard); $i++) {
				echo "<tr>";
					echo "<td>".$orderedBoard[$i][0]."</td>";
					echo "<td>".$orderedBoard[$i][1]."</td>";
					echo "<td>".$orderedBoard[$i][2]."</td>";
					echo "<td>".$orderedBoard[$i][3]."</td>";

				echo 	"</tr>	";
				}
		?>
		</table>
	  </div>
	  <div id="buttons">
			<button id="start" class= "btn" onclick="start()">Start</button>
			<button id="stop" class= "btn" onclick="stop()">Stop</button>
			<button id="incOne" class= "btn" onclick="incOne()"> Increment 1 generation</button>
			<button id="inc23"  class= "btn" onclick="inc23()"> Increment 23 generation</button>
			<br><br>
			<div class="dropdown" style="margin-top:-30px;" >
			  <button class="dropbtn btn"  >Still Animations</button>
			  <div class="dropdown-content">
				<button id="still_1" onclick="block()">Block</button> <br>
				<button id="still_2" onclick="boat()">Boat</button><br>
				<button id="still_3"  onclick="loaf()">Loaf</button><br>
				<button id="still_4" onclick="beehive()">Beehive</button><br>
			  </div>
			  </div>
			  <div class="dropdown" >
			  <button class="dropbtn btn" >Oscillators Animations</button>
			  <div class="dropdown-content">
				<button id="osci_1" onclick="blinker()">Blinker  </button> <br>
				<button id="osci_2" onclick="beacon()">Beacon </button><br>
				<button id="osci_3"  onclick="toad()">Toad </button><br>
				<button id="osci_4" onclick="pulsar()">Pulsar</button><br>
			  </div>
			  </div>
			<button id="logout" class= "btn"  type="button" onclick="location.href = 'logout.php';"  >Log Out</button>
			<button id="clear" class= "btn" onclick="reset()">Clear</button>
			<form action="" method="post" name="endGame" id="endGame"  onsubmit="return checkCompleteness();">
				<input name="endName" id="endName" type="text" class="Input" value =  <?php 	echo $_SESSION['UserData']['Username'];?> >
				  <input name="endScore" id="endScore" type="text" class="Input">
				  <input name="endTime" id="endTime"  type="text" class="Input">
				<input name="Submit" type="submit"  id="endBtn" class= "btn" value="End the Game" class="Button3">
			</form>
</div>
</div>
    </div>

  </body>
  <?php 	} 
  else {
  ?>
  <body>
  <?php

    require ('common.php');

	print_nav();

?> 
<div id="center" >
<h1> Please Log In to Play</h1>
	<p> Log in to play from <span class="bold">Log In</span> button.	</p>
	<p>If you are not signed up yet please singed up from <span class="bold">Sing Up </span> button	</p>


 <button  type="button" onclick="location.href = 'login.php';" value="login" class="Button3">Log In</button>
	<button  type="button" onclick="location.href = 'signup.php';" value="SignUp" class="Button3">Sign Up</button>
</div> 
 </body>
  <?php
  }
?>
</html>


