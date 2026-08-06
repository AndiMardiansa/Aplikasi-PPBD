<script>
  // ... (Existing JavaScript code) ...
  function toggleFAQ(button) {
  const answer = button.nextElementSibling;
  const icon = button.querySelector('svg');
  const faqItem = button.closest('.bg-white.rounded-lg.shadow-sm');
  const allFaqItems = document.querySelectorAll('.bg-white.rounded-lg.shadow-sm');
  const allAnswers = document.querySelectorAll('.faq-answer');
  const allIcons = document.querySelectorAll('.transform.transition-transform');

  // Close all other answers
  allAnswers.forEach(item => {
    if (item !== answer) {
      item.classList.remove('active');
      item.classList.add('hidden');
    }
  });

  // Remove active state from all FAQ items
  allFaqItems.forEach(item => {
    if (item !== faqItem) {
      item.classList.remove('active');
    }
  });

  // Reset all icons
  allIcons.forEach(item => {
    if (item !== icon) {
      item.style.transform = 'rotate(0deg)';
    }
  });

  // Toggle current answer
  answer.classList.toggle('hidden');
  answer.classList.toggle('active');
  faqItem.classList.toggle('active');
  
  // Toggle icon rotation
  if (answer.classList.contains('active')) {
    icon.style.transform = 'rotate(180deg)';
  } else {
    icon.style.transform = 'rotate(0deg)';
  }

  // Add smooth scroll to the active FAQ item
  if (answer.classList.contains('active')) {
    const yOffset = -100; // Offset for fixed header if any
    const y = faqItem.getBoundingClientRect().top + window.pageYOffset + yOffset;
    window.scrollTo({top: y, behavior: 'smooth'});
  }
}

