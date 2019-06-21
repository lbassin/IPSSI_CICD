# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature:
  Test feature

  @javascript
  Scenario: Displaying home page
    Given I am on the homepage
    Then I should see "It doesn't work"

  Scenario: Executing home page javascript
    Given I am on the homepage
    Then I should see "test"
