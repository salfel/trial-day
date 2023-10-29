<p align="center"><a href="https://additive.eu" target="_blank"><img src="https://additive-trial-day.s3.eu-central-1.amazonaws.com/logo.png" width="400"></a></p>

# 03 Quiz App

## Introduction

This repository includes a simple quiz cli application. With following commands:

### Answer questions

```php
php artisan quiz
```

### List all answers

```php
php artisan answers
```

## Challenges

1. This quiz has some bugs. Your challenge is to fix all bugs, so the expected result is:

![Quiz](assets/quiz.gif)

2. Change the text `Who is the most fascinating person you’ve meet` to `Who is the most fascinating person you’ve met`

3. Push the changes to your fork including your changes of 1. + 2. and describe some edge cases of this code.

**Edge Cases**

One possible edge case would be, when the answer contains a comma, the answer will be split into two, which then breaks
the table

It also could break the table, if the answer contains a new line character, so it would be interpreted by the program as
a new question
