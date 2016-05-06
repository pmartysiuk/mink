<?php

use Behat\Behat\Context\Context;
use Page\Used;

class UsedPageContext implements Context
{
    /**
     * @var Used
     */
    private $used;

    public function __construct(Used $used)
    {
        $this->used = $used;
    }
    
    /**
     * @Then I should see Zip Code pop up
     */
    public function iShouldSeeZipCodePopUp()
    {
        expect($this->used->zipCodePopUpPresent());
    }

    /**
     * @Then Zip pop up contains :text headline
     * @param $text
     */
    public function zipPopUpContainsHeadline($text)
    {
        PHPUnit_Framework_Assert::assertEquals($this->used->zipCodeHeadline()->getText(), $text);
    }

    /**
     * @Then Zip pop up contains input field with :text placeholder
     */
    public function zipPopUpContainsInputFieldWithPlaceholder($text)
    {
        $inputField = $this->used->zipCodeInputField();
        expect($inputField);
        PHPUnit_Framework_Assert::assertEquals($inputField->getAttribute('placeholder'), $text);
    }

    /**
     * @Then Zip pop up contains :button button
     */
    public function zipPopUpContainsButton($button)
    {
        expect($this->used->zipCodeBtn($button));
    }
}