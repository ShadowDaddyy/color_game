<script type="text/javascript">
            function sound(){
            var snd = new Audio("<?php echo base_url(); ?>assets/sound_effect/win.wav")//wav is also supported
            snd.play()//plays the sound
};
</script>

<div>
    <button id="returnHome" onclick="window.location.href='<?php echo base_url(); ?>';">Home</button>
    <!-- <span><?php echo $this->session->flashdata('game_status'); ?></span></div> -->

   



<div class="colorTableCont">
    <div class="colorTable" >
        <div class="main-color-container">
            <div class="secondary-color-container">
                <div class="boxColorCont">

                    <div class="grid-container">
                        <div class="grid-item" id="color1red"  onfocusin="mark('red', 'color1red')" onfocusout="unmark('color1red')" tabindex="0" >0</div>
                        <div class="grid-item" id="color2blue" onfocusin="mark('blue', 'color2blue')" onfocusout="unmark('color2blue')" tabindex="0">0</div>
                        <div class="grid-item" id="color3cyan" onfocusin="mark('cyan', 'color3cyan')" onfocusout="unmark('color3cyan')" tabindex="0">0</div>  
                        <div class="grid-item" id="color4yellow" onfocusin="mark('yellow', 'color4yellow')" onfocusout="unmark('color4yellow')" tabindex="0">0</div>
                        <div class="grid-item" id="color5green" onfocusin="mark('green', 'color5green')" onfocusout="unmark('color5green')" tabindex="0">0</div>
                        <div class="grid-item" id="color6magenta" onfocusin="mark('magenta', 'color6magenta')" onfocusout="unmark('color6magenta')" tabindex="0">0</div>  
                    </div>

                </div>
                
            </div>
        </div>

        <div class="availPoint">
        <p>Available Points</p>
        <?php if($this->session->userdata('total_points')): ?>
            <p id="pointCont"><?php echo $this->session->userdata('total_points'); ?></p>
        <?php else: ?>
            <p>0</p>
        <?php endif; ?>
        </div>
    
    </div>    
</div>
<div class="centered">
    <br>
    <button class="basta-btn">
        <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet" onclick="add()">
    </button>
    <button class="basta-btn" id="rollNowBtn">
        <img src= "<?php echo base_url(); ?>assets/pictures/Roll_active.png" alt="Roll Now" onclick="play(); "> 
    </button>
</div>

<div>
<button type="button" id="Modal2" class="btn btn-primary" data-toggle="modal" data-target="#diceModal"> Yeah</button>
</div>

<div class="letsPlayCont">
    <button class="letsPlay" onclick="sound()">Spin Red Dice</button>
</div>

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
        <div class="modal-content">
           
           <p><?php echo $this->session->flashdata('game_status'); ?></p> 
           <p>You earned <?php echo $this->session->flashdata('points'); ?> points</p>        
           
        </div>
    </div>
</div>




<?php if($this->session->flashdata('game_status') == 'YOU WIN'): ?>
        <?php echo '<script type="text/javascript">sound();</script>' ?>
<?php endif; ?>


<script>
    function confetti(){
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

    }

    function add(){
        var color = getColor();
        

        switch (color) {
            case "red":
                
                // var pts=<?php $this->session->userdata('total_points') ;?>;
                red++;
                
                '<?php $this->session->uset_serdata('total_points' , ) ;?>'
                document.getElementById("color1red").innerHTML = red;
                console.log("red is " + red);
                break;
            case "blue":
                blue++;
                document.getElementById("color2blue").innerHTML = blue;
                console.log("blue is " + blue);
                break;
            case "cyan":
                cyan++;
                document.getElementById("color3cyan").innerHTML = cyan;
                console.log("cyan is " + cyan);
                break;
            case "yellow":
                yellow++;
                document.getElementById("color4yellow").innerHTML = yellow;
                console.log("yellow is " + yellow);
                break;
            case "green":
                green++;
                document.getElementById("color5green").innerHTML = green;
                console.log("green is " + green);
                break;
            case "magenta":
                magenta++;
                document.getElementById("color6magenta").innerHTML = magenta;
                console.log("magenta is " + magenta);
                break;
            default:
                console.log("You did not chose a color");
        }
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
        myDiv.style.border = "1px solid black";
        
        document.cookie = "myColor=" + color;
    }

    function unmark(id){
        var myDiv = document.getElementById(id);
        myDiv.style.border = "none";
        document.cookie = "myColor=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

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

</script>

<!-- 
    <input type="image" src="<?php echo base_url(); ?>assets/pictures/Magenta.png" onfocusin="mark('color6magenta')" onfocusout="unmark('color6magenta')"></input>
<div class="colorbox-cont">
    <div class="btnGo">
                <button type="submit" id="go">Go</button>
                </div>

                <div class="sub-color-container">
                    <div class="color-container" id="colorBlue">
                        <label id="colorBlue">
                        <input value="blue" type="radio" name="color" class = "colorClick"/>
                        <div class="box">
                            
                        </div>
                        </label>
                    </div>

                    <div class="color-container" id="colorGreen">
                        <label id="colorGreen">
                        
                        <input value="green" type="radio" name="color" class = "colorClick"/>
                        <div class="box">
                            <span></span>
                        </div>
                        </label>
                    </div>

                </div>

                <div class="sub-color-container">
                    <div class="color-container" id="colorWhite">
                        <label id="colorWhite">
                        <input value="white" type="radio" name="color" class = "colorClick"/>
                        <div class="box">
                            
                        </div>
                        </label>
                    </div>

                    <div class="color-container" id="colorRed">
                        <label id="colorRed">
                        <input value="red" type="radio" name="color" class = "colorClick"/>
                        
                        </label>
                    </div>

                    
                </div>

                <div class="sub-color-container">
                    

                    <div class="color-container" id="colorYellow">
                        <label id="colorYellow">
                        <input value="yellow" type="radio" name="color" class = "colorClick"/>
                        
                        </label>
                    </div>

                    <div class="color-container" id="colorPink">
                        <label id="colorPink">
                        <input value="pink" type="radio" name="color" class = "colorClick"/>
                        </label>
                    </div>
                </div>
            
                </div> -->