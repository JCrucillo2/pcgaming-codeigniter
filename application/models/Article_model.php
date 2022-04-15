<?php
class Article_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function get_game() {
        $this->db->order_by("game_id", "desc");
        $query = $this->db->get('ci_gaming');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_game_detail($id) {
        $this->db->select('*');
        $this->db->from('ci_gaming');
        $this->db->join('users', 'users.id = ci_gaming.author_id');

        $this->db->where('game_id', $id);

        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function insert_data($data) {
        $this->db->insert('ci_gaming', $data);
    }

    function edit_data($data, $id) {
        $this->db->where('game_id', $id);
        $this->db->update('ci_gaming', $data);
    }

    function delete_data($id) {
        $this->db->where('game_id', $id);
        $this->db->delete('ci_gaming');
    }

    function check_owner($id, $userid) {
        $this->db->select('*');
        $this->db->from('ci_gaming');
        $this->db->where('game_id', $id);
        $this->db->where('author_id', $userid);

        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}