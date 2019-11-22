<?php

class AbstractModel
{
    public static function getCount()
    {
        global $con;

        $stmt = $con->prepare("SELECT COUNT(*) FROM " . static::$tableName);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
}