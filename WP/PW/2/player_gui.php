<?php 

if ( isset( $player_being_configured ) ): ?>
    <h1 id="names">
        <?php
            if ( isset( $players ) ) {
                echo $players[ $player_being_configured - 1 ][ "name" ];
            } ?>
    </h1>
	<h2 id="scores">
        <?php
            if ( isset( $players ) ) {
                echo $players[ $player_being_configured - 1 ][ "score" ];
				
            } ?>
    </h2>
  
   
    <button type="submit"  name="user_turn" id="user_turn"   alt='Roll the dice'
        <?php if ( $player_turn != $player_being_configured ): ?>
            disabled
        <?php endif ?>
           value="ROLL" >
		   
		           <?php if ( $player_turn != $player_being_configured ){
		echo " <img  src='img/dice.png'  width=50px;  style='opacity:0.5;' alt='Roll the dice' />";
				   }else{
				   		echo " <img class='dice-img' src='img/dice.png'  width=50px; />";
				   }
			  ?>
			 </button>

		   
<?php endif ?>