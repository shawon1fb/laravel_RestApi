<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Project
This is a basic Laravel project with JWT token. Here implemented basic CRUD operations and Authentication.

## post requests
Login:  www.example.com/api/auth/login<br> 
    body:
    
    email: example@email.com
    password: example_password
    

Registration:   www.example.com/api/auth/register<br>
    body:
     
    name: examp_name
    email: example@email.com 
    password: example_password
    password_confirmation: example_password
    
About Me:   www.example.com/api/auth/me<br>
    body:
     
    token: bearer_token
    

Logout:   www.example.com/api/auth/logout<br>
    body:
     
    token: bearer_token
    
Payload:   www.example.com/api/auth/payload<br>
    body:
     
    token: bearer_token
    
payload response:
    
    "iss": "http://127.0.0.1:8000/api/auth/login",
    "iat": 1575314104,
    "exp": 1575317704,
    "nbf": 1575314104,
    "jti": "I0OT9AfrFIwNgOk0",
    "sub": 1,
    "prv": "87e0af1ef9fd15812fdec97153a14e0b047546aa",
    "nam": "Shahanul Shaheb"
 
 
