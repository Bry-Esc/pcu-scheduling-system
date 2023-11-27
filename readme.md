# Requirements

-   PHP 5 or higher
-   MySQL
-   Composer (To install Laravel and Other Dependencies)

# Installation

---

-   Open Terminal and run `composer install` from the root folder of the project.
-   Create a database.
-   Copy **.env.example** to **.env** and setup your database.
-   Run `php artisan key:generate` to generate application key.
-   Run `php artisan migrate` without quote to import all the existing tables.
-   Run `php artisan db:seed` to seed your database.
-   Run `php artisan serve` to start application.

### Note

---

The Default user for admin is:
User: admin
Password: password
