<span><?php echo $this->session->flashdata('results'); ?></span>
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



<div class="main-color-container">
    <?php echo form_open('color_game/play'); ?>
    <div class="btnGo">
        <button id="go" onclick="spinDice2()">Go</button>
    </div>
    
    <div class="sub-color-container">
        <div class="color-container" id="colorBlue">
            <label id="colorBlue">
            <input value="blue" type="radio" name="color"/>
            <div class="box">
                <span>BLUE</span>
            </div>
            </label>
        </div>

        <div class="color-container" id="colorGreen">
            <label id="colorGreen">
            <input value="green" type="radio" name="color"/>
            <div class="box">
                <span>Green</span>
            </div>
            </label>
        </div>

        <div class="color-container" id="colorWhite">
            <label id="colorWhite">
            <input value="white" type="radio" name="color"/>
            <div class="box">
                <span>White</span>
            </div>
            </label>
        </div>
    </div>

    <div class="sub-color-container">
        <div class="color-container" id="colorRed">
            <label id="colorRed">
            <input value="red" type="radio" name="color"/>
            <div class="box">
                <span>Red</span>
            </div>
            </label>
        </div>

        <div class="color-container" id="colorYellow">
            <label id="colorYellow">
            <input value="yellow" type="radio" name="color"/>
            <div class="box">
                <span>Yellow</span>
            </div>
            </label>
        </div>

        <div class="color-container" id="colorPink">
            <label id="colorPink">
            <input value="pink" type="radio" name="color"/>
            <div class="box">
                <span>Pink</span>
            </div>
            </label>
        </div>
    </div>
    
    <?php echo form_close(); ?>
    </div>
    </div>


<div class="letsPlayCont">
<button class="letsPlay" onclick="spinDice2()">Spin Red Dice</button>
</div>

