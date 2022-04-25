INSTRUCTIONS/TASKS: 
	Assume that you are an event organizer (any type of event). The event requires participants to register online. The event can be any type of your interest. 
	Based on the event type/title, you shall choose an appropriate CSS style design to suite the event. For example, of the event is an official event, you need to apply a formal design/layout for your page. 
	You need to create a landing page (index page) that explains the event details. On top of that, the following functions are required:

Administrator User
	CREATE default account for admin using via phpmyadmin
	Login/ logout with SESSION (authentication)
o	Use the “required” form attribute or JavaScript function check( ), and make sure that all fields need to be entered before allowing submission. If one of the text fields is left blank, display a dialog message “Please enter all fields” and stop submission.
	Allow the admin to add at least ONE (1) subprogram/category.
o	Example: You event is Fun Run Registration System. Admin should be able to create categories of 5km, 10km, or 21km for the participants to enter.
	Allow the admin to view the registered participants’ details including registered category registered by user. (view function) 
	Allow the admin to delete the registered user (delete function)
	Allow the admin to find/search registered user (search function)
	Set number of quota for each subprogram/category. (Extra Function)
o	If your 5km run allows 100 runners, the 101th runner should not be able to register. 
User
	Allow user to register as a member:
o	Must have at least the following: 
	Username (existing username is not allowed to register)
	Proposed/enter new password and confirm password values must be exactly same.
	Other relevant information that you need to collect for the registration.
	Use the “required” form attribute or JavaScript function check( ), will make sure that all fields need to be entered before submission. If one of the text fields is left blank, display a dialog message “Please enter all fields” and stop submission.
	Login/ logout with SESSION (authentication)
o	Use the “required” form attribute or JavaScript function check( ), will make sure that all fields need to be entered before submission. If one of the text fields is left blank, display a dialog message “Please enter all fields” and stop submission.
	Allow user to register at least one subprogram/category. (insert function)
	Display and edit user profile including to change category. (all information can be edited EXCEPT username)
	Restrict user to register the event if the quota is FULL. (Extra Function)
