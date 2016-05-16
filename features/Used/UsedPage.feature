Feature: Find used vehicle
  As User
  I want to find used vehicle
  To to choose one

  Background:
    Given I visited the "used" page
      And I wait for ajax

###################POSITIVE SCENARIOS###################

  Scenario: Not logged in user search for a used vehicle
    When I press "Search" in search used car page