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
}