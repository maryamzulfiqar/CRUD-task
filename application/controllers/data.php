<?php
class data extends CI_Controller{
    function index(){
        $this->load->model('data_model');
      $data=  $this->data_model->all();
      $mdata=array();
      $mdata['data']=$data;
  
        $this->load->view('list', $mdata);
      
    }
    function create(){
        $this->load->model('data_model');
        $this->form_validation->set_rules("p_id", "patinet_id","required");
        $this->form_validation->set_rules("type", "type","required");
        $this->form_validation->set_rules("detection", "detection","required");
        if($this->form_validation->run() == false){
            $this->load->view('create');


        }
     else{
     
        $formArray = array();
        $formArray['p_id'] = $this->input->post('p_id');
        $formArray['type'] = $this->input->post('type');
        $formArray['detection'] = $this->input->post('detection');
        $formArray['date'] = date('Y-m-d');
        $this->data_model->create($formArray);
        $this->session->set_flashdata('success','Record added succesfully!');
        redirect(base_url().'index.php/data/index');

     }

    }


    function edit($pid){
        $this->load->model('data_model');
        $data =  $this->data_model->getPatient($pid);
        $mdata = array();
        $mdata['data']=$data;
      
        $this->form_validation->set_rules("p_id", "patinet_id","required");
        $this->form_validation->set_rules("type", "type","required");
        $this->form_validation->set_rules("detection", "detection","required");
        if($this->form_validation->run()==False){
            $this->load->view('edit',$mdata);

        }
        else{
            $formArray = array();
            $formArray['p_id']=$this->input->post('p_id');
            $formArray['type']=$this->input->post('type');
            $formArray['detection']=$this->input->post('detection');
            $this->data_model->updateData($pid,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/data/index');
        }
    }
    function delete($id){
$this->load->model('data_model');
  $data= $this->data_model->getPatient($id);
if(empty($data)){
    $this->session->set_flashdata('failure','Record not found');
    redirect(base_url().'index.php/data/index');

}
$this->data_model->deleteuser($id);
$this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/data/index');
    }


}
?>