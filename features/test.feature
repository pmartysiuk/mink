Feature: Login

  Background:
    Given I visited the "homepage" page
      And I wait for ajax

  Scenario: Sign In button presents on the main page
    Then I should see the Sign In button

  Scenario: Sign in from
    When I click on Sign In element
    Then I should see Sign In form
      And I should see "Email" element
      And I should see "Password" element
      And I should see "Sign In Btn" element

  Scenario: User Sign In with valid credentials
    Given I click on Sign In element
      And I fill in the following:
        | email    | RULESA@05520161.com |
        | password | 123456789           |
    When I press "Sign In"
      And I wait for ajax
    Then I should see "Log Out"

  Scenario: Zip Code Pop up
    Given I am on "/used"
      And I wait for ajax
    Then I should see an ".zip-code" element
      And I should see an ".inputText" element
      And I should see an ".content>div>button" element
      And I should see an ".closeBtn-with-text" element

  Scenario: Zip Code Pop up
    Given I visited the "used" page
      And I wait for ajax
    Then I should see Zip Code pop up
      And Zip pop up contains "Enter your ZIP code" headline
      And Zip pop up contains input field with 'Zip Code' placeholder
      And Zip pop up contains "Confirm" button
      And Zip pop up contains "Close" button
