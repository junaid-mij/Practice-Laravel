# Module-16 Laravel Migration Concepts Assignment-16:

## Task 1: Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:
### Step 1: Create a new migration file

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:migration create_Categories_table
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-1/1.png)

## Task 2: Create a new model named "Category" associated with the "categories" table. Define the necessary properties and relationships.
### Step 1: Defining Relationship:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-2/1.png)

## Task 3: Write a migration file to add a foreign key constraint to the "posts" table. The foreign key should reference the "categories" table on the "category_id" column.
### Step 1: Posts table Migration file:.

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-3/1.png)

## Task 4: Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
### Step 1: Post Model

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-4/1.png)

## Task 5: Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.
### Step 1: Controller method:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-5/1.png)

## Task 6: Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.
### Step 1: Route

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/1.png)
### Step 2: Implemented Method in Post Model
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/2.png)
### Step 3: Controller method for testing In Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/3.png)
### Step 4: Postman Output
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/4.png)

## Task 7: Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.

### Step 1: Route

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/1.png)
### Step 2: Controller method

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-7/2.png)
### Step 3: Postman Output:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-7/2.png)

## Task 8: Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.

### Step 1: Route

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/1.png)
### Step 2: Implemented Method in Post Model

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/2.png)
### Step 3: Controller method for testing In Postman

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/3.png)
### Step 4: Postman output

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/4.png)

## Task 9: Write a Blade template to display all posts and their associated categories. Use a loop to iterate over the posts and display their details.

### Step 1: Blade File

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-9/1.png)

## Task 10: Create a new route in the web.php file to handle the following URL pattern: "/categories/{id}/posts". Implement the corresponding controller method to retrieve all posts belonging to a specific category. The category ID should be passed as a parameter to the method.

### Step 1: Route

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-10/1.png)
### Step 2: Controller method:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-10/2.png)
### Step 3: Postman output:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-10/3.png)

## Task 11: Implement a method in the "Category" model to get the latest post associated with the category. The method should return the post object.

### Step 1: Route

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-11/1.png)
### Step 2: Implemented Method in Category Model

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-11/2.png)
### Step 3: Controller method for testing In Postman

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-11/3.png)
### Step 4: Postman output:

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-11/4.png)

## Task 12: Write a Blade template to display the latest post for each category. Use a loop to iterate over the categories and display the post details.

### Step 1: Blade

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-12/1.png)


# Author: Marajul Islam
