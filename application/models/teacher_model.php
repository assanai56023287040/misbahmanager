<?php
class Teacher_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        
        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function add_data($data=null)
        {
                if(!empty($data)){
                    return $this->db->insert('teacher', $data);
                }
                
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public function select_all_teacher(){
            $rs = $this->db->get('teacher');
            return $rs->result();
        }
        public function check_login($username=null, $password=null){		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$rs = $this->db->get('teacher');
		if($rs->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
        
        function select_teacherdata($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
                $query = $this->db->get('teacher');
		return $query->result_array();
	}
        
        function select_like ($like){
            $this->db->select('t_id');
            $this->db->like('t_id', $like , 'after');
            $get_this = $this->db->get('teacher');
            return $get_this->num_rows();
        }
        

}
?>