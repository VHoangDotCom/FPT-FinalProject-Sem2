<!DOCTYPE html>
<html class="no-js" lang="vi-vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Motor cycle">
    <meta name="keywords" content="Rock">
    <title>Tony Chopper Team</title>

    <!-- all css here -->
    <!-- bootstrap v4.3.1 css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/bootstrap.min.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/owl.carousel.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/font-awesome.min.css')}}">
    <!-- ionicons.min css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/ionicons.min.css')}}">
    <!-- nivo-slider.css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/nivo-slider.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/responsive.min.css')}}">
    <!-- modernizr css -->
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/lightbox/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/lib/font-awesome/css/font-awesome.min.css')}}">
</head>

<body>

<!-- =========== Header ====== -->
@include('trang-chu.layout.header')


<div class="wapper">
  @yield('content')
</div>




<!-- =========== Footer ====== -->
@include('trang-chu.layout.footer')


    <!-- all js here -->
    <script src="{{asset('niceadmin/trang-chu/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{asset('niceadmin/trang-chu/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('niceadmin/trang-chu/js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('niceadmin/trang-chu/js/owl.carousel.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery.meanmenu.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery-ui.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('niceadmin/trang-chu/js/wow.min.js')}}"></script>
    <!-- jquery.nivo.slider.js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery.nivo.slider.js')}}"></script>
    <!-- jquery.elevateZoom-3.0.8.min.js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <!-- jquery.parallax-1.1.3.js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery.parallax-1.1.3.js')}}"></script>
    <!-- jquery.counterup.min.js -->
    <script src="{{asset('niceadmin/trang-chu/js/jquery.counterup.min.js')}}"></script>
    <!-- waypoints.min.js -->
    <script src="{{asset('niceadmin/trang-chu/js/waypoints.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('niceadmin/trang-chu/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('niceadmin/trang-chu/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
<script>
      function updateCart(event){
            event.preventDefault();
           let urlUpdateCart=$('.update_cart_url').data('url');
           let id=$(this).data('id');
          let quantity=$(this).parents('tr').find('#quantity').val();


           $.ajax({
               type:"GET",
               url:urlUpdateCart,
               data:{pro_id:id,quantity:quantity},

                success:function (data){
                   if (data.code ===200){

                     $('.page-wrapper').html(data.cart_update);
                        window.location.reload();

                   }

                },
                 error:function (data) {

                         $.toast({
                             heading: 'Thất bại',
                             text: 'số lượng update nhiều hơn số lượng trong kho',
                             position: 'top-center',
                             showHideTransition: 'slide',
                             hideAfter: 5000,
                             icon: 'error',
                             stack: 5
                         })

                 }



           });

      }


      function deleteCart(event) {
          event.preventDefault();
          let urlDelete = $('.delete_cart').data('url');
          let id = $(this).data('id');
          $.ajax({
              type: "GET",
              url: urlDelete,
              data: {pro_id: id},


              success: function (data) {
                  if (data.code === 200) {
                      $('.page-wrapper').html(data.cart_delete);
                      window.location.reload();
                  }
              },
              error: function (event) {


              }
          });
      }

      function addCart(event){
          event.preventDefault();
          let urlAdd=$(this).data('url');
          let name=this.getAttribute('data-name');
          let quantity=$('input[name=quantity]').val();
          $.ajax({
              type:"GET",
              url:urlAdd,
              data:{quantity:quantity},
              dataType:'json',
              success:function (data){
               if(data.code===200){
                   $.toast({
                       heading: 'Thành công',
                       text: 'Sản phẩm ' + name + ' đã được thêm vào giỏ hàng',
                       position: 'bottom-left',
                       showHideTransition: 'slide',
                       hideAfter: 5000,
                       icon: 'success',
                       stack: 5
                   })
                   $('#lblCartCount').html(data.dem);

                  }
              },
              error:function (data) {

                      $.toast({
                          heading: 'Thất bại',
                          text: 'số lượng update nhiều hơn số lượng trong kho',
                          position: 'top-center',
                          showHideTransition: 'slide',
                          hideAfter: 5000,
                          icon: 'error',
                          stack: 5
                      })

              }
          })

      }








$(function (){
    $('.add-to-cart-button').on('click',addCart);
$(document).on('click','.update_cart',updateCart);
$(document).on('click','.delete_cart',deleteCart);

})
</script>
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sort').on('change',function () {
            var url = $(this).val();
            if (url){
                window.location = url ;
            }
            return false ;
        })
    })
    $("document").ready(function() {
        $('input[name=filter_range_price]').click(function(e) {
            e.preventDefault();
            let priceFrom = $(this).data('price_from');
            let priceTo = $(this).data('price_to');
            const searchParams = new URLSearchParams(window.location.search);
            if(searchParams.has('priceFrom') && searchParams.has('priceTo')) {
                searchParams.set('priceFrom', priceFrom);
                searchParams.set('priceTo', priceTo);
                window.location.replace(window.location.origin  + '/products' + `?${searchParams.toString()}`)
            }else {
                window.location.replace(window.location.href + `?priceFrom=${priceFrom}&&priceTo=${priceTo}`)
            }
        });
    });
</script>



</body>

</html>
