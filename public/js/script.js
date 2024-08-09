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
            document.querySelectorAll('#product-container .product').forEach(function(product) {
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