<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $param["lblformisi"] = "Menu";
        $this->load->view('headerweb');
        $this->load->view('contentweb', $param);
        $this->load->view('footerweb');
    }

    public function menu()
    {
        $param["lblformisi"] = "Menu";
        $this->load->view('headerweb');
        $this->load->view('contentweb', $param);
        $this->load->view('footerweb');
    }

    public function videos()
    {
        $param["lblformisi"] = "Video";
        $this->load->view('headerweb');
        $this->load->view('contentweb', $param);
        $this->load->view('footerweb');
    }

    public function echotest()
    {
        echo base_url();
    }
}
