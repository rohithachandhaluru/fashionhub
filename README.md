# Fancy Shop Website

## Project Overview
Fancy Shop is a simple e-commerce website where users can browse fancy items, learn about the shop, contact the owners, and manage products through an admin panel. The project includes frontend and backend integration using HTML, CSS, JavaScript, and PHP with a MySQL database.

## Features
- **Home Page:** Displays a welcome message and featured products.
- **Products Page:** Lists all available fancy items.
- **About Us Page:** Provides information about the shop.
- **Contact Page:** Includes a simple form for users to send messages.
- **Admin Page:** Allows admins to add or remove products.

## Project Structure
```
Fancy-Shop/
│── index.html          # Home Page
│── products.html       # Products Page
│── about.html         # About Us Page
│── contact.html       # Contact Page
│── admin.html         # Admin Page
│── styles.css         # Stylesheet
│── script.js          # JavaScript file (if required)
│── images/            # Folder for storing images
│── backend/           # Folder for PHP scripts
│── database/          # Database files
└── README.md          # Project documentation
```

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Database Structure
The MySQL database consists of the following tables:

### `products` Table
| Column Name | Data Type  | Description |
|------------|-----------|-------------|
| id         | INT (AUTO_INCREMENT) | Primary key |
| name       | VARCHAR(255) | Product name |
| price      | DECIMAL(10,2) | Product price |
| image      | VARCHAR(255) | Image URL |

### `messages` Table (for Contact Form)
| Column Name | Data Type | Description |
|------------|-----------|-------------|
| id         | INT (AUTO_INCREMENT) | Primary key |
| name       | VARCHAR(255) | Sender name |
| email      | VARCHAR(255) | Sender email |
| message    | TEXT | Contact message |

## How to Run This Project
### Prerequisites
- Install **XAMPP** (or any server with PHP & MySQL support).

### Steps to Run
1. Clone this repository:
   ```sh
   git clone https://github.com/your-username/Fancy-Shop.git
   ```
2. Move the project to the XAMPP `htdocs` folder.
3. Start Apache and MySQL from XAMPP.
4. Create a database in phpMyAdmin and import `database/schema.sql`.
5. Open the browser and go to:
   ```
   http://localhost/Fancy-Shop/index.html
   ```

## Screenshot of Output
![Project Output](https://github.com/rohithachandhaluru/fashionhub/blob/main/images/banner.jpg?raw=true)

## License
This project is open-source and free to use under the MIT License.
