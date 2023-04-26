    </body>
    
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
            results[0] = getResult(xRand, yRand)
            
            
            

            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);
            cube2.style.webkitTransform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            cube2.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            results[1] = getResult(xRand, yRand)
            
            
           

            var xRand = getRandom(max, min);
            var yRand = getRandom(max, min);
            cube3.style.webkitTransform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            cube3.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
            results[2] = getResult(xRand, yRand)
            
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

    <script>
    
        function spinDice(){
        document.getElementById("theDice").classList.add('is-spinning');
        };
   
    </script>




<script type="text/javascript" scr="<?php echo base_url(); ?>assets/js/dice.js"></script>


<script>
    document.body.onclick(function(){
        var myVariable = <?php echo(json_encode($myVariable)); ?>;
    };
</script>


</html>
