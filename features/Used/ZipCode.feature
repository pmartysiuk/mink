Feature: ZipCode popup check
  As User
  I want to fill zip code pop up by data
  To search cars in my area

  Background:
    Given I visited the "used" page
      And I wait for ajax

###################POSITIVE SCENARIOS###################

  Scenario: Zip Code Pop up view
    Then I should see Zip Code pop up
      And Zip pop up contains "Enter your ZIP code" headline
      And Zip pop up contains input field with 'Zip Code' placeholder
      And Zip pop up contains "Confirm" button
      And Zip pop up contains "Close" button

  Scenario Outline: Zip Code popup appears on Search and advanced search buttons
    Given I press "Close" button in Zip pop up
    When I press "<button>" in search used car page
    Then I should see Zip Code pop up
  Examples:
    | button          |
    | Search          |
    | Advanced search |

  Scenario: Save users zip code
    Given I enter "33311" zip code
      And I wait for ajax
    When I press "Confirm" button in Zip pop up
      And I wait for ajax
      And I reload the page
      And I wait for ajax
    Then I should not see Zip Code pop up
    Then "33311" zip code should be displayed in ZIP code input field
      And "zipCode" key with "33311" value should be saved in local storage

###################NEGATIVE SCENARIOS###################

  Scenario Outline: User enter invalid zip code
    Given I enter "<zipCode>" zip code
      And I wait for ajax
    When I press "Confirm" button in Zip pop up
      And I wait for ajax
    Then I should see "<errorMessage>" error text in the Zip code pop up

    Examples:
      | zipCode | errorMessage                    |
      | 00000   | Zip code not found              |
      |         | Please, enter a valid ZIP code. |
      | test    | Please, enter a valid ZIP code. |
