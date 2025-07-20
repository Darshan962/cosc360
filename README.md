GitHub Repository: https://github.com/Darshan962/cosc360

Blog App in Laravel 12

This is a simple blog app where you can create, read, edit, and delete posts. It was built for COSC360 Assignment 1.

Features
	•	Add, edit, and delete blog posts
	•	View all posts in a table
	•	Posts are stored in MySQL
	•	Uses Bootstrap layout


How to Run

Open terminal and follow the bash command step by step;

Step 1: Clone the project
git clone https://github.com/Darshan962/cosc360.git
cd cosc360

Step 2: Install dependencies
composer install

Step 3: Copy .env and set database details
cp .env.example .env
# Edit the .env file and set DB_DATABASE, DB_USERNAME, DB_PASSWORD

Step 4: Generate app key
php artisan key:generate

Step 5: Run migration and seed posts
php artisan migrate:fresh --seed

Step 6: Start local server
php artisan serve


Visit http://localhost:8000/all in your browser to use the blog.

Student Name: Darshan Baniya (COSC360 Assessment 1)
