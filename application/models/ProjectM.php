<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ProjectM extends CI_Model
    {
        
        public function insertProject($data)
        {
            return $this->db->insert("tblproject",$data);
        }
        public function getAllCity()
        {
            return $this->db->get("tblcity")->result();
        }
        public function getAllcategory()
        {
            return $this->db->get("tblcategory")->result();   
        }
        public function getMyPosts($where=null)
        {
           $this->db->select("p.*,ci.username as uname,c.categoryname as cname,cat.cityname as catname")->from("tblproject p")->join("tblcategory c","p.categoryid=c.categoryid")->join("tblcity cat","p.cityid=cat.cityid")->join("tblclient ci","p.clientid=ci.clientid")->where("ci.clientid",$_SESSION['uid']);

          if($where!=null)
            {
              $this->db->where($where);
            }

            return $this->db->get()->result();
        }
       public function getAllPosts($where=null)
        {
            $this->db->select("p.*,ci.username as uname,c.categoryname as cname,cat.cityname as catname")->from("tblproject p")->join("tblcategory c","p.categoryid=c.categoryid")->join("tblcity cat","p.cityid=cat.cityid")->join("tblclient ci","p.clientid=ci.clientid")->order_by("p.projectid","desc");

            if($where!=null)
            {
              $this->db->where($where);
            }

            return $this->db->get()->result();
        }
        public function getMybids($where=null)
        {
           $this->db->select("b.*,p.title as title,p.coverpage,ci.username as cname,cat.cityname as catname,p.eventdatetime as edate,c.categoryname ,p.budget")->from("tblprojectbid b")->join("tblproject p","b.projectid=p.projectid")->join("tblclient ci","p.clientid=ci.clientid")->join("tblcity cat","cat.cityid=p.cityid")->join("tblcategory c","p.categoryid=c.categoryid")->where("b.eventmanagerid",$_SESSION['mid'])->order_by("b.projectbidid","desc");

          if($where!=null)
            {
              $this->db->where($where);
            }

            return $this->db->get()->result();
            

          
        }
        public function getPostInfo($where)
        {
            return $this->db->select("p.*,cat.cityname as catname,c.username,c.profilepic")->from("tblproject p")->join("tblcity cat","p.cityid=cat.cityid ")->join("tblclient c","p.clientid=c.clientid")->where($where)->get()->result();
        }
        

  public function addbid($data)
  {
    return $this->db->insert("tblprojectbid",$data);
  }
  public function getPostbid($where)
  {
    return $this->db->select("p.*,e.username,e.image")->from("tblprojectbid p")->join("tbleventmanage e","e.eventmanagerid=p.eventmanagerid")->where($where)->get()->result();
  }
  public function countbid($where)
        {
            return $this->db->select("*")->from("tblprojectbid b")->join("tbleventmanage e","e.eventmanagerid=b.eventmanagerid")->join("tblproject p","p.projectid=b.projectid")->where($where)->get()->result();
        }
  public function deletepostbid($where)
  {
    return $this->db->where($where)->delete("tblprojectbid");
  }
  public function insertPost($data)
        {
            return $this->db->insert("tblpost",$data);
        }
       public function myEventAllPosts()
        {
          return $this->db->select("p.*,e.username as uname")->from("tblpost p")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->where("e.eventmanagerid",$_SESSION['mid'])->get()->result();
        
        }
      public function getEventrecentPosts()
        {
            return $this->db->select("p.*,e.username as uname")->from("tblpost p")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->where("e.eventmanagerid",$_SESSION['mid'])->order_by("p.postid","desc")->get()->result();
        }
        public function geteventmorePostInfo($where)
        {
            return $this->db->select("*,e.username as uname,e.emailid as email,e.contactno as contact")->from("tblpost p")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->where($where)->get()->result();
        }
 public function deletepost($where)
  {
    return $this->db->where($where)->delete("tblpost");
  }



   public function geteventmanagerprofile($where=null)
        {
             $this->db->select("*,e.username as uname,cat.cityname as catname")->from("tbleventmanage e")->join("tblcity cat","e.cityid=cat.cityid");

            if($where!=null)
            {
              $this->db->where($where);
            }

            return $this->db->get()->result();
        }
public function eventssavepost($data)
{
  return $this->db->insert("tblsave",$data);
}
public function unsavepost($where)
  {
    return $this->db->where($where)->delete("tblsave");
  }
         public function geteventmoreProfileInfo($where)
        {
            return $this->db->select("*,cat.cityname as catname")->from("tbleventmanage e")->join("tblcity cat","e.cityid=cat.cityid ")->where($where)->get()->result();
        }
        public function ownEventPosts($where)
        {
           return $this->db->select("p.*,e.username as uname,cat.cityname as catname, p.eventmanagerid as peid")->from("tblpost p")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->join("tblcity cat","p.cityid=cat.cityid ")->where($where)->get()->result();

        }
        public function addreview($data)
        {
          return $this->db->insert("tblreview",$data);
        }
        public function getPostreview($where)
        {
         return $this->db->select("r.*,ci.username as cname,ci.profilepic as ppic")->from("tblreview r")->join("tbleventmanage e","e.eventmanagerid=r.eventmanagerid")->join("tblclient ci","ci.clientid=r.clientid")->where($where)->get()->result();
        }
        public function countreview($where)
        {
            return $this->db->select("*")->from("tblreview r")->join("tbleventmanage e","e.eventmanagerid=r.eventmanagerid")->join("tblclient c","c.clientid=r.clientid")->where($where)->get()->result();
        }
        public function deletereview($where)
        {
          return $this->db->where($where)->delete("tblreview");
        }
       public function insertimage($data)
        {
            return $this->db->insert("tblprojectimages",$data);
        }
        public function myEventAllimage($where)
         {
           return $this->db->select("*")->from("tblprojectimages e")->join("tblproject p","e.projectid=p.projectid")->where($where)->get()->result();
        
         }
         public function insertvideo($data)
        {
            return $this->db->insert("tblprojectvideo",$data);
        }
          public function myEventAllvideo($where)
         {
           return $this->db->select("*")->from("tblprojectvideo v")->join("tblproject p","v.projectid=p.projectid")->where($where)->get()->result();
        
         }
         public function deleteimage($where)
        {
          return $this->db->where($where)->delete("tblprojectimages");
        }
         public function deletevideo($where)
        {
          return $this->db->where($where)->delete("tblprojectvideo");
        }
         
        public function minbid($where=null)
        {
            $this->db->select('MIN(`price`) as price')->from("tblprojectbid b")->join("tbleventmanage e","b.eventmanagerid=e.eventmanagerid");
            if($where != null) {
                $this->db->where($where);
            } else if(isset($_SESSION['mid'])) {
                $this->db->where("b.eventmanagerid", $_SESSION['mid']);
            }
            return $this->db->get()->result();
        }
        public function getMysavepost()
        {
            return $this->db->select("s.*,p.coverpage,p.title,c.username,p.budget,p.eventdatetime")->from("tblsave s")->join("tblproject p","s.projectid=p.projectid")->join("tbleventmanage e","e.eventmanagerid=s.eventmanagerid")->join("tblclient c","c.clientid=p.clientid")->get()->result();
        }
        public function avgreview($where=null)
        {
            $this->db->select('AVG(`rating`) as rate')->from("tblreview r")->join("tbleventmanage e","r.eventmanagerid=e.eventmanagerid");
            if($where != null) {
                $this->db->where($where);
            } else if(isset($_SESSION['mid'])) {
                $this->db->where("e.eventmanagerid", $_SESSION['mid']);
            }
            return $this->db->get()->result();
        }
        public function avgreviewc($where=null)
        {
            $this->db->select('AVG(`rating`) as rate')->from("tblreview r")->join("tbleventmanage e","r.eventmanagerid=e.eventmanagerid");
            if($where != null) {
                $this->db->where($where);
            }
            return $this->db->get()->result();
        }
          
        public function countsave($where)
        {
            return $this->db->select("*")->from("tblsave s")->join("tbleventmanage e","e.eventmanagerid=s.eventmanagerid")->join("tblproject p","p.projectid=s.projectid")->where($where)->get()->result();
        }
        public function accpetbid($where,$data)
        {
            return $this->db->where($where)->update("tblprojectbid",$data);     
        }
        public function accpetbid2($where,$data)
        {
            return $this->db->where($where)->update("tblproject",$data);     
        }

        public function insertbid($data)
        {
          return $this->db->set($data)->insert("tblprojectbid");
        }
        public function insertprojects($data1)
        {
          return $this->db->set($data1)->insert("tblproject");
        }
        public function getMyproject()
        {
          return $this->db->select("p.*,ci.username as uname,c.categoryname as cname,cat.cityname as catname")->from("tblproject p")->join("tblcategory c","p.categoryid=c.categoryid")->join("tblcity cat","p.cityid=cat.cityid")->join("tblclient ci","p.clientid=ci.clientid")->order_by("p.projectid","desc")->where("ci.clientid",$_SESSION['uid'])->get()->result();
        }
        public function assinproject()
        {
          return $this->db->select("p.*,ci.username as uname,c.categoryname as cname,cat.cityname as catname")->from("tblproject p")->join("tblcategory c","p.categoryid=c.categoryid")->join("tblcity cat","p.cityid=cat.cityid")->join("tblclient ci","p.clientid=ci.clientid")->order_by("p.projectid","desc")->where("p.assignedmanagerid",$_SESSION['mid'])->get()->result();
        }

        public function mysave($where)
        {
          return $this->db->select("*")->where($where)->get("tblsave")->result();
        }

    }

?>