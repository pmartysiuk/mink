<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @When I wait for ajax
     */
    public function wait()
    {
        $this->getSession()->wait(5000, 'window.jQuery !== undefined');
    }
    /**
     * @Then :value zip code is saved in local storage
     */
    public function zipCodeIsSavedInLocalStorage($value)
    {
        $actualZip = $this->getSession()->evaluateScript('window.localStorage.getItem(\'zipCode\')');
        PHPUnit_Framework_Assert::assertEquals($actualZip, $value);
    }


}
