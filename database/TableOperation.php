<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;

/**
 * Represents a table Operation.
 */
abstract class TableOperation
{
    /**
    * Database Schema
    *
    * @var Illuminate\Database\Schema\Builder
    */
    protected $schema;

    /**
    * Constructor.
    *
    * @param Illuminate\Database\Schema\Builder $schema
    *
    * @return null
    */
    public function __construct($schema)
    {
        $this->schema = $schema;
    }
}
