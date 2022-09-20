<?php

require_once "BaseRepository.php";


class catRepository extends BaseRepository
{
    public function getCat()
    {
        $sql ="SELECT * FROM kategorie";
        return $this->db->select($sql);
    }

    public function GetOneCat($id)
    {
        $sql ="SELECT * FROM kategorie WHERE id = :id";
        $params = [
            "id"=> $id
        ];
        return $this->db->selectOne($sql,$params);
    }

    public function addCat($name)
    {
        $sql = "INSERT INTO kategorie
SET name = :name";
        $params = [
            ":name" => $name
        ];

        $this->db->insert($sql,$params);
    }

    public function delCat($id)
    {
        $sql = "DELETE FROM kategorie WHERE id = :id";

        $params = [
            ":id" => $id
        ];

        $this->db->update($sql,$params);
    }

    public function editCat($id, $name)
    {
        $sql = "UPDATE kategorie 
        SET name = :name
        WHERE id =:id";
        $params = [
            ":id"=>$id,
            ":name"=>$name
        ];
        $this->db->update($sql,$params);
    }
}