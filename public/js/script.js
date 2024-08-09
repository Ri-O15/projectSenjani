document.querySelectorAll('input[name="category[]"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        filterProducts();
    });
});

function filterProducts() {
    let selectedCategories = [];
    document.querySelectorAll('input[name="category[]"]:checked').forEach(function(checkbox) {
        selectedCategories.push(checkbox.value);
    });

    document.querySelectorAll('#product-container .product').forEach(function(product) {
        const productCategories = product.getAttribute('data-categories').split(' ');
        if (selectedCategories.length === 0 || selectedCategories.some(category => productCategories
                .includes(category))) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Inisialisasi filter saat halaman dimuat
filterProducts();