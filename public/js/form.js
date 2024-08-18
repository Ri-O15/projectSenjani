document.getElementById('submit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah aksi default pengiriman form

    const form = event.target;
    const formData = new FormData(form);

    fetch('https://script.google.com/macros/s/AKfycbzGLjFmZ70vtelYuDZwYA8qqSUkCo0TyfLiZjNkFIQvA2Yj_bx3XWlVBAoG6JLAaw0u/exec', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json()) // Menyesuaikan dengan response dari server
    .then(data => {
        // Menampilkan alert box
        const alertBox = document.getElementById('alert-box');
        alertBox.style.display = 'block';

        // Mengosongkan form setelah berhasil dikirim
        setTimeout(() => {
            history.back();
        }, 2000);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});