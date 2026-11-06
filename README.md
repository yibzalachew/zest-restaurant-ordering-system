
# Zest Restaurant Ordering System

A web-based restaurant ordering and management system built with PHP and MySQL. It allows customers to browse food items, add products to a shopping cart, place pickup or delivery orders, submit payment references, and track their orders.

## Project Overview

Zest Restaurant Ordering System is designed to simplify restaurant ordering and daily operations through a responsive customer interface and an administrative dashboard.

The application provides tools for managing food items, categories, orders, payments, restaurant settings, and business reports.

## Features

### Customer Features

- Browse available food items.
- Search and filter food by category.
- View food details and prices.
- Add food items to the shopping cart.
- Update quantities and remove cart items.
- Place pickup and delivery orders.
- Submit payment references for manual verification.
- Track orders using an order number and phone number.
- Responsive design for mobile and desktop devices.

### Administrator Features

- Secure administrator login.
- Dashboard for restaurant management.
- Manage food items and categories.
- Manage customer orders.
- Review and verify payment submissions.
- Configure restaurant settings.
- View restaurant reports.
- Export reports to Excel and PDF.

## Technologies Used

- PHP 8+
- MySQL / MariaDB
- HTML5
- CSS3
- JavaScript
- PDO
- Composer
- PhpSpreadsheet

## Project Structure

```text
zest-restaurant-ordering-system/
├── admin/
│   ├── categories/
│   ├── foods/
│   ├── orders/
│   ├── payments/
│   └── reports/
├── assets/
│   ├── css/
│   ├── images/
│   └── js/
├── config/
├── database/
│   └── schema.sql
├── includes/
├── uploads/
│   └── foods/
├── cart.php
├── checkout.php
├── index.php
├── payment.php
├── order_success.php
├── track-order.php
├── composer.json
└── README.md
```

## Installation and Setup

### Requirements

- XAMPP
- PHP 8.0 or later
- MySQL or MariaDB
- Composer
- Git (optional)
- Web browser

### 1. Clone the Repository

Open a terminal and run:

```bash
git clone https://github.com/yibzalachew/zest-restaurant-ordering-system.git
```

Move the project folder into your XAMPP `htdocs` directory.

### 2. Start XAMPP

1. Open the XAMPP Control Panel.
2. Start Apache.
3. Start MySQL.

### 3. Create the Database

1. Open `http://localhost/phpmyadmin`.
2. Create a database named:

```text
restaurant_ordering_system
```

3. Select the newly created database.
4. Click the **Import** tab.
5. Choose `database/schema.sql` from the project folder.
6. Click **Import** or **Go**.

The SQL installation script creates the database tables, primary keys, indexes, and relationships.

**Important:** The schema file contains database structure only. It does not include existing customer records, orders, payment records, administrator accounts, or private payment information.

### 4. Configure Database Connection

Create a file named:

```text
config/database.local.php
```

Add your local database credentials:

```php
<?php
declare(strict_types=1);

return [
    'host' => 'localhost',
    'dbname' => 'restaurant_ordering_system',
    'username' => 'root',
    'password' => ''
];
```

Update the username and password if your MySQL configuration is different.

**Security:** Never publish `config/database.local.php` or real database credentials.

### 5. Install Composer Dependencies

Open a terminal in the project directory and run:

```bash
composer install
```

This installs the dependencies required by the application.

### 6. Initial Application Setup

The database schema does not automatically create an administrator account or populate restaurant data.

Before using the application, configure:

- A secure administrator account.
- Food categories.
- Food items and their images.
- Restaurant settings.
- Payment methods and account details.

Use secure credentials and verify all settings before accepting real customer orders.

### 7. Run the Application

Open your browser and visit:

```text
http://localhost/restaurant-ordering-system/
```

The application should now be accessible locally after the initial setup is complete.

## Security Features

- PDO prepared statements.
- CSRF protection.
- Secure session handling.
- Login attempt protection.
- Input validation.
- Output escaping.
- Protected configuration and internal directories.
- Upload directory script-execution protection.
- Payment verification without collecting payment PINs or OTPs.
- Database credentials excluded from the public repository.

## Testing

The application has been tested locally, including:

- Customer browsing and food search.
- Shopping cart operations.
- Pickup and delivery checkout.
- Payment reference submission and verification.
- Order tracking.
- Administrator operations.
- Reports and data accuracy.
- Excel and PDF report exports.
- Mobile responsiveness.
- Security checks and browser compatibility.

## Screenshots

Screenshots of the following application pages will be added:

- Customer homepage.
- Food menu.
- Shopping cart.
- Checkout page.
- Order tracking.
- Administrator dashboard.
- Reports dashboard.

## Project Status

The main customer ordering workflow, administration features, reporting, and local testing have been completed.

The project is published on GitHub for portfolio and demonstration purposes.

## Future Improvements

- Online hosting and deployment.
- Automated payment gateway integration.
- Email and SMS order notifications.
- Additional analytics and reporting.
- Improved production deployment configuration.
- Automated database installation and initial administrator setup.

## Author

**Yibzalachew Seifu Abite**

Computer Science Graduate

GitHub: https://github.com/yibzalachew

Project Repository: https://github.com/yibzalachew/zest-restaurant-ordering-system

## License

This project is currently available for portfolio and demonstration purposes. No formal open-source license has been selected.
