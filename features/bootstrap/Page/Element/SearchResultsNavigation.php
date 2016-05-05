<?php
namespace Page\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Element;
class SearchResultsNavigation extends Element
{
    /**
     * @var string
     */
    protected $selector = '.menu>ul>li>a';
    /**
     * @return boolean
     */
    public function hasTab($name)
    {
        return $this->hasLink($name);
    }
}