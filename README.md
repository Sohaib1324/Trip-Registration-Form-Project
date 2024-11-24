# Trip-Registration-Form-Project
This project is a simple travel form where users can input their details and submit them for a trip. The form collects data such as name, age, ID, phone number, and any additional information and stores it in a MySQL database. It uses HTML, CSS, JavaScript, PHP, and MySQL.

**Features:**
User-friendly form interface
Data validation before submission
Successfully stores user data in a MySQL database
Displays a success message after form submission

**Technologies Used**
HTML: Structure and layout of the form
CSS: Styling and design for a clean user interface
JavaScript: Form validation and dynamic success message
PHP: Server-side scripting to handle form submission
MySQL: Database to store form data

**Setup Instructions**
1. Clone the repository:
git clone https://github.com/your-username/travel-form.git

2. Setup Database:

Create a MySQL database named travel.
Create a table trip with the following structure:
CREATE TABLE `trip` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `age` INT NOT NULL,
  `ID` VARCHAR(100) NOT NULL,
  `Phone` VARCHAR(15) NOT NULL,
  `desc` TEXT,
  `Date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


3. Update Database Credentials:
Modify the PHP code to use your database credentials (localhost, username, password).


4. Run the Application:
Place the files on your web server (Apache or similar).
Open the index.php in your browser to see the form in action.


5. Form Submission:
Fill out the form with the required details.
Submit the form to store the data in the database.

