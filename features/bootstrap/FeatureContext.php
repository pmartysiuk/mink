<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @Given I wait for ajax
     */
    public function iWaitForAjaxToFinish()
    {
        $this->getSession()->wait(10000, '(typeof(jQuery)=="undefined" || (0 === jQuery.active && 0 === jQuery(\':animated\').length))');
//        sleep(3);
    }

    /**
     * @Given I fill in :element random number
     */
    public function iFillInRandomNumber($element)
    {
        $rnd = mt_rand(10, 15);
        $this->getSession()->getPage()->fillField($element, $rnd);
    }

    /**
     * @When I click on :element element
     */
    public function iClickIn($element)
    {
        $this->getSession()->getDriver()->click($element);
    }

    /**
     * @Then I should see ":value" in the ":attribute" attribute of :element element
     */
    public function iShouldSeeInTheAttributeOfElement($value, $attribute, $element)
    {
        $this->assertSession()->elementAttributeContains('css', $element, $attribute, $value);
    }
}
