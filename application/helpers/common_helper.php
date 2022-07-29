<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
// Get country list
function get_country_list()
{
    $ci = & get_instance();
    $ci->db->where('status',1);
    return $ci->db->get('ci_countries')->result_array();
}