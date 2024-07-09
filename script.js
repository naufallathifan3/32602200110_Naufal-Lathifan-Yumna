document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('commentForm');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const nama = form.nama.value;
        const komentar = form.komentar.value;

        if (nama && komentar) {
            alert(`Nama: ${nama}\nKomentar: ${komentar}`);
        }
    });
});

