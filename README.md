# Voyager - Laravel Admin & BREAD System

This fork of Voyager is maintained independently and has been detached from the original archived repository. Voyager is an easy-to-use Admin & BREAD (Browse, Read, Edit, Add, Delete) system built with Laravel, Vue, and Bootstrap.

### 🚀 Features
- Easy BREAD operations for database management
- Built with Vue.js and Bootstrap
- Compatible with Laravel 8, 9, and 10 (for now)

## Requirements
- Laravel 8 or newer
- PHP 8.0 or newer

## Installation

### 1. Include Voyager in Your Laravel Project

To install via Composer:
```bash
composer require tcg/voyager
```

### 2. Database Setup

Update your `.env` file with your database credentials and application URL:

```env
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

APP_URL=http://localhost:8000
```

### 3. Voyager Installation

Install Voyager without dummy data:

```bash
php artisan voyager:install
```

To install Voyager with dummy data (demo content):

```bash
php artisan voyager:install --with-dummy
```

### 4. Run Your Application

Start your local server:

```bash
php artisan serve
```

Visit [http://localhost:8000/admin](http://localhost:8000/admin) to access the admin panel.

## Creating an Admin User

If installed with dummy data, use the following credentials:

- **Email:** `admin@admin.com`
- **Password:** `password`

If you need to grant admin privileges to an existing user:

```bash
php artisan voyager:admin user@example.com
```

To create a new admin user from scratch:

```bash
php artisan voyager:admin user@example.com --create
```

You'll be prompted to enter the user's name and password.

## Enhanced Security for Media Uploads
We've explicitly defined allowed MIME types and file extensions in `config/voyager.php` for greater security. Ensure you adjust these lists according to your application's needs.

## Documentation & Resources
- **Website & Documentation:** [https://voyager.devdojo.com/](https://voyager.devdojo.com/)
- **Voyager Cheat Sheet:** [https://voyager-cheatsheet.ulties.com/](https://voyager-cheatsheet.ulties.com/)

## Community
Join our Slack community: [Voyager Slack](https://voyager-slack-invitation.herokuapp.com/)

## License
Voyager is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Maintained with ❤️ by your independent Voyager fork.
