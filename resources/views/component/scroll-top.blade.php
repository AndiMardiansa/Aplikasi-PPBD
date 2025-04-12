<!-- Floating Action Button -->
<div id="scrollToTopButton" class="bg-[#007a4a] w-10 h-10 sm:w-11 sm:h-[51px] fixed right-3 bottom-3 sm:right-4 sm:bottom-4 md:right-8 md:bottom-6 flex items-center justify-center rounded-full shadow-lg z-40 cursor-pointer">
  <img class="w-4 h-4 sm:w-5 sm:h-5" src="icon68.svg" alt="Scroll to top" />
</div>

<style>
  #scrollToTopButton {
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  #scrollToTopButton.active {
    opacity: 1;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const scrollTopBtn = document.getElementById('scrollToTopButton');
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        scrollTopBtn.classList.add('active');
      } else {
        scrollTopBtn.classList.remove('active');
      }
    });
    
    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });
</script> 