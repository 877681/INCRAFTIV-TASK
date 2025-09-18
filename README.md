About the Application
This is a Laravel-based CRUD application demonstrating core web development features, including database operations, routing, form handling, and Blade templating. Below is an overview of the implemented functionalities:
1. CRUD Operations for Posts

Functionality: Implemented Create, Read, Update, and Delete (CRUD) operations for blog posts with title and description fields.
Implementation: Utilized Laravel's Eloquent ORM for seamless database interactions, ensuring efficient and secure data management.
Validation: Applied server-side validation to ensure input integrity for post creation and updates.

2. Routing and Controller Setup

Routes: Defined routes for /users (list) and /users/{id} (individual user details).
Controller: Created a UserController as a resource controller to handle CRUD operations for users, leveraging Laravel's resourceful routing.
Routing Approach: Demonstrated the use of Route::resource for streamlined RESTful routing, contrasted with manually defined routes for specific actions.

3. Blade Templating

Layout: Designed a reusable layout.blade.php with @yield and @section directives to create a consistent structure across views.
View Extension: Extended the base layout in child views for modular and maintainable templating.
Dynamic Display: Used @foreach to render a list of users dynamically in the view, ensuring a clean and user-friendly interface.

4. Form Handling and User Registration

Registration Form: Built a registration form to collect first_name, last_name, email, and password.
Validation: Enforced validation rules:

first_name: Required, string, max 255 characters.
last_name: Required, string, max 255 characters.
email: Required, valid email format, unique in the users table.
password: Required, minimum 6 characters, confirmed with a matching password_confirmation field.


Data Storage: Saved validated data to the users table, with passwords securely hashed using Laravel's Hash facade.

Command to Reset Database
To reset the database and re-run all migrations, use the following command:
bashphp artisan migrate:fresh
Note: This command drops all tables and re-runs all migrations, erasing existing data. Use with caution in production environments.
