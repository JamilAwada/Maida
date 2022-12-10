<?php

    include_once('config.php');

?>

<?php

    if(isset($_POST['input'])){
        $name = $_POST['input'];

        $sql = "SELECT * FROM dishes WHERE name LIKE '%$name%'";
        
        //fetch query using pdo
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        
        //if result is not empty
        if($query->rowCount() > 0){
            foreach($result as $row){
                
                echo "<li onclick='location.href= \"search.php?name=".$row->name."\" ' style='background:white;width:100%; text-align:center; padding:10px;'>".$row->name."</li>";
            }
        }else{
            echo "<li style='text-align:center; padding:10px;background:white;'>No result found</li>";
        }
    }
?>