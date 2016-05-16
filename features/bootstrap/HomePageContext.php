<?php
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
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
     * @param Used $used
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
        expect($this->homepage->signInPresent());
    }

    /**
     * @When I click on Sign In element
     */
    public function iClickOnSignInElement()
    {
        $this->homepage->openSignIn();
    }

    /**
     * @When I click on login pop up :element element
     * @param $element
     */
    public function iClickOnElementInLogInPoUp($element)
    {
        $this->loginPopUp->loginPopUpElement($element)->click();
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
        expect($this->loginPopUp->loginPopUpElement($element));
    }

    /**
     * @When I fill new user form with data:
     * @internal param TableNode $table
     * @param TableNode $fields
     */
    public function iCreateNewUserWithData(TableNode $fields)
    {
        foreach ($fields->getRowsHash() as $field => $value) {
            $this->loginPopUp->loginPopUpElement($field)->setValue($value);
        }
    }

    /**
     * @When I create new users with data:
     * @param TableNode $table
     */
    public function iCreateNewUsersWithData(TableNode $table)
    {

        foreach ($table->getColumnsHash() as $field => $value) {
            var_dump($field);

            die;
            $this->loginPopUp->loginPopUpElement('First Name')->setValue($row['First Name']);
            $this->loginPopUp->loginPopUpElement('Last Name')->setValue($row['Last Name']);
            $this->loginPopUp->loginPopUpElement('Email')->setValue($row['Email']);
            $this->iClickOnElementInLogInPoUp('Go button');
            sleep(1);
            $this->loginPopUp->loginPopUpElement('Address')->setValue($row['Address']);
            $this->loginPopUp->loginPopUpElement('City')->setValue($row['City']);
            $this->loginPopUp->loginPopUpElement('ZIP Code')->setValue($row['ZIP Code']);
            $this->loginPopUp->loginPopUpElement('Phone Number')->setValue($row['Phone Number']);
            $this->iClickOnElementInLogInPoUp('Next button');
            sleep(1);
        }
    }

}