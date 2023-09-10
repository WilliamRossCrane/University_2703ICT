# README for Tasks 2, 3, and 4 - Greeting Web Application

## Introduction

This is a web application project that demonstrates form generation, submission, processing, and displaying results. The application allows users to input their name and age and generates a personalized greeting along with their age for the next year.

## Task 2 - Basic Greeting Web Application

### Overview

The basic greeting web application consists of three files: `greeting.php`, `index.html`, and `show.php`.

### Flow of Execution

1. `index.html`: This is the entry point of the application and provides a simple form to input name and age. The form submits the data to `greeting.php` for processing.

2. `greeting.php`: This script receives the form data, generates a personalized greeting, and displays it along with the age for the next year. It also provides a link to view the source code of the script in `show.php`.

3. `show.php`: This script displays the source code of `greeting.php` without interpreting PHP or HTML elements.

### Task 3 - Integrating with Laravel

### Flow of Execution

1. `web.php`: This file defines the routes for the Laravel application.

2. `Task4Controller`: This controller handles the logic for the greeting page. It receives the form data, processes it, and passes it to the `greeting.blade.php` view.

3. `greeting.blade.php`: This Blade template is used to display the personalized greeting along with the age for the next year. It extends the `layout.blade.php` template.

4. `layout.blade.php`: This Blade template serves as the master layout for the application. It defines the common structure and includes the necessary CSS and JS files.

### Advantages of Template Inheritance

Template inheritance allows us to define a common layout that can be reused across multiple views. It promotes code reusability, reduces redundancy, and makes it easier to maintain a consistent look and feel throughout the application.

## Task 4 - Security Measures

To prevent cross-site scripting attacks and cross-site request forgery attacks, the following measures have been implemented:

1. Cross-Site Scripting (XSS) Prevention:
   - Input validation and sanitization are applied to user input to prevent the execution of malicious scripts.
   - The use of Blade templates in Laravel automatically escapes output, preventing unintended script execution.

2. Cross-Site Request Forgery (CSRF) Prevention:
   - Laravel automatically generates CSRF tokens for each user session and includes them in forms. This prevents unauthorized requests from being processed.

## Conclusion

This README provides an overview of the Greeting Web Application, its integration with Laravel, and the security measures implemented. It serves as a guide for understanding the flow of execution and the structure of the project.

