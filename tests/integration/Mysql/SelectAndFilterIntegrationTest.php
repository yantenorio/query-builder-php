<?php

namespace QueryBuilder\Mysql;

use PHPUnit\Framework\TestCase;

class SelectAndFilterIntegrationTest extends TestCase
{
    public function testSelectWithFilterWhereAndOrder()
    {
        $select = new Select;
        $select->table('users');

        $filter = new Filter;
        $filter->where('id', '=', 1);
        $filter->orderBy('created', 'desc');

        $select->filter($filter);

        $actual = $select->getSql();
        $expected = 'SELECT * FROM users WHERE id=1 ORDER BY created desc;';


        $this->assertEquals($expected , $actual);
    }
}
