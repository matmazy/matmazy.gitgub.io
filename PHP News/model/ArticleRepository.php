<?php

require_once "BaseRepository.php";

class
ArticleRepository extends BaseRepository
{

    public function getArticles()
    {
        $sql = "SELECT ar.*, CONCAT(au.name, ' ', au.surname) AS aName, k.name AS kName, au.id AS authorID FROM article ar 
INNER JOIN author au ON ar.authorId = au.id
LEFT JOIN kategorie k ON k.id = ar.catId
WHERE ar.published > 0
ORDER BY dateAdd DESC
LIMIT 5" ;
        return $this->db->select($sql);
    }

    public function getArticlesABC()
    {
        $sql = "SELECT ar.*, CONCAT(au.name, ' ', au.surname) AS aName, k.name AS kName FROM article ar 
INNER JOIN author au ON ar.authorId = au.id
LEFT JOIN kategorie k ON k.id = ar.catId
ORDER BY ar.title";
        return $this->db->select($sql);
    }

    public function getArticle($id)
    {
        $sql = "SELECT ar.*, CONCAT(au.name, ' ', au.surname) AS aName, k.name AS kName, au.id AS authorID FROM article ar 
INNER JOIN author au ON ar.authorId = au.id
LEFT JOIN kategorie k ON k.id = ar.catId
WHERE ar.id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db->selectOne($sql, $params);
    }

    public function getAuthorArticle($id)
    {
        $sql = "SELECT ar.*, CONCAT(au.name, ' ',au.surname) AS aName, k.name AS kName FROM article ar 
INNER JOIN author au ON ar.authorId= au.id
LEFT JOIN kategorie k ON k.id = ar.catId
WHERE authorId = :id";
        $params = [
            "id" => $id
        ];
        return $this->db->select($sql, $params);
    }

    public function getCatArticle($catId)
    {
        $sql = "SELECT ar.*, CONCAT(au.name, ' ',au.surname) AS aName, k.name AS kName FROM article ar 
INNER JOIN author au ON ar.authorId= au.id
LEFT JOIN kategorie k ON k.id = ar.catId
WHERE ar.catId = :id";
        $params = [
            "id" => $catId
        ];
        return $this->db->select($sql, $params);
    }

    public function delArticle($id)
    {
        $sql = "DELETE FROM article WHERE id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db->update($sql, $params);
    }

    public function addArticle($title, $text, $authorId, $catId)
    {
        $sql = "INSERT INTO article SET
title = :title,
text = :text,
dateAdd = now(),
authorId = :authorId,
catId = :catId,

published = 1
";
        $params = [
            ":title" => $title,
            ":text" => $text,
            ":authorId" => $authorId,
            ":catId" => $catId
        ];
        $this->db->insert($sql, $params);
    }

    public function editArticle($id, $title, $text, $dateAdd, $authorId, $catId,$pub)
    {
        $sql = "UPDATE article
SET title = :title,
text = :text,
dateAdd = :dateAdd,
authorId = :authorId,
catId = :catId,
published=:published
WHERE id = :id
";
        $params = [
            ":title" => $title,
            ":text" => $text,
            ":dateAdd" => $dateAdd,
            ":authorId" => $authorId,
            ":catId" => $catId,
            ":id" => $id,
            ":published"=>$pub
        ];
        $this->db->update($sql, $params);
    }

    /*public function isPublished($id, $publ)
    {
        $sql="UPDATE article SET published=:published
WHERE id=:id";
        $params = [
            ":id" => $id,
            ":published"=>$publ
        ];
        $this->db->update($sql, $params);
    }*/


}