(function() {
  const dropdownTriggers = document.querySelectorAll('.dropdown-toggle');

  function closeDropdowns(except) {
    document.querySelectorAll('.dropdown.show').forEach(function(dropdown) {
      if (dropdown !== except) {
        dropdown.classList.remove('show');
        const menu = dropdown.querySelector('.dropdown-menu');
        const trigger = dropdown.querySelector('.dropdown-toggle');
        if (menu) menu.classList.remove('show');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  dropdownTriggers.forEach(function(trigger) {
    trigger.addEventListener('click', function(event) {
      event.preventDefault();
      event.stopPropagation();

      const dropdown = trigger.closest('.dropdown');
      const menu = dropdown.querySelector('.dropdown-menu');
      const isOpen = dropdown.classList.contains('show');

      closeDropdowns(dropdown);
      dropdown.classList.toggle('show', !isOpen);
      menu.classList.toggle('show', !isOpen);
      trigger.setAttribute('aria-expanded', String(!isOpen));
    });
  });

  document.addEventListener('click', function() {
    closeDropdowns(null);
  });

  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') closeDropdowns(null);
  });

  const sidebar = document.getElementById('sidebarNav');
  const overlay = document.getElementById('sidebarOverlay');
  const toggleButton = document.getElementById('sidebarToggle');

  if (!sidebar || !overlay || !toggleButton) return;

  function toggleSidebar() {
    sidebar.classList.toggle('open');
    overlay.classList.toggle('show');
  }

  toggleButton.addEventListener('click', toggleSidebar);
  overlay.addEventListener('click', toggleSidebar);
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 992) {
      sidebar.classList.remove('open');
      overlay.classList.remove('show');
    }
  });
})();
