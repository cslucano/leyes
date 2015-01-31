<?php

namespace AppBundle;

use Elastica\Facet\Terms;
use Elastica\Query;

class LeyQueryFactory
{
    /** @var Query $query  */
    private $query;

    public function __construct($queryString) {
        $this->query = Query::create($queryString);
    }

    public static function create($queryString)
    {
        return new LeyQueryFactory($queryString);
    }

    public function agregarFacet($name, $field) {
        $facet = new Terms($name);
        $facet->setField($field);
        $this->query->addFacet($facet);

        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }
}