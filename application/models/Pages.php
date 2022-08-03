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

		public function calculater($range,$tab)
		{
			$this->db->select('*');
	    	$this->db->from('calculater');
	    	if($tab=='bed')
	    	{
	    		$this->db->where('total_bed >=',$range);
	    	}else
	    	{
	    		$this->db->where('cylinder_per_day >=',$range);
	    	}
	    	
			$query = $this->db->get()->result();
			return $query[0];
		}
    }


?> 