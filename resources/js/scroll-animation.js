/**
 * Fixed Side Scroll Animation - Complete Revision
 * Ensures bottom content aligns with fixed element
 */
document.addEventListener("DOMContentLoaded", function () {
  const fixedSideContainers = document.querySelectorAll(
    ".fixed-side-container"
  );

  fixedSideContainers.forEach((container) => {
    const fixedContent = container.querySelector(".fixed-content");
    const scrollableWrapper = container.querySelector(".scrollable-wrapper");
    const scrollableContent = container.querySelector(".scrollable-content");

    if (!scrollableWrapper || !scrollableContent || !fixedContent) return;

    // State tracking
    let currentScroll = 0;
    let isScrolling = false;

    // Get alignment information
    const getAlignmentInfo = () => {
      // Get fixed element center position
      const fixedRect = fixedContent.getBoundingClientRect();
      const fixedCenter = fixedRect.top + fixedRect.height / 2;

      // Get scrollable content information
      const scrollableItems = Array.from(scrollableContent.children);
      if (!scrollableItems.length) return { maxScroll: 0 };

      // Get the last item for bottom alignment
      const lastItem = scrollableItems[scrollableItems.length - 1];
      const lastItemRect = lastItem.getBoundingClientRect();
      const lastItemCenter = lastItemRect.top + lastItemRect.height / 2;

      // Calculate the offset needed to bring the last item to fixed element center
      const offsetToAlignLast = lastItemCenter - fixedCenter;

      // Calculate max scroll - this is the key to proper alignment
      const maxScroll = currentScroll + offsetToAlignLast;

      return { maxScroll: Math.max(0, maxScroll), fixedCenter };
    };

    // Process wheel event
    const processScroll = (deltaY) => {
      const { maxScroll } = getAlignmentInfo();

      // Determine if we should handle this scroll
      const isScrollingDown = deltaY > 0;
      const isScrollingUp = deltaY < 0;

      // Only hijack scroll when:
      // - Scrolling down and not at max scroll
      // - Scrolling up and not at top
      if (
        (isScrollingDown && currentScroll < maxScroll) ||
        (isScrollingUp && currentScroll > 0)
      ) {
        // Update scroll position
        const newScroll = currentScroll + deltaY * 0.6; // Smooth factor
        currentScroll = Math.max(0, Math.min(newScroll, maxScroll));

        // Apply the transform
        scrollableContent.style.transform = `translateY(-${currentScroll}px)`;

        // Flag that we're handling the scroll
        isScrolling = true;
        return true;
      }

      isScrolling = false;
      return false;
    };

    // Wheel event handler with proper capture
    window.addEventListener(
      "wheel",
      function (e) {
        // Only process when container is in viewport
        const containerRect = container.getBoundingClientRect();
        const isInView =
          containerRect.top < window.innerHeight && containerRect.bottom > 0;

        if (!isInView) return;

        if (processScroll(e.deltaY)) {
          e.preventDefault();
        }
      },
      { passive: false }
    ); // Must be non-passive to call preventDefault

    // Touch event handling
    let touchStartY = 0;

    container.addEventListener(
      "touchstart",
      function (e) {
        touchStartY = e.touches[0].clientY;
      },
      { passive: true }
    );

    container.addEventListener(
      "touchmove",
      function (e) {
        const containerRect = container.getBoundingClientRect();
        const isInView =
          containerRect.top < window.innerHeight && containerRect.bottom > 0;

        if (!isInView) return;

        const touchY = e.touches[0].clientY;
        const deltaY = (touchStartY - touchY) * 2; // Amplify touch movement

        if (processScroll(deltaY)) {
          e.preventDefault();
        }

        // Update start position for smoother touch scrolling
        touchStartY = touchY;
      },
      { passive: false }
    );

    // Reset on window resize
    window.addEventListener(
      "resize",
      function () {
        const { maxScroll } = getAlignmentInfo();
        currentScroll = Math.min(currentScroll, maxScroll);
        scrollableContent.style.transform = `translateY(-${currentScroll}px)`;
      },
      { passive: true }
    );

    // Debug helper (remove in production)
    if (
      location.hostname === "localhost" ||
      location.hostname === "127.0.0.1"
    ) {
      const debugIndicator = document.createElement("div");
      debugIndicator.style.cssText =
        "position:fixed;top:10px;right:10px;background:rgba(0,0,0,0.7);color:white;padding:5px;z-index:9999;font-size:12px;";
      document.body.appendChild(debugIndicator);

      setInterval(() => {
        const { maxScroll } = getAlignmentInfo();
        debugIndicator.textContent = `Scroll: ${Math.round(
          currentScroll
        )}/${Math.round(maxScroll)}`;
      }, 100);
    }
  });
});