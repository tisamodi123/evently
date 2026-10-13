<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 

class Project extends CI_Controller

{
    public function __construct()

    {

        parent::__construct();

        $this->load->model("ProjectM","pm");

         //$this->load->model("ClientM","cm");

    }
    public function index()

    {
        $this->load->view('home');  

    }

    public function loadProject()

    {

        $temp=[

                "cat"=>$this->pm->getAllCity(),

                "cate"=>$this->pm->getAllcategory()

            ];

        $this->load->view('projectreg',$temp);

    }

   

   

    public function project()

    {
        $img = !empty($_FILES["fup"]["name"]) ? uniqid() . basename($_FILES["fup"]["name"]) : "cover.jpg";
        $target_dir = FCPATH . "resources/media/images/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        if (!empty($_FILES["fup"]["tmp_name"])) {
            move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
        }

            $data=[

           

                 "title"=>$this->input->post('txtprojecttitle'),

                "description"=>$this->input->post('txtdesc'),

                "clientid"=>$_SESSION['uid'],

                "coverpage"=>$img,

                "budget"=>$this->input->post('txtbudget'),

                "eventdatetime"=>$this->input->post('datetime'),

                "categoryid"=>$this->input->post('cate'),

                       "cityid"=>$this->input->post('cat'),

                "actionstartdate"=>$this->input->post('sdate')  

            

 

            ];

            $this->pm->insertProject($data);

            redirect("Project/myPosts");
    }
     public function myPosts()
    {
         $projects=$this->pm->getMyPosts();
        if($this->input->post('btnsearch'))
        {
            $where=[];
            if($this->input->post("txtcity")!=-1)
            {
                $where["p.cityid"]=$this->input->post("txtcity");
            }
            if($this->input->post("txtcate")!=-1)
            {
                $where["p.categoryid"]=$this->input->post("txtcate");
            }

                     

            $projects=$this->pm->getMyPosts($where);
        }

        $temp=[
            "posts"=>$projects,
            "cat"=>$this->pm->getAllCity(),

                "cate"=>$this->pm->getAllcategory()
        ];
        $this->load->view("clientpost",$temp);
    }
    public function Explore()
   {

        $projects=$this->pm->getAllPosts();
        if($this->input->post('btnsearch'))
        {
            $where=[];
            if($this->input->post("txtcity")!=-1)
            {
                $where["p.cityid"]=$this->input->post("txtcity");
            }
            if($this->input->post("txtcate")!=-1)
            {
                $where["p.categoryid"]=$this->input->post("txtcate");
            }

                     

            $projects=$this->pm->getAllPosts($where);
        }
        $temp=[
            "posts"=>$projects,
            "cat"=>$this->pm->getAllCity(),
            "cate"=>$this->pm->getAllcategory(),
            // "mysave"=>$this->pm->getMysavepost(["projectid"=>$id,"eventmanagerid"=>$_SESSION['mid']])
        ];
    $this->load->view("explore",$temp);

   }



public function eventsavepost($id)
{
    $data=[
        "projectid"=>$id,
        "eventmanagerid"=>$_SESSION['mid']

    ];
    // $temp=[
    //     "mysave"=>$this->pm->getMysavepost(["projectid"=>$id,"eventmanagerid"=>$_SESSION['mid']])
    // ];
    $this->pm->eventssavepost($data);
    //print_r($data);
    //echo "hello";
    redirect("Project/loadPost/$id");
}
 public function eventunsavepost($id)
    {
        $where=[
             "projectid"=>$id

        ];
        $this->pm->unsavepost($where);
        redirect("Project/mysaveposts");
    }
 
   public function loadPost($id)
    {
        $where = [
            "p.projectid" => $id
        ];
        $pinfo_list = $this->pm->getPostInfo($where);
        if (empty($pinfo_list)) {
            redirect("Home/index");
            return;
        }

        $min_bid = null;
        $test = [];
        $mysave = [];

        if (isset($_SESSION['type2'])) {
            $tisa = [
                "b.projectid" => $id,
                "b.eventmanagerid" => $_SESSION['mid']
            ];
            $mitali = [
                "b.eventmanagerid" => $id
            ];
            $data = [
                "projectid" => $id,
                "eventmanagerid" => $_SESSION['mid']
            ];
            $min_bid_res = $this->pm->minbid($mitali);
            $min_bid = !empty($min_bid_res) ? $min_bid_res[0] : null;
            $test = $this->pm->countbid($tisa);
            $mysave = $this->pm->mysave($data);
        }

        $temp = [
            "pinfo" => $pinfo_list[0],
            "description" => $this->pm->getPostbid(["projectid" => $id]),
            "cat" => $this->pm->getAllCity(),
            "cate" => $this->pm->getAllcategory(),
            "post" => $this->pm->myEventAllimage($where),
            "videos" => $this->pm->myEventAllvideo($where),
            "test" => $test,
            "min" => $min_bid,
            "mysave" => $mysave
        ];

        $this->load->view("eventmangerdesc", $temp);
    }
    
    public function loadimage($id)
    {
        $img = uniqid() . basename($_FILES["fup"]["name"]);
        $target_dir = FCPATH . "resources/media/images/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        if (!empty($_FILES["fup"]["tmp_name"])) {
            move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
        }

            $data=[
                "projectid"=>$id,
                "imageurl"=>$img
            ];

            $this->pm->insertimage($data);
