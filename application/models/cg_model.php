<?php
    class cg_model extends CI_Model {
        public function get_colors(){
            $colors = array("red", "blue", "cyan", "yellow", "green", "magenta");
			$random_keys = array_rand($colors,3);

            $random_colors = array($colors[$random_keys[0]], $colors[$random_keys[1]], $colors[$random_keys[2]]);

			return $random_colors;
        }

        public function compare_colors($random_colors, $color) {
            if ($color == $random_colors[0] || $color == $random_colors[1] || $color == $random_colors[2]) {
				return true;
			} else {
                return false;
            }
        }
    }

