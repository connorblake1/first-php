<!DOCTYPE html>
<html>
<head>
<?php
	$name1 = $_REQUEST['name1'];
	$background = $_REQUEST['background'];
	$weatherADJ = $_REQUEST['weatherADJ'];
	$natureName = $_REQUEST['natureName'];
	$plurAnimal = $_REQUEST['plurAnimal'];
	$soundING = $_REQUEST['soundING'];
	$personinRoom = $_REQUEST['personinRoom'];
	$movingVerb = $_REQUEST['movingVerb'];
	$color1 = $_REQUEST['color1'];
	$colorD = $_REQUEST['colorD'];
	$mammal = $_REQUEST['mammal'];
	$exclam = $_REQUEST['exclam'];
	$largeObject = $_REQUEST['largeObject'];
	$number = $_REQUEST['number1'];
	if ($number > 12) {
		$number = "more than a dozen";}
	elseif ($number == 12) {
		$number = "a dozen";}
	elseif	 ($number < 12 && $number > 0) {
		$number = $number;}
	else {
		$number = "a few";}
	$plurFood = $_REQUEST['plurFood'];
	$beverage = $_REQUEST['beverage'];
	$ADJ1 = $_REQUEST['ADJ1'];
	$VERB1 = $_REQUEST['VERB1'];
	echo("<title>".$name1."'s Mad Lib</title>");
	echo('<style type="text/css">');
	echo("body {background-image: url(".$background.".jpg); background-size: cover; font-size: 18px;}");
	echo("h1 {font-size = 36pt; text-align: center;}");
	echo("table, td {background-color: white; border: solid black 1px; padding: 20px}");
	echo('</style>');
	echo('</head>
				<body>');
	echo("<br/>");
	echo('<table><td>');
	echo("<h1>".$name1."'s Mad Lib</h1>");;
	echo("It was a ".$weatherADJ." day in ".$natureName." National Park. ");
	if ($weatherADJ == 'rainy') {
		echo("The rain was falling hard yet ".$name1." and ".$personinRoom." did not care.");}
	elseif ($weatherADJ == 'sunny') {
		echo("The sun was shining and the park was alive all around them.");}
	elseif ($weatherADJ == 'cloudy') {
		echo("It looked like it was about to rain but ".$name1." and ".$personinRoom." pressed on.");}
	elseif ($weatherADJ == 'cold') {
		echo("Snow was beginning to fall but ".$name1." and ".$personinRoom." pressed on.");}
	elseif ($weatherADJ == 'hot') {
		echo("Sweat was dripping down ".$name1." and ".$personinRoom. " but they continued on.");}
	echo(" The ".$plurAnimal." were ".$soundING.", and ".$personinRoom." was ".$movingVerb." 
	 while walking down the path near <b><span style=\"color:".$color1."\">".$colorD."</span></b> Falls. Suddenly, 
	a ".$mammal." came walking on the path straight toward them. Suddenly ".$personinRoom." 
	yelled ".$exclam."! The ".$mammal." then charged at them! ".$personinRoom." ran at and 
	tried to climb up a ".$largeObject." but fell back down. The ".$mammal." stopped and 
	grabbed the backpack off the ground and ran off with ".$number." ".$plurFood." spilling out the the bag. 
	After that traumatizing experience, ".$personinRoom." and ".$name1." headed back to the lodge for a large cup 
	of ".$beverage.". After finishing off their cups of ".$beverage.", and feeling very ".$ADJ1.", 
	they both went off ".$VERB1." in the hotel. Finally, for dinner they both ordered ".$mammal." burgers
	 to take revenge on that darn ".$mammal."...");
	 echo('</td></table>');
?>
</body>

</html>