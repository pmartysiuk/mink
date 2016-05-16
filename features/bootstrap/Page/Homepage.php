<?php
namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class Homepage extends Page
{
    /**
     * @var string
     */
    protected $path = '/';

    protected $elements = array(
        'Sign In' => '.sign-in-menu.with-icon',
        'Log In Form' => '.login-step-1',
    );

    /**
     * @return \SensioLabs\Behat\PageObjectExtension\PageObject\Element
     */
    public function getSignIn()
    {
        return $this->getElement('Sign In');
    }

    /**
     * @return bool
     */
    public function signInPresent()
    {
        $SignIn = $this->getSignIn();
        return $SignIn;
    }

    /**
     * @return bool
     */
    public function signInFormPresent()
    {
        $SignInForm = $this->getElement('Log In Form');
        return $SignInForm;
    }

    public function openSignIn()
    {
        $this->getSignIn()->click();
    }
}
