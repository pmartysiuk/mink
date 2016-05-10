<?php

namespace Page;


use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class UsedSearch extends Page
{
    protected $path = '/used';

    protected $elements = array(
        'Location miles' => array('xpath' => './/*[@id=\'location\']'),
        'ZIP code' => '',
        'Make'=> array('xpath' => './/*[@id=\'make\']'),
        'Model' => array('xpath' => '//div[@class=\'item\']//button[@id=\'model\']'),
        'Year'=> array('xpath' => '//div[@class=\'item year\']//button[@id=\'model\']'),
        'Mileage' => array('xpath' => './/*[@id=\'mileage\']'),
        'Min Price'=> array('xpath' => '(//div[@class=\'slider-input-value\'])[1]'),
        'Max Price'=> array('xpath' => '(//div[@class=\'slider-input-value\'])[2]'),
        'Search' => array('xpath' => '//button[@class=\'default-button\']'),
        'Advanced search' => array('xpath' => '//button[@class=\'grey-button\']'),
    );

    public function usedPageElement($element)
    {
        return $this->getElement($element);
    }





}