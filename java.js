// animasi fade in saat halaman dibuka
window.addEventListener("DOMContentLoaded", () => {
  document.body.classList.add("fade-in");
});

// transisi fade out saat klik link
document.querySelectorAll("a").forEach((link) => {
  if (link.hostname === window.location.hostname) {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href && !href.startsWith("#")) {
        e.preventDefault();
        document.body.classList.remove("fade-in");
        setTimeout(() => {
          window.location.href = href;
        }, 300);
      }
    });
  }
});

// form kontak (hanya di halaman kontak)
const form = document.querySelector("form");
if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Pesan terkirim! Terima kasih sudah menghubungi kami.");
    this.reset();
  });
}
