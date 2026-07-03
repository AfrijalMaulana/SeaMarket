# SeaMarket

## Project Name
**SeaMarket** – Platform pemasaran hasil panen rumput laut berbasis web.

## Description
SeaMarket adalah aplikasi web yang menghubungkan penjual rumput laut dengan pembeli dari berbagai daerah. Sistem menyediakan tiga peran utama: **Admin**, **Seller (Penjual)**, dan **Customer (Pembeli)**. Aplikasi ini dibangun dengan PHP Native, MySQL, dan modern front‑end stack (Bootstrap 5, JavaScript, CSS 3).

## Background
Petani dan pengolah rumput laut biasanya kesulitan menemukan pasar yang luas secara daring. SeaMarket berupaya menyediakan platform digital yang memudahkan mereka menampilkan produk, berinteraksi dengan pembeli, dan mengelola transaksi.

## Goal
Membantu penjual rumput laut memasarkan hasil panen ke pembeli dari berbagai daerah melalui website yang responsif, aman, dan mudah dikembangkan.

## Features (to be implemented)
- Admin panel (user management, product moderation, reporting)
- Seller dashboard (product upload, order management, profile settings)
- Customer browsing & purchasing flow
- Authentication & session handling (later sprint)
- Payment integration (later sprint)
- Search & filter capabilities

## Technology Stack
- **PHP Native** (no framework)
- **MySQL**
- **HTML5**
- **CSS3** (custom style + Bootstrap 5)
- **JavaScript** (Vanilla + Bootstrap components)
- **Bootstrap 5**
- **XAMPP** (Apache, PHP, MySQL)

## Folder Structure
```
SeaMarket/
├── admin/               # Admin‑specific pages
├── seller/              # Seller‑specific pages
├── customer/            # Customer‑specific pages
├── auth/
│   └── login.php       # Login UI (placeholder)
├── config/
│   ├── database.php    # DB connection config (placeholder)
│   ├── session.php     # Session config (placeholder)
│   └── helper.php      # Helper functions (placeholder)
├── database/
│   └── seamarket.sql   # SQL schema placeholder
├── includes/
│   ├── header.php      # Site header (HTML head, nav)
│   ├── navbar.php      # Top navigation bar
│   ├── sidebar.php     # Sidebar navigation
│   ├── footer.php      # Footer markup
│   └── alert.php       # Alert component
├── uploads/
│   ├── products/       # Product images
│   └── profiles/       # User profile pictures
├── assets/
│   ├── css/
│   │   └── style.css   # Custom stylesheet
│   ├── js/
│   │   └── app.js      # Custom JavaScript
│   ├── images/         # Static images (logo, etc.)
│   ├── icons/          # SVG/icon fonts
│   └── vendor/         # Third‑party libraries (optional)
├── index.php           # Redirect to login page
├── README.md           # Project documentation (this file)
└── .gitignore          # Git ignore rules
```

## How to Run
1. Install **XAMPP** and start Apache & MySQL.
2. Clone this repository into `C:\xampp\htdocs\SeaMarket`.
3. Create a MySQL database (e.g., `seamarket`).
4. (Later sprint) Import `database/seamarket.sql` when schema is ready.
5. Open a browser and navigate to `http://localhost/SeaMarket/` – you will be redirected to the login page.

## Status
- **Sprint 1 – Project Initialization**
  - Folder structure created
  - Basic UI for login page
  - Placeholder config and include files
  - README, .gitignore, and assets prepared

---
*Ready for further development in subsequent sprints.*
