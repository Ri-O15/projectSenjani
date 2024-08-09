document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const checkedValues = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);
        console.log('Checked Values:', checkedValues); // Log untuk memeriksa nilai yang dicentang

        const products = document.querySelectorAll('.product');
        if (checkedValues.length === 0) {
            products.forEach(product => {
                product.style.display = 'block';
            });
        } else {
            products.forEach(product => {
                const productCategories = product.getAttribute('data-categories').split(',');
                console.log('Product Categories:', productCategories); // Log untuk memeriksa kategori produk

                const shouldShow = productCategories.some(category => checkedValues.includes(category));
                console.log('Should Show:', shouldShow); // Log untuk memeriksa keputusan tampilan

                if (shouldShow) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }
    });
});


// Initial check
// document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.dispatchEvent(new Event('change')));