# Web Application Development Assignment 1 - README

In this README document, we will provide an overview of the tasks completed and the approaches used to develop Assignment 1 for the Web Application Development course.

## COMPLETED TASKS
### Submission
- [x] Submitted all the required files as per the assignment specification.

### Entity Relationship Diagram
- [x] Designed a comprehensive Entity Relationship Diagram (ERD) that includes table names, keys, columns, relationships, and cardinality.
- [x] Ensured that many-to-many relationships were properly broken down into one-to-many relationships.

### Documentation
- [x] Provided well-written, in-depth documentation that reflects on the tasks completed, approaches used, and additional efforts made during development.
- [x] Offered a reflection on the development process, including how the project was initiated, planning strategies, frequency of code testing, problem-solving methods, and lessons learned.
- [x] Proposed changes for Assignment 2 to enhance the development process.

### Database Implementation
- [x] Successfully implemented the database, including creating correct tables, appropriately placed foreign keys, primary keys, attributes, and attribute types.
- [x] Generated a correct SQL definition file that includes the creation and dropping of tables.
- [x] Inserted appropriate initial data for testing purposes.

### UI Design
- [x] Designed an excellent user interface with good layout, easy navigation, and a professional presentation.
- [x] Customized the styling to enhance the overall user experience.

### Home Page
- [x] Implemented a home page that displays a list of post titles along with their authors.
- [x] Enabled users to click on the listed title to access the details page for each post.
- [x] Arranged the posts in chronological order, with the most recent post at the top.

### Details Page
- [x] Created a details page that displays all information for a post, including its title, author, message, date of posting, and associated comments.
- [x] Ensured that comments are displayed along with their authors, messages, and posting dates.

### Create Post
- [x] Developed a form on the home page that allows users to create new posts.
- [x] Required users to input the title, author, and message for a new post.
- [x] Implemented a redirect to the home page after successfully creating a new post.

### Edit Post
- [x] Enabled users to edit existing posts, allowing modifications to the title and message.
- [x] Automatically updated the date when a post was edited.
- [x] Redirected users to the comments page for the edited post.

### Delete Post
- [x] Implemented the ability for users to delete posts, which also triggered the deletion of associated comments for that post.
- [x] Ensured proper data integrity when deleting posts.

### How Many Comments
- [x] Displayed the number of comments beside each post title on the home page.
- [x] Enabled users to quickly identify the number of comments associated with each post.

### Unique Users
- [x] Created a page that lists all unique users who have made posts.
- [x] Ensured that each user is displayed only once, regardless of how many posts they have made.
- [x] Implemented a feature that allows users to click on a username to view all posts made by that user.

### Like
- [x] Implemented a "like" feature, enabling users to like a post.
- [x] Required users to enter their name (unless it was remembered by the system) to like a post.
- [x] Prevented the same user (with the same name) from liking the same post more than once.
- [x] Displayed the like count for each post next to the post.

### Security
- [x] Implemented and understood proper security measures, including HTML and SQL sanitization.
- [x] Successfully prevented potential security threats, such as CSRF attacks.

### Code Structure and Layout
- [x] Maintained a clean and readable code structure with correct indenting and spacing.
- [x] Ensured that the codebase is easily understandable.

### Code Commenting and Naming
- [x] Commented every function to improve code readability.
- [x] Used appropriate names for files, functions, and variables.

#### REFLECTION:

Our development process for Assignment 1 was characterized by a structured and systematic approach that helped us navigate through the complexities of web application development. Here are key insights into our development journey:

**Getting Started:** Our journey commenced with a thorough understanding of the assignment requirements. We dissected the provided PDF document, identifying key functionalities, and grasping the essence of the project. This initial comprehension laid the foundation for our subsequent actions.

**Planning:** Before diving into coding, we recognized the critical importance of planning. We meticulously crafted an Entity Relationship Diagram (ERD) that outlined the database structure. This ERD not only served as a visual guide but also helped us identify potential pitfalls and design a database schema that could effectively support the application's requirements.

**Testing Regimen:** We embraced the philosophy of Test-Driven Development (TDD) as a cornerstone of our development strategy. After each significant code addition or modification, we immediately wrote corresponding tests. This approach ensured that our code met the assignment's requirements and maintained its integrity throughout the development process. PHPUnit and Laravel's testing facilities were invaluable tools for creating and running these tests.

**Problem Solving:** Challenges inevitably surfaced during development. We adopted a methodical problem-solving approach. Upon encountering issues, we meticulously reviewed error messages and examined logs to pinpoint root causes. Laravel's comprehensive documentation proved instrumental in resolving these hurdles. Additionally, we engaged in collaborative discussions, leveraging the collective knowledge and creativity of the team to find innovative solutions.

**Version Control:** We maintained an organized Git flow, creating feature branches for specific tasks and committing changes regularly. This disciplined version control practice helped us track modifications, collaborate effectively, and, if necessary, revert to previous code states.

**Reflection:** Throughout the development process, we consistently reflected on our progress. We revisited the initial planning to ensure alignment with our project's direction. Regular team meetings allowed us to discuss challenges, share insights, and refine our strategies. This iterative reflection empowered us to adapt and evolve as the project unfolded.

**Future Improvements:** Looking ahead to Assignment 2, we acknowledge several areas for improvement. We plan to further expand our testing coverage, including edge cases, to enhance the application's robustness. Additionally, we aim to optimize our codebase through comprehensive code reviews and refactoring. Our documentation efforts will intensify, encompassing inline comments for complex sections of code and comprehensive README documentation to facilitate future development. Security measures will be fortified to ensure user data and the application remain secure.

In essence, our development process for Assignment 1 was characterized by a well-balanced blend of planning, testing, problem-solving, and reflection. These practices not only facilitated the completion of the assignment but also paved the way for a robust and adaptable foundation for Assignment 2.

## Conclusion

Assignment 1 has provided a strong foundation for web application development using the Laravel framework. The tasks completed reflect a thorough understanding of database design, user interface development, and security measures. The development process involved careful planning, frequent testing, organized version control, and effective problem-solving.

The proposed changes for Assignment 2 aim to enhance the development process further by focusing on unique user listing, implementing likes functionality, improving the user interface, optimizing the code, thorough documentation, comprehensive testing, and strengthening security measures.

These improvements will contribute to the continued success of the project and result in a high-quality web application for Assignment 2.