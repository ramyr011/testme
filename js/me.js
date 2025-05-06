const toggleDarkBtn = document.getElementById('toggle-dark');

toggleDarkBtn.addEventListener('change', () => {
              document.body.classList.toggle('dark-mode');
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
