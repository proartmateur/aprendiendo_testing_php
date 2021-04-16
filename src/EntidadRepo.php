<?php


namespace Src;
use Illuminate\Support\Facades\DB;

class EntidadRepo
{
    public $entities;

    /**
     * EntidadRepo constructor.
     */
    public function __construct()
    {
        $this->entities = DB::statement('SELECT * FROM `entities`');
    }
}
