<?php

namespace spec\Tkotosz\FooProject\Infrastructure\Repository;

use PhpSpec\ObjectBehavior;
use Tkotosz\FooProject\Infrastructure\Repository\InMemoryCatalog;

class InMemoryCatalogSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryCatalog::class);
    }

    public function it_should_add()
    {
        $this->add();
    }
}
