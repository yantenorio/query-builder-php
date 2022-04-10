<?php

namespace QueryBuilder\Mysql;

class Select
{
    private $table;
    private $fields = [];
    private $filter = [];

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

    public function filter(Filter $filter) 
    {
        $this->filter = $filter->getSql();
    }

    public function getSql(): string 
    {
        $fields = '*';

        if(!empty($this->fields)) {
            $fields = implode(', ', $this->fields);
        }

        $filter = '';
        if(!empty($this->filter)) {
            $filter = ' ' . $this->filter;
        }

        $query = 'SELECT %s FROM %s%s;';
        return sprintf($query, $fields ,$this->table, $filter);
    }
}