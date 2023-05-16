    </div>
</body>
    <?php if($this->session->flashdata('game_status')): ?>
        <script>
            $(document).ready(function() {
                $('#diceModal').modal('show');
            });

            setTimeout(function() {
                var cube1 = document.getElementById('cube1');
                var cube2 = document.getElementById('cube2');
                var cube3 = document.getElementById('cube3');

                // Get the the X and Y degrees for each random color
                const color1 = getXY("<?php echo $this->session->flashdata('color1'); ?>");
                const color2 = getXY("<?php echo $this->session->flashdata('color2'); ?>");
                const color3 = getXY("<?php echo $this->session->flashdata('color3'); ?>");

                // Roll the cubes to get the desired color
                cube1.style.webkitTransform = 'rotateX('+color1[0]+'deg) rotateY('+color1[1]+'deg)';
                cube1.style.transform = 'rotateX('+color1[0]+'deg) rotateY('+color1[1]+'deg)';

                cube2.style.webkitTransform = 'rotateX('+color2[0]+'deg) rotateY('+color2[1]+'deg)';
                cube2.style.transform = 'rotateX('+color2[0]+'deg) rotateY('+color2[1]+'deg)';

                cube3.style.webkitTransform = 'rotateX('+color3[0]+'deg) rotateY('+color3[1]+'deg)';
                cube3.style.transform = 'rotateX('+color3[0]+'deg) rotateY('+color3[1]+'deg)';
            }, 1500);

            // Switch dice modal to results modal
            setTimeout(function() {
                $('#diceModal').hide();
                $('#resultsModal').modal('show');
            }, 9000);

            // Get the X and Y degree that will display the color when cube rolls
            function getXY(color, cubeID) {
                switch (color) {
                    case "red":
                        console.log("Red 1");
                        return [1980, 1620];
                    case "blue":
                        console.log("Blue 2");
                        return [540, 1440];
                    case "cyan":
                        console.log("Cyan 3");
                        return [900, 90];
                    case "yellow":
                        console.log("Yellow 4");
                        return [1080, 90];
                    case "green":
                        console.log("Green 5");
                        return [270, 990];
                    case "magenta":
                        console.log("Magenta 6");
                        return [450, 1800];
                    default:
                        console.log("Fail");
                }
            }

            // Check if user places a bet
            function placedBet(){
                var rollNowBtn = document.getElementById("rollNowBtn");
                var rollNowBtnDisabled = document.getElementById("rollNowBtnDisabled");
                
                // If one of the colors is != 0, user can roll the dice
                if(red!=0 || blue!=0 || cyan!=0 || yellow!=0 || green!=0 || magenta!=0){
                    rollNowBtn.style.display = "block";
                    rollNowBtnDisabled.style.display = "none";
                }else{
                    rollNowBtn.style.display = "none";
                    rollNowBtnDisabled.style.display = "block";
                }
            }

            setInterval(placedBet, 1000);
        </script>
    <?php endif; ?>
</html>