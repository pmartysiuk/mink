<?php
use Behat\Behat\Context\Context;
use Page\Homepage;
use Page\LoginPopUp;
use Page\Used;
use Page\Element\SearchResultsNavigation;

class HomePageContext implements Context
{
    /**
     * @var Homepage
     */
    private $homepage;
    /**
     * @var Used
     */
    private $used;
    /**
     * @var LoginPopUp
     */
    private $loginPopUp;

    /**
     * @param Homepage $homepage
     * @param LoginPopUp $loginPopUp
     */
    public function __construct(Homepage $homepage, LoginPopUp $loginPopUp, Used $used)
    {
        $this->homepage = $homepage;
        $this->loginPopUp = $loginPopUp;
        $this->used = $used;
    }
    /**
     * @Given I visited the homepage
     */
    public function iVisitedTheHomepage()
    {
        $this->homepage->open();
    }

    /**
     * @Given I visited the :pageName page
     */
    public function iVisitedThePage($pageName)
    {
        expect(isset($this->$pageName));
        $this->$pageName->open();
    }

    /**
     * @Then I should see the Sign In button
     */
    public function iShouldSeeTheSignInButton()
    {
        exp($this->homepage->signInPresent());
    }

    /**
     * @When I click on Sign In element
     */
    public function iClickOnElement()
    {
        $this->homepage->openSignIn();
    }

    /**
     * @Then I should see Sign In form
     */
    public function iShouldSeeForm()
    {
        expect($this->homepage->signInFormPresent());
    }

    /**
     * @Then I should see :element element
     */
    public function iShouldSeeElement($element)
    {
        expect($this->loginPopUp->inputPresent($element));
    }



}