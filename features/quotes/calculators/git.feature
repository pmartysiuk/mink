Feature: Check GIT calculator

  @javascript
  Scenario Outline: Check GIT calculator
    Given I visited the homepage
      And I log in as support
      And I am on "/offer/choices"
      And I open choices offer creation page
      And I fill choices offer by base data
      And I select "Coffee Shop" from "prop_customer_sanctions_trade_for_rating"
      And I click on "//*[@for='prop_choicesgit_show']" element
      And I fill in the following:
        | prop_product_choicesgit_vehicle_number | 1     |
        | prop_product_choicesgit_limit_loss     | <limit> |
    When I click on "//td[@class='offercalc']/button" element
      And I wait for ajax
    Then I should see "<total_premium>" in the "value" attribute of "[id=prop_choices_pmt_accelerate_1]" element
#      And I should see "0.00" in the "value" attribute of "[id=prop_choices_pmt_accelerate_tax_iptvat]" element
#      And I should see "175.00" in the "value" attribute of "[id=prop_choices_customerpmt_accelerate_1]" element
#      And I should see "26.25" in the "value" attribute of "[id=prop_choices_pmt_accelerate_commission]" element
  Examples:
    | limit | total_premium |
    | 1000  | 20.00         |
    | 2000  | 40            |
    | 2001  | 50            |
    | 5000  | 125           |
    | 5001  | 100           |


  @javascript
  Scenario Outline: Check GIT calculator for each hazzard
    Given I visited the homepage
    And I log in as support
    And I am on "/offer/choices"
    And I open choices offer creation page
    And I fill choices offer by base data
    And I select "<trade>" from "prop_customer_sanctions_trade_for_rating"
    And I click on "//*[@for='prop_choicesgit_show']" element
    And I fill in the following:
      | prop_product_choicesgit_vehicle_number | 1    |
      | prop_product_choicesgit_limit_loss     | 1000 |
    When I click on "//td[@class='offercalc']/button" element
    And I wait for ajax
    Then I should see "<total_premium>" in the "value" attribute of "[id=prop_choices_pmt_accelerate_1]" element
    And I should see "0.00" in the "value" attribute of "[id=prop_choices_pmt_accelerate_tax_iptvat]" element
    And I should see "175.00" in the "value" attribute of "[id=prop_choices_customerpmt_accelerate_1]" element
    And I should see "26.25" in the "value" attribute of "[id=prop_choices_pmt_accelerate_commission]" element
    Examples:
      | hazard  | trade                                 | total_premium |
      | 1       | Accountants                           | 10.00         |
      | 2       | Taxidermist / Taxidermy               | 12.50         |
      | 3       | Acupuncture / Acupuncturist           | 15.00         |
      | 4       | Acoustic Engineer(s) - Own Premises ? | 17.50         |
      | 5       | Coffee Shop                           | 20.00         |
      | 6       | Bakeries                              | 22.50         |
      | 7       | Leaflet Distribution                  | 25.00         |
      | 8       | Model Maker                           | 30.00         |
      | decline | Aerial Photography                    | 0.00          |