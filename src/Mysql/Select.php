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
        return 'SELECT * FROM pages;';
    }
}