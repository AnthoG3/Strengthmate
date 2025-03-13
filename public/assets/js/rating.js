document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".rating input").forEach(input => {
        input.addEventListener("change", function() {
            let form = this.closest("form");
            form.submit();
        });
    });
});
