<?php
namespace Page\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Element;

class HomePageElements extends Element
{
    /**
     * @var string
     */
    protected $signIn = '.sign-in-menu.with-icon';
    protected $menu = "div[@class='menu']";

    /**
     * @param $menu
     * @return bool
     */
    public function hasMenu($menu)
    {
        return $this->has('xpath', $this->menu);
    }

    /**
     * @return bool
     */
    public function singInPresent()
    {
        return $this->has('css',$this->signIn);
    }





}