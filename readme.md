## About

Sign up, Log in, and see a list of the Staff's five favorite movies.
- Requires authentication (un-authenticated users are redirected to the login page).
- Upon successful authentication, a user is redirected to /movies, which lists five(5) of
the Staff's favorite movies.
- Movie titles are in title case and sorted by release year, descending.
- In parentheses next to the release year, it states how many years ago the movie was released
- These movies are retrieved from the database.

## Demo Web
![App Demo](http://g.recordit.co/9DFgaX92vO.gif)

## Demo API
![App Demo](http://g.recordit.co/nz43uqyzWA.gif)

## Setup
- `$ git clone https://github.com/matthewrpacker/movie-app.git`
- `$ cd movie-app/`
- `$ composer install`
- `$ cp .env.example .env` (copy .env.example to new file .env)
- `$ php artisan key:generate`
- `$ touch database/database.sqlite`
- `$ php artisan migrate`
- `$ php artisan db:seed` (seed movies)
- `$ php artisan serve`

##### Website
- Visit http://localhost:8000/

##### API
- `$ curl http://localhost:8000/api/movies`

## License

Movie App is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
