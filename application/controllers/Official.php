<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Official extends CI_Controller
{
        function index(){

            $this->load->view('frontend/fe_head');
            $this->load->view('frontend/fe_content');
            $this->load->view('frontend/fe_footer');

        }

}