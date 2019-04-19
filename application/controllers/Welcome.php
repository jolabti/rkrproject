<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $param["lblformisi"] = "Request Kursus";
        $this->load->view('backend/headerweb');
        $this->load->view('backend/contentweb', $param);
        $this->load->view('backend/footerweb');
    }

    public function menu()
    {
        $param["lblformisi"] = "Menu";
        $this->load->view('backend/headerweb');
        $this->load->view('backend/contentweb', $param);
        $this->load->view('backend/footerweb');
    }

    public function videos()
    {
        $param["lblformisi"] = "Video";
        $this->load->view('backend/headerweb');
        $this->load->view('backend/contentweb', $param);
        $this->load->view('backend/footerweb');
    }


    public function visimisi()
    {
        $param["lblformisi"] = "Visi dan Misi";
        $param["lblformisi"] = "Visi dan Misi";
        $param["vm"] = $this->Coremodel->loadVismisi();
        $this->load->view('backend/headerweb');
        $this->load->view('backend/contentvismis', $param);
        $this->load->view('backend/footerweb');
    }

    public function about()
    {
        $param["lblformisi"] = "Tentang";
        $this->load->view('backend/headerweb');
        $this->load->view('backend/contentabout', $param);
        $this->load->view('backend/footerweb');
    }
    
    public function setform($goal)
    {   

        if($goal==""|| !isset($goal)){ 
                redirect('welcome','refresh'); 
        }
        else{ 
            $param["goal"] = $goal ;
            $param["lblformisi"] = "Tambahkan xxxx Anda" ;
            $this->load->view('backend/headerweb');
            $this->load->view('backend/contentform', $param);
            $this->load->view('backend/footerweb');
        }       
    }
    
    public function echotest()
    {
        $param["vm"] = $this->Coremodel->loadVismisi();
    }
    public function echocourse()
    {
        $param["courses"] = $this->Coremodel->modelGetCourse();
        echo json_encode($param);
    }

    public function posting($goal){ 

             $data = array();
             switch($goal){

                   case "followcourse":
                        $data = array(
                                'jncode_dafkus_id'   =>"",
                                'jncode_dafkus_user_id'  =>"1",
                                'jncode_dafkus_tanggal'  =>"",
                                'jncode_dafkus_notes'  =>"Jnangan lupa bermain bola",
                                'jncode_dafkus_jadwal'  =>"1994-08-24",
                                'jncode_dafkus_status'  =>1
                       );
   
                   break;    
                   
                   case "myportofolio":                    
                       $data= array(
                           "porto_id"=>date("ddmmyyyhis"),
                           "porto_name"=>"sdfhisdfhfisdf",
                           "porto_keterangan"=>"sdkjfskjfhsdf",
                           "porto_start"=>date("yyyy"),
                           "porto_end"=>date("yyyy"),
                           "porto_media_photo"=>"dfgdfg",
                           "porto_media_videos"=>"fddg",
                           "porto_status"=>1
                       );
                   
                   break;


                   

             }
             
             $this->Coremodel->modelPostInsertInto($data,$goal);   

    }
}
