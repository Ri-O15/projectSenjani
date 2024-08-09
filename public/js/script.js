// document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
//     checkbox.addEventListener('change', () => {
//         // Ambil semua checkbox yang dicentang
//         const checkedValues = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);
//         const products = document.querySelectorAll('.product');

//         if (checkedValues.length === 0) {
//             // Jika tidak ada checkbox yang dicentang, tampilkan semua produk
//             products.forEach(product => {
//                 product.style.display = 'block'; // Tampilkan produk
//             });
//         } else {
//             // Filter produk berdasarkan checkbox yang dicentang
//             products.forEach(product => {
//                 const productCategories = product.getAttribute('data-categories').split(',');
//                 // Periksa apakah salah satu kategori produk sesuai dengan kategori yang dicentang
//                 const shouldShow = productCategories.some(category => checkedValues.includes(category));

//                 if (shouldShow) {
//                     product.style.display = 'block'; // Tampilkan produk
//                 } else {
//                     product.style.display = 'none'; // Sembunyikan produk
//                 }
//             });
//         }
//     });
// });
