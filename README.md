# 🚀 TechKrush

A modern Laravel-based tech news and blog platform featuring real-time updates, user authentication, and a sleek interface built with Livewire and Tailwind CSS.

## ✨ Features

- **🔐 User Authentication**: Secure login and registration powered by Laravel Fortify
- **📝 Post Management**: Create, edit, and manage tech news posts
- **🏷️ Categories & Tags**: Organize content with categories and tags
- **💬 Comments System**: Engage users with a commenting feature
- **👥 Role-Based Permissions**: Flexible user roles and permissions system
- **⚡ Real-Time Updates**: Livewire-powered reactive components
- **📱 Responsive Design**: Mobile-first design with Tailwind CSS
- **🐳 Docker Support**: Easy database setup with Docker Compose

## 📋 Prerequisites

Before you begin, ensure you have the following installed on your system:

- **🐘 PHP 8.2 or higher**
- **📦 Composer** (PHP dependency manager)
- **🟢 Node.js 18+ and pnpm** (or npm/yarn)
- **🗄️ MySQL 8.0+** (or use Docker for database)
- **📚 Git**

### 🐳 Optional (for Docker setup)
- **🐳 Docker & Docker Compose**

## 🛠️ Installation

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/sbouye/techkrush.git
cd techkrush
```

### 2️⃣ Environment Setup

Copy the environment file and configure your settings:

```bash
cp .env.example .env
```

Edit the `.env` file to match your local environment:

```env
APP_NAME=TechKrush
APP_ENV=local
APP_KEY=  # Will be generated in next step
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=techkrush
DB_USERNAME=root
DB_PASSWORD=your_mysql_password

# Or for Docker MySQL
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=techkrush
DB_USERNAME=root
DB_PASSWORD=root
```

### 3️⃣ Install PHP Dependencies

```bash
composer install
```

### 4️⃣ Generate Application Key

```bash
php artisan key:generate
```

### 5️⃣ Database Setup

#### 🐳 Option A: Using Docker (Recommended)

Start the MySQL database and phpMyAdmin:

```bash
docker-compose up -d
```

This will start:
- 🗄️ MySQL on port 3306
- 🖥️ phpMyAdmin on http://localhost:8080

#### 💻 Option B: Local MySQL

Ensure your local MySQL server is running and create a database named `techkrush`.

### 6️⃣ Run Database Migrations

```bash
php artisan migrate
```

### 7️⃣ Install Node.js Dependencies

```bash
pnpm install
# or
npm install
```

### 8️⃣ Build Frontend Assets

For development:

```bash
pnpm run dev
# or
npm run dev
```

For production build:

```bash
pnpm run build
# or
npm run build
```

## ▶️ Running the Application

### 🚀 Development Mode (Recommended)

Use the built-in development script that runs all necessary services concurrently:

```bash
composer run dev
```

This command will start:
- 🌐 Laravel development server on http://localhost:8000
- 🔄 Queue worker for background jobs
- 📊 Log monitoring with Laravel Pail
- ⚡ Vite development server for hot reloading

### 🔧 Manual Startup

If you prefer to run services individually:

1. 🌐 Start the Laravel server:
   ```bash
   php artisan serve
   ```

2. 🔄 Start the queue worker (in a separate terminal):
   ```bash
   php artisan queue:work
   ```

3. ⚡ Start Vite for asset compilation:
   ```bash
   pnpm run dev
   ```

4. 📊 Monitor logs (optional, in another terminal):
   ```bash
   php artisan pail
   ```

## 🌐 Accessing the Application

- **🏠 Main Application**: http://localhost:8000
- **🖥️ phpMyAdmin** (if using Docker): http://localhost:8080

## 🛣️ Available Routes

- `/` - 🏠 Home page
- `/news` - 📰 Posts listing
- `/podcasts` - 🎧 Podcasts section
- `/resource` - 📚 Resources section
- `/admin/dashboard` - 📊 Admin dashboard
- `/admin/dashboard/category` - 🏷️ Category management

## 🧪 Testing

Run the test suite:

```bash
composer run test
# or
php artisan test
```

## 🌱 Database Seeding (Optional)

To populate the database with sample data:

```bash
php artisan db:seed
```

## 🎨 Code Quality

### 🐘 PHP Code Style

Check and fix code style with Laravel Pint:

```bash
./vendor/bin/pint
```

### 🔍 Static Analysis

Run static analysis (if configured):

```bash
# Add your preferred static analysis tool
```

## 🚀 Deployment

### 📦 Production Build

1. ⚡ Build optimized assets:
   ```bash
   pnpm run build
   ```

2. ⚙️ Set production environment variables:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

3. 🗄️ Run database migrations on production:
   ```bash
   php artisan migrate --force
   ```

4. ⚡ Clear and cache config:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

### 🐳 Docker Deployment

For containerized deployment, consider using Laravel Sail or custom Docker setup.

## 📁 Project Structure

```
├── app/                    # 📱 Application code
│   ├── Actions/           # 🎯 Custom actions
│   ├── Http/Controllers/  # 🌐 HTTP controllers
│   ├── Livewire/         # ⚡ Livewire components
│   ├── Models/           # 🗃️ Eloquent models
│   └── Providers/        # 🔧 Service providers
├── database/              # 🗄️ Database migrations and seeders
├── public/               # 🌍 Public assets
├── resources/            # 🎨 Views, CSS, JS
│   ├── css/
│   ├── js/
│   └── views/
├── routes/               # 🛣️ Route definitions
├── storage/              # 💾 File storage
├── tests/                # 🧪 Test files
└── vendor/               # 📦 Composer dependencies
```

## 🛠️ Key Technologies

- **🐘 Laravel 12**: PHP framework
- **⚡ Livewire 3**: Reactive components
- **🔐 Laravel Fortify**: Authentication
- **🎨 Tailwind CSS 4**: Utility-first CSS
- **⚡ Vite**: Fast build tool
- **🗄️ MySQL**: Database
- **🐳 Docker**: Containerization

## 🤝 Contributing

1. 🍴 Fork the repository
2. 🌿 Create a feature branch: `git checkout -b feature/your-feature`
3. 💾 Commit your changes: `git commit -am 'Add some feature'`
4. ⬆️ Push to the branch: `git push origin feature/your-feature`
5. 🔄 Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 💬 Support

If you encounter any issues or have questions:

1. 📖 Check the [Laravel Documentation](https://laravel.com/docs)
2. 📖 Review [Livewire Documentation](https://laravel-livewire.com/docs)
3. 🐛 Open an issue on GitHub

---

Built with ❤️ using Laravel and modern web technologies.
