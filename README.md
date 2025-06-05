# 🧬 CellStocker - Online Cell Stock Management System

**CellStocker** is a lightweight web-based application designed to help flow cytometrists and laboratory staff manage and track their cell stock efficiently. This project originated from a real-world use case, with input from a working flow cytometrist, aiming to replace manual logs and spreadsheets with an accessible, centralized system.

---

## 🚀 Project Goals

### Phase 1 - Minimum Viable Product (MVP)
* Build a simple, accessible cell stock management system for daily lab use.
* Label and track the usage of cells in each tube with colour coding.
* Implement a secure user login system with basic role management.
* Provide a basic but usable interface for adding, editing, and viewing cell stock data in real-time.

### Phase 2 - Enhancement (Frontend)
* Provide a secure and user-friendly interface for managing cell stock.
* Enable real-time updates and visibility of stock levels and sample details.
* Ensure platform accessibility from work machines with restricted admin access.
* Lay the foundation for future enhancements with modern frontend technologies.

---

## 🧱 Tech Stack

### Initial Phase (Backend Focus)

* **PHP** (server-side logic)
* **MySQL** (data storage via phpMyAdmin)
* **HTML/CSS** (basic UI)

### Planned Enhancements

* **React / TypeScript** (modern frontend)
* **Bootstrap or custom CSS** (responsive styling)
* **RESTful APIs** (for frontend-backend communication)
* **Authentication and role-based access** (Admin, Lab User)

---

## 🔧 Features

* [x] Add / edit / delete cell records
* [x] Search or filter cells by type, location, or other metadata
* [ ] Authentication and user roles
* [ ] Activity logging (who modified what and when)
* [ ] UI enhancements with React & TypeScript
* [ ] Export stock data (CSV / PDF)
* [ ] Mobile-friendly design

---

## 📁 Folder Structure (Initial)

```
/cellstocker
|
├── /assets          # images, stylesheets
├── /includes        # config and reusable scripts
├── /templates       # header, footer, layout
├── index.php        # main dashboard
├── add_cell.php     # form to add cell records
├── edit_cell.php    # edit functionality
└── db.php           # database connection
```

---

## 🧪 Getting Started

1. Clone the repository
2. Set up a local PHP server (e.g. XAMPP or MAMP)
3. Import the included SQL file into phpMyAdmin
4. Configure `/includes/db.php` with your DB credentials
5. Navigate to `http://localhost/cellstocker` in your browser

---

## 📌 Future Roadmap

* Integrate React frontend with PHP backend
* Use Fetch or Axios to build an interactive dashboard
* Add analytics (e.g. low stock warnings, usage trends)
* Deploy to a public host for remote access

---

## 😋 About the Project

This system is built for and inspired by my partner, a professional flow cytometrist, to solve a real pain point in day-to-day lab operations. It's intended as a portfolio project to demonstrate full-stack capability and a user-centered development process.

---

## 📄 License

MIT License
