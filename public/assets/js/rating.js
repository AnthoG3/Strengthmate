// Waits for the DOM to be fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function() {
    // Selects all <input> elements inside elements with the "rating" class
    document.querySelectorAll(".rating input").forEach(input => {
        // Adds an event listener for when the value of the input changes
        input.addEventListener("change", function() {
            // Finds the closest parent form element of the changed input
            let form = this.closest("form");
            // Automatically submits the form when the user changes the rating
            form.submit();
        });
    });
});
