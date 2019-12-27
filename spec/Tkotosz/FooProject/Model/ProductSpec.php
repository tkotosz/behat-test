<?php

namespace spec\Tkotosz\FooProject\Model;

use PhpSpec\ObjectBehavior;
use Tkotosz\FooProject\Model\Product;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }

    public function it_should_be_constructed_through_named_and_priced()
    {
        $this->beConstructedThrough('namedAndPriced');
        $this->shouldHaveType(Product::class);
    }
}
