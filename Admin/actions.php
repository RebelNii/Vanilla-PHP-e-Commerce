<?php
require_once('../connect.php');

if(isset($_POST['submit'])){
    $name = addslashes($_POST['name']);
    $price = addslashes($_POST['price']);
    $description = addslashes($_POST['description']);
    $category = addslashes($_POST['category']);
    $brand = addslashes($_POST['brand']);
    $keyword = addslashes($_POST['keyword']);
    $image = $_FILES['image']['name'];

    if(empty($name) || empty($price) || empty($description) || empty($category) || empty($brand) || empty($keyword) || empty($image)){
        echo "Please fill all the fields";}

    if($_FILES['image']["error"] == 0){
        //switch statement is used to control file type
        switch($_FILES['image']["type"]){
            case"image/jpeg":
                echo "file is accepted<br/>";
                break;
            case"image/png":
                echo"file is accepted<br/>";
                break;
            case"image/jpg":
                echo "file is accepted<br/>";
                break;
            default:
            //illegal file
            exit("illegal file type");
        }
    }

    //create new directory
    $new_file_directory = "../".date("Y")."/".date("m")."/".date("d");

    if(!is_dir($new_file_directory)){
        //create new directory if none exist
        mkdir($new_file_directory,0777,true);
        $destination = $new_file_directory."/".$image;
    }else{
        //directory exist
        $destination = $new_file_directory."/".$image;
    }


    if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){
        //sql query
        $sql = "INSERT INTO `products` SET `product_name`='$name', `product_price`='$price', 
        `product_description`='$description', `product_category`='$category', `product_brand`='$brand', 
        `product_keyword`='$keyword', `product_image`='$destination'";
        $result = $db->query($sql);
        if(!$result){
            exit("SQL error.<script>window.location.href='Admin.php'</script>");
        }else{
            echo '<script>window.location.href="Admin.php"</script>';
        }

        $db->close();
    }


}else{
    echo "error";
}
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['Upload'])){
        $category = addslashes($_POST['category']);

        $sql = "INSERT INTO `category` SET `category`='$category'";

        $result = $db->query($sql);
        if(!$result){
            exit("SQL error.<script>window.location.href='Admin.php'</script>");
    }else{
        echo '<script>window.location.href="Admin.php"</script>';
    }
    }
}

?>