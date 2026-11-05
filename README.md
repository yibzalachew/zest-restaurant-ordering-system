
# Zest Restaurant Ordering System

A web-based restaurant ordering and management system built with PHP and MySQL. The system allows customers to browse food items, add products to a shopping cart, place orders, select payment methods, and track their orders.

## Project Overview

Zest Restaurant Ordering System is designed to simplify restaurant ordering and daily operations through a responsive customer interface and an administrative dashboard.

## Features

### Customer Features
- Browse available food items.
- Search and filter food by category.
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
- View reports and export data.

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
- Web browser

### 1. Clone the Repository

```bash
git clone https://github.com/yibzalachew/zest-restaurant-ordering-system.git
```

Move the project folder into your XAMPP `htdocs` directory.

### 2. Create the Database

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin.
3. Create a database named:

```text
restaurant_ordering_system
```

4. Import your project database SQL file.

**Note:** The database backup is not included in this public repository. You must prepare your own database schema and initial data before running the application.

### 3. Configure Database Connection

Create:

```text
config/database.local.php
```

Add your local database configuration:

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

Do not publish this local configuration file or your database credentials.

### 4. Install Dependencies

From the project directory, run:

```bash
composer install
```

### 5. Run the Application

Open your browser:

```text
http://localhost/restaurant-ordering-system/
```

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

## Screenshots

Screenshots of the customer interface, shopping cart, checkout, and administrator dashboard will be added here.

## Project Status

The main customer ordering workflow, administration features, reporting, and security testing have been completed locally.

## Future Improvements

- Online hosting and deployment.
- Automated payment gateway integration.
- Email and SMS order notifications.
- Additional analytics and reporting.
- Improved production deployment configuration.

## Author

**Yibzalachew Seifu Abite**

Computer Science Graduate

GitHub: https://github.com/yibzalachew

## License

This project is currently available for portfolio and demonstration purposes. No formal open-source license has been selected.
