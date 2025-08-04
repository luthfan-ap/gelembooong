document.addEventListener('DOMContentLoaded', function() {
    // 1. Pilih semua tombol filter dan kartu proyek
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.grid > div[data-category]');

    // 2. Tambahkan event listener untuk setiap tombol filter
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Ambil nilai filter dari atribut data-filter
            const filterValue = this.dataset.filter;

            // Hapus kelas 'active-filter' dari semua tombol
            filterButtons.forEach(btn => {
                btn.classList.remove('bg-blue-600', 'text-white');
                // Tambahkan kembali kelas default jika perlu, atau biarkan hover yang menanganinya
            });

            // Tambahkan kelas 'active-filter' ke tombol yang baru saja diklik
            this.classList.add('bg-blue-600', 'text-white');

            // 3. Lakukan iterasi pada setiap kartu proyek
            projectCards.forEach(card => {
                const cardCategory = card.dataset.category;

                // 4. Periksa apakah kartu harus ditampilkan atau disembunyikan
                if (filterValue === 'all' || filterValue === cardCategory) {
                    card.style.display = 'block'; // Tampilkan kartu
                } else {
                    card.style.display = 'none'; // Sembunyikan kartu
                }
            });
        });
    });

    // Opsional: Secara default, aktifkan tombol 'All' saat halaman dimuat
    const allButton = document.querySelector('.filter-btn[data-filter="all"]');
    if (allButton) {
        allButton.click(); // Memicu klik pada tombol 'All'
    }
});
