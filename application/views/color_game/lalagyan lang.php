


<div class="maincont">
    
<div id="diceBody">
  <nav>
    <ul class="choose-dice">
      <li>
        <label>Dice 6 faces</label>
        <input class="choose-dice-checkbox" type="radio" name="dice" value="dice-6"/>
      </li>
      
    </ul>
    <hr/>
    <ul class="turn-dice">
      <li>
        <label>Turn the dice</label>
        <input class="spin-dice-checkbox" type="checkbox" />
      </li>
    </ul>
  </nav>

  <section class="diceCont">
    <div class="dice dice-6">
      <div class="faces face-1">1</div>
      <div class="faces face-2">2</div>
      <div class="faces face-3">3</div>
      <div class="faces face-4">4</div>
      <div class="faces face-5">5</div>
      <div class="faces face-6">6</div>
    </div>





    <div class="status">
        <div class="status2">
            <?php if($this->session->flashdata('game_status')): ?>
                <h1><?php echo $this->session->flashdata('game_status'); ?></h1> 
                
                <h3>You Have Chosen The Color: <?php echo $this->session->flashdata('chosen_color'); ?></h3>
            <?php else: ?>
                <h3><?php echo $this->session->flashdata('Error'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="display-colors">
        <div class="color-container" id="first" style =" background-color: <?php echo $this->session->flashdata("color1"); ?>">
            <?php echo $this->session->flashdata("color1") ; ?>
        </div>
        <div class="color-container" id="second" style =" background-color: <?php echo $this->session->flashdata("color2"); ?>">
            <?php echo $this->session->flashdata("color2") ; ?>
        </div>
        <div class="color-container" id="third" style =" background-color: <?php echo $this->session->flashdata("color3"); ?>">
            <?php echo $this->session->flashdata("color3") ; ?>
        </div>
    </div>

   
    
    <div class="main-color-container">
    <?php echo form_open('color_game/play'); ?>
    <div class="btnGo">
        
        <button type="submit" id="go">Go</button>
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






   