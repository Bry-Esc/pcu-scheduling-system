# Requirements

-   XAMP 7.4.33
-   Composer (To install Laravel and Other Dependencies)
-   Node.js

# Installation

**Step 1**

Note: If you have XAMP already installed, uninstall it.

Install **[XAMP 7.4.33](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/)**

**Step 2**

Open Environment Variables in the Start Menu Search

-   click "Environment Variables"
-   edit "Path"
-   click "new" then copy paste:

        c:\xampp\php

**Step 3**

Note: If you have Composer already installed, uninstall it.

Download **[Composer](https://getcomposer.org/download/)**

**Step 5**

Run XAMPP control panel as administrator then

-   Start Apache

-   Start MySQL

**Step 6**

Go to CMD then type the following:

    cd C:\htdocs\pcu-scheduling-system
    composer install

Leave this CMD open, we will use again.

**Step 7**

**IMPORTANT**

Replace the **PackageManifest.php** file from

_pcu-scheduling-system\REPLACE FILE\PackageManifest.php_

to

_pcu-scheduling-system\vendor\laravel\framework\src\Illuminate\Foundation\PackageManifest.php_

**Step 8**

We will now setup the Database, go to:

    http://localhost/phpmyadmin/

Then create a **homestead** database

**Step 9**

Find the ".env.example" file in "pcu-scheduling-system" folder then rename it to:
".env"

**Step 10**

Modify the **.env** to match your database

**Step 11**

Go back to CMD that we previously opened back from Step 6
Then type the following in order:

    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve

If successful, the cmd will give the website link to open the website

# Account

The Default user for admin is:

User

    superadmin

Password

    password1234
