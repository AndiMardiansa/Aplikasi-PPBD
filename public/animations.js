/**
 * Reusable animations for the PPDB website
 * These functions provide smooth, performance-optimized animations
 */

// Smooth fade-in animation for elements
function initFadeInAnimation(selector, options = {}) {
    const defaults = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
        staggerDelay: 50,
        distance: 20,
        duration: 500,
    };

    const settings = { ...defaults, ...options };
    const elements = document.querySelectorAll(selector);

    if (!elements.length) return;

    // Set initial styles
    elements.forEach((el) => {
        el.style.opacity = "0";
        el.style.transform = `translateY(${settings.distance}px)`;
        el.style.transition = `opacity ${settings.duration}ms ease-out, transform ${settings.duration}ms ease-out`;
    });

    // Use Intersection Observer for better performance
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        // Apply staggered delay based on index
                        setTimeout(() => {
                            el.style.opacity = "1";
                            el.style.transform = "translateY(0)";
                        }, Array.from(elements).indexOf(el) * settings.staggerDelay);

                        // Stop observing once animation is applied
                        observer.unobserve(el);
                    }
                });
            },
            {
                root: settings.root,
                rootMargin: settings.rootMargin,
                threshold: settings.threshold,
            }
        );

        elements.forEach((el) => observer.observe(el));
    } else {
        // Fallback for older browsers
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = "1";
                el.style.transform = "translateY(0)";
            }, index * settings.staggerDelay);
        });
    }
}

// Add hover effects to elements
function initHoverEffects(selector, options = {}) {
    const defaults = {
        scale: 1.03,
        translateY: -4,
        shadow: true,
        brightness: 1.03,
    };

    const settings = { ...defaults, ...options };
    const elements = document.querySelectorAll(selector);

    if (!elements.length) return;

    elements.forEach((el) => {
        // Ensure element has position and transition
        el.style.position = el.style.position || "relative";
        el.style.transition =
            "transform 0.3s ease-out, box-shadow 0.3s ease-out, filter 0.3s ease-out";

        el.addEventListener("mouseenter", () => {
            let transform = "";
            if (settings.translateY)
                transform += `translateY(${settings.translateY}px) `;
            if (settings.scale) transform += `scale(${settings.scale})`;

            el.style.transform = transform;
            if (settings.shadow)
                el.style.boxShadow =
                    "0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)";
            if (settings.brightness)
                el.style.filter = `brightness(${settings.brightness})`;
        });

        el.addEventListener("mouseleave", () => {
            el.style.transform = "";
            el.style.boxShadow = "";
            el.style.filter = "";
        });
    });
}

// Initialize all animations
function initAnimations() {
    // Initialize card animations with staggered effect
    initFadeInAnimation(".program-card", {
        staggerDelay: 50,
        rootMargin: "0px 0px -100px 0px", // Start animation a bit before cards come into view
    });

    // Section title animations
    initFadeInAnimation(".section-title, .reveal-animation", {
        distance: 10,
        duration: 600,
        threshold: 0.5,
    });

    // Initialize hover effects for program cards
    initHoverEffects(".program-card", {
        translateY: -4,
        scale: 1.02,
    });
}

// Run animations when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    initAnimations();
});
