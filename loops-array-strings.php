<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php


// Q1) Loops
// a) Modify the following code so that the loop outputs the numbers 5-15
// b) Re-write the loop as a while loop


for($i=5;$i<=15;$i++)
{
    echo "{$i}<br>";
}

$i = 5;
while($i <= 15){
    echo "{$i}<br>";
    $i++;
}



// Q2) Arrays
// a) Output the entire contents of the $countries array using a var_dump() or print_r() statement
// b) Using this array, write a single echo statement that outputs 'USA is in North America'
// c) Using this array, write a single echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'
// d) Output the entire contents of the array as an HTML list using a foreach loop
// e) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net
// http://php.net/manual/en/function.array-merge.php. Output the joined array using a var_dump() or print_r() statement.
// f) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.



$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
// var_dump($countries);
print_r($countries);
echo("<br> $countries[2] is in North America");
echo("<br> $countries[0], $countries[1], $countries[3], $countries[5] are all in Asia");

forEach($countries as $value){
    echo("$value <br>");
}


$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];

array_push($countries, $moreCountries);
print_r($countries);



print_r($countries);
arsort($countries);
forEach($countries as $value){
    
    echo("<br> $value <br>");
}


// Q3) Associative Arrays
// a) Using the $films array, write an echo statement that outputs 'Spirited Away was released in 2001'
// b) Add another film to the array, using an echo statement, output some of new the film's details
// c) Using a foreach loop display the details for all the films
// d) Output the data from (c) using an HTML table.


$films=[
    ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
    ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
    ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"],
];

echo("{$films[1]['title']} was released in {$film[1]['year']} <br>");

array_push($films, ["title"=>"Diamonds", "year"=>"2020", "duration"=>110,"certificate"=>"45"]);

// print_r($films);
foreach ($films as $film) {
    echo "Title: {$film['title']}<br>";
    echo "Year: {$film['year']}<br>";
    echo "Duration: {$film['duration']} minutes<br>";
    echo "Certificate: {$film['certificate']}<br>";
    echo "<br>";

};

echo "<table>";
echo "<tr><th>Title</th> <th>Year</th> <th>Duration</th> <th>Certificate</th> </tr>";
foreach($films as $film){
    echo "<tr>";
    echo "<td>{$film['title']}</td>";
    echo "<td>{$film['year']}</td>";
    echo "<td>{$film['duration']}</td>";
    echo "<td>{$film['certificate']}</td>";
    echo "</tr>";
}
echo "</table>";
echo"<br>";






// Q4) Strings
// a) Using the following string, write an echo statement that outputs the fifth character in the string
// b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
// c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
// d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'


$moduleStr="CIT2202 Web Development";

echo("$moduleStr[6] <br>");

echo(strlen("$moduleStr<br>"));
echo(strtolower("<br> $moduleStr <br>"));

echo(substr($moduleStr, 8, 3));


?>

</body>
</html>
