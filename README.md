# Basic CRUD PHP Symfony Framework

CRUD Example on the PHP Symfony Framework

---

## Setup The Project

1. Copy the default environment file to create a local environment file:

   `cp .env .env.local`

2. Open .env.local then adjust the database configuration,

   `DATABASE_URL="mysql://username:password@127.0.0.1:3306/database_name?serverVersion=5.7"`

3. Create Database and Tables

   `php bin/console make:migration`

   then

   `php bin/console doctrine:migrations:migrate`

5. Run the Application
   Start the Symfony development server:

   `symfony server:start`

   or

   `php -S localhost:8000 -t public`

## Penjelasan Development

1. Generate the Product Entity
  `php bin/console make:entity Product`
  
2. Create the Controller
  `php bin/console make:controller ProductController`
  
3. Create the Service
  `php bin/console make:service ProductService`
  
4. Create the Form
  `php bin/console make:form ProductType`
  
5. Create Twig Templates
  Create Twig template files and integrate with CSS Bootstrap.



   
