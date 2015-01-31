<?php

namespace AppBundle;

use Elastica\Query;

class LeyQuery
{
    protected $query;

    public function __constructor($queryString)
    {
        $this->query = Query::create($queryString);
    }
}