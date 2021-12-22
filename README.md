# Quiz-Web-App


-Technologies used: JavaScript, jQuery, HTML, CSS and PHP

Overview:
This is a simple online quiz web-app, in which admin can add, edit, delete quizzes with questions with four options which can be in both formats textual and image, can view all the previous results, whereas the user can give the test with a timer. This app majorly has two interfaces- Admin Panel and User Panel. The user can immediately see the final results and how many questions were right and wrong in the quiz after he/she has completed the quiz. Also both admin and user can see all the previous results. Admin can see previous results of all the users, user can only see their own previous results. This web-app can be used for learning purposes.
Key Features:
 	Admin Panel

	 Admin Login Page: This page helps in securing the web-app’s information.

	Add Exam Category: Using this page the admin can add, edit and delete exam category and time for completing the quiz/exam to the database. 

	Add Exam Question: Using this page the admin can add, edit and delete questions with options (four options) which can be in either textual or image format. 

	All Exam Results: Using this page the admin can view results of all the users with date. 

	Logout: Using this option we can logout and end the session, this will help in maintaining the security.

 	User Panel

	User Login Page: This page helps in securing the web-app’s information.

	Select Exam: Using this page user can select the exam/quiz the user wants to give.

	Questions: On this page the Questions are displayed with its four options and the user has the option to go back and forth using the Next and Previous buttons. 

	Timer: Every exam has been given a certain amount of time by admin within which the exam needs to be completed. If user completes it within the given time frame then the exam ends and the result is displayed but if the time runs out the exam will get over by itself and display the results.

	Previous Result: This page has all the previous results of all the exam user has given till now with date in descending order.
Admin Access:
 	Username: admin
 	Password: admin
Data Base:
 	Name: quiz_app
 	There are total of 5 tables:
	admin_login: This stores admin login information.
	registeration: this stores user login information.
	exam_category:  This stores exam category and amount of time for the exam.
	questions: This stores information of question number, questions, options, answers and category to which the question belongs.
	exam_results: This stores the users result data with username, date of exam, exam category,total number of correct and wrong answers etc.
References:
 	For code reference and learning php and sql modules: https://www.youtube.com/playlist?list=PLsdZGHZMYvk3fMDmqy12KKiHvdWWmmHxI 

 	The frontend part was taken from the above link and used without any change. 

 	As for the backend part I created this video using tutorials and php code may seem 
similar because I created it while learning but it is entirely created by me.
Blockages:
 	Unknown database “database_name” in MySQL with WAMPServer: Here I had to change my mysql port as the one I was using with xampp was dofferent from the one on my laptop
 	Notice undefined index: username in C:\xampp\htdocs\select_exam.php: In this error I had forgotten to write session_start(); in the beginning of the file. 
 	 There was a syntax error in edit_exam.php wrote msqli_fetch_array($res) instead of mysqli_fetch_array($res).
 	Mysqli_fetch_array() expects parameter 1 to be mysqli_result, boolean given in: I solved this from the solution given on stack overflow: https://stackoverflow.com/questions/15439919/mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-given-in and found out that here too there was a syntactical fault.



Web-App UI:
USER:
 
 
 
 
 
 
 

Admin:
 
 
 
 
 
 
