<?php

//use in_array
$a = array('rohit','kamlesh','yashwant','yadav');

if(in_array('rohit',$a)){
    echo 'find and match (use in_array)';
}else{
    echo 'value not find';
}

//us range()

$a = range(1,10);
echo '<pre> <h3>use range() method</h3> <br>';
print_r($a);

$b = array('rohit','kamlesh','yashwant','yadav','rohit');
echo '<pre> <h3>use array_unique() method</h3> <br>';
print_r(array_unique($b));


echo '<pre> <h3>use array_slice() method</h3> <br>';
print_r(array_slice($b,1));

?>