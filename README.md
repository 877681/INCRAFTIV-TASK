

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

Layout: Designed a reusable layout.blade.php with $slot and header var to create a consistent structure across views.
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
##      bash
        php artisan migrate:fresh

Note: This command drops all tables and re-runs all migrations, erasing existing data. Use with caution in production environments.


APPLICATION IMAGES: 
----APPLICATION DASHBOARD-----
<img width="1917" height="987" alt="task1" src="https://github.com/user-attachments/assets/ef9f320f-ac40-4ca4-bf8e-96fb41b90812" />

---APLICATION POSTS LIST SECTION---------

<img width="1915" height="955" alt="TASKPOST" src="https://github.com/user-attachments/assets/2d0a22ae-4afc-4603-9c7d-19eb31a1fcb3" />

-----APLICATION POST DETAILS SECTIONS --------
<img width="1913" height="945" alt="task4" src="https://github.com/user-attachments/assets/f1ffdc68-68c7-4cb5-b452-a9357214c08b" />

---APLICATION POST CREATE SECTION-------

<img width="1920" height="945" alt="tasl3" src="https://github.com/user-attachments/assets/4489e6f3-d275-4b95-a0ba-62144b15ff21" />


-----APLICATION POST EDIT AND DELETE SECTION---------

<img width="1916" height="947" alt="task5" src="https://github.com/user-attachments/assets/f37db4a6-a1c2-4e00-9e43-7740a8fd6a50" />


----APLICATION USER REGISTERATION FORM----

<img width="1920" height="953" alt="task2" src="https://github.com/user-attachments/assets/cc6a2a0f-11be-410a-8397-d0569bcac93a" />


