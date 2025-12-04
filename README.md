SIMAPRO — Sistem Manajemen Promosi

SIMAPRO adalah aplikasi “Sistem Manajemen Promosi / Program” — tujuan utamanya untuk mempermudah pengelolaan data program/promosi/fitur tertentu melalui dashboard web.

🔎 Struktur Proyek

Per repository kamu terlihat struktur seperti ini: 
GitHub

/
├── public/               ← file statis (jika ada)
├── src/css/              ← file CSS / styling (Tailwind / custom)
├── package.json          ← konfigurasi project (dependency, script)
├── tailwind.config.js    ← konfigurasi Tailwind (jika memakai Tailwind CSS)
├── .gitignore            ← file ignorasi git
└── ...                   ← file & folder lainnya


Artinya kemungkinan besar kamu memakai JavaScript / Node.js + Tailwind CSS / CSS modern sebagai frontend.

✅ Fitur / Teknologi (perkiraan — kamu edit bila berbeda)

🖥️ Frontend: HTML / JavaScript / CSS (kemungkinan memakai framework ringan)

🎨 Styling modern dengan Tailwind CSS (karena ada tailwind.config.js) 
GitHub

📦 Dependency & build via package.json — bisa ada perintah build / dev di sana

📂 Struktur modular: memisahkan CSS, statis, dan kode sumber

🚀 Cara Instalasi & Menjalankan (asumsi Node.js)

Clone repositori

git clone https://github.com/rayyan-210/SIMAPRO.git
cd SIMAPRO


Install dependency

npm install


(Jika ada script build / dev) Jalankan:

npm run dev


atau

npm run build


Buka browser di http://localhost:... (tergantung port yg disetup) untuk melihat aplikasi.

ℹ️ Catatan & Kontribusi

Repo ini terbuka — kamu (dan orang lain) bisa fork, clone, lalu melakukan perubahan

Kalau kamu menambahkan fitur baru atau menemukan bug — silakan buat Pull Request dengan deskripsi yang jelas

Pastikan untuk memperbarui dokumentasi (README) saat ada perubahan besa
