<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given something happened in the past
     */
    public function somethingHappenedInThePast()
    {
        // no-op
    }

    /**
     * @When someone does something now
     */
    public function someoneDoesSomethingNow()
    {
        // no-op
    }

    /**
     * @Then something happens
     */
    public function somethingHappens()
    {
        // no-op
    }
}
