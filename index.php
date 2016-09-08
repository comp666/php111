<meta charset="utf-8">
<?php
$example=33;
  echo $example;
  echo "<br />";
  
if(is_integer($example))
{
  echo "yes";
  echo "<br />";
  }
if(isset($example))
{
  echo "yes";
  echo "<br />";
}
if(is_double($example))
{
  echo "yes";
  echo "<br />";
}
$taptap="тест";
  echo $taptap;
  echo "<br />";
  if (isset($taptap)){
	  echo "yes";
  }
  else {
	  echo "<br />";
	  echo "no";
       }
	   define ("PI","3,14",true);
	   echo PI;

if(is_integer())

	echo "int";
    else
	echo "not int";
	
	
if(is_string())

	echo "int";
    else
	echo "not str";

?>
