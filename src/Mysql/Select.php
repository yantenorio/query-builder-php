<?php

namespace QueryBuilder\Mysql;

class Select
{
    private $table;
    private $fields = [];

    public function table(string $table)
    {
         $this->table = $table;
         return $this;
    }

    public function fields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function getSql(): string 
    {
        $fields = '*';

        if(!empty($this->fields)) {
            $fields = implode(', ', $this->fields);
        }

        $query = 'SELECT %s FROM %s;';
        return sprintf($query, $fields ,$this->table);
    }
}