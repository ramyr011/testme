function searchProducts() {
              const input = document.getElementById('searchInput').value.toLowerCase();
              const productItems = document.querySelectorAll('.product-item');

              productItems.forEach(item => {
                            const productName = item.querySelector('h4').textContent.toLowerCase();
                            if (productName.includes(input)) {
                                          item.style.display = 'block';
                            } else {
                                          item.style.display = 'none';
                            }
              });
}