<?php
require_once './config/Database.php';
require_once './src/User.php';

try {
    // Drop the column
    if (User::dropColumn('age')) {
        echo "Column 'age' dropped successfully.\n";
    } else {
        echo "Failed to drop column 'age'.\n";
    }
    // Verify the column is dropped by checking table structure
    echo "Users after dropping 'age' column:\n";
    $allUsers = User::findAll();
    print_r($allUsers);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
