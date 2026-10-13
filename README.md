# Evently - Online Event Management & Bidding System

Evently is a full-stack web application built using **PHP (CodeIgniter 3)** and **MySQL**. It connects clients who want to host events with event planners and managers.

Instead of fixed pricing, the platform uses a **reverse-bidding model**: clients post their event requirements along with a budget, and verified event managers place proposals with custom bids and timelines.

---

## Features

### 1. Client / Host Portal
- **Post Events:** Create event listings (Weddings, Birthdays, Corporate, Concerts) with date, city, and expected budget.
- **Manage Bids:** View all incoming bids from event managers, compare quotes, and accept the best offer.
- **Explore Portfolios:** Browse event planners, check their past photos, videos, and client reviews.
- **Reviews & Ratings:** Leave ratings and feedback after events are completed.
- **Bookmarks:** Save interesting event manager profiles for future reference.

### 2. Event Manager Portal
- **Browse & Bid:** Search live client postings filtered by city and category, and submit bids.
- **Portfolio Showcase:** Upload event photos and completed work to attract more clients.
- **Bid Tracking:** Monitor pending, active, and accepted bids in real-time.
- **Public Profile:** Dedicated profile page showing contact info, past events, ratings, and customer reviews.

### 3. Admin Panel
- **Dashboard Overview:** Monitor total clients, managers, projects, bids, and reviews.
- **User Management:** Approve, verify, or block clients and event managers.
- **Category & Location Setup:** Manage event categories, states, and cities.
- **Complaints & Feedback:** Review user complaints and manage platform feedback.

---

## Tech Stack

- **Backend:** PHP (CodeIgniter 3 MVC Framework)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML5, CSS3, JavaScript, jQuery, Bootstrap
- **Server:** Apache (via XAMPP / WAMP)

---

## How to Run Locally

### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/) (PHP 7.4 or PHP 8.x + MySQL).

### 1. Setup Project Files
Clone or extract the repository into your web server directory:
```bash
# In XAMPP htdocs:
cd C:\xampp\htdocs
git clone https://github.com/your-username/mainproject.git mainproject
```

### 2. Import the Database
1. Open your browser and go to `http://localhost/phpmyadmin/`.
2. Create a new database named **`evently`**.
3. Select the `evently` database and click **Import**.
4. Choose the file located at:
   ```
   database/evently.sql
   ```
5. Click **Go** to import all tables and seed data.

### 3. Check Configuration (Optional)
The database configuration is inside `application/config/database.php`:
```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'evently',
```
The base URL in `application/config/config.php` automatically detects your localhost domain and port.

### 4. Open in Browser
- **Home / Client Portal:** [http://localhost/mainproject/index.php/Home](http://localhost/mainproject/index.php/Home)
- **Event Manager Portal:** [http://localhost/mainproject/index.php/User](http://localhost/mainproject/index.php/User)
- **Admin Login:** [http://localhost/mainproject/index.php/admin/Admin/index](http://localhost/mainproject/index.php/admin/Admin/index)

---

## Demo Accounts for Testing

| Role | Username | Password |
|---|---|---|
| **Admin** | `admin` | `admin123` |
| **Client** | `rahul_sharma` | `12345678` |
| **Event Manager** | `royal_events` | `12345678` |

*(You can also register a new client or event manager directly from the website).*

---

## Project Structure

```text
mainproject/
├── application/
│   ├── config/          # Database, autoload, and app routes
│   ├── controllers/     # Client, User, Project, Home, and Admin controllers
│   ├── models/          # Database queries & active record logic
│   └── views/           # UI views, layouts, and admin templates
├── database/
│   └── evently.sql      # Database schema with demo records
├── resources/
│   ├── media/           # Uploaded images and videos
│   ├── admin/           # Admin panel CSS/JS assets
│   └── user/            # Frontend theme assets & plugins
├── system/              # CodeIgniter 3 core files
├── index.php            # Main entry point
└── .gitignore           # Git ignore rules
```

---

## License & Notes
This project was built for educational and portfolio purposes. Feel free to fork and customize it.
