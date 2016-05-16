<?php
namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPopUp extends Page
{
    protected $elements = array(
        'Email' => '[id=email]',
        'Password' => '[id=password]',
        'Sign In Btn' => array('xpath' => './/*[@class=\'box login-popup\']//button[text()=\'Sign In\']'),
        'Sign In Link' => array('xpath' => './/a[text()=\'Sign In\']'),
        'Create an Account' => array('xpath' => './/a[text()=\'Create an Account\']'),
        'First Name' => '[id=firstName]',
        'Last Name' => '[id=lastName]',
        'Address' => '[id=address]',
        'City' => '[id=city]',
        'State' => '[id=state]',
        'ZIP Code' => '[id=zipCode]',
        'Password Two' => '[id=passwordTwo]',
        'Phone Number' => '[id=phoneNumber]',
        'Go button' => array('xpath' => './/button[text()=\'Go\']'),
        'Next button' => array('xpath' => './/button[text()=\'Next\']'),
        'Create My Account button' => array('xpath' => './/button//*[text()=\'Create My Account\']'),
    );

    /**
     * @param $element
     * @return \SensioLabs\Behat\PageObjectExtension\PageObject\Element
     */
    public function loginPopUpElement($element)
    {
        return $this->getElement($element);
    }
    


}