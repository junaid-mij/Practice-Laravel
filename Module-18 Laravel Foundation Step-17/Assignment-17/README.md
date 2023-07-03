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

## Task 4: Modify the existing migration file "create_products_table" to add a new column called "quantity" to the "products" table. The "quantity" column should be an integer column and allow null values.
### Step 1: RollBack the migration file

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan migration:rollback
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-4/1.png)

### Step 2: Add a new coloums in products table:

1. Open products table.

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-4/2.png)

3. Updated Database:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-4/3.png)

## Task 5: Create a new migration file named "add_category_to_products_table" that will be responsible for adding a new column called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters:
### Step 1: Create a new migration file

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:migration add_category_to_products_table --table=products
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-5/1.png)

### Step 2: Write needed coloums in products table

1. Open products table.

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-5/2.png)

## Task 6: After creating the new migration file, run the migration to add the "category" column to the "products" table.
### Step 1: Migrate the 'category' table.

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan migrate
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/1.png)

3. Database:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-6/2.png)

## Task 7: Create a new migration file named "create_orders_table" that will be responsible for creating a table called "orders" in the database. The "orders" table should have the following columns:

## id: an auto-incrementing integer and primary key.
## product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.
## quantity: an integer column to store the quantity of products ordered.
## created_at: a timestamp column to store the creation date and time.
## updated_at: a timestamp column to store the last update date and time.

### Step 1: Create a new migration file

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan make:migration create_orders_table --create=orders
    ```
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/1.png)

### Step 2: Write needed coloums in orders table

1. Open orders table.

![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-7/2.png)

## Task 8: After creating the migration file for the "orders" table, run the migration to create the "orders" table in the database.

### Step 1: Migrate the 'orders' table.

1. Open Terminal.
2. Run the following command:

    ```shell
    php artisan migrate
    ```

3. Database:
![App Screenshot](https://github.com/junaid-mij/Practice-Laravel/blob/Practice-Laravel/Module-16%20Laravel%20Foundation%20Step-15/Assignment-16/Document/Task-8/1.png)


# Author: Marajul Islam
