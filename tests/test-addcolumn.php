<?php
require_once './config/Database.php';
require_once './src/User.php';

try {
    // Initially create the table
    User::createTable();
    echo "Initial table 'users' created successfully.\n";

    // Add a new column
    if (User::addColumn('age', 'integer')) {
        echo "Column 'age' added successfully.\n";
    } else {
        echo "Failed to add column 'age'.\n";
    }

    // Verify the new column exists by inserting data
    $user = new User([
        'name' => 'Alice',
        'email' => 'alice@example.com',
        'password' => 'password789',
        'age' => 30
    ]);

    if ($user->save()) {
        echo "User with new column 'age' created successfully.\n";
    } else {
        echo "Failed to create user with new column 'age'.\n";
    }

    // Display current table structure
    echo "Users:\n";
    $allUsers = User::findAll();
    print_r($allUsers);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
