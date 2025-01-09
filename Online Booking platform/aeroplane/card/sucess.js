document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault();
    // Simulating payment process delay, you can replace this with actual validation/processing.
    setTimeout(function () {
        window.location.href = 'success.html'; // Redirect to the success page
    }, 1000);
});
