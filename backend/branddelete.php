<?php
    include "header.php";
    include "leftside.php";
    include "class/brand_class.php";
?>

<?php
    $brand = new brand;
    if(!isset($_GET['brand_id']) || $_GET['brand_id']==NULL) {
        echo "<script>window.location = 'cartegorylist.php'</script>";
    }else{
        $brand_id = $_GET['brand_id'];
    }
    $delete_brand = $brand -> delete_brand($brand_id);
    
?>

