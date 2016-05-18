<?php
namespace Model;

class PageRepository
{
    /**
     * @var \PDO
     */
    private $pdo;


    public function __construct(\PDO $pdo)
    {

        $this->pdo = $pdo;
    }

    public function update()
    {
        $sql = "UPDATE `page` SET  WHERE 1";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function insert()
    {
        $sql = "INSERT INTO `page`() VALUES ()";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM `page` WHERE ";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function selectSlug()
    {
        $sql = "SELECT `slug`, `title` FROM `page`";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function selectAll()
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page`";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
    }
    public function getBySlug($slug)
    {
        $sql ="SELECT
                    `id`,
                    `slug`,
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `slug` = :slug
                ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }

}