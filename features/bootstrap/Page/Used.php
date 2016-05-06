<?php
namespace Page;


use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class Used extends Page
{
    protected $path = '/used';

    protected $elements = array(
        'Zip Code' => '.zip-code',
        'Headline' => '.content>div>h3',
        'Input' => '.inputText>input',
        'Confirm' => '.content>div>button',
        'Close' => '.closeBtn-with-text',
        'Zip Code Input' => '.item>input',
    );

    public function zipCodePopUpPresent()
    {
        return $this->getElement('Zip Code');
    }

    public function zipCodeHeadline()
    {
        return $this->getElement('Headline');
    }

    public function zipCodePopupInputField()
    {
        return $this->getElement('Input');
    }

    public function zipCodeBtn($button)
    {
        return $this->getElement($button);
    }

    public function zipCodeInputField()
    {
        return $this->getElement('Zip Code Input');
    }


}