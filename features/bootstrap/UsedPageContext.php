<?php

use Behat\Behat\Context\Context;
use Page\Used;
use Page\UsedSearch;

class UsedPageContext implements Context
{
    /**
     * @var Used
     */
    private $used;

    /**
     * @var UsedSearch
     */
    private $usedSearch;

    public function __construct(Used $used, UsedSearch $usedSearch)
    {
        $this->used = $used;
        $this->usedSearch = $usedSearch;
    }
    
    /**
     * @Then I should see Zip Code pop up
     */
    public function iShouldSeeZipCodePopUp()
    {
        expect($this->used->zipCodePopUpPresent());
    }

    /**
     * @Then I should not see Zip Code pop up
     */
    public function iShouldNotSeeZipCodePopUp()
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
        $inputField = $this->used->zipCodePopupInputField();
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

    /**
     * @When I enter :value zip code
     */
    public function iEnterZipCode($value)
    {
        $this->used->zipCodePopupInputField()->setValue($value);
    }

    /**
     * @When I press :button button in Zip pop up
     */
    public function iPressButton($button)
    {
        $this->used->zipCodeBtn($button)->press();
    }

    /**
     * @Then :value zip code is displayed in ZIP code input field
     */
    public function zipCodeIsDisplayedInZipCodeInputField($value)
    {
        $zipCodeValue = $this->used->zipCodeInputField()->getValue();
        PHPUnit_Framework_Assert::assertEquals($zipCodeValue->replaceAll('"',''), $value);
    }

    /**
     * @When I press :button in search used car page
     */
    public function iPressInSearchUsedCarPage($button)
    {
        $this->usedSearch->usedPageElement($button)->press();
    }


}