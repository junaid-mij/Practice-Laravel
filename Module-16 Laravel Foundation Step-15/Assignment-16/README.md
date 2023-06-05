# Module-16 Laravel Migration Concepts Assignment-16:

## Task 1: Create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.

### Step 1: Create a new Laravel Project

1. Open Terminal.
2. Run the following command:

    ```shell
    composer create-project laravel/laravel MigrationAssignment
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-1/1.png)

## Task 2: Within the project, create a new migration file named "create_products_table" that will be responsible for creating a table called "products" in the database. The "products" table should have the following columns:
### Step 1: Create a new migration file

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:migration create_products_table
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-2/1.png)

### Step 2: Write needed coloums in products table

1. Open products table.

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-2/2.png)

## Task 3: After creating the migration file, run the migration to create the "products" table in the database.
### Step 1: Migrate the 'products' table.

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan migrate
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-3/1.png)

3. Database:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-3/2.png)

# Author: Marajul Islam
