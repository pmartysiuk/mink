Feature: ZipCode popup check
  As User
  I want to fill zipcode pop up by data
  To search cars in my area

  Background:
    Given I visited the "used" page
      And I wait for ajax

  Scenario: Zip Code Pop up
    Then I should see an ".zip-code" element
      And I should see an ".inputText" element
      And I should see an ".content>div>button" element
      And I should see an ".closeBtn-with-text" element

  Scenario: Zip Code Pop up view
    Then I should see Zip Code pop up
      And Zip pop up contains "Enter your ZIP code" headline
      And Zip pop up contains input field with 'Zip Code' placeholder
      And Zip pop up contains "Confirm" button
      And Zip pop up contains "Close" button

  Scenario: Save users zip code
    When I enter "33311" zip code
      And I press "Confirm" button
      And I wait for ajax
      And I reload the page
    And I wait for ajax
#    Then I should not see Zip Code pop up
    Then "33311" zip code is displayed in ZIP code input field
      And "33311" zip code is saved in local storage
      And Search page is displayed
