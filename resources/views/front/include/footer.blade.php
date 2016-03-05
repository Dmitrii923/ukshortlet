



<!-- Footer -->

<div class="footerArea">

	<div class="container-fluid">

		<div class="row align-items-center">

			<div class="col-lg-2 order-lg-1 col-6"><img src="{{url('/')}}/assets/front/images/footer-logo-1.jpg" alt="" class="img-fluid"></div>

			<div class="col-lg-2 order-lg-3 col-6"><img src="{{url('/')}}/assets/front/images/footer-logo-2.jpg" alt="" class="img-fluid"></div>

			<div class="col-lg-8 order-lg-2">

				<ul>

					<li><a href="{{url('/')}}/contact">Contact Us</a></li>

					<?php 

						$res = DB::table('pages')->where('publish','1')->get();

						foreach($res  as $row) {

						?>

					<li><a href="{{url('/')}}/pages/{{$row->slug}}">{{$row->pgtitle}}</a></li>

				<?php  } ?>

					<li><a href="{{url('/')}}/advertise-your-service">Advertise Your Service</a></li>

				</ul>

				<ul class="socialLinks">

					<li><a href=""><i class="fab fa-facebook-square"></i></a></li>

					<li><a href=""><i class="fab fa-twitter-square"></i></a></li>

					<li><a href=""><i class="fab fa-linkedin"></i></a></li>

				</ul>

				<a href="">Charity of the Month</a>

			</div>

		</div>

	</div>	

</div>

<div class="footerBottom">

All rights Reserved.<br>Copyright of UK Shortlets.com.<br>Copying of this site will result in Prosecution.

<span>Header photo by <strong>Hermann Steigert</strong></span>

</div>

<!-- Footer End -->





<!-- JS Paths -->

<script type="text/javascript"src="{{url('/')}}/assets/front/js/jquery.min.js"></script>
<script type="text/javascript"src="{{url('/')}}/assets/front/js/popper.min.js"></script>
<script type="text/javascript"src="{{url('/')}}/assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript"src="{{url('/')}}/assets/front/js/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript"src="{{url('/assets/front/js')}}/select2.min.js"></script>

<!-- Demo -->

<script type="text/javascript">

$(document).ready(function() {

	$("#search_cityid").select2();
	$("#search_porpertytypeid").select2();
	$("#search_nightpriceid").select2();

	var owl = $('#owl-demo1');
	owl.owlCarousel({
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			},

			600: {
				items: 2,
			},
			1000: {
				items: 4,
				nav: true,
				loop: true,
				margin: 10
			}
		}
	});


	$('.start').on('click', function() {
		owl.trigger('play.owl.autoplay', [0])
	})

	$('.stop').on('click', function() {
		owl.trigger('stop.owl.autoplay')
	})

	var owl2 = $('#owl-demo2');

	owl2.owlCarousel({
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 8,
				nav: true,
				loop: true,
				margin: 10
			}
		}
	});

	$('.play').on('click', function() {
		owl2.trigger('play.owl.autoplay', [0]);
	});

	$('.pause').on('click', function() {
		owl2.trigger('stop.owl.autoplay')
	});

	var base_url = '{{ url('/')}}';
	$(".a-uk-city").click(function(){
		var city_id = $(this).attr('role');
		// $("#owl-demo2").html('');
		var html = '';
		$.ajax({
			url: base_url+'/getcityfeatures/'+city_id,
			Type: 'get',
			dataType: 'JSON',
			data: {
			},
			success: function(result)
			{
				console.log(result);
				$(".featured-title").text("FEATURED PROPERTIES In " + result.city_name);
				var features = result.features;
				for(var i = 0; i < features.length; i++)
				{
					var feature = features[i];
					html += '<div class="item">';
					html += '<a href="'+base_url+'/property/details/'+feature.id+'">';
					html +=	'<img src="'+base_url+'/public/uploadfile/'+feature.image+'" alt=""></a>';
					html += '<h4 class="favorite-h4">';
					html += '<span class="favorite-span">Click to view Property</span>';
					if(feature.user_id == -1)
					{
						html += '<a class="favorite-tooltip" data-toggle="tooltip" title="&#10003;Save to favourite"><i class="fas fa-heart"></i></a>';
					}else{
						if(features.favorite == 1)
						{
							html += '<i class="fas fa-check"></i>';
						}else{
							html += '<a href="'+base_url+'/addfav/'+feature.id+'" data-toggle="tooltip" title="&#10003; Save to favourite">';
							html += '<i class="fas fa-heart"></i></a>';
						}
					}
					html += '</h4>'
					html += '</div>';
				}

				 owl2.trigger('replace.owl.carousel', html).trigger('refresh.owl.carousel');

			},
			error: function(err){

			}
		})
	});


	$(".stop").click(function(){$(".stop").hide(); $(".start").show();});

	$(".start").click(function(){$(".start").hide(); $(".stop").show();});

	$(".pause").click(function(){$(".pause").hide(); $(".play").show();});

	$(".play").click(function(){ $(".play").hide(); $(".pause").show();});
}); 

