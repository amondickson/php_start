# Simple PHP Authentication System

This is a basic user authentication system built with PHP and MySQL. It allows users to sign up, log in, and view their profile.

## Features
- User registration with secure password hashing
- User login with session management
- Profile page displaying username and email
- Logout functionality

## Installation

### Prerequisites
- PHP (>=7.4 recommended)
- MySQL or MariaDB
- A web server (Apache, Nginx, or built-in PHP server)

### Setup Instructions
1. **Clone the Repository**
   ```sh
   git clone https://github.com/your-username/simple-php-auth.git
   cd simple-php-auth
   ```

2. **Create the Database**
   Run the following SQL queries in your MySQL server:
   ```sql
   CREATE DATABASE IF NOT EXISTS simple_app;
   
   USE simple_app;
   
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(100) NOT NULL UNIQUE,
       email VARCHAR(255) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL
   );
   ```

3. **Configure Database Connection**
   Open `config.php` and ensure your database credentials are correct:
   ```php
   <?php
       $con = new mysqli('localhost', 'root', '', 'simple_app');
   
       if ($con->connect_error) {
           die("Connection failed: " . $con->connect_error);
       }
   ?>
   ```

4. **Start the Server**
   If using PHP’s built-in server, run:
   ```sh
   php -S localhost:8000
   ```
   Then, open `http://localhost:8000/sign_up.php` in your browser.

## File Structure
```
/simple-php-auth
│── config.php         # Database connection
│── sign_up.php        # User registration
│── login.php          # User login
│── profile.php        # User profile page
│── logout.php         # Logout functionality
│── README.md          # Documentation
```

## Usage
- Navigate to `sign_up.php` to create an account.
- Log in via `login.php`.
- Once logged in, the user is redirected to `profile.php`.
- Click "Logout" to end the session.

## License
This project is open-source and available under the [MIT License](LICENSE).

