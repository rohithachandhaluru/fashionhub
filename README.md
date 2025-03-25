Fancy Trends - E-commerce Website
🛍️ A simple e-commerce website where users can browse products and place orders. Admins can manage orders through a panel with options to add, update, and delete orders.

📌 Project Structure
bash
Copy
Edit
fancy-trends/
│── images/              # Product images
│── styles.css           # Styling for the website
│── index.html           # Homepage
│── products.html        # Products listing page
│── order.html           # Order form page
│── admin_orders.php     # Admin panel for managing orders
│── order.php            # Backend PHP file to process orders
│── database.sql         # Database structure
│── README.md            # Documentation
⚡ Features
✅ View and purchase products
✅ Simple order form (name, email)
✅ Store orders in MySQL database
✅ Admin panel to update & delete orders
✅ Responsive design

🛠️ Technologies Used
Frontend: HTML, CSS

Backend: PHP, MySQL

Database: MySQL (via phpMyAdmin)

Server: XAMPP (for local testing)

📂 Database Setup
Create Database:

sql
Copy
Edit
CREATE DATABASE fancy_shop;
Create Orders Table:

sql
Copy
Edit
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    item VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
🚀 How to Run This Project Locally
1️⃣ Setup Environment
Install XAMPP (for Apache & MySQL)

Start Apache and MySQL from XAMPP control panel

2️⃣ Clone the Repository
sh
Copy
Edit
git clone https://github.com/yourusername/fancy-trends.git
cd fancy-trends
3️⃣ Import Database
Open phpMyAdmin (http://localhost/phpmyadmin)

Create database fancy_shop

Import database.sql

4️⃣ Run the Project
Move project folder to htdocs (inside XAMPP)

Open browser and visit:

arduino
Copy
Edit
http://localhost/fancy-trends/index.html
5️⃣ Admin Panel
Open: http://localhost/fancy-trends/admin_orders.php

Manage orders (Edit / Delete)

📸 Output Screenshots
Homepage

Products Page

Order Form

Admin Panel

📝 Contribution
🔹 Fork the repo
🔹 Create a new branch (feature-branch)
🔹 Commit changes (git commit -m "Added new feature")
🔹 Push changes (git push origin feature-branch)
🔹 Submit a Pull Request

📩 Contact
For any issues, feel free to reach out:
📧 Email: fancytrends@example.com

