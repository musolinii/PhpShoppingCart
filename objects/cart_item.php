<?php
// 'cart item' object
class CartItem
{
   
    // database connection and table name
    private $conn;
    private $table_name = "cart_items";

    // object properties
    public $id;
    public $product_id;
    public $quantity;
    public $user_id;
    public $created;
    public $modified;

	// constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // check if a cart item exists
    public function exists()
    {

        // query to count existing cart item
        $query = "SELECT count(*) FROM " . $this->table_name . " WHERE product_id=:product_id AND user_id=:user_id";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // sanitize
        $this->product_id=htmlspecialchars(strip_tags($this->product_id));
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));

        // bind category id variable
        $stmt->bindParam(":product_id", $this->product_id);
        $stmt->bindParam(":user_id", $this->user_id);

        // execute query
        $stmt->execute();

        // get row value
        $rows = $stmt->fetch(PDO::FETCH_NUM);

        // return
        if($rows[0]>0){
            return true;
        }
        
        return false;
    }
}
