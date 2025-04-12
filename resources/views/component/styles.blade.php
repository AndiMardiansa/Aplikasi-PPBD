<style>
  // ... (Existing CSS styles) ...
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .animate-scroll {
    animation: scroll 20s linear infinite;
  }

  /* FAQ Section Animations */
.flex.items-start {
transition: all 0.3s ease;
}

.flex.items-start:hover {
transform: translateX(10px);
background: white;
padding: 0.5rem 1rem;
border-radius: 0.5rem;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.flex.items-start:hover svg {
transform: scale(1.2);
}

/* Icon Animation */
.flex.items-start svg {
transition: all 0.3s ease;
}

/* Background Icon Animation */
@keyframes float {
0% {
  transform: translateY(0px);
}
50% {
  transform: translateY(-20px);
}
100% {
  transform: translateY(0px);
}
}

.absolute.right-0.top-0 {
animation: float 6s ease-in-out infinite;
}

/* Floating animation for decorative elements */
@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}

.animate-float {
animation: float 3s ease-in-out infinite;
}

/* Gradient line animation */
.bg-gray-200 {
background: linear-gradient(to bottom, #e5e7eb 45%, #10B981 45%, #10B981 55%, #e5e7eb 55%);
background-size: 100% 20px;
animation: moveStripes 1s linear infinite;
}

@keyframes moveStripes {
0% { background-position: 0 0; }
100% { background-position: 0 20px; }
}

/* Card hover effects */
.rounded-xl {
transition: all 0.3s ease;
}

.rounded-xl:hover {
transform: translateY(-5px) scale(1.02);
box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Image container hover effects */
.rounded-full {
transition: all 0.3s ease;
}

.rounded-full:hover {
transform: scale(1.05);
}

/* Number hover effect */
.inline-block {
transition: all 0.3s ease;
}

.inline-block:hover {
transform: rotate(10deg) scale(1.1);
}

/* Checkmark animation */
.text-green-500 {
transition: all 0.2s ease;
}

li:hover .text-green-500 {
transform: scale(1.2) rotate(5deg);
}

/* FAQ Animations and Styles */
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease-out;
  opacity: 0;
  transform: translateY(-10px);
}

.faq-answer.active {
  max-height: 500px;
  opacity: 1;
  transform: translateY(0);
  transition: all 0.5s ease-in;
}

.bg-white.rounded-lg {
  transition: all 0.3s ease;
}

.bg-white.rounded-lg:hover {
  transform: translateX(10px);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.transform.transition-transform {
  transition: transform 0.3s ease;
}

button[aria-expanded="true"] svg {
  transform: rotate(180deg);
}

/* FAQ Item hover effect */
.bg-white.rounded-lg.shadow-sm {
  border-left: 4px solid transparent;
  transition: all 0.3s ease;
}

.bg-white.rounded-lg.shadow-sm:hover {
  border-left-color: #10B981;
}

/* Active FAQ state */
.bg-white.rounded-lg.shadow-sm.active {
  border-left-color: #10B981;
  background-color: #fafafa;
}
/* Sticky header */
.header-sticky {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  /* Cart animation */
  .added-to-cart {
    animation: pulse 0.7s ease-in-out;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.05);
    }

    100% {
      transform: scale(1);
    }
  }

  /* Section fade in */
  .fade-in-section {
    animation: fadeIn 0.8s ease-out forwards;
  }

  @keyframes fadeIn {
    from {
      opacity: 0.7;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Menu open body state */
  body.menu-open {
    overflow: hidden;
  }

  /* Smooth transitions */
  a,
  button,
  .bg-\[\#f3274c\],
  .bg-\[\#ffc222\] {
    transition: all 0.2s ease-in-out;
  }

  a:hover,
  button:hover {
    opacity: 0.85;
  }

  /* Product Item Hover Effects */
  .bg-white.rounded-lg.shadow-md {
    transition: all 0.3s ease;
  }

  .bg-white.rounded-lg.shadow-md:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  /* Category Item Hover Effects */
  .border-solid.border-\[\#e5e5e5\].border-r.border-b {
    transition: all 0.3s ease;
  }

  .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover {
    background-color: rgba(243, 39, 76, 0.03);
    transform: translateY(-5px);
  }

  /* Testimonial Item Hover */
  .bg-white.p-4.sm\:p-6.rounded-lg.shadow-sm {
    transition: all 0.3s ease;
  }

  .bg-white.p-4.sm\:p-6.rounded-lg.shadow-sm:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
  }

  /* Discount Card Hover */
  .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6 {
    transition: all 0.3s ease;
    overflow: hidden;
    position: relative;
  }

  .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6:hover {
    background-color: #f1f1f1;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.05);
  }

  .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6:hover::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(to right, #f3274c, #ffc222);
  }

  /* Button Hover Effects */
  .bg-\[\#f3274c\].rounded-md {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .bg-\[\#f3274c\].rounded-md:hover {
    background-color: #e01c40 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(243, 39, 76, 0.3);
  }

  .bg-\[\#f3274c\].rounded-md:active {
    transform: translateY(0);
  }

  /* Add to cart button hover */
  .bg-\[\#f3274c\].text-white.text-xs.rounded-full {
    transition: all 0.3s ease;
  }

  .bg-\[\#f3274c\].text-white.text-xs.rounded-full:hover {
    transform: rotate(90deg) scale(1.1);
    background-color: #e01c40 !important;
  }

  /* Images hover effects */
  .w-full.h-\[200px\].object-cover {
    transition: all 0.5s ease;
  }

  .bg-white.rounded-lg.shadow-md:hover .w-full.h-\[200px\].object-cover {
    transform: scale(1.05);
  }

  /* Price tag hover effect */
  .text-\[\#f3274c\].font-\[\'Nunito-Bold\'\,_sans-serif\].text-base.font-bold {
    transition: all 0.3s ease;
  }

  .bg-white.rounded-lg.shadow-md:hover .text-\[\#f3274c\].font-\[\'Nunito-Bold\'\,_sans-serif\].text-base.font-bold {
    transform: scale(1.1);
  }

/* Footer Styles */
footer {
background: linear-gradient(to right, #1a1a1a, #2d2d2d);
border-top: 3px solid #007a4a;
}

footer .grid {
gap: 2rem;
}

/* Footer Links Container */
footer .footer-links {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
gap: 2rem;
}

/* Footer Link Styles */
footer a.text-gray-400 {
transition: all 0.3s ease;
display: inline-block;
position: relative;
padding-left: 0;
}

footer a.text-gray-400:hover {
color: #007a4a !important;
transform: translateX(5px);
}

/* Footer Social Icons */
footer .social-icons {
display: flex;
gap: 1rem;
}

footer .social-icons a {
background: #007a4a;
width: 40px;
height: 40px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s ease;
}

footer .social-icons a:hover {
transform: translateY(-5px);
box-shadow: 0 5px 15px rgba(0, 122, 74, 0.4);
}

/* Footer Bottom Border */
footer .border-t {
border-color: rgba(255, 255, 255, 0.1);
}

/* Footer Section Titles */
footer .section-title {
color: white;
font-size: 1.2rem;
font-weight: bold;
margin-bottom: 1.5rem;
position: relative;
}

footer .section-title::after {
content: '';
position: absolute;
left: 0;
bottom: -8px;
width: 40px;
height: 3px;
background: #007a4a;
}

  /* Food category image hover effects */
  .border-solid.border-\[\#e5e5e5\].border-r.border-b img {
    transition: transform 0.4s ease, filter 0.4s ease;
    filter: brightness(0.98);
  }

  .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover img {
    transform: scale(1.08) rotate(2deg);
    filter: brightness(1.05);
  }

  /* Food category price hover effects */
  .text-\[\#f3274c\].text-center.font-\[\'Nunito-Bold\'\,_sans-serif\].text-sm.leading-6.font-bold.mb-2 {
    transition: all 0.3s ease;
  }

  .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover .text-\[\#f3274c\].text-center.font-\[\'Nunito-Bold\'\,_sans-serif\].text-sm.leading-6.font-bold.mb-2 {
    transform: scale(1.05);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  }

  /* Header navigation items hover effects */
  header nav a.text-\[\#212121\] {
    position: relative;
    transition: all 0.3s ease;
  }

  header nav a.text-\[\#212121\]::after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #10d76a;
    transition: width 0.3s ease;
  }

  header nav a.text-\[\#212121\]:hover {
    color: #10d76a !important;
  }

  header nav a.text-\[\#212121\]:hover::after {
    width: 100%;
  }

  /* Contact us button hover effect */
  .bg-\[\#ffc222\].rounded-\[7px\] {
    transition: all 0.3s ease;
    overflow: hidden;
    position: relative;
    z-index: 1;
  }

  .bg-\[\#ffc222\].rounded-\[7px\]::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, #f3274c, #ffc222);
    transition: all 0.4s ease;
    z-index: -1;
  }

  .bg-\[\#ffc222\].rounded-\[7px\]:hover::before {
    left: 0;
  }

  .bg-\[\#ffc222\].rounded-\[7px\]:hover {
    box-shadow: 0 4px 10px rgba(255, 194, 34, 0.4);
    transform: translateY(-3px);
  }

  /* Floating action button hover effect */
  .bg-\[\#007a4a\].w-10.h-10.sm\:w-11.sm\:h-\[51px\].fixed {
    transition: all 0.3s ease;
    opacity: 1;
    /* Will be controlled by JS */
  }

  .bg-\[\#007a4a\].w-10.h-10.sm\:w-11.sm\:h-\[51px\].fixed:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 122, 74, 0.4);
  }

  /* View all menu button hover effect */
  .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
  }

  .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 0;
    background-color: rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    z-index: -1;
  }

  .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md:hover::after {
    height: 100%;
  }

  .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(243, 39, 76, 0.3);
  }

  /* Navbar hover effects */
  nav a.text-[#212121] {
    position: relative;
    transition: all 0.3s ease;
  }

  nav a.text-[#212121]::after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #10B981;
    transition: width 0.3s ease;
  }

  nav a.text-[#212121]:hover {
    color: #10B981 !important;
  }

  nav a.text-[#212121]:hover::after {
    width: 100%;
  }

  /* Mobile menu link hover effects */
  #mobile-menu a {
    transition: all 0.3s ease;
  }

  #mobile-menu a:hover {
    background-color: rgba(16, 185, 129, 0.1);
    padding-left: 10px;
    color: #10B981;
  }

  /* Button hover effects for requirements section */
  .inline-block.bg-green-500 {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .inline-block.bg-green-500::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: all 0.6s;
  }

  .inline-block.bg-green-500:hover::before {
    left: 100%;
  }

  .inline-block.bg-green-500:hover {
    background-color: #0D9668 !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3);
  }

  /* Requirements section item hover effects */
  .flex.items-start.space-x-3 {
    transition: all 0.3s ease;
    padding: 0.5rem;
    border-radius: 0.5rem;
  }

  .flex.items-start.space-x-3:hover {
    transform: translateX(10px);
    background: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  }

  .flex.items-start.space-x-3:hover svg {
    transform: scale(1.2);
  }

  /* SVG icons animation */
  .flex.items-start.space-x-3 svg {
    transition: all 0.3s ease;
  }

  /* Registration process step hover effects */
  .bg-white.rounded-xl {
    transition: all 0.3s ease;
  }

  .bg-white.rounded-xl:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  /* Number hover effect */
  .inline-block.bg-green-100,
  .inline-block.bg-purple-100,
  .inline-block.bg-orange-100,
  .inline-block.bg-red-100 {
    transition: all 0.3s ease;
  }

  .inline-block:hover.bg-green-100,
  .inline-block:hover.bg-purple-100,
  .inline-block:hover.bg-orange-100,
  .inline-block:hover.bg-red-100 {
    transform: rotate(10deg) scale(1.1);
  }

  /* Footer link hover effects - additional specificity */
  footer li a.text-gray-400 {
    transition: all 0.3s ease;
  }

  footer li a.text-gray-400:hover {
    color: #10B981 !important;
    transform: translateX(5px);
    padding-left: 5px;
  }

  /* Footer social icons specific effects */
  footer .social-icons a {
    transition: all 0.3s ease;
    background: rgba(16, 185, 129, 0.2);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    margin-right: 8px;
  }

  footer .social-icons a:hover {
    background: #10B981;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(16, 185, 129, 0.4);
  }

  footer .social-icons a:hover svg {
    transform: scale(1.2);
  }

  footer .social-icons svg {
    transition: all 0.3s ease;
  }

  /* Footer Newsletter input/button effects */
  footer input[type="email"] {
    transition: all 0.3s ease;
    border: 1px solid transparent;
  }

  footer input[type="email"]:focus {
    border-color: #10B981;
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
    outline: none;
  }

  footer button[type="submit"] {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  footer button[type="submit"]::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: all 0.6s;
  }

  footer button[type="submit"]:hover::before {
    left: 100%;
  }

  footer button[type="submit"]:hover {
    background-color: #0D9668;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.5);
  }

  /* Scroll to top button additional effects */
  #scrollToTopButton {
    transition: all 0.3s ease;
  }

  #scrollToTopButton:hover {
    background-color: #10B981;
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
  }

  #scrollToTopButton:hover img {
    transform: scale(1.2);
  }

  #scrollToTopButton img {
    transition: all 0.3s ease;
  }

  /* Mobile menu button hover/active effects */
  #mobile-menu-button {
    transition: all 0.3s ease;
  }

  #mobile-menu-button:hover div {
    background-color: #10B981;
  }

  #mobile-menu-button:active {
    transform: scale(0.95);
  }

  /* Mobile menu login/register buttons hover effects */
  #mobile-menu div.hover\:bg-\[\#212121\],
  #mobile-menu div.bg-green-500 {
    transition: all 0.3s ease;
  }

  #mobile-menu div.hover\:bg-\[\#212121\]:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }

  #mobile-menu div.bg-green-500:hover {
    transform: translateY(-2px);
    background-color: #0D9668 !important;
    box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
  }
</style>