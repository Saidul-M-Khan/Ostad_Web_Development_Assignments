const nameRegex = /^[a-zA-Z ]{2,30}$/; // only allows letters and spaces
const phoneRegex = /^[0-9]{10}$/; // only allows 10 digit phone number
const emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,})+$/; // checks for email format
const messageRegex = /^[a-zA-Z0-9 .,?!]{10,}$/; // checks for message length

const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const name = document.querySelector("#name").value;
  const phone = document.querySelector("#phone").value;
  const email = document.querySelector("#email").value;
  const message = document.querySelector("#message").value;

  if (!nameRegex.test(name)) {
    alert(
      "Please enter a valid name (2-30 characters, only letters and spaces)"
    );
    return;
  }

  if (!phoneRegex.test(phone)) {
    alert("Please enter a valid 10-digit phone number");
    return;
  }

  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address");
    return;
  }

  if (!messageRegex.test(message)) {
    alert("Please enter a message with at least 10 characters");
    return;
  }

  alert("Form submitted successfully!");
});
