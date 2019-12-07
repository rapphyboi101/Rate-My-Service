<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rating extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Rate_model');
        $this->load->model('Backend_model');
        $this->load->library('form_validation');
    }

    public function index2(){
        $data['departments'] = $this->Rate_model->getRows();
        $data['ratings'] = $this->Rate_model->getRatings();
        $this->load->view('all_ratings',$data);
    }

    public function index(){
        $data = array();
        $data['departments'] = $this->Rate_model->getRows();
        $this->load->view('index',$data);
    }

    public function rate_me(){
        $a = $this->input->post('departments');
        $this->session->set_userdata('department',$a);
        $data['department'] = $this->session->userdata('department');
        $this->load->view('ratings',$data);

    }

    public function rate_me_again(){
        $data['department'] = $this->session->userdata('department');
        $this->load->view('ratings', $data);
    }


    public function add_rating(){
            $this->form_validation->set_rules('name', 'Name');
            $this->form_validation->set_rules('points', 'Points', 'required');
            $this->form_validation->set_rules('feedback', 'Feedback');
            
            $a = $this->input->post('a');
            $data['a'] = $a;
            $name = $this->input->post('name');
            $points = $this->input->post('points');
            $feedback = $this->input->post('feedback');

            if($this->form_validation->run() == true){
                $this->Rate_model->add_new_property($points,$feedback,$name,$a);
                $this->load->view('thanks');
                
            }
            else{
                echo '<script>alert("Please select a rating.");</script>';
                redirect('Rating/rate_me_again','refresh');    }
       }

    public function thank(){
        $this->load->view('thanks');
    }

    public function getRate(){
        $data = array();
        $depts = $this->Rate_model->getRows();
        foreach ($depts as $dept){ 
            $a = $dept['dept_id'];
        $data['avgPoints'] = $this->Backend_model->averagePoint($a);
        }
        $this->load->view('backend',$data);

    }

    public function getYear(){
        $data = array();
        $year = $this->input->post('rateYear');
        $data['years'] = $this->Rate_model->getYear();
        $data['a'] = $this->Backend_model->avgACCOUNTING($year);
        $data['b'] = $this->Backend_model->avgAGRI($year);
        $data['c'] = $this->Backend_model->avgANNEX($year);
        $data['d'] = $this->Backend_model->avgASSESOR($year);
        $data['e'] = $this->Backend_model->avgBFP($year);
        $data['f'] = $this->Backend_model->avgBJMP($year);
        $data['g'] = $this->Backend_model->avgBPLO($year);
        $data['h'] = $this->Backend_model->avgBTECH($year);
        $data['i'] = $this->Backend_model->avgBTMO($year);
        $data['j'] = $this->Backend_model->avgBUDGET($year);
        $data['k'] = $this->Backend_model->avgCAO($year);
        $data['l'] = $this->Backend_model->avgCEMETERY($year);
        $data['m'] = $this->Backend_model->avgCOA($year);
        $data['n'] = $this->Backend_model->avgCOMELEC($year);
        $data['o'] = $this->Backend_model->avgCONFERENCE($year);
        $data['p'] = $this->Backend_model->avgDILG($year);
        $data['q'] = $this->Backend_model->avgENGINEERING($year);
        $data['r'] = $this->Backend_model->avgGSO($year);
        $data['s'] = $this->Backend_model->avgHRMO($year);
        $data['t'] = $this->Backend_model->avgIPU($year);
        $data['u'] = $this->Backend_model->avgLCR($year);
        $data['v'] = $this->Backend_model->avgLIBRARY($year);
        $data['w'] = $this->Backend_model->avgMALASAKIT($year);
        $data['x'] = $this->Backend_model->avgMARKET($year);
        $data['y'] = $this->Backend_model->avgMAYORS($year);
        $data['z'] = $this->Backend_model->avgMDRRMO($year);
        $data['aa'] = $this->Backend_model->avgMDRRMO2($year);
        $data['bb'] = $this->Backend_model->avgMEEM($year);
        $data['cc'] = $this->Backend_model->avgMENRO($year);
        $data['dd'] = $this->Backend_model->avgMHO($year);
        $data['ee'] = $this->Backend_model->avgMICTO($year);
        $data['ff'] = $this->Backend_model->avgMLO($year);
        $data['gg'] = $this->Backend_model->avgMPDC($year);
        $data['hh'] = $this->Backend_model->avgMSWDO($year);
        $data['ii'] = $this->Backend_model->avgOSCA($year);
        $data['jj'] = $this->Backend_model->avgPDAO($year);
        $data['kk'] = $this->Backend_model->avgPESO($year);
        $data['ll'] = $this->Backend_model->avgPIO($year);
        $data['mm'] = $this->Backend_model->avgPNP($year);
        $data['nn'] = $this->Backend_model->avgPOL($year);
        $data['oo'] = $this->Backend_model->avgPOPCOM($year);
        $data['pp'] = $this->Backend_model->avgRHU1($year);
        $data['qq'] = $this->Backend_model->avgRHU2($year);
        $data['rr'] = $this->Backend_model->avgRHU3($year);
        $data['ss'] = $this->Backend_model->avgRHU4($year);
        $data['tt'] = $this->Backend_model->avgSB($year);
        $data['uu'] = $this->Backend_model->avgSANITATION($year);
        $data['vv'] = $this->Backend_model->avgSOME($year);
        $data['ww'] = $this->Backend_model->avgSOME2($year);
        $data['xx'] = $this->Backend_model->avgSPORTS($year);
        $data['yy'] = $this->Backend_model->avgTOURISM($year);
        $data['zz'] = $this->Backend_model->avgTOURISM2($year);
        $data['aaa'] = $this->Backend_model->avgTREASURY($year);
        $this->load->view('backend',$data);
    }

    public function wow(){
        $data = array();
        $data['years'] = $this->Rate_model->getYear();
        $data['a'] = $this->Backend_model->avgACCOUNTING();
        $data['b'] = $this->Backend_model->avgAGRI();
        $data['c'] = $this->Backend_model->avgANNEX();
        $data['d'] = $this->Backend_model->avgASSESOR();
        $data['e'] = $this->Backend_model->avgBFP();
        $data['f'] = $this->Backend_model->avgBJMP();
        $data['g'] = $this->Backend_model->avgBPLO();
        $data['h'] = $this->Backend_model->avgBTECH();
        $data['i'] = $this->Backend_model->avgBTMO();
        $data['j'] = $this->Backend_model->avgBUDGET();
        $data['k'] = $this->Backend_model->avgCAO();
        $data['l'] = $this->Backend_model->avgCEMETERY();
        $data['m'] = $this->Backend_model->avgCOA();
        $data['n'] = $this->Backend_model->avgCOMELEC();
        $data['o'] = $this->Backend_model->avgCONFERENCE();
        $data['p'] = $this->Backend_model->avgDILG();
        $data['q'] = $this->Backend_model->avgENGINEERING();
        $data['r'] = $this->Backend_model->avgGSO();
        $data['s'] = $this->Backend_model->avgHRMO();
        $data['t'] = $this->Backend_model->avgIPU();
        $data['u'] = $this->Backend_model->avgLCR();
        $data['v'] = $this->Backend_model->avgLIBRARY();
        $data['w'] = $this->Backend_model->avgMALASAKIT();
        $data['x'] = $this->Backend_model->avgMARKET();
        $data['y'] = $this->Backend_model->avgMAYORS();
        $data['z'] = $this->Backend_model->avgMDRRMO();
        $data['aa'] = $this->Backend_model->avgMDRRMO2();
        $data['bb'] = $this->Backend_model->avgMEEM();
        $data['cc'] = $this->Backend_model->avgMENRO();
        $data['dd'] = $this->Backend_model->avgMHO();
        $data['ee'] = $this->Backend_model->avgMICTO();
        $data['ff'] = $this->Backend_model->avgMLO();
        $data['gg'] = $this->Backend_model->avgMPDC();
        $data['hh'] = $this->Backend_model->avgMSWDO();
        $data['ii'] = $this->Backend_model->avgOSCA();
        $data['jj'] = $this->Backend_model->avgPDAO();
        $data['kk'] = $this->Backend_model->avgPESO();
        $data['ll'] = $this->Backend_model->avgPIO();
        $data['mm'] = $this->Backend_model->avgPNP();
        $data['nn'] = $this->Backend_model->avgPOL();
        $data['oo'] = $this->Backend_model->avgPOPCOM();
        $data['pp'] = $this->Backend_model->avgRHU1();
        $data['qq'] = $this->Backend_model->avgRHU2();
        $data['rr'] = $this->Backend_model->avgRHU3();
        $data['ss'] = $this->Backend_model->avgRHU4();
        $data['tt'] = $this->Backend_model->avgSB();
        $data['uu'] = $this->Backend_model->avgSANITATION();
        $data['vv'] = $this->Backend_model->avgSOME();
        $data['ww'] = $this->Backend_model->avgSOME2();
        $data['xx'] = $this->Backend_model->avgSPORTS();
        $data['yy'] = $this->Backend_model->avgTOURISM();
        $data['zz'] = $this->Backend_model->avgTOURISM2();
        $data['aaa'] = $this->Backend_model->avgTREASURY();
        $this->load->view('backend',$data);
    }

    public function showYear(){

    }

}
