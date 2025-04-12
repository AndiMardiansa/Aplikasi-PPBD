<style>
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
</style> 