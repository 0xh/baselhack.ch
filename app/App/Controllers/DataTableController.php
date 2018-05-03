<?php

namespace App\App\Controllers;

use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Builder;

abstract class DataTableController extends Controller
{
    protected $builder;

    abstract public function builder();

    public function __construct()
    {
        if (! ($this->builder = $this->builder()) instanceof Builder) {
            throw new Exception('Entity builder not instance of Builder.');
        }
    }

    public function index()
    {
        return response()->json([

            'data' => [
                'table' => $this->builder->getmodel()->getTable(),
                'displayable' => array_values($this->getDisplayableColumns()),
                'records' => $this->getRecords(),
            ],

        ]);
    }

    public function getDisplayableColumns()
    {
        return array_diff(
            $this->getDatabaseColumnNames(), $this->builder->getModel()->getHidden()
        );
    }

    protected function getDatabaseColumnNames()
    {
        return Schema::getColumnListing($this->builder->getModel()->getTable());
    }

    protected function getRecords()
    {
        return $this->builder->get($this->getDisplayableColumns());
    }
}
