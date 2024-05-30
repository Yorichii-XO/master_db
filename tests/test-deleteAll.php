<?php
require_once './config/Database.php';
require_once './src/User.php';

try {
    // Create table if it doesn't exist
    User::createTable();
    echo "Table 'users' is ready.\n";

    // Insert sample data
    $user1 = new User(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => 'password123']);
    $user1->save();

    $user2 = new User(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => 'password456']);
    $user2->save();

    echo "Inserted sample data.\n";

    // Verify data is inserted
    $allUsers = User::findAll();
    echo "Users before deleteAll:\n";
    print_r($allUsers);

    // Delete all records
    User::deleteAll();
    echo "All users deleted.\n";

    // Verify data is deleted
    $allUsersAfterDeletion = User::findAll();
    echo "Users after deleteAll:\n";
    print_r($allUsersAfterDeletion);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
