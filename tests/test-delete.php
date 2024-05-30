<?php
require_once '../src/Product.php';

$product = new Product(['id' => 1]);

if ($product->delete()) {
    echo "Product deleted successfully.";
} else {
    echo "Failed to delete product.";
}
?>






<!-- <?php
require_once '../src/User.php';

$user = new User(['id' => 1]);

if ($user->delete()) {
    echo "User deleted successfully.";
} else {
    echo "Failed to delete user.";
}
?> -->
