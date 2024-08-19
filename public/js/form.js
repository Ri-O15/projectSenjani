document.getElementById('submit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah aksi default pengiriman form

    const form = event.target;
    const formData = new FormData(form);

    // Kirim data ke server
    fetch('https://script.google.com/macros/s/AKfycbzGLjFmZ70vtelYuDZwYA8qqSUkCo0TyfLiZjNkFIQvA2Yj_bx3XWlVBAoG6JLAaw0u/exec', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json()) // Menyesuaikan dengan response dari server
    .then(data => {
        // Ambil data dari form
        const Langganan = document.querySelector('input[name="Langganan"]:checked');
        const Pengiriman = document.querySelector('input[name="Pengiriman"]:checked');
        const priceSubsText = document.getElementById('priceSubs-hidden').value;
        const priceDelvText = document.getElementById('priceDelv-hidden').value;
        const totalPriceText = document.getElementById('totalPrice-hidden').value;

        // Ambil data dari input tersembunyi
        const productName = document.querySelector('input[name="Produk"][value]').value;
        const city = document.querySelector('input[name="Kota"]').value;
        const productPrice = document.querySelector('input[name="Produk"][value]').value;

        // Membuat pesan untuk WhatsApp
        let message = "Pembelian Anda:\n\n";
        message += `Nama Produk: ${productName}\n`;
        message += `Kota: ${city}\n`;
        message += `Harga Produk: ${productPrice}\n`;
        message += `Langganan: ${Langganan ? Langganan.nextElementSibling.textContent : 'Tidak ada'}\n`;
        message += `Pengiriman: ${Pengiriman ? Pengiriman.nextElementSibling.textContent : 'Tidak ada'}\n`;
        message += `Harga Langganan: ${priceSubsText}\n`;
        message += `Harga Pengiriman: ${priceDelvText}\n`;
        message += `Total Harga: ${totalPriceText}\n\n`;
        message += "Terima kasih atas pembelian Anda!";

        // Encode pesan untuk URL
        const encodedMessage = encodeURIComponent(message);

        // URL WhatsApp
        const whatsappURL = `https://wa.me/6285156371803?text=${encodedMessage}`;

        // Arahkan ke WhatsApp
        window.location.href = whatsappURL;

        // Menampilkan alert box
        const alertBox = document.getElementById('alert-box');
        alertBox.style.display = 'block';

        // Mengosongkan form setelah berhasil dikirim
        setTimeout(() => {
            history.back();
        }, 1000);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Menambahkan event listener untuk input Langganan dan Pengiriman
document.querySelectorAll('input[name="Langganan"]').forEach(input => {
    input.addEventListener('change', function() {
        toggleSingleSelection('Langganan', this);
        updatePrice();
    });
});

document.querySelectorAll('input[name="Pengiriman"]').forEach(input => {
    input.addEventListener('change', function() {
        toggleSingleSelection('Pengiriman', this);
        updatePrice();
    });
});

function toggleSingleSelection(name, currentInput) {
    document.querySelectorAll(`input[name="${name}"]`).forEach(input => {
        if (input !== currentInput) {
            input.checked = false;
        }
    });
}

function updatePrice() {
    updatePriceSubs();
    updatePriceDelv();
    updateTotalPrice();
}

function updatePriceSubs() {
    const Langganan = document.querySelector('input[name="Langganan"]:checked');
    const priceDisplay = document.getElementById('priceSubs');
    const priceHiddenInput = document.getElementById('priceSubs-hidden');
    
    let priceSubs = 'Rp.10000'; // Default price

    if (Langganan) {
        if (Langganan.value === 'week1') {
            priceSubs = 'Rp.100.000'; // Price for 1 week
        } else if (Langganan.value === 'week2') {
            priceSubs = 'Rp.180.000'; // Price for 2 weeks
        }
    }

    priceDisplay.textContent = priceSubs;
    priceHiddenInput.value = priceSubs;
}

function updatePriceDelv() {
    const Pengiriman = document.querySelector('input[name="Pengiriman"]:checked');
    const priceDisplay = document.getElementById('priceDelv');
    const priceHiddenInput = document.getElementById('priceDelv-hidden');
    
    let priceDelv = 'Rp.0'; // Default price

    if (Pengiriman) {
        if (Pengiriman.value === '1 PACK/HARI') {
            priceDelv = 'Rp.10.000'; // Price for 1 pack per day
        } else if (Pengiriman.value === '2 PACK/HARI') {
            priceDelv = 'Rp.20.000'; // Price for 2 packs per day
        }
    }

    priceDisplay.textContent = priceDelv;
    priceHiddenInput.value = priceDelv;
}

function updateTotalPrice() {
    const priceSubsText = document.getElementById('priceSubs-hidden').value;
    const priceDelvText = document.getElementById('priceDelv-hidden').value;
    
    // Convert prices to integers (remove 'Rp.' and thousand separators)
    const priceSubs = parseInt(priceSubsText.replace(/Rp\./, '').replace(/[^\d]/g, '')) || 0;
    const priceDelv = parseInt(priceDelvText.replace(/Rp\./, '').replace(/[^\d]/g, '')) || 0;
    
    // Add extra charge if no subscription selected
    const extraCharge = (priceSubs === 0) ? 10000 : 0;
    
    // Calculate total price
    const totalPrice = priceSubs + priceDelv + extraCharge;
    
    // Update total price display
    const totalPriceText = `Rp.${totalPrice.toLocaleString('id-ID')}`;
    document.getElementById('totalPrice').textContent = totalPriceText;
    
    // Update hidden input for total price
    document.getElementById('totalPrice-hidden').value = totalPriceText;
}
