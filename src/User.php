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
}
?>
