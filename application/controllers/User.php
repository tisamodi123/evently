<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
public function __construct()
    {
        parent::__construct();
        

        
        $this->load->model("UserM","um");
         //$this->load->model("ClientM","cm");
    }
    
    
    
	public function index()
	{
		if (isset($_SESSION['type2'])) {
			redirect("Project/homeevent");
		} else {
			redirect("User/loadLogin");
		}
	}
           
           

    public function loadReg()
    {
        $temp=[
        "cat"=>$this->um->getAllCity()
    ];
    $this->load->view("eventregister",$temp);
    }
    public function register()
    {
        $where=[
            "username"=>$this->input->post('txtuname')
        ];
        $uinfo=$this->um->loginInfo($where);
        if(count($uinfo)>0)
        {
            $udata=[
                "username"=>$this->input->post('txtuname'),
                "password"=>$this->input->post('txtpwd'),
                "emailid"=>$this->input->post('txtemail'),
                "contactno"=>$this->input->post('txtcontact'),
                "bio"=>$this->input->post('txtbio')

            ];
            $err=[
                "msg"=>"username already exists",
                "cat"=>$this->um->getAllCity(),

                "userdata"=>$udata
            ];
            $this->load->view("eventregister",$err);
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
                "emailid"=>$this->input->post('txtemail'),
                "contactno"=>$this->input->post('txtcontact'),
                "image"=>$img,
                "cityid"=>$this->input->post('cat'),
                   "bio"=>$this->input->post('txtbio')
            ];
            $this->um->insertUser($temp);

            redirect("User/loadLogin");
        }
        
        //$this->load->view("reg2",$temp);   
        //$this->load->view('reg2',["username"=>"tisa","password"=>"123"]);   
    }
    
    public function loadLogin()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $data=[
            "username"=>$this->input->post('txtuname'),
            "password"=>$this->input->post('txtpwd')
        ];





        $userinfo=$this->um->loginInfo($data);
        if(count($userinfo)==0)
        {
            $err=[
                "msg1"=>"invalid username or password"
            ];
            $this->load->view("login",$err);
        }
        else{
                     if($userinfo[0]->status==1)
            {
            $err=[
                "msg"=>"Your account has been Blocked"
            ];
            $this->load->view("login",$err);
            }
        else
        {
            $_SESSION['uname']=$userinfo[0]->username;
            $_SESSION['mid']=$userinfo[0]->eventmanagerid;
            //echo $_SESSION['mid'];

            $_SESSION['profile']=$userinfo[0]->image;
             $_SESSION['default']=$userinfo[0]->default;
            $_SESSION['type2']="Manager";
          // echo $_SESSION['profile'];
            redirect("Project/homeevent");
        }
    }
    }
    //public function logout()
    //{
      //  session_destroy();
        //redirect("User/loadLogin");
    //}

    
    
    public function logout()
    {

        session_destroy();
        redirect("Home/index");
    }
    public function Eventmanagerdesc()
    {
        $this->load->view("eventmangerdesc");
    }
    public function oldeditdata()
    {
        $where=[
            "eventmanagerid"=>$_SESSION["mid"]
        ];

        $temp=[
            "old"=>$this->um->oldevent($where)[0], 
            "cat"=>$this->um->getAllCity(),
            
        ];

       
        $this->load->view("eventedit",$temp);
       

    }

    public function editprofile($id)
    {
        $where=[
           "eventmanagerid"=>$id
        ];
        $uinfo=$this->um->oldevent($where);
        $chk=$_FILES["fup"]["name"];
        if($chk=="")
            $img=$uinfo[0]->image;
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
             "emailid"=>$this->input->post('txtemail'),
                          "contactno"=>$this->input->post('txtcontact'),
                "image"=>$img,
                "cityid"=>$this->input->post('cat'),
                "bio"=>$this->input->post('txtbio'),


        ];

         $this->um->updateevent($where,$data);
        redirect("User/eprofile");
    }
    
public function eprofile()
{


        $temp=[
            "profileinfo"=>$this->um->geteventmoreProfileInfo()[0],
            "cat"=>$this->um->getAllCity(),
              "posts"=>$this->um->getMyPosts(),
           "review"=>$this->um->getPostreview(),
           
            "avg"=>$this->um->avgreview()[0]

        ];
    
     
        $this->load->view("eventprofile",$temp);
       

}
public function edic()
{

    $this->load->view("newpassevent");
}

public function editpwd()
{
    $where=[
           "eventmanagerid"=>$_SESSION["mid"]
        ];
      
        $data=[
             "password"=>$this->input->post('txtpwd'),
       


        ];

         $this->um->updateevent($where,$data);
        redirect("home/index");

}
 
 public function changepwd()
 {
     $where=[
           "eventmanagerid"=>$_SESSION["mid"]
        ];
     $userinfo=$this->um->getprofile($where);
     $chk=$this->input->post("txtcpwd");
        if($chk==$userinfo[0]->password)
        {
            redirect("User/edic");
        }
        else
        {
            $err=[
                "msg"=>"invalid current password"
            ];
        }
            $this->load->view("passevent",$err);
        

 }


}




?>