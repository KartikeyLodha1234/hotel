function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  const trigger = document.querySelector('[aria-controls="' + id + '"]');

  if (!dropdown) return;

  const willOpen = dropdown.hidden || !dropdown.classList.contains('show');

  document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
    if (menu !== dropdown) {
      menu.classList.remove('show');
      menu.hidden = true;

      const otherTrigger = document.querySelector('[aria-controls="' + menu.id + '"]');
      if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
    }
  });

  dropdown.classList.toggle('show', willOpen);
  dropdown.hidden = !willOpen;
  if (trigger) trigger.setAttribute('aria-expanded', String(willOpen));
}

document.addEventListener('click', function(event) {
  if (event.target.closest('.nav-dropdown')) return;

  document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
    menu.classList.remove('show');
    menu.hidden = true;

    const trigger = document.querySelector('[aria-controls="' + menu.id + '"]');
    if (trigger) trigger.setAttribute('aria-expanded', 'false');
  });
});
