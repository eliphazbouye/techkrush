# 🚀 TechKrush

A modern Laravel-based tech news and blog platform featuring real-time updates, user authentication, and a sleek interface built with Livewire and Tailwind CSS.

## ✨ Features

- **🔐 User Authentication**: Secure login and registration powered by Laravel Fortify with beautiful, modern UI
- **📝 Post Management**: Create, edit, and manage tech news posts
- **🏷️ Categories & Tags**: Organize content with categories and tags
- **💬 Comments System**: Engage users with a commenting feature
- **👥 Role-Based Permissions**: Flexible user roles and permissions system
- **⚡ Real-Time Updates**: Livewire-powered reactive components
- **📱 Responsive Design**: Mobile-first design with Tailwind CSS and beautiful gradients
- **🎨 Modern UI**: Gradient backgrounds, smooth animations, and professional styling
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

## 🚀 Quick Start

1. **Clone & Install**:
   ```bash
   git clone https://github.com/sbouye/techkrush.git
   cd techkrush
   composer install && pnpm install
   ```

2. **Setup Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**:
   ```bash
   # Option A: Docker (Recommended)
   docker-compose up -d
   
   # Option B: Local MySQL
   # Create database 'techkrush' in MySQL
   ```

4. **Run Migrations & Seeders**:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Build & Start**:
   ```bash
   pnpm run build
   composer run dev
   ```

6. **Access Application**:
   - **� App**: http://localhost:8000
   - **👤 Admin Login**: `admin@mail.test` / `Password123!`
   - **🖥️ phpMyAdmin**: http://localhost:8080 (if using Docker)

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

## 🌱 Database Seeding

To populate the database with initial data including roles, categories, and an admin user:

```bash
php artisan db:seed
```

### 📊 Seeded Data

The seeders will create:

- **👥 3 User Roles**: `admin`, `editor`, `user`
- **🏷️ 3 Categories**: `PHP`, `DevOps`, `AI`
- **👤 1 Admin User**:
  - **Email**: `admin@mail.test`
  - **Password**: `Password123!`
  - **Name**: `Test Admin`

### 🔄 Safe Seeding

The seeders are designed to be **idempotent** - you can run them multiple times without creating duplicates. 

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
│   ├── migrations/       # 🏗️ Database schema
│   └── seeders/          # 🌱 Data seeders
│       ├── DatabaseSeeder.php
│       ├── RoleSeeder.php
│       ├── CategorySeeder.php
│       └── UserSeeder.php
├── public/               # 🌍 Public assets
├── resources/            # 🎨 Views, CSS, JS
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/         # 🔐 Authentication views
│       ├── layouts/      # 📐 Layout templates
│       └── livewire/     # ⚡ Livewire components
├── routes/               # 🛣️ Route definitions
├── storage/              # 💾 File storage
├── tests/                # 🧪 Test files
└── vendor/               # 📦 Composer dependencies
```

## � Recent Updates

### 🎨 Beautiful UI Redesign
- **Modern Navigation**: Gradient TechKrush branding with responsive mobile menu
- **Enhanced Authentication**: Beautiful login/register pages with gradient backgrounds and smooth animations
- **Professional Styling**: Card-based layouts, hover effects, and modern typography
- **Mobile-First**: Fully responsive design that works perfectly on all devices

### 🗄️ Database Improvements
- **Idempotent Seeders**: Safe database seeding that prevents duplicates
- **Role-Based System**: Complete user role management (admin, editor, user)
- **Category Management**: Pre-seeded categories for PHP, DevOps, and AI content
- **Admin User**: Ready-to-use admin account for immediate access

### 🔧 Development Enhancements
- **Docker Integration**: Easy database setup with MySQL and phpMyAdmin
- **Modern Stack**: Laravel 12, Livewire 3, Tailwind CSS 4, and Vite
- **Code Quality**: Laravel Pint for consistent PHP code style

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

*Last updated: September 23, 2025*
