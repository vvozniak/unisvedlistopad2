const scrollable = document.getElementById("scrollable");

scrollable.addEventListener(
  "wheel",
  (e) => {
    const atTop = scrollable.scrollTop === 0;
    const atBottom =
      scrollable.scrollTop + scrollable.clientHeight >= scrollable.scrollHeight;

    if ((e.deltaY < 0 && atTop) || (e.deltaY > 0 && atBottom)) {
      // Let page scroll
    } else {
      scrollable.scrollTop += e.deltaY;
      e.preventDefault();
    }
  },
  { passive: false }
);