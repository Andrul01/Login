# Login Project

This project is a simple login system built with PHP and MySQL. It allows users to register and log in to the application.

## Features

- User registration
- User login
- Password encryption
- Session management

## Requirements

- [XAMPP](https://www.apachefriends.org/index.html)
- Web browser

## Installation

1. **Clone the Repository**

    Open your terminal and run the following command to clone the repository:

    ```sh
    git clone https://github.com/Andrul01/Login.git
    ```

2. **Move to the Project Directory**

    Navigate to the project directory:

    ```sh
    cd Login
    ```

3. **Copy the Project to the XAMPP `htdocs` Directory**

    Copy the `Login` folder to your XAMPP `htdocs` directory. For example, if your XAMPP is installed in `C:\xampp`, you should copy the `Login` folder to `C:\xampp\htdocs`.

    ```sh
    cp -r Login /path/to/xampp/htdocs
    ```

4. **Start XAMPP**

    Open XAMPP Control Panel and start the Apache and MySQL modules.

5. **Create a Database**

    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Create a new database named `registration1`.
    - Import the `database.sql` file located in the project directory to set up the necessary tables. You can do this by selecting your database and clicking on the `Import` tab, then choosing the `database.sql` file.

6. **Update Database Configuration**

    Open the `config.php` file located in the project directory and update the database configuration to match your MySQL setup:

    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

## Usage

1. **Open the Application in Your Browser**

    Go to `http://localhost/Login` in your web browser.

2. **Register a New User**

    - Click on the `Register` link.
    - Fill in the registration form and submit.

3. **Log In**

    - Go to the login page.
    - Enter your credentials and log in.

## Contributing

Feel free to fork this repository and contribute by submitting a pull request. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
