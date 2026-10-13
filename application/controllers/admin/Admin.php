<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->model("admin/DisplayM","dm");
    }

	public function index()
	{
		$this->load->view('admin/blank');
	}
	public function userdisplay()
	{
		$temp=[
            "post"=>$this->dm->displayclient(),
            "cat"=>$this->dm->getAllCity()
 
        ];
     
		$this->load->view('admin/userdisplay',$temp);
	}
  public function unblockuser($uid)
    {
        $data=[
            "status"=>0
        ];
        $where=[
            "clientid"=>$uid
        ];
          $this->dm->updateuser($where,$data);
          redirect("admin/Admin/userdisplay");
    }
    public function blockuser($uid)
    {
        $data=[
            "status"=>1
        ];
        $where=[
            "clientid"=>$uid
        ];
          $this->dm->updateuser($where,$data);
          redirect("admin/Admin/userdisplay");
    }
	public function eventmanagerdisplay()
	{
		$temp=[
            "post"=>$this->dm->displayeventmanager(),
            "cat"=>$this->dm->getAllCity()

        ];
     
		$this->load->view('admin/eventdisplay',$temp);
	}
		public function citydisplay()
	{
		$temp=[
            "post"=>$this->dm->displaycity(),
            "st"=>$this->dm->getAllstate(),


        ];
     
		$this->load->view('admin/citydisplay1',$temp);
	}
		public function statedisplay()
	   {
		$temp=[
            "post"=>$this->dm->getAllstate(),
            
        ];
     
		$this->load->view('admin/statedisplay1',$temp);
	   }
		public function categorydisplay()
	{
		$temp=[

            "post"=>$this->dm->getAllcategory()
 

        ];

		$this->load->view('admin/categorydisplay1',$temp);
	}
