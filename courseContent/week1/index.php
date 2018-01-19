<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP Week 1 Problems</title>
</head>
<body>
	<p>Learning a new language takes practice and repetition.  Even the best programmers review documentation to remember functions and their accepted parameters.  Don't hesitate to look at the online php manual. When you find the answer don't copy and paste, but be sure to type it out.  This will help you remember the syntax.</p>

	<div class="problem">
		<h2>Problem 1</h2>
		<p>Add the following lines to the top of the scripts.php file.  This will make sure that errors are returned to the browser which will aid in debugging.</p>
		<p>ini_set('display_errors',1); <br />
		error_reporting(E_ALL);</p>

	</div> 

	<div class="problem">
		<h2>Problem 2</h2>
		<p>Open scripts.php in your editor and add phpinfo(); Remember to wrap it in opening and closing PHP tags. Open this file in your browser.  The address should be something like http://localhost/scripts.php.  Note the version of PHP below in the answer section and then comment out phpinfo();</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 3</h2>
		<p>At the top of this page include the script file. Make sure it works by creating a new variable on scripts.php.  Name the variable $message and set the value to "hello world". In the answer below echo out the variable. If done correctly, it will display hello world below.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 4</h2>
		<p>Create a new variable on the script.php page. Name the variable $name and set the value to your personal name. In the answer below concatenate the $message and $name variables with a string.  Your message should print "Hello world. My name is John and I'm learning PHP." where in this case John is the value of your $name variable.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 5</h2>
		<p>Create a new function on the script.php page.  Name this function helloWorld().  This function will return the string "hello world".  Call and echo this function in the answer below.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 6</h2>
		<p>Create a new function on the script.php page. Name this function isWeekend(). In this function get the current day using the built in date function, date("D").  Information about the date function can be found at <a href="http://php.net/manual/en/function.date.php">http://php.net/manual/en/function.date.php</a>.  If the day is Saturday or Sunday echo "It's the weekend". If it is any other day echo "It's a work day". Call this function in the answer section.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 7</h2>
		<p>Create a new function on the script.php page. Name this function getFullName().  The function should accept a country abreviation as the parameter and return the country's full name.  Use a switch case in the function.   Use the following countries. UG = Uganda, AE = United Arab Emirates, UK = United Kingdom, US = United States.  Set the switch default to return "no country found". Call this function below.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 8</h2>
		<p>Create a new function on the script.php page. Name this function multiplicationTable(). The function should accept a number  as a parameter and echo out a multiplication table.  Use a for loop to multiply the number by 1-10. The multiplication table should look like the one below where 6 is the number passed to the function.</p>
		<table>
			<tr><td>6*1=6</td></tr>
			<tr><td>6*2=12</td></tr>
			<tr><td>6*3=18</td></tr>
			<tr><td>6*4=24</td></tr>
			<tr><td>6*5=30</td></tr>
			<tr><td>6*6=36</td></tr>
			<tr><td>6*7=42</td></tr>
			<tr><td>6*8=48</td></tr>
			<tr><td>6*9=54</td></tr>
			<tr><td>6*10=60</td></tr>
		</table>

		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 9</h2>
		<p>Write a function daysInMonth that takes a month (between 1 and 12) as a parameter and returns the number of days in that month in a non-leap year. For example a call to daysInMonth(6) should return 30, because June has 30 days. </p>
		<table>
			<tr>
				<td>Month</td>
				<td>Jan</td>
				<td>Feb</td>
				<td>Mar</td>
				<td>Apr</td>
				<td>May</td>
				<td>Jun</td>
				<td>Jul</td>
				<td>Aug</td>
				<td>Sep</td>
				<td>Oct</td>
				<td>Nov</td>
				<td>Dec</td>
			</tr>
			<tr>
				<td>Days</td>
				<td>31</td>
				<td>28</td>
				<td>31</td>
				<td>30</td>
				<td>31</td>
				<td>30</td>
				<td>31</td>
				<td>31</td>
				<td>30</td>
				<td>31</td>
				<td>30</td>
				<td>31</td>
			</tr>
		</table>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 10</h2>
		<p>Write a function that prints the numbers from 1 to 100. But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz"</p>
		<p>Answer Here</p>
	</div> 

	<p><strong>Additional Problems</strong></p>

	<div class="problem">
		<h2>Problem 1</h2>
		<p>Create a function in the scripts.php page using a for loop to add all the integers between 0 and 30 and display the total. Call that function in the answer section.</p>
		<p>Answer Here</p>
	</div>

	<div class="problem">
		<h2>Problem 2</h2>
		<p>Create a function in the scripts.php to determine if a number is even. Hint:  $a % $b will divide $a by $b and return the remainder.  Call that function in the answer section.</p>
		<p>Answer Here</p>
	</div>
</body>
</html>