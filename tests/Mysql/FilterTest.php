<?php

namespace QueryBuilder\Mysql;

use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase 
{
    public function testWhere()
    {
        $filter = new Filter;

        $filter->where('id', '=', 1);

        $actual = $filter->getSql();

        $expected = 'WHERE id=1';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderBy()
    {
        $filter = new Filter;

        $filter->where('id', '=', 1);
        $filter->orderBy('created', 'desc');

        $actual = $filter->getSql();

        $expected = 'WHERE id=1 ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderByAndSelect()
    {
        $filter = new Filter;

        $filter->orderBy('created', 'desc');

        $actual = $filter->getSql();

        $expected = 'ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }
}