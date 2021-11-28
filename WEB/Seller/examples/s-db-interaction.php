<?php
session_start();

$conn = mysqli_connect("localhost","root","","beaut_ecom"); 

if(isset($_POST['addprodbtn'])){
    $product_name = $_POST['productname'];
    $product_descrip = $_POST['productdescription'];

    $add_to_product_table_q = "INSERT INTO product (p_name, p_descrip) VALUES ('$product_name', '$product_descrip')";
    $query_run = mysqli_query($conn, $add_to_product_table_q);

    if($query_run){
        $_SESSION['success'] = "Stuff added boss";
        header('Location: s-products.php');
    }else{
        $_SESSION['status'] = "shit happened boss";
        header('Location: s-products.php');
    }
}

?>
