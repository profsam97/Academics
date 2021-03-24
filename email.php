<?php
    include "includes/db.php";
if(isset($_POST)){
    $received_data = json_decode(file_get_contents("php://input"), true);
        $new = $received_data['text'];
        if($new != ""){
        $retur = mysqli_query($connection, "SELECT * from users WHERE user_email = '$new'");
        $resul = mysqli_fetch_array($retur);
        if(mysqli_num_rows($retur)  >= 1){
            $ans = true;
            echo  $ans;
        }else if(mysqli_num_rows($retur) < 1 ){
            $ans = "";
            echo  $ans;
        
        }
        echo json_encode($ans);
    
}

}
?>
 