//print_r($data);
         redirect("Project/loadPost/$id");
    }
      public function removeimage($id,$pid)
        {
        $where=[
            "projectimageid"=>$id,
            "projectid"=>$pid
        ];
        $this->pm->deleteimage($where);
        redirect("Project/loadpost/$pid");
    }
    public function loadvideo($id)
    {
        $img = uniqid() . basename($_FILES["fup"]["name"]);
        $target_dir = FCPATH . "resources/media/videos/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        if (!empty($_FILES["fup"]["tmp_name"])) {
            move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
        }

            $data=[
                "projectid"=>$id,
                "videourl"=>$img
            ];

            $this->pm->insertvideo($data);
//print_r($data);
         redirect("Project/loadPost/$id");
    }
     public function removevideo($id,$pid)
        {
        $where=[
            "projectvideoid"=>$id,
            "projectid"=>$pid
        ];
        $this->pm->deletevideo($where);
        redirect("Project/loadpost/$pid");
    }
   
    

      public function addbid($id)
    {
        
        $data=[
            "projectid"=>$id,
            "eventmanagerid"=>$_SESSION['mid'],

            "price"=>$this->input->post("txtprice"),
            "description"=>$this->input->post("txtdesc")
        ];
        $this->pm->addbid($data);
        redirect("Project/loadPost/$id");
    }
    public function countsbids()
{
     $where=[
             "b.eventmanagerid"=>$_SESSION['mid'],
        ];
        $this->pm->countbid($where);
        redirect("Project/loadPost");

}
    public function removebid($id,$pid)
    {
        $where=[
            "projectbidid"=>$id,
            "projectid"=>$pid
        ];
        $this->pm->deletepostbid($where);
        redirect("Project/loadPost/$pid");
    }

