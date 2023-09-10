
## File Descriptions

1. **index.php**: The main PHP script to run the application.
2. **classes/Post.php**: Defines the Post class with properties and methods to handle posts.
3. **classes/Comment.php**: Defines the Comment class with properties and methods to handle comments.

## Implementation Details

### Type Declarations in Task 4

In Task 4, we have implemented type declarations for function arguments, return values, and class properties throughout the project. Here are the specific changes made:

1. **Class Properties**:
   In the `Post` class, we added type declarations to the properties: `$user`, `$image`, `$message`, and `$date`, all declared as `string` type. In the `Comment` class, we added type declarations to the properties `$user` and `$comment`, both specified as `string` type.

2. **Constructor Arguments**:
   The constructors of both `Post` and `Comment` classes now have type declarations for their arguments. The `Post` class constructor has type declarations for `$user`, `$image`, `$message`, and `$date`, all specified as `string` type. The `Comment` class constructor has type declarations for `$user` and `$comment`, both specified as `string` type.

3. **Function Arguments**:
   The `addComment()` method in the `Post` class has type declarations for its arguments: `$user` and `$comment`, both specified as `string` type.

4. **Function Return Values**:
   The `getUser()` and `getComment()` methods in the `Comment` class have return type declarations, both specified as `string` type, indicating that they will return string values.

### Advantages of Type Declarations

The addition of type declarations in PHP provides several advantages:

1. **Improved Code Readability and Understanding**:
   Type declarations make the code more explicit and readable. Developers can quickly understand the expected types of arguments and return values, which helps in debugging and maintaining the code.

2. **Enhanced Error Detection**:
   With type declarations, PHP can detect type-related errors during development. If a function receives arguments of the wrong type or returns an unexpected type, PHP will throw a fatal error, preventing potential bugs and issues.

3. **Better IDE Support**:
   IDEs can use type declarations to provide better code autocompletion, code analysis, and suggestions, making the development process more efficient and less error-prone.

4. **Code Documentation**:
   Type declarations serve as a form of self-documentation for the code. By specifying the types of arguments and return values, developers can easily understand the purpose and usage of functions and methods.

---

This `README.md` file provides an overview of Task 4 implementation in the project, detailing the changes made for type declarations in class properties, constructors, function arguments, and return values. It also explains the advantages of using type declarations in PHP. The information in this file helps developers and reviewers to understand the enhancements made to the application and the benefits of incorporating type declarations in the codebase.
