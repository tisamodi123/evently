<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class ClientM extends CI_Model
    {
        
        public function insertUser($data)
        {
            return $this->db->insert("tblclient",$data);
        }
        public function loginInfo($where)
        {
            return $this->db->where($where)->get("tblclient")->result();
        }
        public function getAllCity()
        {
            return $this->db->get("tblcity")->result();
        }
        public function updateclient($where,$data)
          {
            return $this->db->where($where)->update("tblclient",$data);
          }

        public function oldclient($where)
        {
          return $this->db->where($where)->get("tblclient")->result();
        }
        public function clientinfo()
        {
            return $this->db->select("*,cat.cityname as catname")->from("tblclient c")->join("tblcity cat","c.cityid=cat.cityid ")->where("c.clientid",$_SESSION['uid'])->get()->result();
        }
        public function getprofile()
        {
            return $this->db->get("tblclient")->result();
        }
        public function updatepwd($where,$data)
          {
            return $this->db->where($where)->update("tblclient",$data);
          }

    }
?>