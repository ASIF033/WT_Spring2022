<?php
$fname= $_POST["fname"];
if (strlen($fname)<8)
{
    echo "please enter a valid first name";
}
else
{
    echo "Valid....Your First name is: ".$_POST["fname"];
}
echo "<br>";
$lname= $_POST["lname"];
if (strlen($lname)<8)
{
    echo "please enter a valid list name";
}
else
{
    echo "Valid......Your Last name is: ".$_POST["fname"];
}
echo "<br>";
$age= $_POST["age"];
if ($age=="")
{
    echo "please enter your age";
}
else
{
    echo "Your Age is: ".$_POST["fname"];
}
echo "<br>";
if(isset($_POST["des"]))
{
    echo "you have selected ".$_POST["des"];
}
else
{
    echo "you haven't selected any option";
}
echo "<br>"

if(isset($_POST["lan1"]) || isset($_POST["lan2"])|| isset($_POST["lan3"]))

{

    if (isset($_POST["lan1"]))
    {
     echo "you have selected ".$_POST["lan1"];
    }
    if (isset($_POST["lan2"]))
    {
     echo "you have selected ".$_POST["lan2"];
    }

    if (isset($_POST["lan3"]))
    {
     echo "you have selected ".$_POST["lan3"];
    }
}
echo "<br>"

$pass= $_POST["pass"];
if (strlen($pass)<5)
{
    echo "please enter a valid password";
}
else
{
    echo "Your password is valid";
}


?>