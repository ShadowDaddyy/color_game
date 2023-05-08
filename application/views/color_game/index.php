<script type="text/javascript">
            function sound(){
            var snd = new Audio("<?php echo base_url(); ?>assets/sound_effect/win.wav")//wav is also supported
            snd.play()//plays the sound
};
</script>

<div>
    <button id="returnHome" onclick="window.location.href='<?php echo base_url(); ?>';">Home</button>
    <span><?php echo $this->session->flashdata('game_status'); ?></span></div>





<div class="colorTableCont">
    <div class="colorTable" >
    <div class="main-color-container">
        <div class="secondary-color-container">
            <!-- <?php echo form_open('color_game/play'); ?> -->
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
            
        <!-- <?php echo form_close(); ?> -->
        </div>
    </div>
    <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet" class="button-bottom" onclick="add()"><br>
    <!-- <img src= "<?php echo base_url(); ?>assets/pictures/Roll_active.png" alt="Roll Now" class="button-bottom" onclick="submit()">     -->
    <img src= "<?php echo base_url(); ?>assets/pictures/Roll_active.png" alt="Roll Now" class="button-bottom" onclick="window.location.href='<?php echo base_url(); ?>color_game/play'"> 
</div>    
</div>

<div>
<button type="button" id="Modal2" class="btn btn-primary" data-toggle="modal" data-target="#diceModal"> Yeah</button>
</div>

<div class="letsPlayCont">
    <button class="letsPlay" onclick="sound()">Spin Red Dice</button>
</div>

<div class="modal fade" id="diceModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="userImage">
               
            </div>
            
               
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
                    
                   
                <div class="modal-footer" id="editUser">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Cancel</button>
                </div>
           
        </div>
    </div>
</div>

















<?php if($this->session->flashdata('game_status') == 'YOU WIN'): ?>
        <?php echo '<script type="text/javascript">sound();</script>' ?>
<?php endif; ?>


<script>
    
    // function check(color, id){
       
    //     console.log(color);
    //     document.cookie = "myColor=" + color;

    //     var myDiv = document.getElementById(id);

    //     // Set the opacity
    //     myDiv.style.border = "5px solid black";
    // }

    // $("table tbody").on("click", "tr", function () {
    //     $("tr.selected")  // find any selected rows
    //     .not(this)  // ignore the one that was clicked
    //     .removeClass("selected");  // remove the selection
    //     $(this).toggleClass("selected");  // toggle the selection clicked row
    // });

    function add(){
        var color = getColor();
        
        switch (color) {
            case "red":
                red++;
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