Feature: Login

  Scenario: Login
    Given I visited the homepage
      And I wait for ajax
    Then I should see the Sing In button
    Then I should see "Sign In" in the ".sign-in-menu.with-icon" element