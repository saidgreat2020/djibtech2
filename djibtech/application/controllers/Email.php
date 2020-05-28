<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }
    
 
 
    function send() {
        $email_config['mailtype'] = 'html';

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'djibtech2019@gmail.com',
            'smtp_pass' => 'saidmola2019',
            'smtp_crypto' => 'tls',
            'mailtype'  => 'html',  
            'charset'   => 'iso-8859-1',
            'newline' => '\r\n',
            'crlf' => '\n',
            'wordwrap' => TRUE
          


            
        );
       
      

      $message = '';
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
  //    $this->email->from('said-ali-omar2011@hotmail.fr'); // change it to yours
      $ok=$this->input->post("to");
      $this->email->from($this->input->post("to") , $ok);
      $this->email->to('djibtech2019@gmail.com');// change it to yours
      $this->email->subject($this->input->post("subject"));
      $this->email->message($this->input->post("message") );
      if($this->email->send())
     {
      
      //  echo 'Email sent.';

     // $this->session->set_flashdata('success', 'email has been  sent   successufly ');

     $retour= array(
        'success'=>1,
        'message'=>'votre email a ete envoyé avec  succé ',
        'data'=>array()
    );

    echo json_encode($retour);
    
        }
     else
    {
    
    //    show_error($this->email->print_debugger());
  
  //  $this->session->set_flashdata('error', 'message has not been send');

   //  echo json_encode(array("sent"=>FALSE));
 
   $retour= array(
    'success'=>0,
    'message'=>'l envoi de l email a  echoué ',
    'data'=>array()
);
 
  echo json_encode($retour);

    }

 //   redirect(site_url('accueil'));
   

}

  

}