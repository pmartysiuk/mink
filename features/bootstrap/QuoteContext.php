<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Page\ChoicesOfferPage;
use Page\CustomerPage;

class QuoteContext implements Context
{
    /**
     * @var ChoicesOfferPage
     */
    private $choicesOfferPage;

    /**
     * @param CustomerPage $customerPage
     */
    public function __construct(ChoicesOfferPage $choicesOfferPage)
    {
        $this->choicesOfferPage = $choicesOfferPage;
    }

    /**
     * @Given I open choices offer creation page
     */
    public function iOpenChoicesQuoteCreation()
    {
        $this->choicesOfferPage->openCreateNewChoicesQuote();
    }

    /**
     * @Given I fill choices offer by base data
     */
    public function iFillChoicesQuoteByBaseData()
    {
        $this->choicesOfferPage->fillQuoteByBaseData();
    }




}
