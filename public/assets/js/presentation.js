document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById("presentation_image");
    const label = document.querySelector(".custom-file-label span");

    fileInput.addEventListener("change", function() {
        if (fileInput.files.length > 0) {
            label.textContent = fileInput.files[0].name;
        }
    });
});
