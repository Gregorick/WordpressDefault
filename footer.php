<footer class="footer">
  <?php include(TEMPLATEPATH . '/core/footer/get_footer.php') ?>
</footer>
<?php wp_footer(); ?>
<script>
  var swiper = new Swiper(".servicios__slider", {
    slidesPerView: 6,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
</script>
<script>
  var swiper = new Swiper(".programacion-list", {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      310: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });
</script>
</body>

</html>