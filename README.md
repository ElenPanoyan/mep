# Project Setup

## Installation & Setup

Follow these steps to set up and run the project locally:

### 1. Install Dependencies
Ensure you have Node.js and PHP installed.

```sh
npm install
composer install
```

### 2. Run Development Server
Start the frontend development server:

```sh
npm run dev
```

Start the Laravel backend:

```sh
php artisan serve
```

### 3. Run Database Migrations & Seeding
Run the database migrations:

```sh
php artisan migrate
```

Seed the database with fake data for testing:

```sh
php artisan db:seed
```

### 4. Test QR Code Generation
Once the setup is complete, you can access the QR code generation endpoint:

[http://localhost:8000/qr?code=gfdbk](http://localhost:8000/qr?code=gfdbk)

---

## Notes
- Ensure your `.env` file is properly configured with database credentials.

