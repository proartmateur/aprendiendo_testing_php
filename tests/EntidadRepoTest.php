<?php

namespace Tests;

use Src\EntidadRepo;
//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\TestCase;
class EntidadRepoTest extends TestCase
{

    public function test_eloquent_repo()
    {

        $repo = new EntidadRepo();
        var_dump($repo->entities);
        $this->assertTrue(true);
    }

    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}
