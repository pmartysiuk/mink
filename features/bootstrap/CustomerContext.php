<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Page\CustomerCreationPage;
use Page\CustomerPage;

class CustomerContext implements Context
{
    /**
     * @var CustomerPage
     */
    private $customerPage;

    /**
     * @var CustomerCreationPage
     */
    private $customerCreationPage;

    /**
     * @param CustomerPage $customerPage
     */
    public function __construct(CustomerPage $customerPage, CustomerCreationPage $customerCreationPage)
    {
        $this->customerPage = $customerPage;
        $this->customerCreationPage = $customerCreationPage;
    }

    /**
     * @Given /^I visited the customer creation page/
     */
    public function iVisitedTheCustomerCreationPage()
    {
        $this->customerCreationPage->open();
    }

    /**
     * @When I create new customer with data:
     */
    public function iCreateNewCustomerWithData(TableNode $table)
    {
//        $this->customerCreationPage.createCustomerWithData($table);
    }





}
