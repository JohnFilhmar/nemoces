<p align="center"><img src="public/images/nemoces-preview.jpg" width="400" alt="NEMOCES Logo"></p>

<p align="center">
<b>N.E.M.O.C.E.S. | Coral Ecosystem Monitoring</b><br>
A research project by Senior High School Department, Puerto Galera National High School
</p>

---

## About N.E.M.O.C.E.S.

**N.E.M.O.C.E.S.** (Navigational Environmental Monitoring Operator for Coral Ecosystem Surveillance) is a web application designed to monitor and preserve coral reef ecosystems using IoT and real-time data collection. The platform enables researchers and students to collect, store, and visualize coral reef data and images for environmental monitoring and research.

## Features

- Real-time coral image and sensor data collection
- Secure data storage and management
- Admin authentication (login/logout)
- Responsive dashboard and navigation
- Database-driven session and cache management
- Easily extensible for new research modules

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.3)
- **Frontend:** Blade, Tailwind CSS (customizable)
- **Database:** MySQL (production), SQLite (development)
- **Hosting:** Hostinger (shared hosting compatible)

## Setup & Deployment

### Local Development

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/nemoces.git
    cd nemoces
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Copy `.env.example` to `.env` and set your local database credentials.

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Start the development server:
    ```bash
    php artisan serve
    ```

### Production Deployment (Hostinger)

- Upload all files except the `public` folder to a directory above `public_html` (if possible).
- Copy the contents of the `public` folder into `public_html`.
- Update `public_html/index.php` paths if needed.
- Set correct database credentials in `.env`.
- Run migrations or import your database via phpMyAdmin.
- Make sure `storage` and `bootstrap/cache` are writable.
- Add the provided `.htaccess` to `public_html` for clean URLs.

## Contributing

Contributions are welcome! Please open issues or submit pull requests for improvements or bug fixes.

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---

**Developed by:**  
Senior High School Department, Puerto Galera National High School