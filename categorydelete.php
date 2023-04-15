
<?php
    include "connection.php";
    //deleting products from database
    if (isset($_GET['delete'])) 
    {
        $id = $_GET['delete'];
        $deletequery = "DELETE FROM category WHERE category.category_id = $id ";
        $result = mysqli_query($conn, $deletequery);
        if ($result) 
        {
            header('location: adminaddcategories.php');
            ?> <script>
                window.alert("One record has been deleted.");
            </script> <?php
        }
    }
?>