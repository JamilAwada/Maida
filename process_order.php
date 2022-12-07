<?php

    include_once('config.php');

?>

<?php

    // click on a card to go to the dish page
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        

        header("Location: order.php?id=$id&name=$dishname");
       
    

        
        // $sql = "SELECT * FROM search WHERE namej LIKE '%$id%'";
        
        // //fetch query using pdo
        // $query = $db->prepare($sql);
        // $query->execute();
        // $result = $query->fetchAll(PDO::FETCH_OBJ);
        
        // //if result is not empty
        // if($query->rowCount() > 0){
        //     foreach($result as $row){
                
        //         echo "<li onclick='location.href= \"search.php?name=".$row->name."\" ' style='background:white;width:100%; text-align:center; padding:10px;'>".$row->name."</li>";
        //     }
        // }else{
        //     echo "<li style='text-align:center; padding:10px;background:white;'>No result found</li>";
        // }
    }
?>