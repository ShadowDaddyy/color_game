<html>
    <head>
        <title>Color Game</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/color_game.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/color_game.scss">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dice.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/start.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/instructions.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script scr="<?php echo base_url(); ?>assets/js/dice.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.1/dist/confetti.browser.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>         -->


        <script>
            // var points = (<?php echo $this->session->userdata('total_points'); ?> != null) ? <?php echo $this->session->userdata('total_points'); ?> : 10;
            // console.log(points);
            var red = 0;
            var blue = 0;
            var cyan = 0;
            var yellow = 0;
            var green = 0;
            var magenta = 0;
            // document.cookie = "myColor=null;";
            // document.cookie = "red=0;blue=0;cyan=0;yellow=0;green=0;magenta=0;myColor=null;";
        </script>
        
        <style>
            #dice {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100px;
                height: 100px;
                background-color: white;
                border-radius: 10px;
                text-align: center;
                font-size: 60px;
                line-height: 100px;
                box-shadow: 3px 3px 3px rgba(0,0,0,0.3);
            }
        </style>
        
    </head>
    <body style="background-image:url(' <?php echo base_url(); ?>assets/pictures/BG.png');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    <!-- <div class="bg" style="background-image:url(' <?php echo base_url(); ?>assets/pictures/BG.png');"> -->
    <div>
    

        


           

            