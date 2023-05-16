<?php
    class cg_model extends CI_Model {
        public function get_colors(){
            $colors = array("red", "blue", "cyan", "yellow", "green", "magenta");
			// Get 3 random colors from the array
            $random_keys = array_rand($colors,3);
            $random_colors = array($colors[$random_keys[0]], $colors[$random_keys[1]], $colors[$random_keys[2]]);

			return $random_colors;
        }
    }