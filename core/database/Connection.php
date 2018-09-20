<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=local', 'root', '');
        } catch (PDOException $e) {
            die('Could not connect: ' . $e->getMessage() . phpinfo());
        }
    }
}
?>