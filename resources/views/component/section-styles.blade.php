<style>
  /* Section fade in */
  .fade-in-section {
    animation: fadeIn 0.8s ease-out forwards;
  }
  
  /* Background Icon Animation */
  .absolute.right-0.top-0 {
    animation: float 6s ease-in-out infinite;
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
  .flex.items-start svg {
    transition: all 0.3s ease;
  }

  /* Checkmark animation */
  .text-green-500 {
    transition: all 0.2s ease;
  }

  li:hover .text-green-500 {
    transform: scale(1.2) rotate(5deg);
  }

  /* Registration process step hover effects */
  .bg-white.rounded-xl {
    transition: all 0.3s ease;
  }

  .bg-white.rounded-xl:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }
</style> 