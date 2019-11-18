<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    protected $table = '';

    public function __construct()
    {
        parent::__construct();
        if (!$this->table) {
            $this->table = strtolower(
                str_replace('_model', '', get_class($this))
            );
        }
    }

    // validation input function, rules: dideklarasikan dalam masing-masing model
    public function validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimeters(
            '<small class="form-text text-danger">',
            '</small>'
        );
        $validationRules = $this->getValidatoinRules();

        $this->form_validation->set_rules($validationRules);

        return $this->form_validation->run();
    }

    public function select($columns)
    {
        $this->db->select($columns);
        return $this;
    }

    public function where($column, $condition)
    {
        $this->db->where($column, $condition);
        return $this;
    }

    public function like($column, $condition)
    {
        $this->db->like($column, $condition);
        return $this;
    }

    public function orlike($column, $condition)
    {
        $this->db->orlike($column, $condition);
        return $this;
    }

    public function join($table, $type = 'left')
    {
        $this->db->join($table, "$this->table.id_$table = $table.id", $type);
        return $this;
    }

    public function orderBy($column, $order = 'asc')
    {
        $this->db->order_by($column, $order);
        return $this;
    }

    public function first()
    {
        return $this->db->get($this->table)->row();
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function count()
    {
        return $this->db->count_all_result($this->table);
    }

}

/* End of file MY_Model.php */
