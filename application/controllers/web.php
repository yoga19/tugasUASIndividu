<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
    public function index(){
        $data['title'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('view_home');
        $this->load->view('footer');
    }
    
    public function produk1(){
        $data['title'] = "ASUS A53SV";        
        $this->load->view('view_produk1',$data);
        $this->load->view('footer');
    }
    
      public function produk2(){
        $data['title'] = "ASUS LAMBORGHINI";        
        $this->load->view('view_produk2',$data);
        $this->load->view('footer');
    }
      public function produk3(){
        $data['title'] = "ASUS N3SL";        
        $this->load->view('view_produk3',$data);
        $this->load->view('footer');
    }
       public function produk(){
        $data['title'] = "PRODUK";  
        $this->load->view('header', $data);      
        $this->load->view('view_produk');
        $this->load->view('footer');
    }
    
    public function contact(){
        $data['title'] = "Contact";
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
    
    public function message(){
        $data['title'] = "Contact";
        $this->load->view('header', $data);
        $info['nama'] = $this->input->post('tNama');
        $info['email'] = $this->input->post('tEmail');
        $this->load->view('view_message',$info);
        $this->load->view('footer');
    }
}