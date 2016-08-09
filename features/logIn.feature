Feature: Login test

  Scenario: Log In test
    Given I visited the homepage
    When I log in as support
    Then I should see "Insly Technical Support" in the "#user-info>strong" element

  Scenario Outline: Log In validation test
    Given I visited the homepage
    When I log in as "<username>" user "<password>" password
    Then I should see "Error! Please check your login details." in the "#login-content .alert-danger" element
  Examples:
    | username          | password        |
    | support@insly.com | test            |
    | test              | in2014.cr34t1v3 |
    | support@insly.com |                 |
    |                   | in2014.cr34t1v3 |
    |                   |                 |
