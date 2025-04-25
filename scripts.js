/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
// Wait for the DOM to fully load
document.addEventListener("DOMContentLoaded", function () {
              console.log("Page loaded successfully.");
          
              // Navbar active link highlight
              const navLinks = document.querySelectorAll(".nav-link");
              navLinks.forEach(link => {
                  link.addEventListener("click", function () {
                      navLinks.forEach(nav => nav.classList.remove("active"));
                      this.classList.add("active");
                  });
              });
          
              // Smooth scroll for navigation links
              const smoothScrollLinks = document.querySelectorAll("a.nav-link");
              smoothScrollLinks.forEach(link => {
                  link.addEventListener("click", function (e) {
                      e.preventDefault();
                      const targetId = this.getAttribute("href").substring(1);
                      const targetSection = document.getElementById(targetId);
                      if (targetSection) {
                          targetSection.scrollIntoView({ behavior: "smooth" });
                      }
                  });
              });
          
              // Contact form submission
              const contactForm = document.querySelector("form");
              contactForm.addEventListener("submit", function (e) {
                  e.preventDefault();
                  const formData = new FormData(contactForm);
                  const name = formData.get("name");
                  const email = formData.get("email");
                  const phone = formData.get("phone");
                  const message = formData.get("message");
                  
                  console.log("Form submitted:", { name, email, phone, message });
          
                  // Show success message
                  alert(`Thank you, ${name}. Your message has been received!`);
          
                  // Reset form fields
                  contactForm.reset();
              });
          
              // Toggle social media icons animation
              const socialIcons = document.querySelectorAll(".social-icons a");
              socialIcons.forEach(icon => {
                  icon.addEventListener("mouseover", function () {
                      this.style.transform = "scale(1.2)";
                      this.style.transition = "transform 0.3s ease-in-out";
                  });
          
                  icon.addEventListener("mouseout", function () {
                      this.style.transform = "scale(1)";
                      this.style.transition = "transform 0.3s ease-in-out";
                  });
              });
          
              // Scroll-to-top button logic
              const scrollToTopButton = document.createElement("button");
              scrollToTopButton.textContent = "↑";
              scrollToTopButton.style.position = "fixed";
              scrollToTopButton.style.bottom = "20px";
              scrollToTopButton.style.right = "20px";
              scrollToTopButton.style.padding = "10px";
              scrollToTopButton.style.backgroundColor = "#007bff";
              scrollToTopButton.style.color = "white";
              scrollToTopButton.style.border = "none";
              scrollToTopButton.style.borderRadius = "5px";
              scrollToTopButton.style.cursor = "pointer";
              scrollToTopButton.style.zIndex = "1000";
              scrollToTopButton.style.display = "none";
              document.body.appendChild(scrollToTopButton);
          
              window.addEventListener("scroll", function () {
                  if (window.scrollY > 200) {
                      scrollToTopButton.style.display = "block";
                  } else {
                      scrollToTopButton.style.display = "none";
                  }
              });
          
              scrollToTopButton.addEventListener("click", function () {
                  window.scrollTo({ top: 0, behavior: "smooth" });
              });
          });
          // Wait for the DOM to load completely
document.addEventListener("DOMContentLoaded", function () {
              console.log("Contact form script loaded.");
          
              // Select the form element
              const contactForm = document.querySelector("form");
          
              // Attach an event listener to handle form submission
              contactForm.addEventListener("submit", function (e) {
                  e.preventDefault(); // Prevent the default form submission
          
                  // Collect form data
                  const formData = new FormData(contactForm);
                  const name = formData.get("name");
                  const email = formData.get("email");
                  const phone = formData.get("phone");
                  const message = formData.get("message");
          
                  // Validate form inputs
                  if (!name || !email || !message) {
                      alert("Please fill out all required fields.");
                      return;
                  }
          
                  // Show a loading indicator
                  const submitButton = contactForm.querySelector("button[type='submit']");
                  submitButton.textContent = "Sending...";
                  submitButton.disabled = true;
          
                  // Simulate an API request (mocking delay with setTimeout)
                  setTimeout(() => {
                      // Mock success response
                      console.log("Form submitted:", { name, email, phone, message });
          
                      // Show a success message to the user
                      alert(`Thank you, ${name}. Your message has been sent successfully!`);
          
                      // Reset the form fields
                      contactForm.reset();
          
                      // Revert the submit button state
                      submitButton.textContent = "Submit";
                      submitButton.disabled = false;
                  }, 2000);
              });
          
              // Input validation during typing
              const emailInput = contactForm.querySelector("input[name='email']");
              emailInput.addEventListener("input", function () {
                  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                  if (!emailPattern.test(this.value)) {
                      this.classList.add("is-invalid");
                  } else {
                      this.classList.remove("is-invalid");
                  }
              });
          
              // Phone number validation (optional)
              const phoneInput = contactForm.querySelector("input[name='phone']");
              phoneInput.addEventListener("input", function () {
                  const phonePattern = /^[0-9\-\+\(\)\s]*$/;
                  if (this.value && !phonePattern.test(this.value)) {
                      this.classList.add("is-invalid");
                  } else {
                      this.classList.remove("is-invalid");
                  }
              });
          
              // Add animations for form fields
              const formFields = contactForm.querySelectorAll(".form-floating input, .form-floating textarea");
              formFields.forEach(field => {
                  field.addEventListener("focus", function () {
                      this.style.transition = "border-color 0.3s";
                      this.style.borderColor = "#007bff";
                  });
          
                  field.addEventListener("blur", function () {
                      this.style.borderColor = "#ced4da";
                  });
              });
          })