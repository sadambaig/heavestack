	<!-- footer_section - end
		================================================== -->
	<script src="{{ asset('public/front/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('public/front/js/popper.min.js')}}"></script>
	<script src="{{ asset('public/front/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/front/js/nice-select.min.js')}}"></script>
	<script type="text/javascript">
		 $(window).on('scroll',function(){
		  var scroll=$(window).scrollTop();
		  console.log(scroll);
		  if(scroll>170){
		  //	alert('fu');
		    
		    $('#topNav').addClass('sticky-top');
		    $('.header_top').hide();


		  }else{

		    
		    $('#topNav').removeClass('sticky-top');
		    $('.header_top').show();
		  }
		 });
		</script>
	<script>
			$(document).ready(function(){
				$('.main_menu li').on('click',function(){
					$('.main_menu li').removeClass('active');
					$(this).addClass('active');
				})
			})
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.expertiseLeftSec li').on('click',function(){
					$('.expertiseLeftSec li').removeClass('active');
					$(this).addClass('active');
				})
			})
		</script>
		
	</body>
</html>