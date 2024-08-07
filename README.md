Gallery System    

A Gallery System made purely with PHP Object-Oriented Programming (OOP). This system includes several advanced features and functionalities to manage photo galleries efficiently.

Features
OOP CRUD System: Complete Create, Read, Update, and Delete operations using Object-Oriented Programming principles.
Administrator Page: A dedicated page for administrators to manage the gallery, users, and comments.
Multi-Photo Upload Functionality: Supports uploading multiple photos at once, streamlining the process of adding new images to the gallery.
Comment Section: Allows users to add comments to photos, enhancing interaction and engagement.
Admin Users Page: An interface for managing users with administrative privileges, including adding, updating, and deleting admin users.
Abstraction and Inheritance: Utilizes abstraction and inheritance principles of OOP to ensure clean, maintainable, and reusable code.

Getting Started

Prerequisites
. PHP 7.0 or higher
. MySQL Database
. Apache Server (e.g., XAMPP)

Installation
Clone the repository:

git clone
https://github.com/KingPraise/Gallery_System.git

Navigate to the project directory:

cd Gallery_System

Import the database:

Create a new database in your MySQL server.
Import the gallery.sql file located in the database directory.
Configure the database:

Open admin/includes/config.php.
Update the database credentials (DB_HOST, DB_USER, DB_PASS, DB_NAME) to match your MySQL configuration.
Start the Apache server and navigate to the project URL (e.g., http://localhost/Gallery_System).

Usage
Administrator Page: Accessible via http://localhost/Gallery_System/admin.
User Page: Accessible via http://localhost/Gallery_System.
Folder Structure
admin/: Contains all the administrative files and functionalities.
database/: Contains the SQL file for the database structure.
includes/: Contains the core PHP files for database connections, session management, and other utility functions.
js/: Contains JavaScript files for front-end functionalities.
uploads/: Directory where uploaded images are stored.
Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any features or bug fixes.

License
This project is open-source and available under the MIT License.

