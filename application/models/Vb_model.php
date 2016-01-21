<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vb_model extends CI_Model
{

    /**
     * construct
     */
    function __construct()
    {

        parent::__construct();
    }

    /**
     *
     * @param type $data
     * @return boolean
     */
    public function insert($table_name, $data)
    {
        if ($this->db->insert($table_name, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function update($table_name, $data = array(), $options = array())
    {

        return $this->db->update($table_name, $data, $options);
    }

    /**
     *
     * @param type $user_id
     * @return type
     */
    public function delete($table_name, $options = array())
    {
        return $this->db->delete($table_name, $options);
    }

    /**
     * @param $table_name
     * @return mixed
     */
    public function get_total_row($table_name)
    {
        return $this->db->count_all($table_name);
    }

    /**
     *
     * @param type $name
     * @return boolean
     */
    public function get_by($table_name, $options)
    {
        $query = $this->db->get_where($table_name, $options);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function get_all($table_name, $limit = '', $start = '0', $order_by = '', $order_type = 'asc')
    {

        if ($order_by != '') {
            $this->db->order_by($order_by, $order_type);
        }
        if ($limit != '') {
            $query = $this->db->get($table_name, $limit, $start);
        } else {
            $query = $this->db->get($table_name);
        }

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function get_all_by_option($table_name, $limit = '', $start = '0', $order_by = '', $order_type = 'asc', $options)
    {

        if ($order_by != '') {
            $this->db->order_by($order_by, $order_type);
        }
        if ($limit != '') {
            $query = $this->db->get_where($table_name, $options, $limit, $start);
        } else {
            $query = $this->db->get_where($table_name, $options);
        }


        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }// end of func


}

// end of class
