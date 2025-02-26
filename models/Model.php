<?php
require "Database.php";
abstract class Model
{
    protected static $db;

    public static function init() {
        if (!self::$db) {
            self::$db = new Database();
        }
    }

    abstract protected static function getTableName(): string;

    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();

        $records = self::$db->query($sql)->fetchAll();
        return  $records;
    }

    public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id";
        $params = [':id' => $id];

        $record = self::$db->query($sql, $params)->fetch();
        return $record;
    }

    public static function create($data) {
        self::init();
        $fields = array_keys($data);
        $values = array_values($data);
        $placeholders = array_map(function ($field) {
            return ":$field";
        }, $fields);
        $sql = "INSERT INTO " . static::getTableName() . " (".implode(',', $fields).") VALUES (".implode(',', $placeholders).")";
        $params = array_combine($placeholders, $values);

        self::$db->query($sql, $params);
    }

    public static function save($data)
    {
        self::init();
        $fields = array_keys($data);
        $values = array_values($data);
        $placeholders = array_map(function ($field) {
            return "$field = :$field";
        }, $fields);
        $sql = "UPDATE " . static::getTableName() . " SET ".implode(',', $placeholders)." WHERE id = :id";
        $params = array_combine($fields, $values) + ['id' => $data['id']];

        self::$db->query($sql, $params);
    }

    public static function delete($id) {
        self::init();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = :id";
        $params = [':id' => $id];

        self::$db->query($sql, $params);
    }

}