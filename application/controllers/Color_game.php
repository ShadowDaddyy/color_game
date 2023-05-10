<?php   
    class Color_game extends CI_Controller{
        public function index($page = 'start'){
			if(!file_exists(APPPATH.'views/color_game/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('color_game/'.$page, $data);
			$this->load->view('templates/footer');
		}


        public function play(){

			$red = isset($_COOKIE['red']) ? $_COOKIE['red'] : 0;
			$blue = isset($_COOKIE['blue']) ? $_COOKIE['blue'] : 0;
			$cyan = isset($_COOKIE['cyan']) ? $_COOKIE['cyan'] : 0;
			$yellow = isset($_COOKIE['yellow']) ? $_COOKIE['yellow'] : 0;
			$green = isset($_COOKIE['green']) ? $_COOKIE['green'] : 0;
			$magenta = isset($_COOKIE['magenta']) ? $_COOKIE['magenta'] : 0;

			// die($red);

			$random_colors = $this->cg_model->get_colors();

			$this->session->set_flashdata('color1', $random_colors[0]);
			$this->session->set_flashdata('color2', $random_colors[1]);
			$this->session->set_flashdata('color3', $random_colors[2]);

			$point1 = $this->calculate($random_colors[0]);
			$point2 = $this->calculate($random_colors[1]);
			$point3 = $this->calculate($random_colors[2]);

			$points = $point1 + $point2 + $point3;
			$this->session->set_flashdata('points', $points);

			if ($this->session->userdata('total_points')) {
				$currentPoints = $this->session->userdata('total_points');
				$totalPoints = $point1 + $point2 + $point3 + $currentPoints;
			} else {
				$totalPoints = $points;
			}
			
			$this->session->set_userdata('total_points', $totalPoints);

			if ($points > 0) {
				$this->session->set_flashdata('game_status', 'Congratulations');
			} else {
				$this->session->set_flashdata('game_status', 'Better Luck Next Time');
			}

			redirect('/index');

			// die ($random_colors[0].$point1 . " + " . $random_colors[1].$point2 . " + " . $random_colors[2].$point3 . " = " . $totalPoints . " " . $this->session->userdata('game_status'));

        }

		public function calculate($color){
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

		
    }