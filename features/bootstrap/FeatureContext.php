<?php

use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
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
     * @When /^I visit a home page$/
     */
    public function iVisitAHomePage()
    {
        $this->iAmOnHomepage();
    }

    /**
     * @Then /^I should see hello world message$/
     */
    public function iShouldSeeHelloWorldMessage()
    {
//        $this->assertElementContainsText('body', 'Hello world!');
    }
}
