<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
          $this->load->model("ProjectM","pm");

    }
   public function index()
   {
     $temp=[
            "posts"=>$this->pm->geteventmanagerprofile()
          
        ];
    if(isset($_SESSION['type1']))
        {
           $temp=[
             "post"=>$this->pm->getMyPosts(),
             "posts"=>$this->pm->geteventmanagerprofile()
           ];
         }
    
    $this->load->view('home',$temp);   
    
    
   }


   public function loadPost($id)
    {
         $where=[
            "p.projectid"=>$id

        ];

         

        $temp=[
            "pinfo"=>$this->pm->getPostInfo($where)[0],
            "description"=>$this->pm->getPostbid(["projectid"=>$id]),
               "cat"=>$this->pm->getAllCity(),

                "cate"=>$this->pm->getAllcategory(),
                "post"=>$this->pm->myEventAllimage($where),
                "videos"=>$this->pm->myEventAllvideo($where),
                            // "test"=>$this->pm->countbid($tisa)

        ];
       
        $this->load->view("eventmangerdesc",$temp);
    }
  
    public function logout()
    {

        session_destroy();
        redirect("home/index");
    }
    
}
?>