<?
//Check if the delete button has been clicked
if(isset($_GET["c_id"])){
    $client_id = $_GET["c_id"];
    //connect to the database to delete
    require_once "db_connection.php";
    $deleteQuery = "DELETE FROM clients WHERE id = '$client_id'";
    //use mysqli_query() to execute the delete query
    $delete = mysqli_query($connection,$deleteQuery);
    //check if deletion was successful
    if(isset($delete)){
        header("location:voters.php");
    }else{
        die("Deleting failed");
    }
}