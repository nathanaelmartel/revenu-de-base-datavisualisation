  $(document).ready(function () {
	 $(".definition a").on({
	    mouseenter: function () {
	        $(this).addClass("active");
	        $($(this).attr("href")).addClass("active");
	    },
	    mouseleave: function () {
	        $(this).removeClass("active");
	        $($(this).attr("href")).removeClass("active");
	    }
	});
  });
  
