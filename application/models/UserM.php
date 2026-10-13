<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class UserM extends CI_Model
    {

        public function getAllCity()
        {
            return $this->db->get("tblcity")->result();
        }
        public function insertUser($data)
        {
            return $this->db->insert("tbleventmanage",$data);
        }
        public function loginInfo($where)
        {
            return $this->db->where($where)->get("tbleventmanage")->result();
        }
        public function updateevent($where,$data)
          {
            return $this->db->where($where)->update("tbleventmanage",$data);
          }

        public function oldevent($where)
        {
          return $this->db->where($where)->get("tbleventmanage")->result();
        }
        public function geteventmoreProfileInfo()
        {
            return $this->db->select("*,cat.cityname as catname")->from("tbleventmanage e")->join("tblcity cat","e.cityid=cat.cityid ")->where("e.eventmanagerid",$_SESSION['mid'])->get()->result();
        }
         
       public function getPostreview()
        {
         return $this->db->select("r.*,ci.username as cname,ci.profilepic as ppic")->from("tblreview r")->join("tbleventmanage e","e.eventmanagerid=r.eventmanagerid")->join("tblclient ci","ci.clientid=r.clientid")->where("e.eventmanagerid",$_SESSION['mid'])->get()->result();
        }
         public function avgreview()
          {
              return $this->db->select( ' AVG(`rating`) as rate')->from("tblreview r")->join("tbleventmanage e","r.eventmanagerid=e.eventmanagerid")->where("e.eventmanagerid",$_SESSION['mid'])->get()->result();
          }
          public function getMyPosts()
        {
          return $this->db->select("p.*,e.username as ename,cat.cityname as catname")->from("tblpost p")->join("tblcity cat","p.cityid=cat.cityid")->join("tbleventmanage e","p.eventmanagerid=e.eventmanagerid")->where("e.eventmanagerid",$_SESSION['mid'])->get()->result();
        }
         public function getprofile()
        {
            return $this->db->get("tbleventmanage")->result();
        }
        public function updatepwd($where,$data)
          {
            return $this->db->where($where)->update("tbleventmanage",$data);
          }
        
        
    }
?>