<?php

namespace QueryBuilder\Mysql;

use PHPUnit\Framework\TestCase;

class SelectTest extends TestCase 
{
    public function testSelectWithoutFilter()
    {
        $select = new Select;
        $select->table('pages');
        
        $actual = $select->getSql();
        $expected = 'SELECT * FROM pages;';
        
        $this->assertEquals($expected, $actual);
    }

    public function testSelectSpecifyingFields()
    {
        $select = new Select;
        $select->table('users');
        $select->fields(['name', 'email']);

        $actual = $select->getSql();

        $expected = 'SELECT name, email FROM users;';

        $this->assertEquals($expected, $actual);
    }
}