<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Model;

trait OrderItemTrait
{

    private $foo;

    public function getFoo()
    {
        return $this->foo;
    }

    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

}