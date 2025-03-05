# somosAETH Documentation

## Overview
This project is a Laravel-based web application that includes various models for managing users, orders, payments, products, and other functionalities. Below is a detailed breakdown of the key models and their relationships.

## Installation
### Prerequisites
- PHP 10+
- Composer
- Laravel Framework
- MySQL or PostgreSQL (Database)
- Node.js & npm (for frontend assets if applicable)

### Steps to Install
1. Clone the repository:
   ```bash
   git clone https://github.com/wlsfernandes/aeth-app
   cd your-project
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy the `.env` file and configure it:
   ```bash
   cp .env.example .env
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Run database migrations:
   ```bash
   php artisan migrate --seed
   ```
6. Start the server:
   ```bash
   php artisan serve
   ```

---

## Database Models
### 1️⃣ User Model
- Represents an authenticated user.
- Has relationships with `Role` and `Member` models.
- Fields:
  - `name`, `email`, `password`
  - `email_verified_at`, `remember_token`
- Relationships:
  - `roles()` → Many-to-Many with `Role`
  - `member()` → One-to-One with `Member`

### 2️⃣ Role Model
- Defines different user roles.
- Fields:
  - `name`
- Relationships:
  - `users()` → Many-to-Many with `User`

### 3️⃣ Order Model
- Stores customer orders.
- Fields:
  - `order_number`, `customer_name`, `customer_email`
  - `total`, `shipment_cost`, `address`, `zipcode`
- Relationships:
  - `items()` → One-to-Many with `OrderItem`

### 4️⃣ OrderItem Model
- Represents an item within an order.
- Fields:
  - `order_id`, `product_id`, `quantity`, `price`
- Relationships:
  - `product()` → Belongs to `Product`

### 5️⃣ Product Model
- Represents an available product.
- Fields:
  - `name`, `description`, `price`, `stock`, `sku`, `type`
- Relationships:
  - `cartItems()` → One-to-Many with `CartItem`

### 6️⃣ Cart Model
- Stores a user's cart items.
- Fields:
  - `user_identifier`
- Relationships:
  - `items()` → One-to-Many with `CartItem`

### 7️⃣ Payment Model
- Stores payment transactions.
- Fields:
  - `first_name`, `last_name`, `email`, `amount`, `currency`
  - `status`, `payment_method`, `receipt_url`
- Relationships:
  - None directly, but can be linked to `Order`

### 8️⃣ Membership Model
- Tracks user memberships.
- Fields:
  - `user_id`, `membership_plan`, `price`, `is_active`
- Relationships:
  - `user()` → Belongs to `User`

### 9️⃣ PortalContent Model
- Stores content published on the portal.
- Fields:
  - `title`, `creator`, `description`, `url`, `media_type`
  - `category`, `program`, `date_of_publication`

### 🔟 Post & PostType Models
- `Post` represents multilingual blog posts.
- `PostType` categorizes different types of posts.

### 🛠 Additional Models
- `Category`: Defines content or product categories.
- `Faq`: Stores frequently asked questions.
- `ErrorLog`: Logs system errors.
- `Shipping`: Manages shipping costs.
- `UspsMediaMailShipping`: Handles USPS Media Mail shipping details.

---

## API Documentation
To generate API documentation, you can use:
```bash
php artisan ide-helper:generate
php artisan ide-helper:models -W
php artisan scribe:generate
```
This will create API documentation for the project.

---

## Deployment
### Steps for Production Deployment
1. **Set Up Environment**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
2. **Queue and Schedule Jobs** (If using jobs)
   ```bash
   php artisan queue:work
   ```
3. **Run Migrations and Optimize**
   ```bash
   php artisan migrate --force
   composer install --optimize-autoloader --no-dev
   ```
4. **Set Proper Permissions**
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

---

## License
This software is licensed under the **DevProMaster** license. All rights reserved.

© [2025] [DevPromaster]. Unauthorized use, copying, modification, or distribution of this software without prior written permission is strictly prohibited.

For licensing inquiries, please contact [wlsfernandes@gmail.com].

---

## Contributors
- **Wilson Fernandes Junior** - Lead Developer


---

## Contact
For support, contact **wlsfernandes@gmail.com**.

