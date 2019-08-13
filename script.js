/*************************menu ****************************************/
$(".nav-item").on("click", function(e){
	$("li.nav-item").removeClass("active");
	$(this).addClass("active");
  });

/************************* Compétences ****************************************/

// bar de progression

$(document).ready(function() {
	$('.progress .progress-bar').css("width",
			  function() {
				  return $(this).attr("aria-valuenow") + "%";
			  }
	  )
  });
/************************* Hobbies ****************************************/

// 3D Coverflow Effect

  var swiper = new Swiper('.swiper-container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflowEffect: {
	  rotate: 30,
	  stretch: 0,
	  depth: 200,
	  modifier: 1,
	  slideShadows : true,
	},
	pagination: {
	  el: '.swiper-pagination',
	},
  });
/************************* Contact ****************************************/

 