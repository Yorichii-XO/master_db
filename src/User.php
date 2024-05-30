<?php
require_once 'ORM.php';

class User extends ORM {
    protected static $table = 'users';
    protected static $columns = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    protected $name;
    protected $email;
    protected $password;

    public function __construct($attributes = []) {
        parent::__construct($attributes);
        $this->name = $attributes['name'] ?? null;
        $this->email = $attributes['email'] ?? null;
        $this->password = $attributes['password'] ?? null;
    }

    public function save() {
        // Check if email is unique
        $sql = "SELECT COUNT(*) FROM " . static::$table . " WHERE email = :email";
        $stmt = Database::getInstance()->prepare($sql);
        $stmt->execute([':email' => $this->email]);
        if ($stmt->fetchColumn() > 0) {
            throw new Exception("Email already exists.");
        }

        return parent::save();
    }
}
?>
