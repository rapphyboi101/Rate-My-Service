<?php sadlkfjaslkjfsd

class Rating extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Rate_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['ratings'] = $this->Rate_model->getRatings();
        $this->load->view('all_ratings',$data);
    }