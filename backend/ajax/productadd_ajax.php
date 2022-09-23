<?php
    include "../class/product_class.php";
    include "../lib/database.php";
?>


<?php
    $product = new product;
    $danhmuc_id = $_GET['danhmuc_id'];

?>

<option value="">--Chọn--</option>
<?php
    $show_brand_ajax = $product -> show_brand_ajax($danhmuc_id);
    if($show_brand_ajax){while($result =  $show_brand_ajax -> fetch_assoc()){
?>
<option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
<?php
        }
    }    
?>        