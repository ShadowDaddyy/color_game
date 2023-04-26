<?php   
    class Color_game extends CI_Controller{
        public function index($page = 'index'){
			if(!file_exists(APPPATH.'views/color_game/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('color_game/'.$page, $data);
			$this->load->view('templates/footer');
		}


        public function play(){
            $this->form_validation->set_rules('color', 'Color', 'required');

            if($this->form_validation->run() === TRUE){
				$random_colors = $this->cg_model->get_colors();
				$color = $this->input->post('color');

				$this->session->set_flashdata('color1', $random_colors[0]);
				$this->session->set_flashdata('color2', $random_colors[1]);
				$this->session->set_flashdata('color3', $random_colors[2]);

				$this->session->set_flashdata('chosen_color', $color);

				$win = $this->cg_model->compare_colors($random_colors, $color);
				
				if ($win) {
					$this->session->set_flashdata('game_status', 'YOU WIN');
				} else {
					$this->session->set_flashdata('game_status', 'Better Luck Next Time');
				}
				// die($random_colors[0] . " " . $random_colors[1] . " " . $random_colors[2]);
				redirect('/color_game');

            }else{
                $this->session->set_flashdata('Error', 'Please Choose A Color First');
                redirect('/color_game');
            }
        }
    }