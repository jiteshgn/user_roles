This is a Laravel 8 Project with the following features:

➢ Create a Model that will allow users to have multiple roles.<br/>
➢ POST Route to save full name, roles and email address<br/>
➢ GET Route to fetch list of Users saved in the database by roles<br/>
➢ Validation<br/>
    &emsp;■ Email Address<br/>
       &emsp;&emsp;● Required<br/>
       &emsp;&emsp;● Unique<br/>
       &emsp;&emsp;● Not yet existing in the database<br/>
    &emsp;■ Full Name<br/>
       &emsp;&emsp;● Required<br/>
    &emsp;■ Role<br/>
       &emsp;&emsp;● Required<br/>

<h4>Installation Steps:</h4>
->Download the Files<br/>
->Create Database <i>user_roles</i><br/>
->Install composer dependencies<br/>
    &emsp;composer install<br/>
->An application key need to be generated with the command<br/>
    &emsp;php artisan key:generate<br/>
->Open Project in a Code Editor, rename .env.example to .env and modify DB name, username, password to your environment.<br/>
->Migrate the database along with seed<br/>
    &emsp;php artisan migrate --seed<br/>
->Now run the artisan serve command<br/>
    &emsp;php artisan serve<br/>
