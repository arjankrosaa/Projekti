<?php 
include_once __DIR__ . '/../database/databaseConnection.php';


class ProduktiRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product) {
    $conn = $this->connection;

    $id = $product->getId();
    $image = $product->getImg();
    $text = $product->getText();

    $sql = "INSERT INTO products (id, image, text) VALUES (?, ?, ?)";

    $statement = $conn->prepare($sql);

    // Check if the execution was successful
    if ($statement->execute([$id, $image, $text])) {
        echo "<script> alert('Product has been inserted successfully!'); </script>";
    } else {
        echo "<script> alert('Error inserting product.'); </script>";
    }
}


    

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM products WHERE id='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    function updateProduct($id,$image,$text){
         $conn = $this->connection;

         $sql = "UPDATE products SET image=?, text=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$image,$text,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteProduct($id){
        $conn = $this->connection;

        $sql = "DELETE FROM products WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>