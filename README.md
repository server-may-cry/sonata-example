# Code assessment

## Prequel

The main goal of this test is to see how you structure code. It is very important for us to achieve a good quality and 
flexibility.
There is nothing like a *wrong* or *perfect* implementation, if you can explain and argue why you implemented it like 
you did, you are on a good way.
Also a thing you should have in mind; Software development isn´t only about code, it´s about decisions.

## Frame

Timeframe: 1-3 hours

## The scenario

### LegalCase Management

#### User stories

As a Lawyer i want to be able to create and update my cases to have a good overview over my workload.

#### Acceptance Criteria

* You need to be able to CRUD Legal cases
* Each case should be assignable to 1 lawyer
* The application should be able to handle multiple lawyers
* There must be a way to check that the system is working e.g. choose between a ui or unit tests

#### Soft criteria
*nice to have but not necessary*

* Persistence

#### Out of scope

* Login system

#### Additional information

##### Definitions

Basic models which needs to be extended

###### LegalCase

* Lawyer
* Client
* Case description
* Legal field

###### Lawyer

* Firstname
* Lastname
* LegalCases

###### Client

* Firstname
* Lastname
* LegalCases
