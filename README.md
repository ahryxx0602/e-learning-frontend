# CN41 - Hệ thống E-Learning

## Đồ án tốt nghiệp - Khóa luận tốt nghiệp 03/2026

### Cấu trúc dự án

```
e-learning/
├── e-learning-backend/    # Backend - Laravel PHP
├── e-learning-frontend/   # Frontend - Vue.js + Vite
├── .gitignore
└── README.md
```

### Công nghệ sử dụng

**Backend:**
- PHP / Laravel
- MySQL
- Laravel Modules

**Frontend:**
- Vue.js 3
- Vite
- TailwindCSS

### Cài đặt & Chạy

#### Backend
```bash
cd e-learning-backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

#### Frontend
```bash
cd e-learning-frontend
npm install
cp .env.example .env
npm run dev
```
