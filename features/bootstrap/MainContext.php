<?php

use Behat\Behat\Context\Context;
use Page\CustomerPage;
use Page\Homepage;
use Page\Loginpage;
use Page\MotorOfferPage;

class MainContext implements Context
{
    /**
     * @var Homepage
     */
    private $homepage;

    /**
     * @var Loginpage
     */
    private $loginpage;

    /**
     * @var MotorOfferPage
     */
    private $motorOfferPage;

    /**
     * @var CustomerPage
     */
    private $customerPage;

    /**
     * @param Homepage $homepage
     * @param Loginpage $loginpage
     * @param MotorOfferPage $motorOfferPage
     */
    public function __construct(Homepage $homepage, Loginpage $loginpage, MotorOfferPage $motorOfferPage, CustomerPage $customerPage)
    {
        $this->homepage = $homepage;
        $this->loginpage = $loginpage;
        $this->motorOfferPage = $motorOfferPage;
        $this->customerPage = $customerPage;
    }

    /**
     * @Given /^I visited the homepage$/
     */
    public function iVisitedTheHomepage()
    {
        $this->homepage->open();
    }

    /**
     * @Given /^I visited the customer page/
     */
    public function iVisitedTheCustomerPage()
    {
        $this->customerPage->open();
    }

    /**
     * @Given /^I visited the motorOffer page$/
     */
    public function iVisitedThemMotorOfferPage()
    {
        $this->motorOfferPage->open();
    }

    /**
     * @When I log in as support
     */
    public function iLogInAsSupport()
    {
        $this->loginpage->loginAsSupport();
    }

    /**
     * @When I log in as :user user :password password
     */
    public function iLogInAsWrong($user, $password)
    {
        $this->loginpage->login($user, $password);
    }


    /**
     * @Given /^I open create new quote form$/
     */
    public function iOpenCreateNewQuoteForm()
    {
        $this->motorOfferPage->open();
        $this->motorOfferPage->openCreateNewMotorQuote();
    }
}
