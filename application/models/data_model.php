<?php
class data_model extends CI_model{
    function create($formArray){
        $this->db->insert('patient_record', $formArray);
    }
    function all(){
      return $data = $this->db->get('patient_record')->result_array();

    }

    function getPatient($pid){
        $this->db->where('id', $pid);
       return $data = $this->db->get('patient_record')->row_array();
    }
    function updateData($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('patient_record', $formArray);
    }
    function deleteuser($id){
        $this->db->where('id',$id);
        $this->db->delete('patient_record');
    }
 
}
?>