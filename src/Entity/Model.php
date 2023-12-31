<?php

namespace Digi\Paginaire\Entity;

use Digi\Paginaire\Kernel\DataBase;
use Digi\Paginaire\Entity\Books;

class Model
{
    public static $className;

    private static function getEntityName()
    {
        $classname = static::class;
        $tab = explode('\\', $classname);
        $entity = $tab[count($tab) - 1];
        return $entity;
    }

    private static function getClassName()
    {
        return static::class;
    }

    private static function Execute($sql, $params = [])
    {
        $db = DataBase::getInstance();
        $pdostatement = $db->prepare($sql);
        $pdostatement->execute($params);
        return $pdostatement->fetchAll(\PDO::FETCH_CLASS, self::getClassName());
    }

    public static function getAll($limit = null, $offset = null)
    {
        $sql = "select * from " . self::getEntityName();
        if ($limit !== null && $offset !== null) {

            error_log("Limit: $limit, Offset: $offset");
            $sql .= " LIMIT $limit OFFSET $offset";
        }
        error_log("SQL Query: $sql");

        return self::Execute($sql);
    }


    public static function getById(int $id)
    {
        $sql = "select * from " . self::getEntityName() . " where id=:id";
        $result = self::Execute($sql, ['id' => $id]);
        return $result[0];
    }

    public static function insert(array $datas)
    {
        $keys = array_keys($datas);
        $fields = implode(",", $keys);
        $placeholders = ':' . implode(', :', $keys);

        $sql = "insert into " . self::getEntityName() . " ($fields) values ($placeholders)";

        $db = DataBase::getInstance();
        $pdostatement = $db->prepare($sql);
        return $pdostatement->execute($datas);
    }

    public static function delete(int $id)
    {
        $sql = "delete from " . self::getEntityName() . " where id=:id";
        $db = DataBase::getInstance();
        $pdostatement = $db->prepare($sql);
        return $pdostatement->execute(['id' => $id]);
    }

    public static function update(int $id, array $datas)
    {
        $setClauses = [];
        foreach ($datas as $key => $value) {
            $setClauses[] = "$key=:$key";
        }
        $sql = "update " . self::getEntityName() . " set " . implode(", ", $setClauses) . " where id=:id";

        $datas['id'] = $id;
        $db = DataBase::getInstance();
        $pdostatement = $db->prepare($sql);
        return $pdostatement->execute($datas);
    }
}
