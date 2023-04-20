<!DOCTYPE HTML>
<html>
  <head>
    <title>About</title>
    <link href="grid.css" type="text/css" rel="stylesheet">
<link rel="icon"        type="image/png"        href="goods.png">

  </head>
  <body >
<?php

    require ('common.php');

	print_nav();

?>

<div id="center">
<h1>How to Play the Game!</h1>

<ul>
<li> If you are not <span class="bold">Singed Up</span> already, please <span class="bold">Sing Up</span> first!</li>

<li> Then you need to <span class="bold">Log In</span></li>

<li> After you will be directed to the <span class="bold">Game of Life</span><ul>
<li>You can play around and understand the game.</li>
<li>In the center the game field of grid cells positioned.</li>
<li>At the start all of the cells are <span class="bold"> dead(gray)</span>.</li>
<li>By clicking on the cells or draging the mouse you turn could them <span class="bold"> alive(green)</span>.</li>
<li> In each generation:
<ul>
<li> If a dead cell has exactly three live neighbors, it comes to live.</li>
<li>  If a live cell has less than two live neighbors, it dies.</li>
<li> If a live cell has more than three live neighbors, it dies </li>
<li> If a live cell has two or three live neighbors, it continues living. life - Therefore by repeating the cycle over and over, these simple rules create interesting, often unpredictable patterns. </li></ul>

</li>
<li>On the left is the Stat box shoing the current <span class="bold"> Population</span> and <span class="bold"> Generation</span>.</li>
<li>Under that is the console with lots of buttons.</li>
<li><span class="bold"> Start:</span> 
<ul><li>  Cycle of generation begins until you click  <span class="bold"> Stop</span> or   <span class="bold"> Clear</span> .
</li></ul>
<li><span class="bold"> Stop:</span> 
<ul><li>  Stops the cycle
</li></ul>
</li>
<li><span class="bold"> Incremant 1 gen:</span> 
<ul><li> increments the generation by 1 cycle.
</li></ul>
</li>
<li><span class="bold"> Incremant 23 gen:</span> 
<ul><li> increments the generation by 23 cycle.
</li></ul>
</li>

<li><span class="bold"> Still Animations:</span> 
<ul><li>From the dropdwon menu you can select 4 still animation which will be still in each generation of cycles: <span class= "bold">The Block, The Boat, The Loaf,The Beehive</span>.
</li></ul>
</li>

<li><span class="bold"> Oscillators  Animations:</span> 
<ul><li>From the dropdwon menu you can select 4 oscillators animation which will be osiclate in each generation of cycles: <span class= "bold">The Blinker, The Beacon, The Toad, The Pulsar</span>.
</li></ul>
</li>

<li><span class="bold"> Log In:</span> 
<ul><li> You can Login.
</li></ul>
</li>
<li><span class="bold"> Log Out:</span> 
<ul><li> You can Log Out.
</li></ul>
</li>
<li><span class="bold"> Clear:</span> 
<ul><li> Resets everything clears the game field.
</li></ul>
</li>
</li>
<li><span class="bold"> End the Game:</span> 
<ul><li>Ends the game and send your score to <span class="bold"> the score board.</span>.
</li></ul>
</li>
</ul> </li>

<li>If you are in the mood of a competitive game let us explain how score boards works</li>
<ul><li> When you start the game, under the game field you can see your stats:  <span class="bold">score </span> and <span class="bold">time</span>.</li>
<li>As you are playing the game these stats will be updated live.</li>
<li>Purpose of the game is making most point per seconds</li>
<li>When you end the game by clicking <span class="bold"> End the Game</span> button, score board will be updated. </li>
<li>Order of the score board is most points per a second</li>
</ul>


</ul>
</div>
  </body>
</html>


