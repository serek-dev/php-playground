Feature: Visit Home Page
    As a user
    I want to be able to visit a home page

    Scenario: As anonymous user
        When I visit a home page
        Then I should see hello world message
