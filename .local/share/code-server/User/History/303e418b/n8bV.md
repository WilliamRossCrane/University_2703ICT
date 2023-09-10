# Task 2 – Personal Details Application (peer review exercise) README

## Overview

The Personal Details Application is a PHP-based web application designed to collect and display personal details of users. It consists of two main files: `index.html` and `show_details.php`.

## Form Generation and Submission

1. `index.html`: This file contains an HTML form with various input fields to gather personal details such as name, age, country, likes (radio buttons), dislikes (checkboxes), and a description (textarea).
2. When the user submits the form, the data is sent to the server using the HTTP GET method. The form data is encoded as URL parameters and appended to the URL in the following format:
   ```
   show_details.php?name=<value>&age=<value>&country=<value>&likes=<value>&dislikes[]=...&description=<value>
   ```

## Form Data Processing and Displaying Results

3. `show_details.php`: Upon form submission, this PHP script receives the form data through the URL parameters (`$_GET` superglobal) and stores them in corresponding variables (`$name`, `$age`, `$country`, `$likes`, `$dislikes`, and `$desc`).
4. The script then displays the entered personal details in a well-structured table format using a combination of HTML and PHP.

## How to Call `show_details.php` via URL Parameters

To call the `show_details.php` script by entering parameters into the URL, follow these steps:

1. Replace `<value>` with the appropriate values for each parameter you want to pass. The URL should be constructed as follows:
   ```
   https://yourdomain.com/webAppDev/week3/week3/personal-details/show_details.php?name=<value>&age=<value>&country=<value>&likes=<value>&dislikes[]=...&description=<value>
   ```

2. For example, if you want to display the details for a user named "John" from the USA, who likes "Swimming" and dislikes "Cats" and "Fish," and has a description "I love outdoor activities," construct the URL as follows:
   ```
   https://s5096657.elf.ict.griffith.edu.au/webAppDev/week3/week3/personal-details/show_details.php?name=John&age=21-30&country=USA&likes=Swimming&dislikes[]=Cats&dislikes[]=Fish&description=I+love+outdoor+activities
   ```

3. Enter the constructed URL in your browser and hit Enter. The `show_details.php` script will process the parameters and display the personal details in the table format on the page.

## Feedback

Thank you for reviewing the Personal Details Application. Please provide feedback on the application's functionality and the clarity of the explanation. If you have any questions or suggestions for improvement, feel free to reach out.

For any further assistance, contact the repository owner.
