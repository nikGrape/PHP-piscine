/*Using the file base_student.sql, you must find a way to fill your database.
	ANSVER:
		source resources/base-student.sql;
*/

/*Create a table named ’ft_table’, it will be used to list the students and the staff.
The table must contain the following in the below order: 
• an id, it must be your table’s primary key, and must be auto-incremented.
• a login, with the length of a standard student login as maximum size, and by default the value must be ’toto’
• a multiple choice group with only the following possibilities: ’staff’, ’student’ and ’other’ (see ENUM)
• a creation_date, with the following format: YYYY-MM-DD Fields must not be NULL;
Be sure to observe the attributes’ order.
*/


create table ft_table 
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	`login` VARCHAR(8) DEFAULT 'toto' NOT NULL,
	`group` enum('staff', 'student', 'other'),
	`creation_date` DATE NOT NULL
);