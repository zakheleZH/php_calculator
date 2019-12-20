<!DOCTYP html>
<html>
	<head>
		<title>php Calculator</title>
		
	</head>
	<body>
	<body>
	 <center>
	<h1>php Calculator</h1>
	 <center>
		<form method="post">
		<table border="1" align="center">
			 


			<tr>
				<th>Enter your First number</th>
				<th><input type="number" name="first_number"></th>
			</tr>


			<tr>
				<th>Enter your Second number</th>
				<th><input type="number" name="second_number"></th>
			</tr>

			<tr>
				<th>Select a Sign</th>
				<th>
				<select name="sign_choice">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
				</select>
				</th>
			</tr>
				<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="submit" value="Show Result"/>
				</th>
			</tr>

			</table>
		</form>
		<?php
      
      if(isset($_POST['submit']))// checking if submit button is click
{
	$first_number_entered = $_POST['first_number']; //declaring and storing first number
	$second_number_entered = $_POST['second_number']; //declaring and storing second number
	$selected_sign = $_POST['sign_choice']; //declaring and storing signs
	if(!empty($first_number_entered) && !empty($second_number_entered )) // checking if first and second number are not empty
	{

		switch($selected_sign) // using switch case to check the signs
	{
        case '+':
        $calculate = $first_number_entered+$second_number_entered;
		$result= "$first_number_entered+$second_number_entered = $calculate ";
		break;
		
		case '-':
		 $calculate = $first_number_entered-$second_number_entered;
		$result="$first_number_entered-$second_number_entered = $calculate";
		break;
		
		case '*':
		$calculate = $first_number_entered*$second_number_entered;
		$result= "$first_number_entered*$second_number_entered  = $calculate";
		break;

		 
	}
	// displaying results
      echo "
      <center>
      <h1>$result</h1> 
         </center>
      ";
     
	}

	  else
		{
			  echo "
			   <center>
			  <font color='red'>Please fill all input field </font>
                 </center>
			  "; // displaying an error message if input field are empty
		}

	
}

		?>


	</body>
</html>