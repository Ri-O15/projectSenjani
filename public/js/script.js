       // Add event listeners to karbo checkboxes
        document.querySelectorAll('input[name="karbo[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                filterProducts();
            });
        });

        // Add event listeners to paket checkboxes
        document.querySelectorAll('input[name="paket[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                filterProducts();
            });
        });

        // Filter products based on karbo and paket selections
        function filterProducts() {
            // Get selected karbo categories
            let selectedKarbo = [];
            document.querySelectorAll('input[name="karbo[]"]:checked').forEach(function(checkbox) {
                selectedKarbo.push(checkbox.value);
            });

            // Get selected paket categories
            let selectedPaket = [];
            document.querySelectorAll('input[name="paket[]"]:checked').forEach(function(checkbox) {
                selectedPaket.push(checkbox.value);
            });

            // Loop through each product and apply filtering logic
            document.querySelectorAll('#productList .product').forEach(function(product) {
                const productKarboCategories = product.getAttribute('data-karbo').split(' ');
                const productPaketCategories = product.getAttribute('data-paket').split(' ');

                // Check if product matches selected categories
                const matchesKarbo = selectedKarbo.length === 0 || selectedKarbo.some(karbo => productKarboCategories.includes(karbo));
                const matchesPaket = selectedPaket.length === 0 || selectedPaket.some(paket => productPaketCategories.includes(paket));

                // Display product if it matches both criteria
                if (matchesKarbo && matchesPaket) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        // Initialize filter when the page loads
        filterProducts();

        document.getElementById('sortLowToHigh').addEventListener('click', function(event) {
            event.preventDefault();
            sortProducts('lowToHigh');
        });
    
        document.getElementById('sortHighToLow').addEventListener('click', function(event) {
            event.preventDefault();
            sortProducts('highToLow');
        });
    
        function sortProducts(order) {
            const productList = document.getElementById('productList');
            const products = Array.from(productList.getElementsByClassName('product'));
    
            products.sort((a, b) => {
                const priceA = parseInt(a.getAttribute('data-price'));
                const priceB = parseInt(b.getAttribute('data-price'));
    
                if (order === 'lowToHigh') {
                    return priceA - priceB;
                } else if (order === 'highToLow') {
                    return priceB - priceA;
                }
            });
    
            products.forEach(product => productList.appendChild(product));
        }



        document.addEventListener("DOMContentLoaded", function() {
            const cart = [];
        
            // Set default value to 1 for all quantity inputs
            document.querySelectorAll('.quantity-input').forEach(input => {
                input.value = '0'; // Set initial value to 1
            });
        
            // Function to update quantity
            function updateQuantity(inputElement, valueChange) {
                let currentValue = parseInt(inputElement.value);
                let newValue = currentValue + valueChange;
                if (newValue >= 0) {  // Ensure the value is not less than 1
                    inputElement.value = newValue;
                }
            }
        
            // Handle minus button click
            document.querySelectorAll('.minus-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const quantityInput = this.nextElementSibling;
                    updateQuantity(quantityInput, -1);
                });
            });
        
            // Handle plus button click
            document.querySelectorAll('.plus-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const quantityInput = this.previousElementSibling;
                    updateQuantity(quantityInput, 1);
                });
            });
        
            // Handle manual input by user
            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('input', function() {
                    let value = this.value;
        
                    // Check if value is not a number or is less than 1
                    if (isNaN(value) || value < 1) {
                        this.value = '0'; // Set value to 1 if it's less than 1 or not a number
                    } else if (value.startsWith('0') && value.length > 1) {
                        this.value = value.replace(/^0+/, ''); // Remove leading zeros
                    }
                });
        
                input.addEventListener('focus', function() {
                    if (this.value === '0') {
                        this.value = ''; // Clear the value if it's the default
                    }
                });
        
                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.value = '0'; // Set value to 1 if it's empty
                    }
                });
            });
        
            // Handle "Add All to Cart" button click
            document.getElementById('addAllToCart').addEventListener('click', function() {
                let totalItems = 0;
                document.querySelectorAll('.product').forEach(productElement => {
                    addToCart(productElement);
                    const quantity = parseInt(productElement.querySelector('.quantity-input').value);
                    totalItems += quantity;
                });
                alert(`All products have been added to the cart. Total items: ${totalItems}`);
            });
        
            // Function to add product to cart
            function addToCart(productElement) {
                const price = parseFloat(productElement.getAttribute('data-price'));
                const name = productElement.querySelector('h3').innerText.trim();
                const quantity = parseInt(productElement.querySelector('.quantity-input').value);
        
                // Check if product is already in the cart
                const existingProduct = cart.find(item => item.name === name);
                if (existingProduct) {
                    existingProduct.quantity += quantity;
                } else {
                    cart.push({ name: name, price: price, quantity: quantity });
                }
        
                console.log(cart);
            }
        });
        