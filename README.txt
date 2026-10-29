NEXORA DATABASE SYSTEM
======================

FEATURES
- Admin login with password hashing (no hard-coded password)
- Dashboard with client, project, in-progress, and inquiry totals
- Client records: add, list, search, edit, delete
- Project records: add, list, search, edit; link to a client; set status, dates, budget
- Inquiry records: add, list, search, update status, delete
- MySQL relational schema, indexes, and foreign key constraints
- Responsive admin layout for desktop and mobile
- PDO prepared statements, output escaping, and CSRF tokens on forms

REQUIREMENTS
PHP 8+ recommended, MySQL/MariaDB, PDO MySQL extension. XAMPP is convenient on Windows.

INSTALL WITH XAMPP
1. Start Apache and MySQL in XAMPP.
2. Copy this folder to C:\xampp\htdocs\nexora-database-system
3. Visit http://localhost/phpmyadmin
4. Choose Import and import database.sql. It creates the nexora_db database and tables.
5. If your MySQL credentials differ from XAMPP defaults, edit config.php (DB_HOST, DB_NAME, DB_USER, DB_PASS).
6. Visit http://localhost/nexora-database-system/setup_admin.php
7. Create a username and password (at least 10 characters).
8. IMPORTANT: delete setup_admin.php from the server after creating the admin account.
9. Sign in at http://localhost/nexora-database-system/login.php

NOTES
- You need a PHP/MySQL server to run this application; double-clicking a PHP file will not run it.
- Change database credentials before deployment. Use HTTPS and a least-privilege database user on a public server.
- Use sample data for portfolio demonstrations and do not enter real client data without permission.
