// Registration form handler
document.getElementById("register-form").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevent form from submitting normally
    console.log("Formulaire soumis !");
    
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    fetch("http://localhost:8082/api/register", {  // Assure-toi que localhost fonctionne avec nginx_proxy:82
        method: "POST",
        headers: { 
            "Content-Type": "application/json" 
        },
        body: JSON.stringify({ username, email, password })  // Send the form data as JSON
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);  // Success message from backend
        } else {
            alert("Erreur : " + data.message);  // Handle errors from backend
        }
    })
    .catch(error => console.error("Erreur:", error));  // Log any other errors
});

// Login form handler
document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevent form from submitting normally
    console.log("Formulaire de connexion soumis !");
    
    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;

    fetch("http://localhost:8082/api/login", {  // Same here, make sure API path is correct
        method: "POST",
        headers: { 
            "Content-Type": "application/json" 
        },
        body: JSON.stringify({ email, password })  // Send login data as JSON
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);  // Success message
        } else {
            alert("Erreur : " + data.message);  // Handle login errors
        }
    })
    .catch(error => console.error("Erreur:", error));  // Catch other errors
});
