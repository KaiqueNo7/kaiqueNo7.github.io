<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
	</script>

	<!--script>
		const navigation = document.querySelector('.navigation');
		document.querySelector('.toggle').onclick = function(){
		this.classList.toggle('active');
		navigation.classList.toggle('active');
		}
	</script>	

	<script type="text/javascript">
	$(function(){
		$('ul a').click(function(){
			var href = $(this).attr('href');
			var offSetTop = $(href).offset().top;

		$('html,body').animate({'scrollTop':offSetTop});

			return false;
		})

	})	
</script-->

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
		autoplay: {
			delay: 3000,
		},
      });
</script>
