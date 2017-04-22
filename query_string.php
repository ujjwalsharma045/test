<?php
$arr = array(
        'name'=>'ujjwal sharma',
        'name_2'=>array('fname'=>'ujjwal' , 'lname'=>'sharma'),
        'name_3'=>array('name'=>array('fname'=>'ujjwal' , 'lname'=>'sharma')),    
        'last',
        'least'
);

echo http_build_query($arr);
echo "<br/>";
echo http_build_query($arr , 'flag_');
echo "<br/>";
echo http_build_query($arr  , 'flag_'  , '&sep');
echo "last program with vim with new branch";
?>
