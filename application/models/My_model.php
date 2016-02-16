<?php


class My_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function showData($id,$active)
    {
       // $this->db->order_by($id);

        $query = $this->db->get('Books');
        $data['active']=$active;
        $this->db->where('id',$id);
        $this->db->update('Books',$data);
        return $query->result();
    }

        public function active($book_id){
        $this->db->get('Books');
        $this->db->where('id',$book_id);
        $this->db->update('Books',['active'=>1]);
    }
    public function unActive($book_id){
        $this->db->get('Books');
        $this->db->where('id',$book_id);
        $this->db->update('Books',['active'=>0]);
    }

    //Fetch data From Title,Author
    public function get_id($id)
    {
        $query=$this->db->get_where('Books',array('id' =>$id));

        return $query->result();

    }
    public function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('Books',$data);
        return true;
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('Books');
        return true;    

    }

    public function addBooks($title,$author,$active)
    {
        $data['title']=$title;
        $data['author']=$author;
        $data['active']=$active;
        $this->db->insert('Books',$data);
    }
    public function showAllBook($id)
    {
        $this->db->select('id,title,author');
        $query=$this->db->get('Books');
        return $query->result();
    }

}
