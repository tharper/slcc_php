# Week 3

This week we will be using our resume website created in the CSS course.  We will be converting this page into a contact directory. The template has been slightly modified for you.  You will be using json data from https://randomuser.me/api/?results=10. Below are the requirements for this task.

1) Create a PHP class for the Data. This should have a method to fetch the data from https://jsonplaceholder.typicode.com/users .  Here is and example of using curl to get the data.

```
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'url_here');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
```

2) Create a PHP class for the Users. 
3) Use PHP to generate the menu using your USER object. Hint: You may want to explore using a static method.  The menu links should pass a variable that can be used to load an individual User. Example:  index.php?id=1
4) Use the variable passed in the url to load an individual user record.  You should display the User's first and last name, address, email, phone, and picture.        

Resources:

http://php.net/manual/en/