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

- You can create table and model together using `php artisan make:model Food --migration` This will create a Food model and a migration file. In the terminal, we get an output similar to:

```
Model created successfully.
Created Migration: 2019_09_13_193840_create_foods_table
```

- Open the database/migrations/xxxxxx_create_foods_table migration file and update table accordingly.

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
`php artisan make:controller ContactController --resource`

### Laravel resource routing assigns the typical "CRUD" routes to a controller with a single line of code. For example, you may wish to create a controller that handles all HTTP requests for "photos" stored by your application. Using the make:controller Artisan command, we can quickly create such a controller:

### This command will generate a controller at app/Http/Controllers/PhotoController.php. The controller will contain a method for each of the available resource operations.

- Open the app/Http/Controllers/FoodController.php file.

- The FoodController class extends Controller class available from Laravel and defines a bunch of methods which will be used to do the CRUD operations against the Food model.

- You can read the role of the method on the comment above it.

- Now we need to provide implementations for these methods.

- But before that, let's add routing. Open the routes/web.php file and update it accordingly:

```
Route::resource('foods', 'FoodController');
```
- Using the resource() static method of Route, you can create multiple routes to expose multiple actions on the resource.

#### These routes are mapped to various FoodController methods which will need to implement in the next section:

```
GET/foods, mapped to the index() method,
GET /foods/create, mapped to the create() method,
POST /foods, mapped to the store() method,
GET /foods/{food}, mapped to the show() method,
GET /foods/{food}/edit, mapped to the edit() method,
PUT/PATCH /foods/{food}, mapped to the update() method,
DELETE /foods/{food}, mapped to the destroy() method.
```
- These routes are used to serve HTML templates and also as API endpoints for working with the Contact model.

### Note: If you want to create a controller that will only expose a RESTful API, you can use the apiResource method to exclude the routes that are used to serve the HTML templates:

`Route::apiResource('foods', 'FoodController');`

# Implementing the CRUD Operations
- Let's now implement the controller methods alongside the views.

- Re-open the app/Http/Controllers/FoodController.php file and start by importing the Food model:

`use App\Food;`

- To create Food app you need Index() to show the list of foods. Update accordinly inside Food controller.

```
public function index()
    {
        $foods = Food::all();

        return view('foods.index', compact('foods'));
    }
```






