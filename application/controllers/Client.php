<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller 
{
public function __construct()
    {
        parent::__construct();
        
         $this->load->model("ClientM","cm");
    }
    
    
    
	public function index()
	{
		if (isset($_SESSION['type1'])) {
			redirect("Home/index");
		} else {
			redirect("Client/loadLogin2");
		}
	}
    
    
    public function loadReg2()
    {
        
            $temp=[
                "cat"=>$this->cm->getAllCity()
            ];
            $this->load->view("clientreg",$temp);
    }
    
    public function register2()
    {
        $where=[
            "username"=>$this->input->post('txtuname')
        ];
        $uinfo=$this->cm->loginInfo($where);
        if(count($uinfo)>0)
        {
            $cdata=[
                "username"=>$this->input->post('txtuname'),
                "password"=>$this->input->post('txtpwd'),
                "email"=>$this->input->post('txtemail'),
                "contactno"=>$this->input->post('txtcontact'),
                "bio"=>$this->input->post('txtbio')
                

            ];
            $err=[
                "msg"=>"username already exists",
                "cat"=>$this->cm->getAllCity(),
                "clientdata"=>$cdata

            ];
            $this->load->view("clientreg",$err);
        }
        else
        {
            $img = !empty($_FILES["fup"]["name"]) ? uniqid() . basename($_FILES["fup"]["name"]) : "default.png";
            $target_dir = FCPATH . "resources/media/images/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            if (!empty($_FILES["fup"]["tmp_name"])) {
                move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
            }
            $temp=[

                "username"=>$this->input->post('txtuname'),
                "password"=>$this->input->post('txtpwd'),
                "email"=>$this->input->post('txtemail'),
                "contactno"=>$this->input->post('txtcontact'),
                "profilepic"=>$img,
                "cityid"=>$this->input->post('cat'),
                "bio"=>$this->input->post('txtbio')
                
            ];
            $this->cm->insertUser($temp);
            redirect("Client/loadLogin2");
        }
        
        //$this->load->view("reg2",$temp);   
        //$this->load->view('reg2',["username"=>"tisa","password"=>"123"]);   
    }
    
    
    
    //client
    public function loadLogin2()
    {
        $this->load->view('clientlogin');
    }
    public function login2()
    {
        $data=[
            "username"=>$this->input->post('txtuname'),
            "password"=>$this->input->post('txtpwd')
        ];
 
        $userinfo=$this->cm->loginInfo($data);
        if(count($userinfo)==0)
        {
            $err=[
                "msg1"=>"invalid username or password"
            ];
            $this->load->view("clientlogin",$err);
        }

        
            else{
                     if($userinfo[0]->status==1)
            {
            $err=[
                "msg"=>"Your account has been Blocked"
            ];
            $this->load->view("clientlogin",$err);
            }
        else{
                            
            $_SESSION['uname']=$userinfo[0]->username;
           // $_SESSION['uid']=$userinfo[0]->userid;
           $_SESSION['uid']=$userinfo[0]->clientid;
           $_SESSION['profile']=$userinfo[0]->profilepic;
                        $_SESSION['default']=$userinfo[0]->default;
            $_SESSION['type1']="Client";

            redirect("home/index");
       }
     }   
    }
    // public function logout2()
    // {
    //     session_destroy();
    //     redirect("Client/loadLogin2");
    // }
    public function logout()
    {

        session_destroy();
        redirect("Home/index");
    }
    
    public function oldeditdata()
    {
        $where=[
            "clientid"=>$_SESSION["uid"]
        ];

        $temp=[
            "old"=>$this->cm->oldclient($where)[0], "cat"=>$this->cm->getAllCity(),
            
        ];

       
        $this->load->view("clientedit",$temp);
       

    }

    public function editprofile($id)
    {
        $where=[
           "clientid"=>$id
        ];
        $uinfo=$this->cm->oldclient($where);
        $chk=$_FILES["fup"]["name"];
        if($chk=="")
            $img=$uinfo[0]->profilepic;
        else
        {
            $img=uniqid().basename($_FILES["fup"]["name"]);
            $target_dir = FCPATH . "resources/media/images/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
        }
        $data=[
             "username"=>$this->input->post('txtname'),
             "email"=>$this->input->post('txtemail'),
                          "contactno"=>$this->input->post('txtcontact'),
                "profilepic"=>$img,
                "cityid"=>$this->input->post('cat'),
                "bio"=>$this->input->post('txtbio'),


        ];

         $this->cm->updateclient($where,$data);
        redirect("home/index");
    }

public function cprofile()
{

        $temp=[
            "profileinfo"=>$this->cm->clientinfo()[0],
            "cat"=>$this->cm->getAllCity()
            

        ];
    
     
        $this->load->view("clientprofile",$temp);
       

}
public function edic()
{

    $this->load->view("newpassclient");
}

public function editpwd()
{
    $where=[
           "clientid"=>$_SESSION["uid"]
        ];
      
        $data=[
             "password"=>$this->input->post('txtpwd'),
       


        ];

         $this->cm->updateclient($where,$data);
        redirect("home/index");

}
 
 public function changepwd()
 {
     $where=[
           "clientid"=>$_SESSION["uid"]
        ];
     $userinfo=$this->cm->getprofile($where);
     $chk=$this->input->post("txtcpwd");
        if($chk==$userinfo[0]->password)
        {
            redirect("Client/edic");
        }
        else
        {
            $err=[
                "msg"=>"invalid current password"
            ];
        }
            $this->load->view("passclient",$err);
        

 }


}




?>