<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 
class Website extends CI_Controller{ 
    function __construct(){ 
        parent::__construct(); 
    } 
    public function index(){ 
        $data['judul'] = "Website 3B"; 
        $this->load->view('view_header',$data); 
        $this->load->view('view_index',$data);
        $this->load->view('view_footer',$data); 
    } 
    public function tentang(){ 
        $data['judul'] = "Halaman Tentang"; 
        $this->load->view('view_header',$data); 
        $this->load->view('view_tentang',$data);
        $this->load->view('view_footer',$data); 
    } 
    public function kontak(){ 
        $data['judul'] = "Halaman Kontak"; 
        $this->load->view('view_header',$data); 
        $this->load->view('view_kontak',$data);
        $this->load->view('view_footer',$data); 
    } 

}