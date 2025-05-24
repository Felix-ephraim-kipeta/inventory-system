// Ensure the DOM is fully loaded before executing scripts
document.addEventListener('DOMContentLoaded', function () {
    // ============================
    // Dropdown Functionality
    // ============================
  
    // Get references to the dropdown button and its content
    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownContent = document.getElementById('dropdown-content');
  
    // Check if both elements exist to avoid errors
    if (dropdownButton && dropdownContent) {
      // Toggle the visibility of the dropdown content when the button is clicked
      dropdownButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click from bubbling up to parent elements
        dropdownContent.classList.toggle('hidden'); // Show or hide the dropdown content
      });
  
      // Close the dropdown if a click occurs outside of it
      document.addEventListener('click', function (event) {
        if (
          !dropdownContent.contains(event.target) &&
          !dropdownButton.contains(event.target)
        ) {
          dropdownContent.classList.add('hidden'); // Hide the dropdown content
        }
      });
    }
  
    // ============================
    // Modal Functionality
    // ============================
  
    // Get references to modal-related elements
    const openModalBtn = document.getElementById('createProductModalButton');
    const modal = document.getElementById('createProductModal');
    const closeModalBtn = modal?.querySelector('[data-modal-toggle="createProductModal"]');
    const form = modal?.querySelector('form');
  
    // Function to open the modal
    function openModal() {
      modal.classList.remove('hidden'); // Show the modal
      modal.setAttribute('aria-hidden', 'false'); // Update accessibility attribute
    }
  
    // Function to close the modal
    function closeModal() {
      modal.classList.add('hidden'); // Hide the modal
      modal.setAttribute('aria-hidden', 'true'); // Update accessibility attribute
    }
  
    // Ensure all modal elements exist before adding event listeners
    if (openModalBtn && modal && closeModalBtn && form) {
      // Open the modal when the open button is clicked
      openModalBtn.addEventListener('click', openModal);
  
      // Close the modal when the close button is clicked
      closeModalBtn.addEventListener('click', closeModal);
  
      // Close the modal when clicking outside the modal content
      modal.addEventListener('click', function (event) {
        if (event.target === modal) {
          closeModal();
        }
      });
  
      // Handle form submission
      form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior
  
        // Retrieve and trim values from the form fields
        const name = form.querySelector('#name').value.trim();
        const brand = form.querySelector('#brand').value.trim();
        const price = form.querySelector('#price').value.trim();
        const categorySelect = form.querySelector('#category');
        const category = categorySelect.value; // Get the selected value
        const categoryText = categorySelect.options[categorySelect.selectedIndex].text; // Get the selected text
        const description = form.querySelector('#description').value.trim();
  
        // Basic validation to ensure required fields are filled
        if (!name || !brand || !price || !category) {
          alert('Please fill in all required fields.');
          return;
        }
  
        // Log the form data to the console for debugging or processing
        console.log({
          name,
          brand,
          price,
          categoryValue: category,
          categoryText: categoryText,
          description
        });
  
        // Close the modal after successful submission
        closeModal();
  
        // Reset the form fields
        form.reset();
      });
    }
  });

  
  