$(document).on('click', '.favorite-tooltip',  function(){
	var parent = $(this).parents('.favorite-h4');
	parent.find('.favorite-span').text("Sign in or create User Account to save your selection to Favourites");
	parent.addClass('favorite-alert')
   
});
</script>





<script type="text/javascript"src="{{url('/')}}/assets/front/js/stellarnav.js"></script>

<script type="text/javascript">

	jQuery(document).ready(function($) {

		jQuery('.stellarnav').stellarNav({

			theme: 'light'

		});



		$("#menu-button").on('click', function(){

			$(this).toggleClass('menu-opened');

		});



	});



	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");

	var sticky = header.offsetTop;

	

	function myFunction() {

	  if (window.pageYOffset >= sticky) {

		header.classList.add("sticky");

	  } else {

		header.classList.remove("sticky");

	  }

	}



	function goToByScroll(id){

		$('html,body').animate({scrollTop: $("#"+id).offset().top-0},'slow');

	}



</script>





<script type="text/javascript">

	jQuery(function($) {

	  // Function which adds the 'animated' class to any '.animatable' in view

	  var doAnimations = function() {

	    // Calc current offset and get all animatables

	    var offset = $(window).scrollTop() + $(window).height(),

	        $animatables = $('.animatable');

	    // Unbind scroll handler if we have no animatables

	    if ($animatables.size() == 0) {

	      $(window).off('scroll', doAnimations);

	    }

	    // Check all animatables and animate them if necessary

	        $animatables.each(function(i) {

	       var $animatable = $(this);

	            if (($animatable.offset().top + $animatable.height() - 250) < offset) {

	        $animatable.removeClass('animatable').addClass('animated');

	            }

	    });

	    };

	  // Hook doAnimations on scroll, and trigger a scroll

	    $(window).on('scroll', doAnimations);

	  $(window).trigger('scroll');

	});

</script>

<!-- JS Paths End -->



<script type="text/javascript">

$(document).ready(function(){

    $(window).scroll(function(){

        if($(this).scrollTop() > 100){

            $('#scroll-icon').fadeIn();

        }else{

            $('#scroll-icon').fadeOut();

        }

    });

    $('#scroll-icon').click(function(){

        $("html, body").animate({ scrollTop: 0 }, 600);

        return false;

    });

});


$('[data-toggle="tooltip"]').tooltip();

$(document).on('show.bs.tooltip', function (e) {

  if ($(e.target).data('trigger') == 'mouseover') {

    var timeoutDataName = 'shownBsTooltipTimeout';

    if ($(e.target).data(timeoutDataName) != null) {

      clearTimeout($(e.target).data(timeoutDataName));

    }

    var timeout = setTimeout(function () {

      $(e.target).mouseover();

    }, 1000);

    $(e.target).data(timeoutDataName, timeout);

  }

});

</script>



</body>

</html>