document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle (legacy markup: element IDs mobile-menu-button / mobile-menu)
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
      const mobileMenuLinks = mobileMenu.querySelectorAll("a");

      // Toggle menu when button is clicked
      mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("active");
        document.body.classList.toggle("menu-open");

        // Change hamburger to X
        const bars = this.querySelectorAll('div');
        if (mobileMenu.classList.contains('active')) {
          bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
          bars[1].style.opacity = '0';
          bars[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
        } else {
          bars[0].style.transform = 'none';
          bars[1].style.opacity = '1';
          bars[2].style.transform = 'none';
        }
      });

      // Close menu when a link is clicked
      mobileMenuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
          mobileMenu.classList.remove("active");
          document.body.classList.remove("menu-open");
        });
      });
    }

    // Sticky header on scroll
    const header = document.querySelector("header");
    let lastScrollTop = 0;

    if (header) {
      window.addEventListener("scroll", function () {
        let scrollTop =
          window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
          header.classList.add("header-sticky");

          // Hide header when scrolling down, show when scrolling up
          if (scrollTop > lastScrollTop) {
            header.style.transform = "translateY(-100%)";
          } else {
            header.style.transform = "translateY(0)";
          }
        } else {
          header.classList.remove("header-sticky");
          header.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop;
      });
    }

    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll(
      ".bg-[#f3274c].rounded-full"
    );
    const cartCount = document.createElement("div");
    cartCount.className =
      "absolute -top-2 -right-2 bg-[#ffc222] text-[#222222] text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center";
    cartCount.textContent = "0";

    // Find the floating action button to add a cart icon
    const floatingActionButton = document.querySelector(
      ".bg-[#007a4a].fixed"
    );
    if (floatingActionButton) {
      // Add a shopping cart badge
      floatingActionButton.style.position = "relative";
      floatingActionButton.appendChild(cartCount);

      // Add to cart animation and counter
      addToCartButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
          e.preventDefault();

          // Animation effect
          const productElement = this.closest(".bg-white.rounded-lg");
          if (productElement) {
            productElement.classList.add("added-to-cart");
            setTimeout(() => {
              productElement.classList.remove("added-to-cart");
            }, 700);
          }

          // Increment cart counter
          let currentCount = parseInt(cartCount.textContent);
          cartCount.textContent = currentCount + 1;

          // Show notification
          showNotification("Item added to cart!");
        });
      });
    }

    // Scroll animations for sections
    const sections = document.querySelectorAll(".w-full.max-w-[1920px]");

    function checkScroll() {
      sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight * 0.75) {
          section.classList.add("fade-in-section");
        }
      });
    }

    // Run on load and scroll
    checkScroll();
    window.addEventListener("scroll", checkScroll);

    // Notification system
    function showNotification(message) {
      const notification = document.createElement("div");
      notification.className =
        "fixed top-24 right-4 bg-[#222222] text-white py-2 px-4 rounded-md shadow-lg z-50 transform transition-transform duration-300 translate-x-full";
      notification.textContent = message;
      document.body.appendChild(notification);

      // Animate in
      setTimeout(() => {
        notification.style.transform = "translateX(0)";
      }, 10);

      // Remove after delay
      setTimeout(() => {
        notification.style.transform = "translateX(100%)";
        setTimeout(() => {
          document.body.removeChild(notification);
        }, 300);
      }, 3000);
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        const targetId = this.getAttribute("href");
        if (targetId === "#") return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();

          // Close legacy mobile menu if open
          if (mobileMenu && mobileMenu.classList.contains("active")) {
            mobileMenu.classList.remove("active");
            document.body.classList.remove("menu-open");
          }

          // Smooth scroll to target, offsetting for the fixed header
          const y = targetElement.getBoundingClientRect().top + window.pageYOffset - 80;
          window.scrollTo({
            top: y,
            behavior: "smooth",
          });

          // Update URL without reloading
          history.pushState(null, null, targetId);
        }
      });
    });

    // Lazy loading for images
    const lazyImages = document.querySelectorAll("img");

    const lazyLoadObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.getAttribute("data-src")) {
              img.src = img.getAttribute("data-src");
              img.removeAttribute("data-src");
            }
            observer.unobserve(img);
          }
        });
      },
      {
        rootMargin: "100px",
        threshold: 0.1,
      }
    );

    lazyImages.forEach((image) => {
      if (image.src) {
        image.setAttribute("data-src", image.src);
        image.src =
          "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="; // Transparent placeholder
        lazyLoadObserver.observe(image);
      }
    });

    // Add active menu item highlighting
    function setActiveMenuItem() {
      const scrollPosition = window.scrollY;

      // Get all sections and corresponding menu items
      const sections = document.querySelectorAll(".w-full.max-w-[1920px]");
      const menuItems = document.querySelectorAll("header nav a");

      sections.forEach((section, index) => {
        const sectionTop = section.offsetTop - 100;
        const sectionBottom = sectionTop + section.offsetHeight;

        if (
          scrollPosition >= sectionTop &&
          scrollPosition < sectionBottom
        ) {
          // Remove active class from all menu items
          menuItems.forEach((item) => {
            item.classList.remove("text-[#f3274c]");
          });

          // Add active class to corresponding menu item
          if (menuItems[index]) {
            menuItems[index].classList.add("text-[#f3274c]");
          }
        }
      });
    }

    window.addEventListener("scroll", setActiveMenuItem);
    setActiveMenuItem();

    // Add interactive counter for item quantities
    const addButtons = document.querySelectorAll(
      ".bg-[#f3274c].text-white.text-xs.rounded-full"
    );

    addButtons.forEach((button) => {
      // Create counter elements
      const counterContainer = document.createElement("div");
      counterContainer.className =
        "flex items-center justify-between mt-2 opacity-0 h-0 overflow-hidden transition-all duration-300";

      const decreaseBtn = document.createElement("button");
      decreaseBtn.className =
        "bg-gray-200 text-gray-700 w-6 h-6 rounded-full flex items-center justify-center";
      decreaseBtn.textContent = "-";

      const countEl = document.createElement("span");
      countEl.className = "text-gray-700 mx-2";
      countEl.textContent = "1";

      const increaseBtn = document.createElement("button");
      increaseBtn.className =
        "bg-gray-200 text-gray-700 w-6 h-6 rounded-full flex items-center justify-center";
      increaseBtn.textContent = "+";

      counterContainer.appendChild(decreaseBtn);
      counterContainer.appendChild(countEl);
      counterContainer.appendChild(increaseBtn);

      // Add counter after button
      const parentDiv = button.closest(
        ".flex.justify-between.items-center"
      );
      if (parentDiv) {
        parentDiv.parentNode.insertBefore(
          counterContainer,
          parentDiv.nextSibling
        );
      }

      // Toggle counter visibility on button click
      button.addEventListener("click", function () {
        const isVisible =
          counterContainer.classList.contains("opacity-100");

        if (!isVisible) {
          counterContainer.style.height = "auto";
          counterContainer.classList.add("opacity-100");
          counterContainer.classList.add("mt-4");
        }

        // Add event listeners for counter buttons
        increaseBtn.addEventListener("click", function () {
          let count = parseInt(countEl.textContent);
          countEl.textContent = count + 1;
        });

        decreaseBtn.addEventListener("click", function () {
          let count = parseInt(countEl.textContent);
          if (count > 1) {
            countEl.textContent = count - 1;
          } else {
            // Hide counter if count goes to 0
            counterContainer.classList.remove("opacity-100");
            counterContainer.classList.remove("mt-4");
            setTimeout(() => {
              counterContainer.style.height = "0";
            }, 300);
          }
        });
      });
    });

    // Add scroll-to-top functionality for the floating button
    const scrollToTopButton = document.getElementById("scrollToTopButton");

    // Initially hide the button when at the top
    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 300) {
        scrollToTopButton.style.opacity = "1";
        scrollToTopButton.style.visibility = "visible";
      } else {
        scrollToTopButton.style.opacity = "0";
        scrollToTopButton.style.visibility = "hidden";
      }
    });

    // Hide button initially if at top
    if (window.pageYOffset <= 300) {
      scrollToTopButton.style.opacity = "0";
      scrollToTopButton.style.visibility = "hidden";
    }

    // Add click event to scroll to top
    scrollToTopButton.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });

    // Smooth Scroll for Navigation Links
    const scrollLinks = document.querySelectorAll('.scroll-link');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Close mobile menu if open
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                mobileMenuButton.click();
            }
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerOffset = 80; // Adjust based on your header height
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add active class based on scroll position
    function setActiveNavItem() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPosition = window.scrollY;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                // Remove active class from all nav items
                document.querySelectorAll('.scroll-link').forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to current nav item
                document.querySelectorAll(`.scroll-link[data-section="${sectionId}"]`).forEach(link => {
                    link.classList.add('active');
                });
            }
        });
        
        // If at the top of the page, set Home as active
        if (scrollPosition < 100) {
            document.querySelectorAll('.scroll-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelectorAll('.scroll-link[data-section="hero"]').forEach(link => {
                link.classList.add('active');
            });
        }
    }
    
    // Call on load and scroll
    window.addEventListener('scroll', setActiveNavItem);
    setActiveNavItem();
});

  function toggleFAQ(button) {
      const answer = button.nextElementSibling;
      const icon = button.querySelector('svg');
      const allAnswers = document.querySelectorAll('.faq-answer');
      const allIcons = document.querySelectorAll('.transform.transition-transform');

      // Close all other answers
      allAnswers.forEach(item => {
        if (item !== answer) {
          item.classList.remove('active');
          item.classList.add('hidden');
        }
      });

      // Reset all icons
      allIcons.forEach(item => {
        if (item !== icon) {
          item.style.transform = 'rotate(0deg)';
        }
      });

      // Toggle current answer
      answer.classList.toggle('hidden');
      answer.classList.toggle('active');
      
      // Toggle icon rotation
      if (answer.classList.contains('active')) {
        icon.style.transform = 'rotate(180deg)';
      } else {
        icon.style.transform = 'rotate(0deg)';
      }
    }

  // FAQ Accordion dengan animasi yang lebih halus
  document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
      question.addEventListener('click', function() {
        const answer = this.nextElementSibling;
        const icon = this.querySelector('svg');
        
        // Toggle active class
        answer.classList.toggle('active');
        if (answer.classList.contains('active')) {
          answer.classList.remove('hidden');
          icon.style.transform = 'rotate(180deg)';
        } else {
          setTimeout(() => {
            answer.classList.add('hidden');
          }, 300); // Sesuaikan dengan durasi animasi CSS
          icon.style.transform = 'rotate(0deg)';
        }
        
        // Close other FAQs
        faqQuestions.forEach(otherQuestion => {
          if (otherQuestion !== question) {
            const otherAnswer = otherQuestion.nextElementSibling;
            const otherIcon = otherQuestion.querySelector('svg');
            
            otherAnswer.classList.remove('active');
            setTimeout(() => {
              if (!otherAnswer.classList.contains('active')) {
                otherAnswer.classList.add('hidden');
              }
            }, 300);
            otherIcon.style.transform = 'rotate(0deg)';
          }
        });
      });
    });
  });

</script>
<script src="{{ asset('animations.js') }}"></script>
<script>
  // Execute animations once the DOM is loaded
  document.addEventListener('DOMContentLoaded', function() {
    // Check if animations.js is loaded correctly
    if (typeof initAnimations === 'function') {
      console.log('Animations script loaded successfully');
      initAnimations();
    } else {
      console.error('Animations script not loaded properly');
    }
  });
</script>