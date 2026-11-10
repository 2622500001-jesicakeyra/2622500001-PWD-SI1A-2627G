const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

navToggle.addEventListener("click", () => {
    const isOpen = navMenu.classList.toggle("nav-open");

    navToggle.setAttribute("aria-expanded", isOpen);

    if (isOpen) {
        navToggle.setAttribute("aria-label", "Tutup navigasi");
    } else {
        navToggle.setAttribute("aria-label", "Buka navigasi");
    }
});

const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

const nameInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const tanggalInput = document.getElementById("tanggal");
const pesanInput = document.getElementById("pesan");

contactForm.addEventListener("submit", (event) => {
    event.preventDefault();

    formFeedback.className = "form-feedback-error";

    const nama = nameInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedback.textContent = "Nama harus memiliki panjang antara 3 hingga 50 karakter.";
        return;
    }

    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        formFeedback.textContent = "Masukkan alamat email yang valid.";
        return;
    }

    const tanggal = tanggalInput.value;
    if (tanggal === "") {
        formFeedback.textContent = "Tanggal kunjungan harus diisi.";
        return;
    }

    const jenisPesan = document.querySelector('input[name="jenis_pesan"]:checked');
    if (!jenisPesan) {
        formFeedback.textContent = "Pilih jenis pesan.";
        return;
    }

    const pesan = pesanInput.value.trim();
    if (pesan.length === 0) {
        formFeedback.textContent = "Pesan harus diisi.";
        return;
    }

    if (pesan.length > 300) {
        formFeedback.textContent = "Pesan maksimal 300 karakter.";
        return;
    }

    formFeedback.textContent = "Form berhasil divalidasi.";
    formFeedback.className = "form-feedback-success";
    contactForm.submit();
});

contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
});

contactForm.addEventListener("input", () => {
    formFeedback.textContent = "";
});