<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{   
    var $response = array();

    public function setvismis()
    {
        echo json_encode($this->Coremodel->loadVismisi());
    }



    public function review($purpose, $idProper)
    {
        if ($purpose=="vismis") {
            echo json_encode($this->Coremodel->detailVisimisi($idProper));
        }
        //echo base_url();
    }


    public function update($purpose)
    {
        switch ($purpose) {
                case "vismis":

                

                $idProper = array();
                $isiProper = array();


                array_push($idProper, "pro_visi");
                array_push($idProper, "pro_misi");
                array_push($idProper, "pro_slogan");


                array_push($isiProper, $this->input->post("pro_visi"));
                array_push($isiProper, $this->input->post("pro_misi"));
                array_push($isiProper, $this->input->post("pro_slogan"));


                for ($iter=0;$iter<sizeof($idProper);$iter++) {
                    $this->Coremodel->updateProperties($idProper[$iter], $isiProper[$iter]);
                    echo "idProper========>".$idProper[$iter];
                    echo "isiProper========>".$isiProper[$iter];
                }
                redirect('welcome/visimisi');
                break;

                case "about":
                    $this->Coremodel->updateProperties($idProper);

                break;
 


            }

            
    }


    function postCourse(){

        $this->db->trans_start();
        
        $data = array(

                "course_id"=>"",
                "course_name"=>$this->input->post("coursename"),
                "course_notes"=>$this->input->post("coursenotes"),
                "course_status"=>1,

        );

        $this->db->insert("jncode_course", $data);
        $this->db->trans_complete();
       
        if ($this->db->trans_status() === FALSE) {
            $response = array("message"=>"gagal posting");
        } else {
            // do whatever you want to do on query success
            $response = array("message"=>"berhasil");
        }

        echo json_encode($response);
    }
    
    
    function postPortofolio(){

        $this->db->trans_start();
        
        $data = array(

                "porto_id"=>"",
                "porto_name"=>$this->input->post("coursename"),
                "porto_keterangan"=>$this->input->post("coursenotes"),
                "porto_period"=>1,
                "porto_start"=>$this->input->post('portostart'),               
                "porto_end"=>$this->input->post('portoend'),
                "porto_media_photo"=>$this->input->post('portomedphoto'),
                "porto_media_videos"=>$this->input->post('portomedvideo'),
                "porto_status"=>1,
        

        );

        $this->db->insert("jncode_course", $data);
        $this->db->trans_complete();
       
        if ($this->db->trans_status() === FALSE) {
            $response = array("message"=>"gagal posting");
        } else {
            // do whatever you want to do on query success
            $response = array("message"=>"berhasil");
        }

        echo json_encode($response);
    }


    // public function update($idProper)
    // {
    //     $this->Coremodel->updateProperties($idProper);
    // }
}
