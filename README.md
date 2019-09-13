## Learn Php(Laravel) with Mysql - Tableplus

# Simple Php Food App - created to learn laravel with database(Mysql):

To create php application:

- Install laravel in your computer using [Installation Instruction](https://laravel.com/docs/5.8/installation)

- Create a project by typing command in your terminal: `laravel new food`

- Open the `.env` file and update the credentials to access your MySQL database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=******
```

- To create a database using Tableplus by conneting into localhost with username and password.
- create database eg:foods

or
- You can create a database in ternimal using this command:
Before typing this command `mysql -u root -p` check your Mysql database is runing with: `mysql.server start`.

- To check existing databases by typing command in your terminal `SHOW DATABASES;`

- Creating a new database by typing command in your terminal `CREATE DATABASE foods;`

- To check what is inside the database by typing command in your terminal `USE foods;`

- As you are using php-laravel an inbuild feature called artisan. Artisan is the command-line interface included with Laravel. It provides a number of helpful commands that can assist you while you build your application. To learn more about [artisan](https://laravel.com/docs/5.8/artisan)

- With the use of Artisan, you can create table by typing command in your terminal `php artisan make:migration create_foods_table`

or

### Laravel uses the MVC architectural pattern to organize your application in three decoupled parts:

### The Model which encapsulates the data access layer,The View which encapsulates the representation layer,Controller which encapsulates the code to control the application and communicates with the model and view layers.

- You can create table and model togther using `php artisan make:model Food --migration` This will create a Food model and a migration file. In the terminal, we get an output similar to:

```
Model created successfully.
Created Migration: 2019_09_13_193840_create_foods_table
```

- Open the database/migrations/xxxxxx_create_foods_table migration file and update table accordingly

- You can now create the foods table in the database using the following command: `php artisan migrate`

- Now, let's look at our Food model, which will be used to interact with the contacts database table. Open the app/Food.php and update it:

```
class Contact extends Model
{
    protected $fillable = [
        'name',
        'type'
    ];
}
```

- After creating the model and migrated our database. Let's now create the controller and the routes for working with the Contact model. In your terminal, run the following command:







