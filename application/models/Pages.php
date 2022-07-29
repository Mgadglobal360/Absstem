<?php
	class Pages extends CI_Model{

        public function add_enquiry($data)
		{
			$result = $this->db->insert('enquiry', $data);
        	return $this->db->insert_id();
		}

		public function add_contact($data)
		{
			$result = $this->db->insert('contact', $data);
        	return $this->db->insert_id();
		}
    }


?> 