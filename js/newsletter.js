document.getElementById("newsletter-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const email = document.getElementById("email").value;

    fetch("newsletter/newsletter.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ email: email })
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const form = document.getElementById("newsletter-form");
                form.innerHTML = "<p style='color: green; font-weight: bold;'>Ďakujeme za odber!</p>";
            } else {
                alert(data.message || "Chyba pri odosielaní.");
            }
        })
        .catch(() => {
            alert("Chyba spojenia so serverom.");
        });
});
if (window.location.search.length > 0) {
    window.history.replaceState({}, document.title, window.location.pathname);
}