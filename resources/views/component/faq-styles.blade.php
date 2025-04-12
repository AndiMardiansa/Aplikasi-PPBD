<style>
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
</style> 