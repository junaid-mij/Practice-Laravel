# Module-15 Laravel Migration Concepts Assignment-16:

## Task 1: Create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.

### Step 1: Create a new Laravel Project

1. Open Terminal.
2. Run the following command:

    ```shell
    composer create-project laravel/laravel MigrationAssignment
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Tasl-1/1.png)

## Question 2: In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent.

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller UserController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-2/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-2/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-2/3.png)
### Step 4: Start the Laravel development server

1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-2/4.png)



## Question 3: You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null.

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller ApiController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-3/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-3/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-3/3.png)
### Step 4: Start the Laravel development server

1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
1. Without Parameter:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-3/4.png)
1. With Parameter:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-3/5.png)



## Question 4: Create a JSON response in Laravel with the following data:
## {
##     "message": "Success",
##     "data": {
##         "name": "John Doe",
##         "age": 25
##     }
## }

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller JsonController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-4/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-4/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-4/3.png)
### Step 4: Start the Laravel development server
1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-4/4.png)



## Question 5: You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file.

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller UploadController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-5/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-5/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-5/3.png)
### Step 4: Start the Laravel development server

1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-5/4.png)



## Question 6: Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller ManageController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-6/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-6/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-6/3.png)
### Step 4: Start the Laravel development server

1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-6/4.png)



## Question 7: Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:
## {
##     "success": true,
##      "message": "Form submitted successfully."
## }

### Step 1: Create a new controller

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:controller SubmitController
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-7/1.png)
### Step 2: Implement the controller method
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-7/2.png)
### Step 3: Define the route 
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-7/3.png)
### Step 4: Start the Laravel development server

1. To start a development server, use the new command:
    
    ```shell
    php artisan serve
    ```
### Step 5: Test the route using Postman
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-7/4.png)

### Another way:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-14%20Laravel%20Foundation%20Step-13/Assignment-14/document/Question-7/5.png)

# Author: Marajul Islam
