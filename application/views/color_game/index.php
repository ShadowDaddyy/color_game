<script type="text/javascript">
    // Confetti
    var colors = ["#c4ae31", "#10e65b","#e63010"];
    function showConfetti() {
        setTimeout(() => {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors: colors,
            zIndex: 9999,
        });
        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors: colors,
            zIndex: 9999,
        });
        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors: colors,
            zIndex: 9999,
        });
        }, 9200);

        if (Date.now() < Date.now() + 15000) {
            requestAnimationFrame(showConfetti);
        }   
    }
   
    // Sound Effects
    function sounds(){
        setTimeout(() => {
            var snd = new Audio("<?php echo base_url(); ?>assets/sound_effect/win.wav")//wav is also supported
            snd.play()
        }, 8500);
    };
</script>

<button id="arrowHome" onclick="window.location.href='<?php echo base_url(); ?>';"><img src="<?php echo base_url(); ?>assets/pictures/arrow-left.svg" alt="Place Bet"></button>

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
    <button class="modal-btn" id="placeBet">
        <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet" id="confettiTrigger" onclick="add();">
    </button>
    
    <button class="modal-btn" id="placeBetDisabled">
        <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet">
    </button>

    <button class="modal-btn" id="rollNowBtn">
        <img src= "<?php echo base_url(); ?>assets/pictures/Roll_Active.png" alt="Roll Now" onclick="play(); "> 
    </button>
    <button class="modal-btn" id="rollNowBtnDisabled">
        <img src= "<?php echo base_url(); ?>assets/pictures/Roll_Innactive.png" alt="Roll Now"> 
    </button>
</div>

<!-- Dice Modal -->
<div class="modal fade" id="diceModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="diceCont">
                <div class="container">
                    <div class="colorDice" id="cube1">
                        <div class="front"></div>
                        <div class="back"></div>
                        <div class="right"></div>
                        <div class="left"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="colorDice" id="cube2">
                        <div class="front"></div>
                        <div class="back"></div>
                        <div class="right"></div>
                        <div class="left"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="colorDice" id="cube3">
                        <div class="front"></div>
                        <div class="back"></div>
                        <div class="right"></div>
                        <div class="left"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
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
            <h2><?php echo $this->session->flashdata('game_status'); ?></h2><br>
            <h2>You earned <?php echo $this->session->flashdata('points'); ?> points</h2><br>
            <h5>Current points: <?php echo $this->session->userdata('total_points'); ?></h5>       
        </div>
    </div>
    <div class="centered">
        <button class="modal-btn" onclick="window.location.href='<?php echo base_url(); ?>index';">
            <img src= "<?php echo base_url(); ?>assets/pictures/PlayAgain.png" alt="Play Again">
        </button>
        <button class="modal-btn" onclick="window.location.href='<?php echo base_url(); ?>'">
            <img src= "<?php echo base_url(); ?>assets/pictures/Exit.png" alt="Exit"> 
        </button>
    </div>
 
    <?php if($this->session->flashdata('game_status') == 'Congratulations!'): ?>
        <?php echo '<script type="text/javascript">sounds();</script>' ?>
        <?php echo '<script type="text/javascript">showConfetti();</script>' ?>
    <?php endif; ?>
</div>

<!-- SCRIPTS  -->
<script>
    var rollNowBtn = document.getElementById("rollNowBtn");
    var rollNowBtnDisabled = document.getElementById("rollNowBtnDisabled");
    var placeBet = document.getElementById("placeBet");
    var placeBetDisabled = document.getElementById("placeBetDisabled");
    var points = '<?php echo $this->session->userdata('total_points'); ?>';
    var color = getColor();

    if(points>0) {
        // Enable Place Bet button if points < 0
        placeBetDisabled.style.display = "none";
        placeBet.style.display = "block";
    } else {
        // Disable Place Bet button if points < 0
        console.log("don't have any bets left");
        placeBetDisabled.style.display = "block";
        placeBet.style.display = "none";
    }
    
    // Enable/Disable Roll Now button if users places bet
    function toggleRoll(){
        if (red>0 || blue>0 || cyan>0 || yellow>0 || green>0 || magenta>0) {
            console.log(red + "" + blue + "" + cyan + "" + yellow + "" + green + "" + magenta);
            console.log("You can now roll the dice");
            rollNowBtnDisabled.style.display = "none";
            rollNowBtn.style.display = "block";
        }
    }

    // Enable/Disable Place Bet button if users runs out of points
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

    // Increment value of selected color
    function add(){
        // Get the selected color
        var color = getColor();
       
        // Increment value of color
        // Update displayed value of the color
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

    // Get the selected color from cookie
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

    // Highlight the selected color and store in a cookie
    function mark(color, id){
        var myDiv = document.getElementById(id);
        myDiv.style.boxShadow = "inset 0 0 0 3px #fefefe";
        
        document.cookie = "myColor=" + color;
        console.log("Marking");
        console.log(document.cookie);
    }

    // Remove highlight 
    function unmark(event, id){
        var myDiv = document.getElementById(id);
        myDiv.style.boxShadow = "none";
    }

    // When Roll Now button is clicked
    // Store the value of each color and redirect to play() in the controller
    function play() {
        document.cookie = "red="+red;
        document.cookie = "blue="+blue;
        document.cookie = "cyan="+cyan;
        document.cookie = "yellow="+yellow;
        document.cookie = "green="+green;
        document.cookie = "magenta="+magenta;
        window.location.href = "<?php echo base_url(); ?>play"
    }

    // Update the displayed Available Points
    $(document).ready(function() {
        function updateDivContent() {
            $.ajax({
                url: "color_game/update_points",
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

        // Trigger when user clicks on Place Bet
        $('#placeBet').click(function() {
            updateDivContent();
        });
    });
</script>