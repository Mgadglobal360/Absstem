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

		public function update_enquiry($data,$id)
		{
			$this->db->where('id ', $id);
			$this->db->update('enquiry', $data);
			return true;
		}

		public function update_contact($data,$id)
		{
			$this->db->where('id ', $id);
			$this->db->update('contact', $data);
			return true;
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

		public function allenquery()
		{
			$this->db->select('*');
	    	$this->db->from('enquiry');
	    	$this->db->where('is_send',0);
	    	
			$query = $this->db->get()->result();
			return $query;
		}

		public function allcontact()
		{
			$this->db->select('contact.*,ci_countries.name as country_name');
	    	$this->db->from('contact');
	    	$this->db->join('ci_countries', 'ci_countries.id = contact.country_id ', 'left');
	    	$this->db->where('is_send',0);
	    	
			$query = $this->db->get()->result();
			return $query;
		}
    }
?> 