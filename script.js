document.addEventListener("DOMContentLoaded", () => {
    let deleteButtons = document.querySelectorAll('.deleteBtn');
    
    deleteButtons.forEach(button => {
      button.addEventListener('click', () => {
        let contactId = button.getAttribute('data-contact-id');
        let modalForm = document.querySelector('#staticBackdrop form');
        let idInput = modalForm.querySelector('input[name="id"]');
        idInput.value = contactId;
      });
    });
  });
  