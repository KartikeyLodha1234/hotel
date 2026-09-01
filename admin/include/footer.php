  </main>
</div><!-- /.demo-wrapper -->

<!-- Bootstrap 5.3.8 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- Mobile toggle & navigation script -->
<script>
  (function() {
    const toggleBtn = document.getElementById('menuToggle');
    const collapseWrap = document.getElementById('navCollapse');
    if (toggleBtn && collapseWrap) {
      toggleBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        collapseWrap.classList.toggle('show');
        const icon = toggleBtn.querySelector('i');
        if (icon) {
          if (collapseWrap.classList.contains('show')) {
            icon.className = 'fas fa-times';
          } else {
            icon.className = 'fas fa-bars';
          }
        }
      });

      // close on nav link click (mobile only)
      const navLinks = collapseWrap.querySelectorAll('.nav-link:not(.dropdown-toggle)');
      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          if (window.innerWidth < 768 && collapseWrap.classList.contains('show')) {
            collapseWrap.classList.remove('show');
            const icon = toggleBtn.querySelector('i');
            if (icon) icon.className = 'fas fa-bars';
          }
        });
      });
    }

    // close dropdowns on mobile when clicking outside
    document.addEventListener('click', function(e) {
      if (window.innerWidth < 768) {
        const dropdowns = document.querySelectorAll('.side-nav .dropdown-menu');
        dropdowns.forEach(dropdown => {
          if (!dropdown.contains(e.target) && !dropdown.previousElementSibling?.contains(e.target)) {
            const bsDropdown = bootstrap.Dropdown.getInstance(dropdown.previousElementSibling);
            if (bsDropdown) bsDropdown.hide();
          }
        });
      }
    });
  })();
</script>
</body>
</html>