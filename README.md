# Core Real Estate - Developing Web Information Systems Final Project

## Project Overview
This project is a final assignment for the Developing Web Information Systems course. It demonstrates a basic real estate website with user authentication, property listing features, and admin functionality.

## Features
- User Registration and Login
- Property Listings (dynamically loaded from database)
- About Us Page (dynamically loaded from database)
- Contact Form
- Responsive Design
- Admin Panel
  - Create new users
  - Create new admin accounts
  - Manage property listings
  - Edit website content

## Technologies Used
- PHP
- MySQL
- HTML5
- CSS3
- JavaScript 

## Setup Instructions
1. Clone the repository to your local machine or web server.
2. Import the provided SQL file to set up the database structure.
3. Update the database connection details in `user/connect.php` and `admin/dbConnection/connect.php`.
4. Ensure your web server is configured to run PHP files.
5. Navigate to the project URL in your web browser.
6. Use the provided admin credentials to access the admin panel.

## File Structure
- `user/login/` - Contains user authentication files
- `user/styles.css` - Main stylesheet
- `user/connect.php` - Database connection file for user-side
- `admin/` - Admin-related files
  - `dbConnection/connect.php` - Database connection file for admin-side
  - `create_user.php` - Script for creating new users
  - `create_admin.php` - Script for creating new admin accounts

## Admin Functionality
- Access the admin panel using admin credentials
- Create new user accounts with different permission levels
- Create new admin accounts
- Manage property listings (add, edit, delete)
- Edit website content (e.g., About Us page)

## Contributors
- Prashrijan Shrestha
- Shubik Bhatt
- Anuska Shrestha
- Eliza Khadka

## Acknowledgements
- Samia Sultana
- Kent Institute Australia

## Disclaimer
This project is for educational purposes only and is not intended for production use without further development and security enhancements.
# realestate-project
