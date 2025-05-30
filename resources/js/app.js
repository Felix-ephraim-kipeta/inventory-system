// Responsive Dropdown and Modal Logic for Blade UI

document.addEventListener('DOMContentLoaded', () => {
    // Dropdowns
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    dropdownToggles.forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            const id = btn.getAttribute('data-dropdown-toggle');
            const dropdown = document.getElementById(id);
            // Close all other dropdowns
            document.querySelectorAll('.show').forEach(d => {
                if (d !== dropdown) d.classList.remove('show');
            });
            if (dropdown) {
                // Ensure dropdown is hidden by default
                if (!dropdown.classList.contains('show') && !dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
                dropdown.classList.toggle('show');
                dropdown.classList.toggle('hidden');
            }
        });
    });
    // Close dropdowns on outside click
    document.addEventListener('click', e => {
        document.querySelectorAll('.show').forEach(d => {
            if (!d.contains(e.target)) {
                d.classList.remove('show');
                d.classList.add('hidden');
            }
        });
    });
    // Close dropdowns on Escape
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.show').forEach(d => {
                d.classList.remove('show');
                d.classList.add('hidden');
            });
        }
    });

    // Modals
    const modalToggles = document.querySelectorAll('[data-modal-toggle]');
    modalToggles.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            const id = btn.getAttribute('data-modal-target') || btn.getAttribute('data-modal-toggle');
            const modal = document.getElementById(id);
            if (modal) {
                const isOpen = !modal.classList.contains('hidden');
                // Close all modals first
                document.querySelectorAll('.modal-open').forEach(m => {
                    m.classList.add('hidden');
                    m.classList.remove('flex', 'modal-open');
                });
                if (!isOpen) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex', 'modal-open');
                }
            }
        });
    });
    // Close modals on outside click
    document.querySelectorAll('[id$=Modal]').forEach(modal => {
        modal.addEventListener('mousedown', e => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex', 'modal-open');
            }
        });
    });
    // Close modals on Escape
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-open').forEach(m => {
                m.classList.add('hidden');
                m.classList.remove('flex', 'modal-open');
            });
        }
    });

    // Responsive Table (optional: horizontal scroll hint)
    const tables = document.querySelectorAll('table');
    tables.forEach(table => {
        table.parentElement.classList.add('overflow-x-auto');
    });

    // (Optional) Responsive search/filter logic can be added here if needed
});