public function loadeventupload()
{

        $temp=[

                "cat"=>$this->pm->getAllCity()

            ];
    $this->load->view('eventmanageruploadpost',$temp);  

}
public function eventupload()

    {
        $img = !empty($_FILES["fup"]["name"]) ? uniqid() . basename($_FILES["fup"]["name"]) : "thumbnail.jpg";
        $target_dir = FCPATH . "resources/media/images/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        if (!empty($_FILES["fup"]["tmp_name"])) {
            move_uploaded_file($_FILES["fup"]["tmp_name"], $target_dir . $img);
        }

            $data=[

           

                 "title"=>$this->input->post('txtposttitle'),

                 "eventmanagerid"=>$_SESSION['mid'],

                "description"=>$this->input->post('txtdesc'),

                

                "thumbnail"=>$img ,        
                 "cityid"=>$this->input->post('cat')



            ];

            $this->pm->insertPost($data);

            redirect("Project/loadeventpost");
    }
    public function loadeventpost()

    {
        $temp=[
        "posts"=>$this->pm->myEventAllPosts(),
        "recentpost"=>$this->pm->getEventrecentPosts()
    ];
        $this->load->view('eventmanagerpost',$temp);  

    }
    public function loadmoreinfo()
    {
        $this->load->view('eventmoreinfopost');
    }
    public function loadeventmoreinfoPost($id)
    {
        $where=[
            "postid"=>$id

        ];
        $temp=[
            "postinfo"=>$this->pm->geteventmorePostInfo($where)[0]
        ];
        $this->load->view("eventmoreinfopost",$temp);
    }
       public function removepost($id)
    {
        $where=[
            "postid"=>$id
        ];
        $this->pm->deletepost($where);
        redirect("Project/loadeventpost/$id");
    }
    public function loadprofile()
    {
        $projects=$this->pm->geteventmanagerprofile();
        if($this->input->post('btnsearch'))
        {
            $where=[];
            if($this->input->post("txtcity")!=-1)
            {
                $where["e.cityid"]=$this->input->post("txtcity");
            }
           

            $projects=$this->pm->geteventmanagerprofile($where);
        }
        
        $temp=[
        "profile"=>$projects,
        // "avg"=>$this->pm->avgreviewc()[0],
            "cat"=>$this->pm->getAllCity()
    ];
    
        $this->load->view('eventmanagerprofile',$temp);
    }
    public function loadprofileinfo()
    {
        $this->load->view('eventmanagerprofileinfo');
    }
   public function loadeventmoreinfoProfile($id)
    {
        $where = [
            "eventmanagerid" => $id
        ];
        $diven = [
            "e.eventmanagerid" => $id
        ];

        $profileinfo_list = $this->pm->geteventmoreProfileInfo($where);
        if (empty($profileinfo_list)) {
            redirect("Home/index");
            return;
        }

        $test = [];
        if (isset($_SESSION['type1']) && isset($_SESSION['uid'])) {
            $tisa = [
                "r.eventmanagerid" => $id,
                "r.clientid" => $_SESSION['uid']
            ];
            $test = $this->pm->countreview($tisa);
        }

        $avg_res = $this->pm->avgreviewc($diven);

        $temp = [
            "profileinfo" => $profileinfo_list[0],
            "posts" => $this->pm->ownEventPosts(["p.eventmanagerid" => $id]),
            "review" => $this->pm->getPostreview(["e.eventmanagerid" => $id]),
            "cat" => $this->pm->getAllCity(),
            "avg" => !empty($avg_res) ? $avg_res[0] : null,
            "test" => $test
        ];

        $this->load->view("eventmanagerprofileinfo", $temp);
    }
       public function addreview($id)
     {
         
          
        $data=[
             "eventmanagerid"=>$id,
             "clientid"=>$_SESSION['uid'],
             "rating"=>$this->input->post("txtrating"),
         "review"=>$this->input->post("txtreview"),

            

     ];

         $this->pm->addreview($data);

         redirect("Project/loadeventmoreinfoProfile/$id");
     }

public function countsreview($id)
{
     $where=[
             "r.clientid"=>$_SESSION['uid'],
             
        ];
        $this->pm->countreview($where);
        redirect("Project/loadeventmoreinfoProfile/$id");

}

public function removereview($id,$pid)
    {
        $where=[
            "reviewid"=>$id,
            "eventmanagerid"=>$pid,
           // "clientid"=>$cid
        ];
        $this->pm->deletereview($where);
        redirect("Project/loadeventmoreinfoProfile/$pid");
    }

    public function mybids()
    {
        $projects=$this->pm->getMybids();
        if($this->input->post('btnsearch'))
        {
            $where=[];
            if($this->input->post("txtcity")!=-1)
            {
                $where["p.cityid"]=$this->input->post("txtcity");
            }

                     

            $projects=$this->pm->getMybids($where);
        }

        $min_res = $this->pm->minbid();
        $temp=[
            "posts"=>$projects,
             "cat"=>$this->pm->getAllCity(),
             "min"=>!empty($min_res) ? $min_res[0] : null,
             "cate"=>$this->pm->getAllcategory()
        ];
        $this->load->view("mybid",$temp);
    }

    public function mysaveposts()
    {
        $temp=[
            "posts"=>$this->pm->getMysavepost(),

        ];
        $this->load->view("mysavepost",$temp);
    }
   public function accpetbids($bid,$pid,$emid)
   {

     $data=[
        "status"=>1
     ];
    $this->pm->accpetbid(["projectbidid"=>$bid],$data);
    $data["assignedmanagerid"]=$emid;
    
    $this->pm->accpetbid2(["projectid"=>$pid],$data);

     redirect("Project/loadPost/$pid");
   }
   public function homeevent()
{
    $temp=[
            "posts"=>$this->pm->getAllPosts(),
            "ass"=>$this->pm->assinproject()
     
        ];
    
    $this->load->view("eventhome",$temp);
}
 
}

?>