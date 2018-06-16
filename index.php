<?php
<!-- index.php -->

$connect = new PDO("mysql:host=localhost;dbname=testing4", "root", "");

function fill_unit_select_box($connect)
{

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Cost Splitter</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
	<body>
		<br>
		<div class="container">
			<h1 align="center">Cost Splitter</h1>
			<!-- <form method="post" id="insert_form"> -->
				<div>
					Total bill: <input type="number" id="total">
					Number in group: <input type="number" id="groupNum">
					<input type="button" value="Fair share" onclick="sum()"><br>
					Everyone's fair share is: <input type="number" id="printOrigAvg">
					<p id="question1"></p><br>
				</div>
			<!-- </form> -->
		</div>
		<script>
			function sum(){
			document.getElementById("printOrigAvg").value = document.getElementById("total").value / document.getElementById("groupNum").value   ;
			document.getElementById("question1").innerHTML = "But is that really fair? Should someone pay something more? Or something less?"
			}
		</script>

		<form method="post" id="insert_form">
			<div class="table-responsive">
				<table class="table table-bordered" id="item_table">
					<tr>
						<th>Enter Item Name</th>
						<th>Enter Quantity</th>
						<th>Enter Unit</th>
						<th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
					</tr>
				</table>
				<br>
				<div align="center">
					<input type="submit" name="submit" class="btn btn-info" value="Insert">
			</div>
		</div>
	</form>



	</body>
</html>

<!-- https://medium.freecodecamp.org/reduce-f47a7da511a9 
https://www.google.com/search?q=how+do+you+add+another+input+box&rlz=1C1CHWA_enUS598US598&oq=how+do+you+add+another+input+box&aqs=chrome..69i57.1085j0j7&sourceid=chrome&ie=UTF-8
https://stackoverflow.com/questions/35154428/how-do-you-print-user-input-in-html-using-javascript
https://stackoverflow.com/questions/18300201/how-do-i-calculate-2-input-fields-and-put-results-in-3rd-input-field
https://www.youtube.com/watch?v=xzLclwZOZ-g
https://www.youtube.com/watch?v=xzLclwZOZ-g
https://www.w3schools.com/php/php_includes.asp
https://stackoverflow.com/questions/22776583/why-php-tag-is-not-working-in-html-file


		// var averageSoln = a/b;
		// function average(a,b){
		// 	return (a/b);
		// }
		// console.log(average());

		// alert(return(a/b));
		// alert(a);

			//where display it.
			//where place it for later use.


// const euros = [29.76, 41.85, 46.5];
// const sum = euros.reduce((total, amount) => total + amount); 
// sum // 118.11

// var avg = document.getElementById("origAvg") = function(){
// document.getElementByFunction("printOrigAvg").innerHTML = average;
// }

<button id="origAvg">Fair share</button>

function sum(){
document.getElementById("printOrigAvg").value = document.getElementById("total").value + document.getElementById("groupNum").value   ;}

var a = document.getElementById("total").value;
var b = document.getElementById("groupNum").value;

document.getElementById("printOrigAvg").value = a + b;

-->