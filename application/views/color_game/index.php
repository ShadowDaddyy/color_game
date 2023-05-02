<script type="text/javascript">
            function sound(){
            var snd = new Audio("<?php echo base_url(); ?>assets/sound_effect/win.wav")//wav is also supported
            snd.play()//plays the sound
};
</script>

<div>
    <button id="returnHome" onclick="window.location.href='<?php echo base_url(); ?>start.php';">Home</button>
    <span><?php echo $this->session->flashdata('game_status'); ?></span></div>
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




<div class="colorTableCont">
    <div class="colorTable" >
    <img src= "<?php echo base_url(); ?>assets/pictures/Board.png" alt="Color Table"><br>

    <div class="main-color-container">
        <div class="secondary-color-container">
            <?php echo form_open('color_game/play'); ?>
            <div class="btnGo">
                <!-- <button type="submit" id="go">Go</button> -->
            </div>
            
            <div class="sub-color-container">
                <div class="color-container" id="colorBlue">
                    <label id="colorBlue">
                    <input value="blue" type="radio" name="color" class = "colorClick"/>
                    <div class="box">
                        <p></p>
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
            
            
            </div>
        </div>
    <img src= "<?php echo base_url(); ?>assets/pictures/Bet.png" alt="Place Bet" class="button-bottom"><br>
    <img src= "<?php echo base_url(); ?>assets/pictures/Roll_active.png" alt="Roll Now" class="button-bottom" onclick="submit()">
    <?php echo form_close(); ?>
         
    </div>







        
</div>


<!-- <div class="letsPlayCont">
    <button class="letsPlay" onclick="sound()">Spin Red Dice</button>
</div> -->

<?php if($this->session->flashdata('game_status') == 'YOU WIN'): ?>
        <?php echo '<script type="text/javascript">sound();</script>' ?>
<?php endif; ?>