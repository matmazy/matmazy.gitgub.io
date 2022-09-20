<?php

require_once "BaseRepository.php";

class authorsRepository extends BaseRepository
{
    public function getAuthors()
    {
        $sql = "SELECT CONCAT(au.name, ' ', au.surname) AS aName, au.name, au.surname,   au.id FROM author au ";
        return $this->db->select($sql);
    }

    public function getAuthor($id)
    {
        $sql = "SELECT CONCAT(au.name, ' ', au.surname) AS aName, au.id, au.name, au.surname FROM author au
                WHERE au.id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db->selectOne($sql, $params);
    }

    public function getOneAuthor($email)
    {
        $sql = "SELECT CONCAT(au.name, ' ', au.surname) AS aName, au.id, au.name, au.surname, au.email, au.password FROM author au
                WHERE au.email = :email";
        $params = [
            "email" => $email
        ];
        return $this->db->selectOne($sql, $params);
    }

    public function addAuthor($name, $surname, $email, $password)
    {
        $sql = "INSERT INTO author SET name = :name, surname = :surname, email = :email, password = :password";

        $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        //var_dump($passwordHash);

        $params = [
            "name" => $name,
            "surname" => $surname,
            'email' => $_POST['email'],
            'password' => $passwordHash,
        ];
        $this->db->insert($sql, $params);
    }

   /* public function addAuthor($name, $surname)
    {
        $sql = "INSERT INTO author SET name = :name, surname = :surname";
        $params = [
            "name" => $name,
            "surname" => $surname
        ];
        $this->db->insert($sql, $params);
    }*/

    public function delAuthor($id)
    {
        $sql = "DELETE FROM author WHERE id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db->update($sql, $params);
    }

    public function editAuthor($id, $name, $surname)
    {
        $sql = "UPDATE author SET name = :name, surname = :surname 
                WHERE id = :id";
        $params = [
            "id" => $id,
            "name" => $name,
            "surname" => $surname
        ];
         $this->db->update($sql, $params);
    }
}