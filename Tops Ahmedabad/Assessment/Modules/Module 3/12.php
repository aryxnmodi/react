<html>
<head>
</head>
<body>
<?php 
$JSON = '{
    "FIFA_Last_World_Cup_final":
    {
        "Year": "2018",
        "data":
        {
            "Winner": "France",
            "Score": "4-2",
            "Runner-up": "Croatia"
        }
    }
}';

$outputArray = json_decode($JSON, TRUE);

print "<PRE>";
print_r($outputArray);
?>
</body>
</html>