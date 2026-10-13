<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class DisplayM extends CI_Model
    {
         public function loginInfo($where)
        {
            return $this->db->where($where)->get("tbladmin")->result();
        }
        public function getAllCity()
        {
            return $this->db->get("tblcity")->result();
        }

        public function getAllstate()
        {
            return $this->db->get("tblstate")->result();
        }
         public function getMycity($where)
        {
          return $this->db->select("*,st.statename as stname")->from("tblcity c")->join("tblstate st","c.stateid=st.stateid")->where($where)->get()->result();
        }
        public function getAllcategory()
        {
            return $this->db->get("tblcategory")->result();
        }
        public function insertcategory($data)
        {
            return $this->db->insert("tblcategory",$data);
        }
          public function deletecategory($where)
          {
            return $this->db->where($where)->delete("tblcategory");
          }
          public function updatecat($where,$data)
          {
            return $this->db->where($where)->update("tblcategory",$data);
          }

        public function oldcat($where)
        {
          return $this->db->where($where)->get("tblcategory")->result();
        }
           public function insertstate($data)
        {
            return $this->db->insert("tblstate",$data);
        }
        public function deletestate($where)
          {
            return $this->db->where($where)->delete("tblstate");
          }
          public function updatest($where,$data)
          {
            return $this->db->where($where)->update("tblstate",$data);
          }

        public function oldst($where)
        {
          return $this->db->where($where)->get("tblstate")->result();
        }
           public function insertcity($data)
        {
            return $this->db->insert("tblcity",$data);
        }
        public function deletecity($where)
          {
            return $this->db->where($where)->delete("tblcity");
          }
          public function updatecity($where,$data)
          {
            return $this->db->where($where)->update("tblcity",$data);
          }

        public function oldcity($where)
        {
          return $this->db->where($where)->get("tblcity")->result();
        }
       
        public function displayclient()
        {
          return $this->db->select("*,cat.cityname as catname")->from("tblclient c")->join("tblcity cat","c.cityid=cat.cityid ")->get()->result();
        }
        public function getMyPosts($where)
        {
          return $this->db->select("*,cat.cityname as catname")->from("tblproject p")->join("tblcity cat","p.cityid=cat.cityid")->join("tblclient c","p.clientid=c.clientid")->where($where)->get()->result();
        }

        public function displayeventmanager()
        {
          return $this->db->select("*,cat.cityname as catname")->from("tbleventmanage e")->join("tblcity cat","e.cityid=cat.cityid ")->get()->result();
        }
           public function displaycity()
        {
          return $this->db->select("*,s.statename")->from("tblcity c")->join("tblstate s","s.stateid=c.stateid ")->get()->result();
        }
         public function displayproject()
        {
          return $this->db->select("*,cat.cityname as catname,c.username as cname,cate.categoryname as catename")->from("tblproject p")->join("tblcity cat","p.cityid=cat.cityid ")->join("tblcategory cate","p.categoryid=cate.categoryid ")->join("tblclient c ","c.clientid=p.clientid")->get()->result();
        }
         public function displaypost()
        {
          return $this->db->select("*,cat.cityname as catname,e.username as ename")->from("tblpost p")->join("tblcity cat","p.cityid=cat.cityid ")->join("tbleventmanage e ","e.eventmanagerid=p.eventmanagerid")->get()->result();
        }
         public function displayreview()
        {
          return $this->db->select("*,e.username as ename,c.username as cname")->from("tblreview r")->join("tbleventmanage e","r.eventmanagerid=e.eventmanagerid ")->join("tblclient c ","c.clientid=r.clientid")->get()->result();
        }
        public function displaycomplaint()
        {
          return $this->db->select("*,e.username as ename,c.username as cname")->from("tblcomplaint cm")->join("tbleventmanage e","cm.eventmanagerid=e.eventmanagerid ")->join("tblclient c ","c.clientid=cm.clientid")->get()->result();
        }
        //client post info
         public function getPostInfo($where)
        {
            return $this->db->select("*,cat.cityname as catname")->from("tblclient c")->join("tblcity cat","c.cityid=cat.cityid ")->where($where)->get()->result();
        }
        //event manager
        public function getPostInfoem($where)
        {
            return $this->db->select("*,cat.cityname as catname")->from("tbleventmanage e")->join("tblcity cat","e.cityid=cat.cityid ")->where($where)->get()->result();
        }
        //project
         public function getPostInfop($where)
        {
            return $this->db->select("*,cat.cityname as catname,cate.categoryname as catename,c.username as cname")->from("tblproject p")->join("tblcity cat","p.cityid=cat.cityid ")->join("tblcategory cate","p.categoryid=cate.categoryid ")->join("tblclient c ","c.clientid=p.clientid")->where($where)->get()->result();
        }
        //post
         public function getPostInfopost($where)
        {
            return $this->db->select("*,cat.cityname as catname,e.username as ename")->from("tblpost p")->join("tblcity cat","p.cityid=cat.cityid ")->join("tbleventmanage e ","e.eventmanagerid=p.eventmanagerid")->where($where)->get()->result();
        }
         public function getMyeventPosts($where)
        {
          return $this->db->select("*,cat.cityname as catname,e.username as ename")->from("tblpost p")->join("tblcity cat","p.cityid=cat.cityid")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->where($where)->get()->result();
        }
        public function getprofile()
        {
           return $this->db->get("tbladmin")->result();
        }
         public function updateadmin($where,$data)
          {
            return $this->db->where($where)->update("tbladmin",$data);
          }

        public function oldadmin($where)
        {
          return $this->db->where($where)->get("tbladmin")->result();
        }
         public function getMybids($where)
        {
          return $this->db->select("b.*,e.username as ename,e.image as img")->from("tblprojectbid b")->join("tblproject p","b.projectid=p.projectid")->join("tbleventmanage e","b.eventmanagerid=e.eventmanagerid")->where($where)->get()->result();
        }
        public function getPostreview($where)
        {
         return $this->db->select("r.*,ci.username as cname,ci.profilepic as ppic")->from("tblreview r")->join("tbleventmanage e","e.eventmanagerid=r.eventmanagerid")->join("tblclient ci","ci.clientid=r.clientid")->where($where)->get()->result();
        }
      public function updateuser($where,$data)
        {
          return $this->db->where($where)->update("tblclient",$data);
        }
        public function updateeventmanager($where,$data)
        {
          return $this->db->where($where)->update("tbleventmanage",$data);
        }
         public function getprofile1()
        {
            return $this->db->get("tbladmin")->result();
        }
        public function updatepwd($where,$data)
          {
            return $this->db->where($where)->update("tbladmin",$data);
          }
          public function top3()
          {

                     // return $this->db->select("r.*,e.username as uname")->from("tblreview r")->join("tbleventmanage e","e.eventmanagerid=r.eventmanagerid")->get()->result();
                      //  return $this->db->select( ' AVG(`rating`) as rate,e.username as uname')->from("tblreview r")->join("tbleventmanage e","r.eventmanagerid=e.eventmanagerid")->order_by("r.reviewid","desc")->get()->result();
             // return $this->db->query("select from tblreview r,(select reviewid,count() as tot from tbleventmanage group by reviewid)rcount where r.reviewid=rcount.reviewid order by tot Desc")->get()->result();

          }
          
      
    }
?>