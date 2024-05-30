<?php
require_once 'ORM.php';

class Product extends ORM {

    protected static $table = 'products';
    protected string $name;
    protected string $price;
    protected $is_available;

    protected static $columns = [
        'name' => 'string',
        'price' => 'integer',
        'is_available' => 'boolean'
    ];

    public function __construct($attributes = []) {
        parent::__construct($attributes);
        $this->name = $attributes['name'] ?? null;
        $this->price = $attributes['price'] ?? null;
        $this->is_available = $attributes['is_available'] ?? null;
    }
}
?>
