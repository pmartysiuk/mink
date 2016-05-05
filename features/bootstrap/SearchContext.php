<?php
use Behat\Behat\Context\Context;
use Page\Homepage;
use Page\Element\SearchResultsNavigation;
class SearchContext implements Context
{
    /**
     * @var Homepage
     */
    private $homepage;
    /**
     * @var HomePageElements
     */
    private $homepageelements;
    /**
     * @var SearchResultsNavigation
     */
    private $searchResultsNavigation;
    /**
     * @param Homepage                $homepage
     * @param SearchResultsNavigation $searchResultsNavigation
     */
    public function __construct(Homepage $homepage, HomePageElements $homepageelements)
    {
        $this->homepage = $homepage;
        $this->homepageelements = $homepageelements;
    }
    /**
     * @Given /^I visited the homepage$/
     */
    public function iVisitedTheHomepage()
    {
        $this->homepage->open();
    }

    /**
     * @When /^I should see the "(?P<tab>[^"]*)" tab$/
     */
    public function iShouldSeeTheTab($tab)
    {
        if ($this->homepageelements->hasMenu($tab)) {
            throw new \LogicException(sprintf('%s tab is present on the page', $tab));
        }
    }
}