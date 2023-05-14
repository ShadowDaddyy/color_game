<script type="text/javascript">
    function win(){
        setTimeout(() => {
            var snd = new Audio("<?php echo base_url(); ?>assets/sound_effect/win.wav")//wav is also supported
            snd.play()//plays the sound
        }, 7500);
    };
</script>

<div>
<img id="arrowHome" src= "<?php echo base_url(); ?>assets/pictures/arrow-left.svg" alt="Place Bet" onclick="window.location.href='<?php echo base_url(); ?>';">
    <!-- <button id="returnHome" onclick="window.location.href='<?php echo base_url(); ?>';">Home</button> -->
    <!-- <span><?php echo $this->session->flashdata('game_status'); ?></span></div> -->

   



<div class="colorTableCont">
    <div class="colorTable" >
        <div class="main-color-container">
            <div class="secondary-color-container">
                <div class="boxColorCont">

                    <div class="grid-container">
                        <div class="grid-item" id="color1red" onfocusin="mark('red', 'color1red')" onfocusout="unmark(event, 'color1red')" tabindex="0" ><p class="colorNum"></p></div>
                        <div class="grid-item" id="color2blue" onfocusin="mark('blue', 'color2blue')" onfocusout="unmark(event, 'color2blue')" tabindex="0"><p class="colorNum"></p></div>
                        <div class="grid-item" id="color3cyan" onfocusin="mark('cyan', 'color3cyan')" onfocusout="unmark(event, 'color3cyan')" tabindex="0"><p class="colorNum"></p></div>  
                        <div class="grid-item" id="color4yellow" onfocusin="mark('yellow', 'color4yellow')" onfocusout="unmark(event, 'color4yellow')" tabindex="0"><p class="colorNum"></p></div>
                        <div class="grid-item" id="color5green" onfocusin="mark('green', 'color5green')" onfocusout="unmark(event, 'color5green')" tabindex="0"><p class="colorNum"></p></div>
                        <div class="grid-item" id="color6magenta" onfocusin="mark('magenta', 'color6magenta')" onfocusout="unmark(event, 'color6magenta')" tabindex="0"><p class="colorNum"></p></div>  
                    </div>

                </div>
                
            </div>
        </div>

        <div class="availPoint">
        <p>Available Points</p>
        <?php if($this->session->userdata('total_points')): ?>
            <p id="pointCont"><?php echo $this->session->userdata('total_points'); ?></p>
        <?php else: ?>
            <p id="pointCont">0</p>
        <?php endif; ?>
        </div>
    
    </div>    
</div>
<div class="centered">
    <br>
        <button class="basta-btn" id="placeBet">
            <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet" onclick="add()">
        </button>
        <button class="basta-btn" id="placeBetDisabled">
            <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet">
        </button>
    
        <button class="basta-btn" id="rollNowBtn">
            <img src= "<?php echo base_url(); ?>assets/pictures/Roll_Active.png" alt="Roll Now" onclick="play(); "> 
        </button>
        <button class="basta-btn" id="rollNowBtnDisabled">
            <img src= "<?php echo base_url(); ?>assets/pictures/Roll_Innactive.png" alt="Roll Now"> 
        </button>
</div>

<!-- <div>
<button type="button" id="Modal2" class="btn btn-primary" data-toggle="modal" data-target="#diceModal"> Yeah</button>
</div> -->

<!-- <div class="letsPlayCont">
    <button class="letsPlay" onclick="sound()">Spin Red Dice</button>
</div> -->

<!-- Dice Modal -->
<div class="modal fade" id="diceModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                
            </div>
            <div class="userImage">
               
            </div> -->
            
                <div class="diceCont">
                    <div class="container">
                        <div class="colorDice" id="cube1">
                            <div class="front" data-value='red'>
                            <span>1</span>

                            </div>
                            <div class="back" data-value='green'>
                            <span>2</span>
                            
                            </div>
                            <div class="right" data-value='blue'>
                            <span>3</span>
                            
                            </div>
                            <div class="left" data-value='white'>
                            <span>4</span>
                            
                            </div>
                            <div class="top" data-value='yellow'>
                            <span>5</span>
                            
                            </div>
                            <div class="bottom" data-value='pink'>
                            <span>6</span>
                            
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="colorDice" id="cube2">
                            <div class="front">
                            <span>1</span>
                            </div>
                            <div class="back">
                            <span>2</span>
                            
                            </div>
                            <div class="right">
                            <span>3</span>
                            
                            </div>
                            <div class="left">
                            <span>4</span>
                            
                            </div>
                            <div class="top">
                            <span>5</span>
                            
                            </div>
                            <div class="bottom">
                            <span>6</span>
                            
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="colorDice" id="cube3">
                            <div class="front">
                            <span>1</span>
                            </div>
                            <div class="back">
                            <span>2</span>
                            
                            </div>
                            <div class="right">
                            <span>3</span>
                            
                            </div>
                            <div class="left">
                            <span>4</span>
                            
                            </div>
                            <div class="top">
                            <span>5</span>
                            
                            </div>
                            <div class="bottom">
                            <span>6</span>
                            
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Results Modal -->
<div class="modal fade" id="resultsModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modalResultFinish">
           
           <p class="gameResult" id="nambalibag"><?php echo $this->session->flashdata('game_status'); ?></p> 
           <p class="gameResult" id="nabalibag">You earned <?php echo $this->session->flashdata('points'); ?> points</p>        
           
        </div>
    </div>

    <div class="centered">
        <button class="basta-btn" onclick="window.location.href='<?php echo base_url(); ?>index';">
            <img src= "<?php echo base_url(); ?>assets/pictures/PlayAgain.png" alt="Play Again">
        </button>
        <br>
        <button class="basta-btn" onclick="window.location.href='<?php echo base_url(); ?>'">
            <img src= "<?php echo base_url(); ?>assets/pictures/Exit.png" alt="Exit"> 
        </button>
    </div>
