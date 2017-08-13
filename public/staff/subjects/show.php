<?php

//incorrect syntax: $SubjectID= $_GET[$id];
//yes: $SubjectID= $_GET['id'];

//Validate super-variable has value
//php7 "terniary" instead: $SubjectID =  $_GET['id'] ??  '1';
$SubjectID = isset($_GET['id'])  ?  $_GET['id'] : '1';

echo "The ID Value is " . $SubjectID;

?>