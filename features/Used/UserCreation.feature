Feature: User creation
  As user
  I want to create profile
  To use all features of CarSaver

  Scenario: Sign in from
    When I click on Sign In element
    Then I should see Sign In form
    And I should see "Email" element
    And I should see "Password" element
    And I should see "Sign In Btn" element

  Scenario: Create profile
    Given I visited the homepage
      And I wait for ajax
      And I click on Sign In element
      And I click on login pop up "Create an Account" element
    When I create new users with data:
      | Email               | First Name | Last Name | Address         | City    | State      | ZIP Code | Phone Number   | Password  | Password Two |
      | RULESA@05520161.com | WILLIE     | BROUGHTON | 9009 W MA #1901 | EVERETT | Washington | 98208    | (313) 867-5309 | 123456789 | 123456789    |
#    When I fill new user form with data:
#      | Email      | RULESA@05520161.com |
#      | First Name | WILLIE              |
#      | Last Name  | BROUGHTON           |
#      And I click on login pop up "Go button" element
#      And I fill new user form with data:
#        | Address      | 9009 WMA #1901 |
#        | City         | EVERETT        |
#        | ZIP Code     | 98208          |
#        | State        | Washington     |
#        | Phone Number | (313)867-5309  |
#      And I click on login pop up "Next button" element
#      And I fill new user form with data:
#        | Password     | 123456789 |
#        | Password Two | 123456789 |
#      And I click on login pop up "Create My Account button" element
      And I wait for ajax
    Then I should see "Log Out"