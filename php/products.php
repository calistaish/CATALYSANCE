<form action='products.php' method='post'>
    <input type='submit' name='next' value='next'>
    <input type='submit' name='prev' value='prev'>
</form>
<?php
include('connect.php');
$counter = mysqli_fetch_row(mysqli_query($conn, 'select count(*) from counter;'));
foreach($counter as $key => $value){
    settype($value, 'integer');
    var_dump($value);
    $i = $value;
    var_dump($i);
}

if(isset($_POST['next'])){
    $next = mysqli_query($conn, 'insert into counter values (' . $i . ' + 1' . ');');
}

else if(isset($_POST['prev'])){
    $prev = mysqli_query($conn, 'delete from counter where counter = ' . $i . ';');
}
$data = mysqli_query($conn, 'select * from products where product_id = '. '"' . $value . '"'. ' ;');
while($row = mysqli_fetch_assoc($data)){
    echo $row['product_name'] . '<br>';
    echo $row['product_price'] . '<br>';
    }


?>
