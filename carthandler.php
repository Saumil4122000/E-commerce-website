<?php
session_start();

if(isset($_SESSION['cart'])){
    $checker=array_column($_SESSION['cart'],'item_name');
    if (in_array($_GET['cart_name'],$checker)) {
        echo "<script> alert('Already in cart');
        window.location.href='product.php';
        </script>";
    }
    else{
    $count=count($_SESSION['cart']);
$_SESSION['cart'][$count]=array('item_id'=> $_GET['cart_id'], 'item_name'=> $_GET['cart_name'],'item_price'=> $_GET['cart_price'],
'quantity'=>1);

echo "<script> alert('Product added');
window.location.href='product.php';
</script>";
}
}
else{
    $_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'],'item_name'=> $_GET['cart_name'],'item_price'=> $_GET['cart_price'],'quantity'=>1);
    echo "<script> alert('Product added');
    window.location.href='product.php';
    </script>";


}
echo "<pre>";
var_dump($_SESSION['cart']);
echo "</pre>";
?>