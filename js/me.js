const toggleDarkBtn = document.getElementById('toggle-dark');

toggleDarkBtn.addEventListener('change', () => {
              document.body.classList.toggle('dark-mode');
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

function searchProducts() {
              const input = document.getElementById('searchInput');
              const filter = input.value.toLowerCase();
              const products = document.querySelectorAll('.product');

              products.forEach(product => {
                            const productName = product.querySelector('p').textContent.toLowerCase();
                            if (productName.includes(filter)) {
                                          product.style.display = '';
                            } else {
                                          product.style.display = 'none';
                            }
              });
}
// Default username and password
const validUsername = "admin";
const validPassword = "12345";

// Handle login
document.getElementById("loginForm").addEventListener("submit", function (e) {
              e.preventDefault();

              const username = document.getElementById("username").value;
              const password = document.getElementById("password").value;
              const errorMessage = document.getElementById("errorMessage");

              // Validate credentials
              if (username === validUsername && password === validPassword) {
                            // Redirect to admin dashboard
                            window.location.href = "admin.html";
              } else {
                            // Show error message
                            errorMessage.textContent = "Invalid username or password!";
                            errorMessage.style.display = "block";
              }
});
