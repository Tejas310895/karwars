<?php 

    session_start();
    
    include("includes/db.php");
    include("functions/function.php");

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="The best online grocery store in Karwar. We can fulfill all your grocery needs ranging from grains,pulses,kitchen needs to fresh vegetables and fruits"/>
    <link rel="shortcut icon" type="image/png" href="../admin_area/admin_images/wrnlogo.png"/>
    <title>Karwar Grocery</title>
    <!-- google font -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Concert+One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Laila' rel='stylesheet'>
    <!-- google font -->
    <!-- bootstrap link -->
    <link rel="stylesheet" href="styles/bootstrap.min.css" >
    <link rel="stylesheet" href="styles/bootstrap.css" >
    <!-- bootstrap link -->
    <!-- swiper -->
    <link rel="stylesheet" href="styles/swiper.css">
    <link rel="stylesheet" href="styles/swiper.min.css">
    <!-- swiper -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <!-- font-awesome -->
    <!-- date -->
    <link rel="stylesheet" href="styles/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
    <script>
    jQuery(function($) {
        var today = new Date();
        $("#datepicker").datepicker({
           dateFormat: "dd-mm-yy",
           minDate: today.getHours() >= 17 ? 2 : 1
        
         });
    });
    </script>
    <script>
    // function saves scroll position
    function fScroll(val)
    {
            var hidScroll = document.getElementById('hidScroll');
            hidScroll.value = val.scrollTop;
    }

    // function moves scroll position to saved value
    function fScrollMove(what)
    {
            var hidScroll = document.getElementById('hidScroll');
            document.getElementById(what).scrollTop = hidScroll.value;
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- date -->
    <!-- styles -->
    <link rel="stylesheet" href="styles/style.css?version=18">
    <!-- styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div id="fade-wrapper" class="text-center pt-5">
<svg height="100pt" viewBox="0 0 512.00057 512" width="100pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1=".00009" x2="512.000075" y1="256.000735" y2="256.000735"><stop offset="0" stop-color="#00f2fe"/><stop offset=".0208" stop-color="#03effe"/><stop offset=".2931" stop-color="#24d2fe"/><stop offset=".5538" stop-color="#3cbdfe"/><stop offset=".7956" stop-color="#4ab0fe"/><stop offset="1" stop-color="#4facfe"/></linearGradient><path d="m288 433c0 18.226562-14.773438 33-33 33s-33-14.773438-33-33c0-18.222656 14.773438-33 33-33s33 14.777344 33 33zm-99.589844-340.515625c21.96875-4.964844 44.707032-7.484375 67.59375-7.484375 84.671875 0 163.285156 34.320312 221.367188 96.636719 3.9375 4.226562 9.277344 6.363281 14.632812 6.363281 4.882813 0 9.777344-1.777344 13.632813-5.367188 8.082031-7.53125 8.523437-20.1875.996093-28.269531-65.730468-70.523437-154.738281-109.363281-250.636718-109.363281-25.839844 0-51.546875 2.847656-76.402344 8.46875-10.777344 2.433594-17.535156 13.140625-15.101562 23.914062 2.433593 10.777344 13.144531 17.539063 23.917968 15.101563zm86.910156 88.503906c-1.964843 10.871094 5.25 21.273438 16.121094 23.242188 42.1875 7.628906 81.386719 28.6875 113.359375 60.90625 3.910157 3.9375 9.054688 5.910156 14.195313 5.910156 5.09375 0 10.191406-1.933594 14.089844-5.804687 7.839843-7.78125 7.886718-20.445313.105468-28.285157-37.78125-38.066406-84.335937-62.992187-134.632812-72.089843-10.867188-1.96875-21.273438 5.253906-23.238282 16.121093zm230.820313 296.871094-472-472c-7.808594-7.8125-20.472656-7.8125-28.28125 0-7.8125 7.808594-7.8125 20.472656 0 28.285156l65.078125 65.078125c-23.753906 15.398438-45.746094 33.875-65.566406 55.144532-7.53125 8.078124-7.085938 20.734374.992187 28.265624 3.855469 3.589844 8.75 5.367188 13.632813 5.367188 5.355468 0 10.695312-2.136719 14.636718-6.363281 19.585938-21.015625 41.519532-38.941407 65.308594-53.410157l55.097656 55.097657c-27.894531 12.867187-53.863281 31.085937-76.238281 53.636719-7.78125 7.839843-7.730469 20.503906.109375 28.285156 3.902344 3.871094 8.992188 5.800781 14.085938 5.800781 5.144531 0 10.289062-1.972656 14.199218-5.910156 23.039063-23.222657 49.382813-40.417969 78.40625-51.25l64.21875 64.21875c-32.773437 1.339843-67.949218 17.046875-92.824218 41.6875-7.84375 7.773437-7.902344 20.4375-.128906 28.285156 3.910156 3.945313 9.058593 5.921875 14.207031 5.921875 5.085937 0 10.175781-1.925781 14.078125-5.789062 18.523437-18.351563 45.679687-30.210938 69.191406-30.210938h.007812 1.449219.011719c15.09375 0 31.875 4.847656 47.253906 13.648438.195313.109374.398438.195312.597656.300781l174.195313 174.195312c3.902344 3.902344 9.023437 5.855469 14.140625 5.855469s10.238281-1.953125 14.140625-5.855469c7.8125-7.8125 7.8125-20.476562 0-28.285156zm0 0" fill="url(#a)"/></svg>
<h5 class="text-center text-primary">Connection Lost</h5>
</div>
   