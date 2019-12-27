<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Tkotosz\FooProject\Model\Product;
use Tkotosz\FooProject\Infrastructure\Repository\InMemoryCatalog;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $catalog;

    public function __construct()
    {
        $this->catalog = new InMemoryCatalog();
    }

    /**
     * @Given a product named :name and priced £:price was added to the catalogue
     */
    public function aProductNamedNameAndPricedPsPriceWasAddedToTheCatalogue($name, $price)
    {
        $aProduct = Product::namedAndPriced($name, $price);
        $this->catalog->add($aProduct);
    }
}
