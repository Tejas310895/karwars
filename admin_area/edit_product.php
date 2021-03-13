<?php 

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

?>

<?php 

    if(isset($_GET['edit_product'])){

        $edit_id = $_GET['edit_product'];

        $get_p = "select * from products where product_id='$edit_id'";

        $run_edit = mysqli_query($con,$get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_id = $row_edit['product_id'];

        $p_title = $row_edit['product_title'];

        $store = $row_edit['store_id'];

        $p_image1 = $row_edit['product_img1'];

        $p_price = $row_edit['product_price'];

        $d_price = $row_edit['price_display'];

        $v_price = $row_edit['vendor_price'];

        $p_keywords = $row_edit['product_keywords'];

        $p_desc = $row_edit['product_desc'];

        $p_stock = $row_edit['product_stock'];

        $hsn = $row_edit['product_hsn'];

        $cgst = $row_edit['product_cgst'];

        $sgst = $row_edit['product_sgst'];

        $igst = $row_edit['product_igst'];

        $cess = $row_edit['product_cess'];

        $client_id = $row_edit['client_id'];

    }

        $get_store = "select * from store where store_id='$store'";

        $run_store = mysqli_query($con,$get_store);

        $row_store = mysqli_fetch_array($run_store);

        $store_title = $row_store['store_title'];

        $get_client = "select * from clients where client_id='$client_id'";

        $run_client = mysqli_query($con,$get_client);

        $row_client = mysqli_fetch_array($run_client);

        $client_id = $row_client['client_id'];

        $client_title = $row_client['client_shop'];

?>

<div class="row">
           <div class="col-lg-6 col-md-6">
           <h2 class="card-title">EDIT PRODUCT</h2>
           </div>
           <div class="col-lg-6 col-md-6">
            <a href="index.php?view_products" class="btn btn-primary pull-right">Back</a>
           </div>
       </div>
       <form action="" class="form-horizontal" method="post" enctype="multipart/form-data" >
        <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="product_title" value="<?php echo $p_title; ?>" placeholder="Product Title" required>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Pack</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="product_desc" value="<?php echo $p_desc; ?>" placeholder="Product Pack" required>
                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6 col-md-6 mt-5">
                <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">MRP</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="display_price" value="<?php echo $d_price; ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Vendor Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="vendor_price" placeholder="<?php echo $v_price; ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Sold Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="product_price" value="<?php echo $p_price; ?>" placeholder="Product Price" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-5">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Keywords</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="product_keywords" value="<?php echo $p_keywords; ?>" placeholder="Product Keywords" required>
                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6 col-md-6 mt-5">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Stock</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="product_stock" value="<?php echo $p_stock; ?>" placeholder="Product Stock" required>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-5">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select class="form-control" name="store" id="exampleFormControlSelect1" required>
                        <option value="<?php echo $store; ?>"><?php echo $store_title; ?></option>
                    <?php 
                              
                              $get_store = "select * from store";
                              $run_store = mysqli_query($con,$get_store);
                              
                              while ($row_store=mysqli_fetch_array($run_store)){
                                  
                                  $store_id = $row_store['store_id'];
                                  $store_title = $row_store['store_title'];
                                  
                                  echo "
                                  
                                  <option value='$store_id'> $store_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                    </select>
                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-4 col-md-4 mt-5">
                    <div class="form-group">
                        <label >Choose Product Image</label>
                        <input type="text" name="product_img1" class="form-control" value="<?php echo $p_image1; ?>" id="inputGroupFile01" required>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                <img src="<?php echo $p_image1; ?>" alt="" class="img-thumbnail" width="100px">
                </div>
                <div class="col-lg-6 col-md-6 mt-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Client</label>
                    <select class="form-control" name="client" id="exampleFormControlSelect1" required>
                    <option value="<?php echo $client_id; ?>"><?php echo $client_title; ?></option>
                    <?php 
                              
                              $get_client = "select * from clients";
                              $run_client = mysqli_query($con,$get_client);
                              
                              while ($row_client=mysqli_fetch_array($run_client)){
                                  
                                  $client_id = $row_client['client_id'];
                                  $client_title = $row_client['client_shop'];
                                  
                                  echo "
                                  
                                  <option value='$client_id'> $client_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                    </select>
                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-4">
                        <div class="form-group">
                            <label>HSN CODE</label>
                            <input type="number" name="product_hsn" class="form-control" placeholder="Enter Hsn Code" value="<?php echo $hsn; ?>" required>
                        </div>
                   </div>
                   <div class="col-2">
                        <div class="form-group">
                            <label>CGST</label>
                            <input type="number" name="product_cgst" step="0.01" class="form-control" placeholder="Enter CGST" value="<?php echo $cgst; ?>" required>
                        </div>
                   </div>
                   <div class="col-2">
                       <div class="form-group">
                            <label>SGST</label>
                            <input type="number" name="product_sgst" step="0.01" class="form-control" placeholder="Enter SGST" value="<?php echo $sgst; ?>" required>
                        </div>
                   </div>
                   <div class="col-2">
                        <div class="form-group">
                            <label>IGST</label>
                            <input type="number" name="product_igst" step="0.01" class="form-control" placeholder="Enter IGST" value="<?php echo $igst; ?>" required>
                        </div>
                   </div>
                   <div class="col-2">
                        <div class="form-group">
                            <label>CESS</label>
                            <input type="number" name="product_cess" step="0.01" class="form-control" placeholder="Enter CESS" value="<?php echo $cess; ?>" required>
                        </div>
                   </div>
                   <div class="w-100"></div>
                <div class="col-lg-12 col-md-12 mt-5">
                <div class="form-group pull-left">
                    <input type="submit" name="update" value="Submit Now" class="btn btn-success form-control">
                </div>
                </div>
            </div> 
       </form>

       <?php
       
       if(isset($_POST['update'])){

        $product_title = $_POST['product_title'];
        $store = $_POST['store'];
        $product_price = $_POST['product_price'];
        $display_price = $_POST['display_price'];
        $product_margin = $_POST['product_margin'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];
        $product_stock = $_POST['product_stock'];
        $product_hsn = $_POST['product_hsn'];
        $product_cgst = $_POST['product_cgst'];
        $product_sgst = $_POST['product_sgst'];
        $product_igst = $_POST['product_igst'];
        $product_cess = $_POST['product_cess'];
        $client = $_POST['client'];
        
        $product_img1 = $_POST['product_img1'];
        
        //$temp_name1 = $_FILES['product_img1']['tmp_name'];
        
        //move_uploaded_file($temp_name1,"product_images/$product_img1");
    
        $update_product = "UPDATE products SET 
                            store_id='$store',
                            date=NOW(),
                            product_title='$product_title',
                            product_img1='$product_img1',
                            vendor_price='$vendor_price',
                            product_price='$product_price',
                            price_display='$display_price',
                            product_keywords='$product_keywords',
                            product_desc='$product_desc',
                            product_stock='$product_stock',
                            product_hsn='$product_hsn',
                            product_cgst='$product_cgst',
                            product_sgst='$product_sgst',
                            product_igst='$product_igst',
                            product_cess='$product_cess',
                            client_id='$client'
                            WHERE product_id='$p_id'";
        
        $run_product = mysqli_query($con,$update_product);
    
    
        if($run_product){
            
            echo "<script>alert('Product has been Updated sucessfully')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
            
        }
        
    }
       
       ?>

<?php } ?>