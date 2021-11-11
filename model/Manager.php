<?php
namespace Pabiosoft\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', 'pass');
        return $db;
    }
}