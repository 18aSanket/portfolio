// navbar slide down on click
$(document).on('click', 'a[href^="#"]', function () {
    $('html').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
    $('.nav-link','a[href^="#"]').addClass('color');
   
});
// navbar slide down on click end


$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 20,
			autoplay:true,
			dots:false,
			responsiveClass: true,
			nav: false,
			responsive: 
			{
				0: 
				{
					items: 1,
				},
				600: 
				{
					items: 1,
				},
				1000: 
				{
					items: 5
				}
			}
		});
	});


 var count =0;
                        $('#loginbtn').on('click',function(){
                            count = count +1;
                            if(count == 5){
                                $('#logininput').show();
                            }
                        });



 baguetteBox.run('.compact-gallery', { animation: 'slideIn'});