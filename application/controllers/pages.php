<?php
class Pages extends CI_Controller{
    public function view($page='home'){
        if(!file_exists(APPPATH.'/views/Pages/'.$page.'.php'))
        {
            show_404();
        }
        
        $data['title']=ucfirst($page);
        $this->load->view('Templates/header',$data);
        $this->load->view('Pages/'.$page,$data);
        $this->load->view('Templates/footer',$data);
        
    }
}
