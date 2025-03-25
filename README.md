# Fancy Trends - E-commerce Website

🛍️ A simple e-commerce website where users can browse products and place orders. Admins can manage orders through a panel with options to add, update, and delete orders.

## 📌 Project Structure
```
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
```

## ⚡ Features
✅ View and purchase products  
✅ Simple order form (name, email)  
✅ Store orders in MySQL database  
✅ Admin panel to update & delete orders  
✅ Responsive design  

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS
- **Backend:** PHP, MySQL
- **Database:** MySQL (via phpMyAdmin)
- **Server:** XAMPP (for local testing)

## 📂 Database Setup
### Create Database:
```sql
CREATE DATABASE fancy_shop;
```

### Create Orders Table:
```sql
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    item VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🚀 How to Run This Project Locally
### 1️⃣ Setup Environment
- Install XAMPP (for Apache & MySQL)
- Start Apache and MySQL from XAMPP control panel

### 2️⃣ Clone the Repository
```sh
git clone https://github.com/yourusername/fancy-trends.git
cd fancy-trends
```

### 3️⃣ Import Database
- Open phpMyAdmin: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create database `fancy_shop`
- Import `database.sql`

### 4️⃣ Run the Project
- Move project folder to `htdocs` (inside XAMPP)
- Open browser and visit:
```url
http://localhost/fancy-trends/index.html
```

### 5️⃣ Admin Panel
- Open: [http://localhost/fancy-trends/admin_orders.php](http://localhost/fancy-trends/admin_orders.php)
- Manage orders (Edit / Delete)

## 📸 Output Screenshots
- Homepage
![image](https://github.com/user-attachments/assets/d19663d2-4b40-4c73-9d1f-72546b449df1)
- Products Page
![image](https://github.com/user-attachments/assets/05af04bf-62fa-4b60-acc9-d54fe4a2ce28)
- Order Form
![image](https://github.com/user-attachments/assets/050a9543-7c0b-4a5c-ac2a-9bc817fe4e8e)
- Admin Panel
![image](https://github.com/user-attachments/assets/aa4b698c-cc51-4d07-945e-8cb9fe0f4fa2)


## 📝 Contribution
🔹 Fork the repo  
🔹 Create a new branch (`feature-branch`)  
🔹 Commit changes (`git commit -m "Added new feature"`)  
🔹 Push changes (`git push origin feature-branch`)  
🔹 Submit a Pull Request  

## 📜 License
This project is open-source and available under the MIT License.
