<?php

class gamesModel extends CI_Model
{
  public function index()
  {
    "SELECT * MODEL tb_games";

    return $this->db->get('tb_games')->result_array;
  }
}