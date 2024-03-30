## Installations Needed

1. PHP
2. composer
3. MySQL
4. Postman

## How to Run

1. Clone this repo
2. In .env file update the following details
    ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=products
     DB_USERNAME=YOUR_MYSQL_USERNAME
     DB_PASSWORD=YOUR_MYSQL_PASSWORD
    ```

3) Run the following command in the order:
   <br/>
   `composer install`
   <br/>
   `php artisan migrate`
   <br/>
   `php artisan serve`

4) Navigate to Postman and import the 'product-laravel.postman_collection.json' found in the root of this repo.
5) Hit the API's in postman
