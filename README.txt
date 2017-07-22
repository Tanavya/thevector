TITLE: 
The Vector
A math website for students, by students.

ABOUT US:
Started in 2017, The Vector is a Mathematics Society started by the students of DPS International. Our aim is to make math enjoyable for students, and to make math resources and help more accessible.


@Vaishnavi --

-> SET UP DATABASE

	Open phpMyAdmin in MAMP. phpMyAdmin is in the navbar of MAMP home page, but it might be greyed out. In case it is, read the first 2 answers.
	https://stackoverflow.com/questions/8656139/i-cant-access-phpmyadmin-with-mamp

	Create Database called "login".

	Create new Table called "user_table". Copy-paste this SQL command:

		CREATE TABLE user_table (
		    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		    first VARCHAR(128) NOT NULL,
		    last VARCHAR(128) NOT NULL,
		    uid VARCHAR(128) NOT NULL,
		    email VARCHAR(200) NOT NULL,
		    pwd VARCHAR(1000) NOT NULL,
		    class INT(2) NOT NULL
		);

	Go to file "database_handler.php". Change MySQL root username and password to yours.

	Login etc should work now.

-> TODO:
	
	Create tutoring page. We need a separate table in DB for that. A form is needed to apply for tutoring. A mail should be received by tutors when form is filled. Allow max one application to prevent spam lolol.

	Login page needs updated validation checks (currently duplicate usernames and email ids are prevented).

	Create admins, moderators, tutors columns in user_table.

	Add content!

	Create profile page (Low priority).



