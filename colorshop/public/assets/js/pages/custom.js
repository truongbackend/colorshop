jQuery(document).ready(function(){
    // Thêm class "active" cho phần tử đầu tiên
    jQuery('.carousel-item:first').addClass('active');

    // Xóa class "active" khi slide được đổi
    jQuery('#carouselExampleCaption').on('slide.bs.carousel', function () {
        jQuery('.carousel-item.active').removeClass('active');
    });
});
