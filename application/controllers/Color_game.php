<?php   
    class Color_game extends CI_Controller{
        public function index($page = 'start'){
			if(!file_exists(APPPATH.'views/color_game/'.$page.'.php')){
				show_404();
			}

			

			$data['title'] = ucfirst($page);


			// $this->session->set_userdata('total_points', 100);
			

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

			
			if ($points > 0) {
				$this->session->set_flashdata('game_status', 'Congratulations!');
			} else {
				$this->session->set_flashdata('game_status', 'Better Luck Next Time');
			}

			$this->update_userdata($points);
			redirect('/index');

			// die ($random_colors[0].$point1 . " + " . $random_colors[1].$point2 . " + " . $random_colors[2].$point3 . " = " . $totalPoints . " " . $this->session->userdata('game_status'));

        }

		public function update_userdata($points) {
			if ($this->session->userdata('total_points')) {
				$currentPoints = $this->session->userdata('total_points');
				$totalPoints = $points + $currentPoints;
				
			} else {
				
				$totalPoints = $points;
			}
			
			$this->session->set_userdata('total_points', $totalPoints);

			

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

		

		public function decrement_userdata() {
			// $userdata_value = $this->session->userdata('total_points');
			// $userdata_value--;
			// $this->session->set_userdata('total_points', $userdata_value);
			// echo $userdata_value;

			// Retrieve the current userdata
			$userdata = $this->session->userdata();

			// Get the new data sent from JavaScript
			$newData = $this->input->post('newData');

			// Update the relevant data in the userdata
			$userdata['key'] = $newData; // Replace 'key' with the actual key in userdata you want to update

			// Save the updated userdata
			$this->session->set_userdata($userdata);

			// Send a response back to the JavaScript function
			$response = ['success' => true]; // Adjust the response based on your requirements
			echo json_encode($response);
		}

		// public function get_count() {
		// 	$this->load->library('session');
		// 	$count = $this->session->userdata('count');
		// 	$this->output->set_content_type('text/plain');
		// 	$this->output->set_output($count);
		// }

		public function eme() {
			// $this->load->library('session');
			// $count = $this->session->userdata('total_points');
			// $this->session->set_userdata('total_points', $count-1);
			// // echo $count;
			$this->get_count();
			$this->decrement();
			echo $this->session->userdata('total_points');
		}

		public function get_count() {
			
			$this->load->library('session');
			$count = $this->session->userdata('total_points');
			// $this->output->set_content_type('text/plain');
			// $this->output->set_output($count);
			// $data = $count;
    		
		}
		
		public function decrement() {
			// echo "decrement";
			$this->load->library('session');
			$count = $this->session->userdata('total_points');
			$this->session->set_userdata('total_points', $count - 1);
			// echo $this->session->userdata('total_points');
		}
    }