</div>





<?php if($this->session->flashdata('game_status') == 'Congratulations!'): ?>
    <?php echo '<script type="text/javascript">win();</script>' ?>
<?php endif; ?>




<!-- SCRIPTS  -->

<!-- <?php if($this->session->flashdata('game_status') == 'Congratulations!'): ?>    
    <script>
        $(document).ready(function() {
			for (var i = 0; i < 50; i++) {
				var confetti = $('<div class="confetti"></div>');
				confetti.css({
					"left": Math.random() * 100 + "%",
					"top": Math.random() * 100 + "%",
					"background-color": "rgb(" + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + ")"
				});
				$('body').append(confetti);
			}
		});
    </script>
<?php endif; ?> -->

<script>

    var rollNowBtn = document.getElementById("rollNowBtn");
    var rollNowBtnDisabled = document.getElementById("rollNowBtnDisabled");
    var placeBet = document.getElementById("placeBet");
    var placeBetDisabled = document.getElementById("placeBetDisabled");
    var points = '<?php echo $this->session->userdata('total_points'); ?>';
    var color = getColor();

    if(points>0) {
        placeBetDisabled.style.display = "none";
        placeBet.style.display = "block";
    } else {
        console.log("don't have any bets left");
        placeBetDisabled.style.display = "block";
        placeBet.style.display = "none";
    }
    
    function toggleRoll(){
        if (red>0 || blue>0 || cyan>0 || yellow>0 || green>0 || magenta>0) {
            console.log(red + "" + blue + "" + cyan + "" + yellow + "" + green + "" + magenta);
            console.log("You can now roll the dice");
            rollNowBtnDisabled.style.display = "none";
            rollNowBtn.style.display = "block";
        }
    }

    function toggleBet(){
        if(points>1) {
            placeBetDisabled.style.display = "none";
            placeBet.style.display = "block";
        } else {
            console.log("don't have any bets left");
            placeBetDisabled.style.display = "block";
            placeBet.style.display = "none";
        }
    }

    // function confetti(){
        

    // }

    function add(){
        var color = getColor();
       
        switch (color) {
            case "red":      
                red++;
                var kulay = document.getElementById("color1red");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = red;
                console.log("red is " + red);
                break;
            case "blue":
                blue++;
                document.getElementById("color2blue");
                var kulay = document.getElementById("color2blue");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = blue;
                console.log("blue is " + blue);
                break;
            case "cyan":
                cyan++;
                document.getElementById("color3cyan");
                var kulay = document.getElementById("color3cyan");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = cyan;
                console.log("cyan is " + cyan);
                break;
            case "yellow":
                yellow++;
                document.getElementById("color4yellow");
                var kulay = document.getElementById("color4yellow");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = yellow;
                console.log("yellow is " + yellow);
                break;
            case "green":
                green++;
                document.getElementById("color5green");
                var kulay = document.getElementById("color5green");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = green;
                console.log("green is " + green);
                break;
            case "magenta":
                magenta++;
                document.getElementById("color6magenta");
                var kulay = document.getElementById("color6magenta");
                var kulayNum = kulay.querySelector("p");
                kulayNum.textContent = magenta;
                console.log("magenta is " + magenta);
                break;
            default:
                console.log("You did not chose a color");
        }
        toggleRoll();
        toggleBet();
    }


    function getColor(){
        let cookies = document.cookie.split(';');
        let myColorValue = null;

        cookies.forEach(cookie => {
            let parts = cookie.trim().split('=');
            if (parts[0] === 'myColor') {
                myColorValue = parts[1];
            }
        });
        console.log(myColorValue);
        return myColorValue;
    }

    function mark(color, id){
        var myDiv = document.getElementById(id);
        myDiv.style.boxShadow = "inset 0 0 0 3px #fefefe";
        
        document.cookie = "myColor=" + color;
        console.log("Marking");
        console.log(document.cookie);
    }

    function unmark(event, id){
        // var clickedId = event.target.id;

        // console.log("Clicked: " + clickedId);

        // if (clickedId != "placeBet") {
        //     var myDiv = document.getElementById(id);
        //     myDiv.style.boxShadow = "none";
        //     document.cookie = "myColor=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        //     console.log("Unmarking");
        //     console.log(document.cookie);
        // } else {
        //     console.log(document.cookie);
        //     console.log(clickedId);
        // }

        var myDiv = document.getElementById(id);
        myDiv.style.boxShadow = "none";
        
        // document.cookie = "myColor=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        // console.log("Unmarking");
        // console.log(document.cookie);
    }

    function play() {
        document.cookie = "red="+red;
        document.cookie = "blue="+blue;
        document.cookie = "cyan="+cyan;
        document.cookie = "yellow="+yellow;
        document.cookie = "green="+green;
        document.cookie = "magenta="+magenta;
        window.location.href = "<?php echo base_url(); ?>play"
    }

    $(document).ready(function() {
    // Define function that performs AJAX request and updates div content
        function updateDivContent() {
            $.ajax({
                url: "color_game/eme",
                type: "POST",
                dataType: "html",
                success: function(data) {
                    $('#pointCont').html(data);
                    points = data;
                    console.log(points);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle error response from the controller
                }
            });
        }
        $('#placeBet').click(function() {
            updateDivContent();
        });
    });


</script>