<?php


class My_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function showdata($id,$active)
    {
       // $this->db->order_by($id);

        $query = $this->db->get('Books');
        $data['active']=$active;
        $this->db->where('id',$id);
        $this->db->update('Books',$data);
        return $query->result();
    }


    public function addtbooks($title,$author,$active)
    {
        $data['title']=$title;
        $data['author']=$author;
        $data['active']=$active;
        $this->db->insert('Books',$data);
    }
    public function showallbook($id)
    {
        $this->db->select('id,title,author');
        $query=$this->db->get('Books');
        return $query->result();
    }
}
