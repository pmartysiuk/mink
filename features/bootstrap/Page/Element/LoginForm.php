<?php
/**
 * Created by PhpStorm.
 * User: pavelmartysiuk
 * Date: 8/7/16
 * Time: 1:47 PM
 */

namespace Page\Element;

use SensioLabs\Behat\PageObjectExtension\PageObject\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;


class LoginForm extends Element
{

    /**
     * @var array|string $selector
     */
    protected $selector = 'login-box';

    /**
     * @param string $keywords
     *
     * @return Page
     */
    public function login($username, $password)
    {
        $this->fillField('login_username', $username);
        $this->fillField('login_password', $password);
        $this->pressButton('login_submit');
//        return $this->getPage('Search results');
    }

}