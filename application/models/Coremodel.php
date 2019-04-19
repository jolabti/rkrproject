<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coremodel extends CI_Model
{
    public function loadVismisi()
    {
        $this->db->where("proper_id", "pro_misi");
        $this->db->or_where("proper_id", "pro_visi");
        $this->db->or_where("proper_id", "pro_slogan");

        return $this->db->get("rkr_properties")->result();
    }

    public function detailVisimisi($idProper)
    {
        $this->db->where("proper_id", $idProper);
        return $this->db->get("rkr_properties")->row();
    }


    public function updateProperties($idProper, $value)
    {
        $data =
         array(
                   'proper_isi' => $value
            );

        $this->db->where('proper_id', $idProper);
        $this->db->trans_start();
        $this->db->update('rkr_properties', $data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            echo "Failed Update";
        } else {
            echo "Update Done ....";
        }
    }

    public function modelGetCourse(){
        return $this->db->get("jncode_course")->result();
    }

    public function modelPostInsertInto($data=array(),$goal){


            switch($goal){
                case "followcourse":
                    $this->db->trans_start();
                    $this->db->insert('jncode_dafkus', $data);
                    $this->db->trans_complete();
                    echo json_encode($data);
                    //echo json_encode($this->encrypt->encode("bareksa.com"));
                break;

                case "myportofolio":
                    $this->db->trans_start();
                    $this->db->insert('jncode_porto', $data);
                    $this->db->trans_complete();
                    echo json_encode($data);
                break;
            }

          

    }
}
