
# Portfolio PROJECT

This is a simple portfolio project



# How you setup and run this project -

> step 1: clone repo 

    https://github.com/sayful1411/my_portfolio.git

> step 2: go to my_portfolio

```bash
  cd my_portfolio
  ``` 
  
>  step 3: edit .env.example to .env
   
> step 4: run composer install

```bash
  cd composer install
  ``` 
  
  > step 5: generate a new key
  
```bash
  cd php artisan key:generate
  ``` 
  
  >  step 6: create a new database 
  
  >  step 7: setup .env 
  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=my_portfolio 
    DB_USERNAME=root 
    DB_PASSWORD=
    
  >  step 8: run migration 

```bash
  cd php artisan migrate --seed
  ``` 
  
  >  step 9: run project
  
```bash
  cd php artisan serve
  ``` 


  