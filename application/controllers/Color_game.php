<?php   
    class Color_game extends CI_Controller{
        public function index($page = 'start'){
			if(!file_exists(APPPATH.'views/color_game/'.$page.'.php')){
				show_404();
			}

			// Set the initial 'Avaiable Points' value for the game
			// $this->session->set_userdata('total_points', 10); //Comment this line after loading page

			$data['title'] = ucfirst($page);			

			$this->load->view('templates/header');
			$this->load->view('color_game/'.$page, $data);
			$this->load->view('templates/footer');
		}

        public function play(){
			// Get 3 random colors for each dice
			$random_colors = $this->cg_model->get_colors();

			// Store the results
			$this->session->set_flashdata('color1', $random_colors[0]);
			$this->session->set_flashdata('color2', $random_colors[1]);
			$this->session->set_flashdata('color3', $random_colors[2]);

			// For each randomly selected color
			// Calculate the points earned
			$point1 = $this->calculate($random_colors[0]);
			$point2 = $this->calculate($random_colors[1]);
			$point3 = $this->calculate($random_colors[2]);

			$points = $point1 + $point2 + $point3;
			$this->session->set_flashdata('points', $points);
			
			if ($points > 0) {
				// User wins
				$this->session->set_flashdata('game_status', 'Congratulations!');
			} else {
				$this->session->set_flashdata('game_status', 'Better Luck Next Time');
			}

			if ($this->session->userdata('total_points')) {
				$currentPoints = $this->session->userdata('total_points');
				$totalPoints = $points + $currentPoints;
			} else {
				$totalPoints = $points;
			}
			
			$this->session->set_userdata('total_points', $totalPoints);

			redirect('/index');
        }

		public function calculate($color){
			// Multiply random_color[i] by the number of bets placed for that color
			switch ($color) {
				case "red":
					$point = $_COOKIE['red'] * 2;
					break;
				case "blue": 
					$point = $_COOKIE['blue'] * 2;
					break;
				case "cyan": 
					$point = $_COOKIE['cyan'] * 2;
					break;
				case "yellow": 
					$point = $_COOKIE['yellow'] * 2;
					break;
				case "green":
					$point = $_COOKIE['green'] * 2;
					break;
				case "magenta":
					$point = $_COOKIE['magenta'] * 2;
					break;
				default: 
					echo "N/A";
			}
			return $point;
		}

		public function update_points() {
			// Get the current Total Points
			$count = $this->session->userdata('total_points');
			// Decrement the points
			$this->session->set_userdata('total_points', $count - 1);
			// Display updated points
			echo $this->session->userdata('total_points');
		}
    }