## Installation

### Step 1: Clone the Repository

First, clone this repository to your local machine using Git:

```bash or open cmd
git clone https://github.com/RanaGithub30/Blog-Website.git
cd repository-name

# Ensure you have Composer installed. Then, within the project directory, run:

composer install

## Copy the .env.example file to create a new .env file
## Generate a new application key
php artisan key:generate

## Configure the .env file to connect to your database. For example
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

## Open your XAMPP & start Apache and MYSQL and in browser hit the below url to open the phpMyAdmin
http://localhost/phpmyadmin/index.php

# create a new table and import the table i have provided in below folder
database -> SQL -> blog-website.sql

# Run below command in cmd and go to the directory where the project is
# Run below code there

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Serve the project using below command

php artisan serve

# and run the project on below url
http://127.0.0.1:8000/

# You can login as admin using below credentials
email: - admin@gmail.com
password: - admin@gmail.com

####### Implemented Features #########

1. User Registration and Login: Allows users to register and log in to the application.
2. Admin Login: Separate login functionality for administrators.
3. Separate Dashboards: Different dashboards for Admins and Users.
4. Post Viewing and Comment Management: Users can view all posts and manage comments from their dashboard.
5. CRUD for Posts: Users can create, read, update, and delete their own posts.
6. Admin Management: Admins can edit and delete users and posts.
7. Logout: Both Users and Admins can log out securely.