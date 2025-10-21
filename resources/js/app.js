// import './bootstrap';


/*
|--------------------------------------------------------------------------
| Kode untuk Sidebar Toggle
|--------------------------------------------------------------------------
*/

// 1. KITA BUNGKUS SEMUANYA
// Perintah ini berarti: "Tunggu sampai semua HTML selesai dimuat, baru jalankan kode di dalamnya"
document.addEventListener('DOMContentLoaded', () => {

  // 2. Temukan elemen-elemen penting
  const btn = document.getElementById('toggleSidebar');
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('overlay');

  // 3. KITA CEK APAKAH ELEMENNYA ADA
  // Ini penting agar tidak error di halaman login (yang tidak punya sidebar)
  if (btn && sidebar && overlay) {

    // 4. Fungsi untuk MEMBUKA sidebar
    function openSidebar() {
      sidebar.classList.remove('-translate-x-full');
      sidebar.classList.add('translate-x-0');
      sidebar.setAttribute('aria-hidden', 'false');
      btn.setAttribute('aria-expanded', 'true');
      overlay.classList.add('overlay-show');
    }

    // 5. Fungsi untuk MENUTUP sidebar
    function closeSidebar() {
      sidebar.classList.remove('translate-x-0');
      sidebar.classList.add('-translate-x-full');
      sidebar.setAttribute('aria-hidden', 'true');
      btn.setAttribute('aria-expanded', 'false');
      overlay.classList.remove('overlay-show');
    }

    // 6. Event Listener (Yang membuat tombol "hidup")
    
    // Saat tombol ☰ diklik
    btn.addEventListener('click', () => {
      if (sidebar.classList.contains('-translate-x-full')) {
        openSidebar();
      } else {
        closeSidebar();
      }
    });

    // Saat overlay (area gelap) diklik
    overlay.addEventListener('click', closeSidebar);

    // 7. Bonus: Menangani resize
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) { // breakpoint 'md'
        // Pastikan sidebar kembali ke state desktop (tidak tersembunyi)
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.remove('translate-x-0');
        overlay.classList.remove('overlay-show');
        sidebar.setAttribute('aria-hidden', 'false');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        // Jika layar dikecilkan lagi, sembunyikan sidebar (default mobile)
        if (!sidebar.classList.contains('-translate-x-full') && !sidebar.classList.contains('translate-x-0')) {
          sidebar.classList.add('-translate-x-full');
          sidebar.setAttribute('aria-hidden', 'true');
        }
      }
    });

  } // <-- Akhir dari 'if'

}); // <-- Akhir dari 'DOMContentLoaded'