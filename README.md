# Movies API
This is a API Layer to The Movie Database API.

- The Movie Database API docs here: https://developers.themoviedb.org/3
- To this project endpoint docs, see <APP_URL>/docs

## Project setup
```
composer install
```

```
cp .env.example .env
```
```
php artisan key:generate
```
Set up your TMDB API KEY at TMDB_API_KEY in .env file! 

### Run development server
```
php artisan serve
```

### Run inside docker container
If you prefer to run in a docker container, instead of starting a Laravel development server, follow the steps:

#### Build docker image
```
docker-compose build app
```

#### Start the environment
```
docker-compose up -d
```