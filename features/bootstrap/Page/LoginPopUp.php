<?php
namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPopUp extends Page
{
    protected $elements = array(
        'Email' => array('xpath' => './/*[@id=\'email\']'),
        'Password' => array('xpath' => './/*[@id=\'password\']'),
        'Sign In Btn' => array('xpath' => './/*[@class=\'box login-popup\']//button[text()=\'Sign In\']'),
    );

    /**
     * @param $element
     * @return \SensioLabs\Behat\PageObjectExtension\PageObject\Element
     */
    public function inputPresent($element)
    {
        return $this->getElement($element);
    }

    





}