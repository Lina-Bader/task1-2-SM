# task1-2-SM
Description

This project provides a basic web interface to control a robot's direction using PHP and MySQL. It includes scripts to handle database connections, process form submissions, and retrieve the last command sent to the robot.

Files:
1.	dbh.inc.php: This script establishes a connection to the MySQL database.
2.	formhandler.inc.php: This script processes form submissions from the web interface, updating the robot's direction in the database.
3.	getlastvalue.inc.php: This script retrieves the last direction command sent to the robot from the database.
4.	index.php: This is the main web interface, providing buttons to control the robot's direction.
   
Setup:
1.	Install XAMPP:
o	Download and install XAMPP from here.
o	Start Apache and MySQL from the XAMPP control panel.
2.	Database Setup:
o	Open phpMyAdmin by navigating to http://localhost/phpmyadmin.
o	Create a database named robot.
o	Create a table named directions with the following structure:

CREATE TABLE `directions` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `robotDirection` VARCHAR(255) NOT NULL
);
3.	File Configuration:
o	Update dbh.inc.php with your database credentials.
o	Place the project files in the htdocs directory of your XAMPP installation (e.g., C:\xampp\htdocs\your_project_folder).
4.	Accessing the Interface:
o	Open your web browser and navigate to http://localhost/your_project_folder/index.php.

Usage:
•	Open the index.php file in your web browser.
•	Use the buttons to send direction commands to the robot.
•	The commands will be stored in the database, and the robot can retrieve the latest command from the getlastvalue.inc.php script.
