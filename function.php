<?php
require 'connection.php';
if(isset($_GET['action']) && isset($_GET['id'])){
 $action =$_GET['action'];
 $id = $_GET['id'];

    switch($action){
        case 'delete';
            delete_data($id);
            break;
        default:
            echo "Aksi tidak di definisikan";
}   
}else {
    echo "Aksi dan id tidak di definisikan";

}
function delete_data($id){
    global $connection;
    $res = mysqli_query($connection,"DELETE FROM tb_person WHERE id -" .$id);
    if($res){
        header('Location: index.php?messages=Berhasil dihapus');
        exit();
    }else{
        header('Location: index.php?messages=Gagal dihapus');
        exit();
    }
}

?>