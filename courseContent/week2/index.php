<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP Week 2 Problems</title>
</head>
<body>
	<p>Learning a new language takes practice and repetition.  Even the best programmers review documentation to remember functions and their accepted parameters.  Don't hesitate to look at the online php manual. When you find the answer don't copy and paste, but be sure to type it out.  This will help you remember the syntax.</p>

	<div class="problem">
		<h2>Problem 1</h2>
		<p>Create an array named $days that contains all the days of the week.  Monday, Tuesday, Wednesday...</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 2</h2>
		<p>Use the count() function to determine the number of items in the $days array created in problem 1.  Echo this total in the answer area.  <a href="http://php.net/manual/en/function.count.php">http://php.net/manual/en/function.count.php</a></p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 3</h2>
		<p>Display the values of the $days array using print_r(). <a href="http://php.net/manual/en/function.print-r.php">http://php.net/manual/en/function.print-r.php</a> This can be used to see the contents of your array. Add your answer below.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 4</h2>
		<p>Ask your classmates their favorite color. Create an associative array where the key is your classmate's first name and their favorite color is the value. Be sure to include yourself as well. Use print_r() to print the array in the answer section.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 5</h2>
		<p>Search the array created in problem 4 by passing a color to array_search(). <a href="http://php.net/manual/en/function.array-search.php">http://php.net/manual/en/function.array-search.php</a> Print your results in the answer section.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 6</h2>
		<p>Print the value of your favorite color in the answer section by using the array from problem 4. Example: $array["yourName"]</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 7</h2>
		<p>Using the array from problem 4, print the contained data so it is displayed for a web page. It should look like the following.</p>
		<p>Jim's favorite color is orange</p>
		<p>Lori's favorite color is red</p>
		<p>...</p>
		<p>You will want to use the foreach() function. <a href="http://php.net/manual/en/control-structures.foreach.php">http://php.net/manual/en/control-structures.foreach.php</a></p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 8</h2>
		<p>Used the multi-dimentional $movies array found in scripts.php to echo out the director for Full Metal Jacket.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 9</h2>
		<p>Change your url to be index.php?school=slcc Use the Super Global $_GET to echo the value of school found in the URL.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 10</h2>
		<p>You should never trust input from a user.  Repeat problem 9 but use htmlspecialchars() to encode your $_GET variable.</p>
		<p>Answer Here</p>
	</div> 

	<div class="problem">
		<h2>Problem 11</h2>
		<p>Use the form below to submit a value.  Echo "Welcome &lt;inputedName&gt;" in the answer section.</p>
		<form action="index.php" method="post">
			Name: <input type="text" name="name"><br>
			<input type="submit">
		</form>
		<p>Answer Here</p>
	</div> 
</body>
</html>