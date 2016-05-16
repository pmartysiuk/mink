<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements SnippetAcceptingContext
{

    /**
     * @AfterScenario
     */
    public function restoreSession()
    {
        $this->getSession()->reset();
    }



    /**
     * @When I wait for ajax
     */
    public function wait()
    {
        $this->getSession()->wait(5000, 'window.jQuery !== undefined');
    }
    /**
     * @Then :key key with :expectedValue value should be saved in local storage
     */
    public function localStorageKeyWithValue($key, $expectedValue)
    {
        $actualValue = $this->getSession()->evaluateScript('window.localStorage.getItem(\''.$key.'\')');
        $actualValue = str_replace('"','', $actualValue);
        PHPUnit_Framework_Assert::assertEquals($actualValue, $expectedValue);
    }


}
