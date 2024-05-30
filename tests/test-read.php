<?php
require_once './src/Product.php';

$product = Product::find(1);

if ($product) {
    print_r($product);
} else {
    echo "Product not found.";
}
?>



<!-- 
<?php
require_once '../src/User.php';

$user = User::find(1);

if ($user) {
    print_r($user);
} else {
    echo "User not found.";
}
?> -->
