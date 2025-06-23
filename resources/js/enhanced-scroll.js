document.addEventListener('DOMContentLoaded', () => {
  // Select all scroll containers
  const scrollContainers = document.querySelectorAll('.scroll-container');
  
  scrollContainers.forEach(container => {
    const scrollArea = container.querySelector('.scroll-area');
    const scrollContent = container.querySelector('.scroll-content');
    const section = container.closest('.fixed-background-section');
    
    if (!scrollArea || !scrollContent || !section) return;
    
    // Scroll state variables
    let scrollPosition = 0;
    let isAtTop = true;
    let isAtBottom = false;
    
    // Calculate dimensions
    const contentHeight = scrollContent.offsetHeight;
    const viewportHeight = scrollArea.offsetHeight;
    const maxScroll = contentHeight - viewportHeight;
    
    // Function to determine if this section is truly visible
    function isElementInViewport(el) {
      const rect = el.getBoundingClientRect();
      
      // Check if element is fully in viewport and not covered
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= window.innerHeight &&
        rect.right <= window.innerWidth &&
        document.elementFromPoint(
          rect.left + rect.width/2,
          rect.top + rect.height/2
        ) === el || el.contains(document.elementFromPoint(
          rect.left + rect.width/2,
          rect.top + rect.height/2
        ))
      );
    }
    
    // Update top/bottom state
    function updateScrollState() {
      isAtTop = scrollPosition <= 0;
      isAtBottom = scrollPosition >= maxScroll;
    }
    
    // Apply scroll position to content
    function applyScroll() {
      scrollContent.style.transform = `translateY(-${scrollPosition}px)`;
      updateScrollState();
    }
    
    // Wheel event handler with precise targeting
    function handleWheel(e) {
      // Crucial: Check if mouse is over our section using elementFromPoint
      const elementUnderMouse = document.elementFromPoint(e.clientX, e.clientY);
      const isMouseOverSection = section.contains(elementUnderMouse);
      
      // Determine if our section is actually visible on screen
      const sectionRect = section.getBoundingClientRect();
      const isSectionVisible = sectionRect.top < window.innerHeight && 
                               sectionRect.bottom > 0 &&
                               isMouseOverSection;
      
      if (!isSectionVisible) return; // Let the page scroll normally
      
      // Check if we're actively scrolling our content
      if ((e.deltaY > 0 && !isAtBottom) || (e.deltaY < 0 && !isAtTop)) {
        // Update scroll position
        scrollPosition += e.deltaY;
        scrollPosition = Math.max(0, Math.min(scrollPosition, maxScroll));
        applyScroll();
        
        // Only prevent default if we're handling the scroll
        e.preventDefault();
      }
    }
    
    // Touch handling
    let touchStartY = 0;
    let touchStartX = 0;
    
    function handleTouchStart(e) {
      // Check if touch is on our section
      const touch = e.touches[0];
      const elementUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);
      if (!section.contains(elementUnderTouch)) return;
      
      touchStartY = touch.clientY;
      touchStartX = touch.clientX;
      
      // Mark this element as the active touch element
      window._activeScrollSection = section;
    }
    
    function handleTouchMove(e) {
      // Only handle if this section initiated the touch
      if (window._activeScrollSection !== section) return;
      
      const touch = e.touches[0];
      const deltaY = touchStartY - touch.clientY;
      const deltaX = touchStartX - touch.clientX;
      
      // Check if vertical scroll
      if (Math.abs(deltaY) > Math.abs(deltaX)) {
        if ((deltaY > 0 && !isAtBottom) || (deltaY < 0 && !isAtTop)) {
          // Scroll our content
          scrollPosition += deltaY * 1.2;
          scrollPosition = Math.max(0, Math.min(scrollPosition, maxScroll));
          applyScroll();
          
          // Update touch position
          touchStartY = touch.clientY;
          touchStartX = touch.clientX;
          
          // Prevent page scroll
          e.preventDefault();
        }
      }
    }
    
    function handleTouchEnd() {
      if (window._activeScrollSection === section) {
        window._activeScrollSection = null;
      }
    }
    
    // Reset position when section exits viewport
    function handleVisibilityChange(entries) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          scrollPosition = 0;
          applyScroll();
        }
      });
    }
    
    // Add mobile detection to enhanced scroll functionality
    function isMobile() {
      return window.innerWidth < 782;
    }
    
    // Set up event listeners
    const wheelListener = (e) => handleWheel(e);
    const touchStartListener = (e) => handleTouchStart(e);
    const touchMoveListener = (e) => handleTouchMove(e);
    const touchEndListener = () => handleTouchEnd();
    
    // Use true event capturing for wheel to ensure we get first chance at the event
    window.addEventListener('wheel', wheelListener, { passive: false, capture: true });
    
    // Touch events directly on the section
    section.addEventListener('touchstart', touchStartListener, { passive: true });
    window.addEventListener('touchmove', touchMoveListener, { passive: false });
    window.addEventListener('touchend', touchEndListener, { passive: true });
    
    // Set up intersection observer
    const observer = new IntersectionObserver(handleVisibilityChange, { threshold: 0.1 });
    observer.observe(section);
    
    // Cleanup function
    const cleanup = () => {
      window.removeEventListener('wheel', wheelListener, { capture: true });
      section.removeEventListener('touchstart', touchStartListener);
      window.removeEventListener('touchmove', touchMoveListener);
      window.removeEventListener('touchend', touchEndListener);
      observer.disconnect();
    };
    
    // Clean up on page unload
    window.addEventListener('beforeunload', cleanup);
    
    // Initialize
    updateScrollState();
    
    if (isMobile()) {
      // Maybe disable custom scrolling on mobile or modify behavior
      // For example:
      scrollContent.style.transform = 'none'; // Reset transform
      scrollContent.style.position = 'static'; // Use normal scrolling
    } else {
      // Apply desktop scrolling behavior
      applyScroll();
    }
  });
});