public function categoryadd()
    {
        $temp=[

             "categoryname"=>$this->input->post('txtcat'),
      

        ];
        $this->dm->insertcategory($temp);
        redirect("admin/Admin/categorydisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
    public function categoryremove($id)
    {
        $where=[

             "categoryid"=>$id
      

        ];
        $this->dm->deletecategory($where);
        redirect("admin/Admin/categorydisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
    public function olddata($id)
    {
        $where=[
            "categoryid"=>$id
        ];

        $temp=[
            "old"=>$this->dm->oldcat($where)[0],
            "post"=>$this->dm->getAllcategory()
        ];

       
        $this->load->view("admin/categorydisplay1",$temp);
       

    }

    public function editcat($id)
    {
        $where=[
           "categoryid"=>$id
        ];

        $data=[
             "categoryname"=>$this->input->post('txtcat'),
        ];

        $this->dm->updatecat($where,$data);
        redirect("admin/Admin/categorydisplay");
    }
    public function stateadd()
    {
        $temp=[

             "statename"=>$this->input->post('txtstate'),

      

        ];
        $this->dm->insertstate($temp);
        redirect("admin/Admin/statedisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
     public function stateremove($id)
    {
        $where=[

             "stateid"=>$id
      

        ];
        $this->dm->deletestate($where);
        redirect("admin/Admin/statedisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
    public function olddatast($id)
    {
        $where=[
            "stateid"=>$id
        ];

        $temp=[
            "old"=>$this->dm->oldst($where)[0],
            "post"=>$this->dm->getAllstate(),
            //"st"=>$this->dm->getAllstate()
        ];

       
        $this->load->view("admin/statedisplay1",$temp);
       

    }

    public function editst($id)
    {
        $where=[
           "stateid"=>$id
        ];

        $data=[
             "statename"=>$this->input->post('txtst'),
        ];

        $this->dm->updatest($where,$data);
        redirect("admin/Admin/statedisplay");
    }
    public function allcity($id)
    {
            $where=[
            "stateid"=>$id

        ];
        $temp=[
            //"pinfo"=>$this->dm->getPostInfoem($where)[0],
                        "posts"=>$this->dm->getMycity(["c.stateid"=>$id]),
            "cat"=>$this->dm->getAllCity()


        ];
        $this->load->view('admin/mycity',$temp);
    }
     
    public function cityadd()
    {
        $temp=[

             "cityname"=>$this->input->post('txtcity'),
             "stateid"=>$this->input->post('st')
      

        ];
        $this->dm->insertcity($temp);
        redirect("admin/Admin/citydisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
    public function cityremove($id)
    {
        $where=[

             "cityid"=>$id
      

        ];
        $this->dm->deletecity($where);
        redirect("admin/Admin/citydisplay");
        //$this->load->view('admin/categorydisplay',$temp);
    }
     public function olddatacity($id)
    {
        $where=[
            "cityid"=>$id
        ];

        $temp=[
            "old"=>$this->dm->oldcity($where)[0],
            "post"=>$this->dm->displaycity(),
           "st"=>$this->dm->getAllstate()

        ];

       
        $this->load->view("admin/citydisplay1",$temp);
       

    }

    public function editcity($id)
    {


        $where=[
           "cityid"=>$id,

        ];

        $data=[
             "cityname"=>$this->input->post('txtcity'),
                            "stateid"=>$this->input->post('st'),
  
        ];

        $this->dm->updatecity($where,$data);
        redirect("admin/Admin/citydisplay");
    }
 public function loadLogin()
    {
        $this->load->view('admin/adminlogin');
    }
    public function login()
    {
        $data=[
            "username"=>$this->input->post('txtuname'),
            "password"=>$this->input->post('txtpwd')
        ];





        $userinfo=$this->dm->loginInfo($data);
        if(count($userinfo)==0)
        {
            $err=[
                "msg"=>"invalid username or password"
            ];
            $this->load->view("admin/adminlogin",$err);
        }
        else
        {
            $_SESSION['uname']=$userinfo[0]->username;
            $_SESSION['aid']=$userinfo[0]->adminid;
            $_SESSION['type']="admin";

            $_SESSION['profile']=$userinfo[0]->profilepic;
            
            redirect("admin/Admin/index");
        }
    }
      public function logout()
    {

        session_destroy();
        redirect("admin/Admin/index");
    }
    public function projectdisplay()
    {
        $temp=[
            "post"=>$this->dm->displayproject(),
            "cat"=>$this->dm->getAllCity(),
            "cate"=>$this->dm->getAllcategory()

        ];
     
        $this->load->view('admin/projectdisplay',$temp);
    }
     public function reviewdisplay()
    {
        $temp=[
            "post"=>$this->dm->displayreview()

        ];
     
        $this->load->view('admin/reviewdisplay',$temp);
    }
 public function complaintdisplay()
    {
        $temp=[
            "post"=>$this->dm->displaycomplaint()

        ];
     
        $this->load->view('admin/complaintdisplay',$temp);
    }

    //moreinfo client   
    public function moreinfo($id)
    {
            $where=[
            "clientid"=>$id

        ];
        $temp=[
            "pinfo"=>$this->dm->getPostInfo($where)[0],     
             "posts"=>$this->dm->getMyPosts(["p.clientid"=>$id]),
            "cat"=>$this->dm->getAllCity(),

                "cate"=>$this->dm->getAllcategory()

        ];
        $this->load->view('admin/moreinfoclient',$temp);
    }
    
    public function moreinfoevent($id)
    {
            $where=[
            "eventmanagerid"=>$id

        ];
        $temp=[
            "pinfo"=>$this->dm->getPostInfoem($where)[0],
                        "posts"=>$this->dm->getMyeventPosts(["p.eventmanagerid"=>$id]),
            "cat"=>$this->dm->getAllCity(),
             "review"=>$this->dm->getPostreview(["e.eventmanagerid"=>$id])


        ];
        $this->load->view('admin/moreinfoeventmanager',$temp);
    }
     
     public function moreinfoproject($id)
    {
            $where=[
            "projectid"=>$id

        ];
        $temp=[
            "pinfo"=>$this->dm->getPostInfop($where)[0],
            "cat"=>$this->dm->getAllCity(),
            "cate"=>$this->dm->getAllcategory(),
            "mybid"=>$this->dm->getMybids(["p.projectid"=>$id])


        ];
        $this->load->view('admin/moreinfoproject',$temp);
    }
    public function profile()
    {


        $temp=[
                        "post"=>$this->dm->getprofile(),
            "client"=>$this->dm->displayclient(),
            "cat"=>$this->dm->getAllCity()

        ];
     
        $this->load->view('admin/adminprofile',$temp);
    }
    
       public function oldeditdata($id)
    {
        $where=[
            "adminid"=>$id
        ];

        $temp=[
            "old"=>$this->dm->oldadmin($where)[0]
            
        ];

       
        $this->load->view("admin/adminedit",$temp);
       

    }

    public function editprofile($id)
    {
        $where=[
           "adminid"=>$id
        ];
        $uinfo=$this->dm->oldadmin($where);
        $chk=$_FILES["fup"]["name"];
        if($chk=="")
            $img=$uinfo[0]->profilepic;
        else
        {
            $img = uniqid() . basename($_FILES["fup"]["name"]);
            $target_dir = FCPATH . "resources/media/images/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            if (!empty($_FILES["fup"]["tmp_name"])) {
                move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
            }
        }
        $data=[
             "username"=>$this->input->post('txtname'),
             "email"=>$this->input->post('txtemail'),
                "profilepic"=>$img,
             "contactno"=>$this->input->post('txtphone'),

        ];

        $this->dm->updateadmin($where,$data);
        redirect("admin/Admin/profile");
    }
    public function edic()
{

    $this->load->view("admin/newpassadmin");
}

public function editpwd()
{
    $where=[
           "adminid"=> $_SESSION['aid']
        ];
      
        $data=[
             "password"=>$this->input->post('txtpwd'),
       


        ];

         $this->dm->updateadmin($where,$data);
            redirect("admin/Admin/index");

}
 
 public function changepwd()
 {
     $where=[
           "adminid"=>$_SESSION['aid']
        ];
     $userinfo=$this->dm->getprofile1($where);
     $chk=$this->input->post("txtcpwd");
        if($chk==$userinfo[0]->password)
        {
            redirect("Admin/admin/edic");
        }
        else
        {
            $err=[
                "msg"=>"invalid current password"
            ];
        }
            $this->load->view("admin/passadmin",$err);
        

 }

    public function postdisplay()
    {
        $temp=[
            "post"=>$this->dm->displaypost(),
            "cat"=>$this->dm->getAllCity()

        ];
     
        $this->load->view('admin/postdisplay',$temp);
    }
    public function moreinfopost($id)
    {
            $where=[
            "postid"=>$id

        ];
        $temp=[
            "pinfo"=>$this->dm->getPostInfopost($where)[0],
            "cat"=>$this->dm->getAllCity(),
            "cate"=>$this->dm->getAllcategory()


        ];
        $this->load->view('admin/moreinfopost',$temp);
    }
   
     public function unblockeventmanager($mid)
    {
        $data=[
            "status"=>0
        ];
        $where=[
            "eventmanagerid"=>$mid
        ];
          $this->dm->updateeventmanager($where,$data);
          redirect("admin/Admin/eventmanagerdisplay");
    }
    public function blockeventmanager($mid)
    {
        $data=[
            "status"=>1
        ];
        $where=[
            "eventmanagerid"=>$mid
        ];
          $this->dm->updateeventmanager($where,$data);
          redirect("admin/Admin/eventmanagerdisplay");
    }
    public function adminhome()
    {
          
        $temp=[
            "allcity"=>$this->dm->getAllCity(),
            "allstate"=>$this->dm->getAllstate(),
            "allcategory"=>$this->dm->getAllcategory(),
            "allclient"=>$this->dm->displayclient(),
            "alleventmanager"=>$this->dm->displayeventmanager(),
            "allprojects"=>$this->dm->displayproject(),
            "allposts"=>$this->dm->displaypost(),
            "review"=>$this->dm->displayreview(),
        ];
        $this->load->view('admin/homeadmin',$temp);
    }
   
}
?>