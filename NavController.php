<?php
/**
 * Created by PhpStorm.
 * User: VBM
 * Date: 13/05/16
 * Time: 17:36
 */

namespace Controller;

use Model\PageRepository;


class NavController
{
    private $repository;
    public function __construct()
    {

    }
    public function displayNavFront(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
        $nav = $this->repository->selectSlug();
        if(!$nav){
            echo "pas de nav";
        }else{
            include "view/nav-display.php";
        }

    }
}
