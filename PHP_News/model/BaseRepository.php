<?php

class BaseRepository
{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }
}