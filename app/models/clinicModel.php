<?php


class clinicModel extends AbstractModel
{
    protected static $tableName = 'clinics';

    public static function getAll()
    {
        global $con;
        $stmt = $con->prepare("SELECT * FROM clinics");
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
    
    
    public static function getClinicsByLimit($limit)
    {
        global $con;
        
        $stmt = $con->prepare("SELECT * FROM clinics LIMIT 0, ?");

        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        return $result;
    }
}