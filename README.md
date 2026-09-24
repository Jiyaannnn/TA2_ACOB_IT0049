# Ledgerline POS TFA2

Ledgerline POS is a database-backed CodeIgniter 4 retail directory created for **Technical Formative Assessment 2: From Arrays to a Real Database**. It replaces the static customer and user arrays from TFA1 with persistent MySQL records retrieved through CodeIgniter Models and Query Builder.

## Student information

- **Name:** Jian Edward A. Acob
- **Section:** TW32
- **Course:** IT0049 - Web System Technologies
- **Assessment:** Technical Formative Assessment 2

## Application pages

| Route | Purpose |
| --- | --- |
| `/` | Database-backed POS dashboard and live record totals |
| `/about` | TFA2 project explanation and developer profile |
| `/customers` | Customer records retrieved through `CustomerModel` |
| `/users` | User records retrieved through `UserModel` |

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL 8 or newer
- PHP extensions required by CodeIgniter, including `intl`, `mysqli`, and `mbstring`

## Local setup

1. Clone the repository and enter its directory.

   ```bash
   git clone YOUR_GITHUB_REPOSITORY_URL
   cd TA2_ACOB_IT0049
   ```

2. Install PHP dependencies.

   ```bash
   composer install
   ```

3. Create the local environment file.

   ```bash
   cp env .env
   ```

4. Add these local settings to `.env`. Use your own MySQL username and password when they differ.

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'

   database.default.hostname = 127.0.0.1
   database.default.database = ledgerline_pos_tfa2
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
   database.default.port = 3306
   ```

5. Create the database.

   ```bash
   mysql -u root -e "CREATE DATABASE ledgerline_pos_tfa2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
   ```

6. Create the required tables and insert the sample records.

   ```bash
   php spark migrate
   php spark db:seed PosSeeder
   ```

7. Start the CodeIgniter development server.

   ```bash
   php spark serve
   ```

8. Open [http://localhost:8080](http://localhost:8080).

If port 8080 is unavailable, run `php spark serve --port 8081` and change `app.baseURL` to match.

## Alternative database import

The complete SQL export is available at `database/ledgerline_pos_tfa2.sql`. It creates the database, both required tables, and all ten sample records.

```bash
mysql -u root < database/ledgerline_pos_tfa2.sql
```

## How the database flow works

1. A route sends the browser request to a controller.
2. The controller creates the appropriate Model.
3. The Model's `findAll()` method uses CodeIgniter Query Builder to retrieve MySQL rows.
4. The controller passes those rows to the view.
5. The view safely displays each value with `esc()`.

The views remain focused on presentation. Database configuration stays in `.env`, and database queries stay in the Models and controllers.

## Important project files

| File | Responsibility |
| --- | --- |
| `app/Models/CustomerModel.php` | Connects CodeIgniter to the `customers` table |
| `app/Models/UserModel.php` | Connects CodeIgniter to the `users` table |
| `app/Controllers/Customers.php` | Retrieves and sends customer records to the view |
| `app/Controllers/Users.php` | Retrieves and sends user records to the view |
| `app/Database/Migrations/2026-09-24-092700_CreatePosTables.php` | Creates the required tables |
| `app/Database/Seeds/PosSeeder.php` | Inserts five records into each table |
| `database/ledgerline_pos_tfa2.sql` | Portable database export required for submission |

## Security notes

- `.env` is ignored by Git and must never be committed.
- Do not place database passwords or hosting credentials in source files.
- Views use CodeIgniter's `esc()` helper before displaying database values.
- Composer's `vendor` directory, logs, sessions, caches, and temporary files are excluded from Git.

## Submission links

- **GitHub repository:** https://github.com/Jiyaannnn/TA2_ACOB_IT0049
- **Hosted application:** To be added after deployment
