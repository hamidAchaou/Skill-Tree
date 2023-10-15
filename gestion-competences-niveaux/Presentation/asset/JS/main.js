function setIdCompetences(id) {
    document.getElementById("id").value = id;
}

// // Get the form element by its ID
// const form = document.getElementById('ajouterCompetences');

// form.addEventListener('submit', function (event) {
//     let valid = true;

//     // Regular expressions for validation
//     const codeRegex = /^[A-Za-z0-9]+$/; // Alphanumeric characters
//     const nameRegex = /^[A-Za-z\s]+$/;   // Alphabetic characters and spaces
//     const referenceRegex = /^[A-Za-z0-9]+$/; // Alphanumeric characters

//     // Code validation
//     const codeInput = document.querySelector('#code');
//     const codeError = document.querySelector('#code-error');
//     if (!codeRegex.test(codeInput.value)) {
//         codeError.textContent = 'Please enter a valid code (alphanumeric only)';
//         valid = false;
//     } else {
//         codeError.textContent = '';
//     }

//     // Name validation
//     const nameInput = document.querySelector('#nom');
//     const nameError = document.querySelector('#nom-error');
//     if (!nameRegex.test(nameInput.value)) {
//         nameError.textContent = 'Please enter a valid name (alphabetic characters and spaces only)';
//         valid = false;
//     } else {
//         nameError.textContent = '';
//     }

//     // Reference validation
//     const referenceInput = document.querySelector('#reference');
//     const referenceError = document.querySelector('#reference-error');
//     if (!referenceRegex.test(referenceInput.value)) {
//         referenceError.textContent = 'Please enter a valid reference (alphanumeric only)';
//         valid = false;
//     } else {
//         referenceError.textContent = '';
//     }

//     if (!valid) {
//         event.preventDefault(); // Prevent form submission if there are validation errors
//     }
// });



// script rich text
tinymce.init({
    selector: '#inputDescription', // Use the textarea's ID
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar_mode: 'floating',
  });