<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Created by PhpStorm.
 * User: pavelmartysiuk
 * Date: 8/7/16
 * Time: 2:41 PM
 */
class MotorOfferPage extends Page
{
    /**
     * @var string
     */
    protected $path = '/offer/motor';

    public function openCreateNewMotorQuote()
    {
        $this->getDriver()->mouseOver('.//*[@id="sidemenu-add"]/div/button');
        $this->getDriver()->click('.//*[@id=\'sidemenu-add\']/div/ul/li[1]/a');
    }

    public function fillQuoteByData()
    {


    }
}