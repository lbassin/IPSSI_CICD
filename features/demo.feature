# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature:
  Test feature

  Scenario: Displaying home page
    Given I am on the homepage
    Then I should see "It works"

  Scenario: Executing home page javascript
    Given I am on the homepage
    Then I should see "test"