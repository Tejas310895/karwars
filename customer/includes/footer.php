<!-- header on scroll -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>

<script>

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 20) {
            $(".geolocation").addClass("geoactive");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".geolocation").removeClass("geoactive");
        }
    });
});

</script>
<!-- header on scroll -->

<!-- product carousel script -->
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2.5,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        });
    </script>
<!-- product carousel script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js?version=1"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
window.addEventListener('resize', function() {
    if (window.innerWidth >= 700) {
		window.location = "desktop"; 
	}
});
</script>
<script>
// Add event listener offline to detect network loss.
window.addEventListener("offline", function(e) {
    showPopForOfflineConnection();
});

// Add event listener online to detect network recovery.
window.addEventListener("online", function(e) {
    hidePopAfterOnlineInternetConnection();
});

function hidePopAfterOnlineInternetConnection(){
    $('#fade-wrapper').fadeOut();
    // $('#internet-connection-status-dialogue').trigger('close');
    
    
}

function showPopForOfflineConnection(){
    $('#fade-wrapper').fadeIn();
    // $('#internet-connection-status-dialogue').lightbox_me({
    //     centered: true,
    //     overlaySpeed:"slow",
    //     closeClick:false,
    //     onLoad: function() {
    //     }
    // });
}
</script>
</body>
</html>