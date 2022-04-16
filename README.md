
# Hackaton App

Who hasn’t attended a hackathon in the past? Those are great opportunities to learn, challenge ourselves and meet new people.
Each hackathon has developers and 3 winners (ranking 1st to 3rd). We will build a system that looks for the best developers around the world by saving from each hackathon the best 10 developments.

## API
    Authentication with passport
    Install passport before running 
    php artisan passport:install
### 1- Create an user
    http://127.0.0.1:8000/api/signup
    Headers 
    Content-Type:application/json
    X-Requested-With:XMLHttpRequest
    BODY
    {
    "name":"prueba",
    "email":"prueba@mail.com",
    "password":"123456"
    }
### 2- Login
    http://127.0.0.1:8000/api/login
    BODY
    {
    "email":"prueba@mail.com",
    "password":"123456"
    }
### 3- Get hackaton information with optinal filters (plane, name)
    http://127.0.0.1:8000/api/auth/hackatons

### 4- Run cron
    php artisan schedule:work
