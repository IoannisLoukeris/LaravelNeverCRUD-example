# <span style="color:teal">LaravelNeverCRUD Example</span>

## <span style="color:teal">Prerequisites if you want to do something similar from scratch</span>

You can use composer and nodejs with npm or yarn to reconstruct this project from scratch.

* install Laravel 
  * I used composer 
  * composer create-project laravel/laravel LaravelNeverCRUD-example
* install React
  * I used npm
  * npm install --save-dev react react-dom
* update webpack.mix.js to compile the React stuff
from 

```
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
```

to

```
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
```

* do your react stuff to display whatever you want
* use LaravelNeverCRUD to never CRUD ever again

## <span style="color:teal">This example</span>
### <span style="color:teal">Description</span>
This is a small utility program that I wanted to write for quite some time. I do cook occasionally and I have never found a cookbook program that I really liked. I have a plastic folder where scruffy pieces of paper reside each with a recipe. This is highly unproductive as searching is a nightmare and supermarket visits require a scan through the recipes, deciding what we will be eating the following week and then writing down all the ingredients we need to shop. I think we should do better than this.
So this is my cookbook program. 
To demonstrate the LaravelNeverCRUD library I did the face with React hitting an API. This allows me to create a native mobile cookbook application at a later stage without writing any new back end / business logic code at all.
### <span style="color:teal">Requirements</span>
* Recipes should be stored with name, creator, picture, ingredients with quantities and finally preparation procedures. Calories per portion should also be recorded along with portion weight (or volume).
* Creators should be stored independently and reused instead of inputting them again and again. Pictures, URLs for sites / articles etc would be nice to have. 
* One should be able to see all the recipes by a creator in one place. 
* Each recipe's selection frequency should be marked as one of: every week, usual, frequent, infrequent, specific date and never. There should also be a flag to mark each recipe as preferred for guests, and another for vegetarian and vegan.
* The system should have the ability to create a weekly or bi-weekly eating schedule for the family. The user should be able to select dates to have guests visiting in that period so that the system prioritizes relevant recipes. 
* Once the schedule is created a list should be generated with all needed ingredients. 
* Ingredients should be put in the system once, each with quantity unis and a picture. When creating a recipe, the user should be able to search ingredients or create new on the fly.
* The system should have input for family members' and frequent guests' eating habits so that when the schedules are created their requirements are observed. 
### <span style="color:teal">Tutorial</span>
Let's begin by creating the relevant database stuff. For the moment we will be using a MySQL/MariaDB database for data storage and retrieval, but we could very well be using an API, involve caching or whatever else. 
Take a look at the migrations, for example 2023_04_10_110409_create_recipes_table.php. As you can see it is bog standard stuff. All the migrations are like that. 

```⚡ Migrations do not change at all when using LaravelNeverCRUD```

Lets see the models now. Open for example Recipe.php in the models directory. Nothing to see here. All standard,

```⚡ Models do not change at all when using LaravelNeverCRUD```

Now some differences start. Before doing anything else we need to create a Model Data Service that will encapsulate the models. Open for example the RecipesDataSetvice.php in app/DataServices.
As you see this is very easy. For every model you have, you create a model data service derived from ModelDataService class. If you need to manipulate data before sending them in special circumstances, you can do this in that class. 

```⚡ For each model create a ModelDataService derived data service.```

After that let's take a look at an API call. Open routes/api.php and check out the POST /recipe route. As you can see the responsible controller for this call is RecipesController.php and the method that serves this request is create.
Now open the RecipesController.long.php controller and, surprise! there is not such a method there. This is already done in CRUDController and you need to do nothing apart from providing a couple of arrays that are used for validation. 
The first array is the create validation parameters and the second is the update parameters. An empty array means no validation. NULL in the update parameters array OR it not being provided will make the library use the creation validation parameters for the update too. Let's take a look at a theoretical long version of RecipesController:

``` <?php

namespace App\Http\Controllers;

use App\Handlers\RecipesHandler;
use LaravelNeverCrud\Controllers\CRUDController;

class RecipesController extends CRUDController
{
    public function __construct(RecipesHandler $rH)
    {
        parent::__construct(
            $rH,
            [
                'name' => 'required|unique',
                'preparation' => 'required',
            ],
            [
                'name' => 'required|unique',
                'preparation' => 'required',
                'id' => 'required',
            ]
        );
    }
}
```
This file is included with the distribution RecipesController.long.php as a reference. Now open the file RecipesController.php which is the actual controller used. As you see there is only one array. As the first and second arrays are the same, the second is omitted. But wait!!! the second array in the long version has a check for id requirement, where is that? Well, this is a requirement that is automatically added if you don't include it. 

## <span style="color:teal">To use</span>
Download the repo and run 

```
composer install
npm install
```

serve via installed server or run 

```
php artisan serve 
npm run dev
```
in two separate terminals to temporarily serve the project
(you may need to run the second command twice)
