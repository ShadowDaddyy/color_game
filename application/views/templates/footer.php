</div>
</body>
    <script scr="<?php echo base_url(); ?>assets/js/dice.js"></script>

    <script>

        // var cube = document.getElementsByClassName('colorDice');
        var cube1 = document.getElementById('cube1');
        var cube2 = document.getElementById('cube2');
        var cube3 = document.getElementById('cube3');

        var min = 1;
        var max = 24;

        function spinDice2() {
            const results = [];

            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);
            cube1.style.webkitTransform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            cube1.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            results[0] = getResult(xRand, yRand);
            console.log(xRand);
            console.log(yRand);
            
        
            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);
            cube2.style.webkitTransform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            cube2.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            results[1] = getResult(xRand, yRand);

            console.log(xRand);
            console.log(yRand);
            
            
           

            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);
            cube3.style.webkitTransform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            cube3.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            results[2] = getResult(xRand, yRand);
            console.log(xRand);
            console.log(yRand);
            
            console.log(results[0]);
            console.log(results[1]);
            console.log(results[2]);

            

           
        }

        function getRandom(max, min) {
            var value = (Math.floor(Math.random() * (max-min)) + min) * 90;
            // console.log(value);
            return value;
        }
        
        function mod(n, m) {
            return ((n % m) + m) % m;
        }

        function getResult(rotX, rotY) {
            let countX = mod(rotX / 90, 4);
            if (countX === 1) {
                // Bottom face
                return 'pink';
            }
            if (countX === 3) {
                // Top face
                return 'yellow';
            }
            // We add countX here to correctly offset in case it is a 180 degrees rotation
            // It can be 0 (no rotation) or 2 (180 degrees)
            let countY = mod(rotY / 90 + countX, 4);
            // Faces order
            return ['red', 'white', 'green', 'blue'][countY];
        }

    </script>

    <?php if($this->session->flashdata('game_status')): ?>
        <script>

            $(document).ready(function() {
                $('#diceModal').modal('show');
            });

            setTimeout(function() {
                var cube1 = document.getElementById('cube1');
                var cube2 = document.getElementById('cube2');
                var cube3 = document.getElementById('cube3');

                const color1 = getXY("<?php echo $this->session->flashdata('color1'); ?>");
                const color2 = getXY("<?php echo $this->session->flashdata('color2'); ?>");
                const color3 = getXY("<?php echo $this->session->flashdata('color3'); ?>");

                cube1.style.webkitTransform = 'rotateX('+color1[0]+'deg) rotateY('+color1[1]+'deg)';
                cube1.style.transform = 'rotateX('+color1[0]+'deg) rotateY('+color1[1]+'deg)';

                cube2.style.webkitTransform = 'rotateX('+color2[0]+'deg) rotateY('+color2[1]+'deg)';
                cube2.style.transform = 'rotateX('+color2[0]+'deg) rotateY('+color2[1]+'deg)';

                cube3.style.webkitTransform = 'rotateX('+color3[0]+'deg) rotateY('+color3[1]+'deg)';
                cube3.style.transform = 'rotateX('+color3[0]+'deg) rotateY('+color3[1]+'deg)';
            }, 1500);

            // Switch dice to results
            setTimeout(function() {
                $('#diceModal').hide();
                $('#resultsModal').modal('show');
                var win = '<?php echo ($this->session->flashdata('game_status') == 'Congratulations!') ? 'true' : 'false'; ?>';
                console.log(win);
                if(win){
                    for (var i = 0; i < 50; i++) {
                        var confetti = $('<div class="confetti"></div>');
                        confetti.css({
                            "left": Math.random() * 100 + "%",
                            "top": Math.random() * 100 + "%",
                            "background-color": "rgb(" + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + "," + Math.floor(Math.random()*256) + ")"
                        });
                        $('body').append(confetti);
                    }
                }
                
            }, 8000);

            // setTimeout(function() {
            //     // $('#resultsModal').modal('hide');
            //     $('.modal-backdrop').remove();
            //     // location.reload();
            // }, 10000);

            // setTimeout(closeModal, 8000);

            // function closeModal() {
            //     var modal = document.getElementById("diceModal");

            //     modal.style.display = "none";
            // }

            function getXY(color, cubeID) {
                // console.log(color);
                switch (color) {
                    case "red":
                        console.log("Red 1");
                        return [1980, 1620];
                        // console.log(cubeID);
                        // rotateCube(1980, 1620, cubeID);
                    case "blue":
                        console.log("Blue 2");
                        return [540, 1440];
                         console.log(cubeID);
                        // rotateCube(540, 1440, cubeID);
                    case "cyan":
                        console.log("Cyan 3");
                        return [900, 90];
                         console.log(cubeID);
                        // rotateCube(900, 90, cubeID);
                    case "yellow":
                        console.log("Yellow 4");
                        return [1080, 90];
                        // console.log(cubeID);
                        // rotateCube(1080, 90, cubeID);
                    case "green":
                        console.log("Green 5");
                        return [270, 990];
                        // console.log(cubeID);
                        // rotateCube(270, 990, cubeID);
                    case "magenta":
                        console.log("Magenta 6");
                        return [450, 1800];
                        // console.log(cubeID);
                        // rotateCube(450, 1800, cubeID);
                    default:
                        console.log("meow meow di gumana meow");
                }
            }

            function rotateCube(x, y, id){
                console.log(id);
                var cube = document.getElementById(id);
                cube.style.webkitTransform = 'rotateX('+x+'deg) rotateY('+y+'deg)';
                cube.style.transform = 'rotateX('+x+'deg) rotateY('+y+'deg)';
            }

            function placedBet(){
                var button1 = document.getElementById("rollNowBtn");
                var button2 = document.getElementById("rollNowBtnDisabled");
                
                if(red!=0 || blue!=0 || cyan!=0 || yellow!=0 || green!=0 || magenta!=0){
                    // document.getElementById('rollNowBtn').disabled = false; 
                    button1.style.display = "block";
                    button2.style.display = "none";
                }else{
                    // document.getElementById('rollNowBtn').disabled = true;  
                    button1.style.display = "none";
                    button2.style.display = "block";
                } 
            }

            setInterval(placedBet, 1000);
        </script>
    <?php endif; ?>

   



   
</html>
