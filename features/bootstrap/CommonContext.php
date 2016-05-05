<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

class CommonContext extends MinkContext implements SnippetAcceptingContext
{

    private $zipCode = ".zip-code";
    private $zipInput = ".inputText>input";
    private $confirmBtn = ".content>div>button";
    private $closeBtn = ".closeBtn-with-text";
    /**
     * @When I sleep for :arg1 seconds
     */
    public function iSleepForSeconds($arg1)
    {
        sleep($arg1);
    }


    /**
     * @When I wait for ajax
     */
    public function wait()
    {
        $this->getSession()->wait(5000, 'window.jQuery !== undefined');
    }

    /**
     * @Then I should see Zip code popup
     */
    public function iShouldSeeZipCodePopup()
    {
        $this->assertElementOnPage($this->zipCode);
    }

    /**
     * @Then I should see :arg1 headline
     */
    public function iShouldSeeHeadline($arg1)
    {
        $this->assertElementContains($this->zipCode, $arg1);
    }

    /**
     * @Then I should see input field with :arg1 placeholder
     */
    public function iShouldSeeInputFieldWithPlaceholder($arg1)
    {

    }

    /**
     * @Then I should see Confirm button
     */
    public function iShouldSeeConfirmButton()
    {
        $this->assertElementOnPage($this->confirmBtn);
    }

    /**
     * @Then I should see close button
     */
    public function iShouldSeeCloseButton()
    {
        $this->assertElementOnPage($this->closeBtn);
    }

}
