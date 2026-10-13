<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clienthome extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //if(!isset($_SESSION['uname']))
        //redirect("User/loadLogin2");
    }
   public function index()
   {
    $this->load->view('home');   
    //echo $_SESSION['uname'];
   }
}
?>