<?php
/**
 * Created by PhpStorm.
 * User: pavelmartysiuk
 * Date: 8/7/16
 * Time: 1:45 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * Class Loginpage
 * @package Page
 */
class Loginpage extends Page
{

    protected $elements = array(
        'Login form' => 'login-box',
        'User name' => 'login_username',
        'Password' => 'login_password',
        'Submit Button' => 'login_submit'
    );

    /**
     * @param string $keywords
     *
     * @return Page
     */
    public function loginAsSupport()
    {
        return $this->login('support@insly.com', 'in2014.cr34t1v3');
    }

    /**
     * @param string $username
     * @param string $password
     * @return Page
     */
    public function login($username, $password)
    {
        $this->fillField('login_username', $username);
        $this->fillField('login_password', $password);
        $this->pressButton('login_submit');
//        return $this->getPage('DashboardPage');
    }
}