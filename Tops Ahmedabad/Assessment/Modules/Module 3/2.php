<html lang="en">
<head>
    <title>check year is leap year or not</title>
</head>
<body>
    <form>
    <action="" method="post"></action>
       <label> Enter the Year </label> <input type="number" name="LeapYear">
    <input type="submit" value="submit" name="submitForm"></br></br>
    <action="" method="post"></action>
    </form>
    
</body>
<action="" method="post"></action>

</html>
<?php
if(isset($_GET["submitForm"]))
{
    $year=$_GET['LeapYear'];
    if(($year%4)==0)
    {
        if(($year%100)==0)
        {
            if(($year%400)==0)
            {
                echo "$year is a leap year";
            }
            else{
                echo "$year is not a leap year";
            }
        }
        else{
            echo "$year is a leap year";
        }
    }
    else{
        echo "$year is not a leap year";
    }
}
?>
</head>
</html>