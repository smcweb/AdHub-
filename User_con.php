<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_con extends CI_Controller
{

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->helper(array('form', 'url'));
    // }



    public $db;
    public $form_validation;
    public $Curd_model;
    public $session;


    function apiDemo(){ 

         $request=$this->input->server('REQUEST_METHOD');

        if($request=='POST')
        {
            $inputes['name']=$this->input->post('name');
            $inputes['age']=$this->input->post('age');
            $inputes['mob']=$this->input->post('mob');
           $this->load->model('Curd_model');
           $addnewclient1 = $this->Curd_model->insertdatatest($inputes);
        }

        else
        {
            echo 'method not allowed';
        }
        

        
    




    //    $a=array('name'=>'gova','age'=>27,'mob'=>'8007803727');
    //    print_r($a);
    }

    function index()
    {
        $this->load->model('Curd_model');
        $addnewclient1 = $this->Curd_model->viewData();
        $data1 = array();
        $data1['addnewclient1'] = $addnewclient1;

        $this->load->view('ViewAddnewClientData', $data1);
    }


    function addNewClient()
    {
        $this->load->model('Curd_model');
        // $this->load->helper('url');
        // $this->load->view('AddnewClient.php');


        $this->form_validation->set_rules('brand_name', 'brand_name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('AddnewClient.php');
        } else {



            $data = array();
            //Databse field                       //  form field
            $data['brand_name'] = $this->input->post('brand_name');
            $data['package'] = $this->input->post('package');
            $data['status'] = $this->input->post('status');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['calendar_type'] = $this->input->post('calender');
            $data['mobile_number'] = $this->input->post('mobile');
            $data['alternate_mobile_number'] = $this->input->post('Altmobile');
            $data['address'] = $this->input->post('address');
            $data['state'] = $this->input->post('state');
            $data['district_name'] = $this->input->post('district');
            $data['taluka_name'] = $this->input->post('taluka');
            $data['pin_code'] = $this->input->post('pincode');
            $data['reference_by'] = $this->input->post('reference');
            $data['sales_executive'] = $this->input->post('executive');
            $this->Curd_model->create1($data);

            redirect(base_url().'index.php/User_con/index');
            // $data['useremail'] = $this->input->post('username');
            //  $data['userpassword'] = $this->input->post('password');
            //  $this->Curd_model->create1($data);
        }
    }

    function editData($userData)
    {


        $this->load->model('Curd_model');
        $result = $this->Curd_model->editDataClient($userData);


        $data = array();
        $data['result'] = $result;




        $this->form_validation->set_rules('brand_name', 'brand_name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('EditAddnewClientData', $data);
        } else {


            //Update Client Record

            $data = array();
            //Databse field                       //  form field
            $data['brand_name'] = $this->input->post('brand_name');
            $data['package'] = $this->input->post('package');
            $data['status'] = $this->input->post('status');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['calendar_type'] = $this->input->post('calender');
            $data['mobile_number'] = $this->input->post('mobile');
            $data['alternate_mobile_number'] = $this->input->post('Altmobile');
            $data['address'] = $this->input->post('address');
            $data['state'] = $this->input->post('state');
            $data['district_name'] = $this->input->post('district');
            $data['taluka_name'] = $this->input->post('taluka');
            $data['pin_code'] = $this->input->post('pincode');
            $data['reference_by'] = $this->input->post('reference');
            $data['sales_executive'] = $this->input->post('executive');
            $this->Curd_model->updateData($userData, $data);
            redirect(base_url().'index.php/User_con/index');
            // redirect('ViewAddnewClientData');

        }
    }


    function deleteData($userData) {

        $this->load->model('Curd_model');
        $result = $this->Curd_model->editDataClient($userData);

        if(empty($result)){
            redirect(base_url().'index.php/User_con/index');

        }
        $this->Curd_model->dataDelete($userData);
        redirect(base_url().'index.php/User_con/index');
    }
}
