<?php

namespace Acceptance\Context;

use Acceptance\Page\HomePage;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

class WebContext extends PageObjectContext
{
    /** @var HomePage */
    private $homePage;

    public function __construct(HomePage $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @When I visit the home page
     */
    public function iVisitTheHomePage()
    {
        // using the page object factory
        // page object factory was injected to the context by the page object extension
        // see PageObjectAware interface
        $page = $this->getPage('HomePage');
        $page->open();
    }

    /**
     * @When I visit the home page 2
     */
    public function iVisitTheHomePage2()
    {
        // homepage was injected through the constructor by the page object extension
        $this->homePage->open();
    }
}