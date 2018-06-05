<?php
class Manager{
    protected function dbConnect()
    {
    $db = new PDO('mysql:host=localhost;dbname=HI-939445-AC_;charset=utf8', 'blog', 'Tutoweb2');
    return $db;
    }
}