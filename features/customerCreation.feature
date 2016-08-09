Feature: Customer creation

  @javascript
  Scenario: Create valid customer
    Given I visited the homepage
      And I log in as support
      And I visited the customer creation page
      And I fill in the following:
        | customer_name   | customer_name      |
        | customer_email  | customer@email.com |
        | customer_phone  | 123456789          |
        | customer_mobile | 987654321          |
        | customer_fax    | 123123123          |
        | customer_url    | customerurl.com    |
    When I press "submit_save"
    Then I should see "Customer: name" in the "#page-customer>h1" element



      And I should see "name"
      And I should see "customer@email.com"
      And I should see "123456789"
      And I should see "987654321"
      And I should see "123123123"
      And I should see "test.com"


