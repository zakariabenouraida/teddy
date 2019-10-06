jQuery(window).load(function () {
    jQuery('.preloader').fadeOut();
    jQuery('.preloader-spinner').delay(350).fadeOut('slow');
    jQuery('body').removeClass('loader-active');
    jQuery(".popular-car-gird").isotope();
}); //window load End</script>
