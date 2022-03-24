<?php

namespace QueryBuilder\Mysql;

class Select
{
    private $table;

    public function table(string $table)
    {
         $this->table = $table;
         return $this;
    }

    public function getSql(): string 
    {
        $query = 'SELECT * FROM %s;';
        return sprintf($query, $this->table);
    }
}