
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
           <div class="col-lg-6 col-md-6">
           <h2 class="card-title">PRODUCT CATEGORY</h2>
           </div>
           <div class="col-lg-6 col-md-6">
            <a href="index.php?insert_pro_cat" class="btn btn-success pull-right">NEW CATEGORY</a>
           </div>
       </div>

       <div class="row">
       <div class="col-lg-12 col-md-12">
    <table id="example" class="table table-striped text-center" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Category Name</th>
            <th>Image</th>
            <th class="text-center">Total Products</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
            <?php
            
            $get_store = "select * from store";

            $run_store = mysqli_query($con,$get_store);

            $counter = 0;

            while($row_store=mysqli_fetch_array($run_store)){

                $store_id = $row_store['store_id'];

                $store_title = $row_store['store_title'];
                
                $store_image = $row_store['store_img'];
            
            ?>
        <tr>
            <td><?php echo ++$counter; ?></td>
            <td><?php echo $store_title; ?></td>
            <td>
                <img src="<?php echo $store_image; ?>" alt="" class="img-thumbnail border-0" width="60px">
            </td>
            <?php 
            
            $get_count = "SELECT COUNT(product_id) as pro_count FROM products where store_id='$store_id'";

            $run_count = mysqli_query($con,$get_count);

            $row_count = mysqli_fetch_array($run_count);

            $pro_count = $row_count['pro_count'];
            
            
            ?>
            <td class="text-center"><?php echo $pro_count; ?></td>
            <td class="td-actions text-right">
                <a href="index.php?edit_pro_cat=<?php echo $store_id; ?>" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                </a>
                <a  href="index.php?delete_pro_cat=<?php echo $store_id; ?>" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                </a>
            </td>
        </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>
       <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js' defer></script>
<script src='https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js' defer></script>
<script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js' defer></script>
<script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.js' defer></script>
<script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.js' defer></script>
<script  src='js/datatable.js'></script>


<?php } ?>