This is a Laravel 8 Project with the following features:

➢ Create a Model that will allow users to have multiple roles.
➢ POST Route to save full name, roles and email address
➢ GET Route to fetch list of Users saved in the database by roles
➢ Validation
    ■ Email Address
        ● Required
        ● Unique
        ● Not yet existing in the database
    ■ Full Name
        ● Required
    ■ Role
        ● Required

Installation Steps:

Download the Files
->Install composer dependencies
    composer install
->An application key need to be generated with the command
    php artisan key:generate
->Open Project in a Code Editor, rename .env.example to .env and modify DB name, username, password to your environment.
->Migrate the database along with seed
    php artisan migrate --seed
->Now run the artisan serve command
    php artisan serve