<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Created by PhpStorm.
 * User: pavelmartysiuk
 * Date: 8/7/16
 * Time: 2:41 PM
 */
class ChoicesOfferPage extends Page
{
    /**
     * @var string
     */
    protected $path = '/offer/choices';

    protected $elements = array(
        'Insly form' => 'insly-form',
        'Customer name' => 'prop_customer_name',
        'Business description' => 'prop_customer_sanctions_business_description',
        'Established_year' => 'prop_customer_sanctions_established_year',
        'Conditions confirmation No' => '//*[@id="field_prop_conditions_confirmation"]//label[@for="prop_conditions_confirmation_no"]/span',
        'Conditions confirmation Yes' => '//*[@id="field_prop_conditions_confirmation"]//label[@for="prop_conditions_confirmation_yes"]/span',
        'Calculate prices' => '.offercalc .primary'
    );

    public function openCreateNewChoicesQuote()
    {
        $this->getDriver()->click('//span[@class="panel-action-add"]');
    }

    public function fillQuoteByBaseData()
    {
        $this->fillField($this->elements['Customer name'], 'Customer name');
        $this->fillField($this->elements['Business description'], 'Business description');
        $this->fillField($this->elements['Established_year'], '2000');
        $this->getDriver()->click($this->elements['Conditions confirmation Yes']);
    }
}