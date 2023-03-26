jQuery(document).ready(function(){
    // Thêm class "active" cho phần tử đầu tiên
    $('.owl-stage .owl-item').addClass('active');

  // Remove class 'active' after 5 seconds
    setTimeout(function(){
        $('.owl-stage .owl-item').removeClass('active');
    }, 5000);
});
