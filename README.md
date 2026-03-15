# 🎨 E-Learning Marketplace — Frontend

> **Đồ án tốt nghiệp** — Khoa Khoa học Máy tính, Đại học Duy Tân  
> Sinh viên: **Phan Văn Thành** | GVHD: Trịnh Sử Trường Thi | 2026

---

## 📋 Thông tin dự án

| Thông tin | Chi tiết |
|-----------|----------|
| **Tên đề tài** | Xây dựng hệ thống nền tảng học tập trực tuyến (E-Learning Marketplace) tích hợp thanh toán trực tuyến |
| **Sinh viên** | Phan Văn Thành — MSSV: 28211102974 |
| **GVHD** | Trịnh Sử Trường Thi |
| **Thời gian** | 12/03/2026 – 15/05/2026 |
| **Repository Backend** | [elearning-backend](../elearning-backend) |

---

## 📖 Giới thiệu

Repository này chứa **toàn bộ source code Frontend** của hệ thống E-Learning Marketplace — một SPA (Single Page Application) được xây dựng bằng **Vue.js 3 + Vite**, kết nối với Backend API Laravel 12.

Giao diện chia làm 2 phần tách biệt:
- 🛡️ **Admin Panel** — Quản trị hệ thống: khóa học, học viên, đơn hàng, thống kê doanh thu
- 🌐 **Client Site** — Giao diện người học: duyệt khóa học, xem video, mua khóa, làm quiz

---

## ✨ Tính năng chính

| Nhóm | Tính năng |
|------|-----------|
| **Auth** | Đăng nhập Admin / Đăng ký + Đăng nhập Học viên / Xác thực email / Quên mật khẩu |
| **Nội dung** | Danh sách & chi tiết khóa học / Video player (Video.js) / Danh mục, Giảng viên |
| **Thương mại** | Giỏ hàng / Mã giảm giá / Thanh toán VNPAY + MoMo / Lịch sử đơn hàng |
| **Học tập** | Theo dõi tiến độ video / Sidebar bài giảng / Khóa học của tôi |
| **AI Quiz** | Làm quiz trắc nghiệm sau bài giảng (sinh từ AI Auto-Quiz) |
| **Dashboard** | Biểu đồ doanh thu (ApexCharts) / StatCard tổng quan / Top khóa học |

---

## 🛠️ Công nghệ sử dụng

### Core Stack

| Công nghệ | Phiên bản | Mục đích |
|-----------|-----------|----------|
| **Vue.js** | 3.x | UI Framework |
| **Vite** | 5.x | Build tool & Dev server |
| **Vue Router** | 4.x | Client-side routing + lazy loading |
| **Pinia** | 2.x | State management |
| **Tailwind CSS** | 3.x | Utility-first CSS |
| **Axios** | 1.x | HTTP client |

### UI Libraries

| Thư viện | Mục đích |
|----------|----------|
| **TailAdmin Vue** | Admin layout + sidebar (clone từ GitHub, không install package) |
| **Flowbite Vue** | UI components cho trang Client (Modal, Tabs, Accordion, Badge...) |
| **lucide-vue-next** | Icon system dùng xuyên suốt toàn dự án |

### Tính năng chuyên biệt

| Thư viện | Mục đích |
|----------|----------|
| **vee-validate + zod** | Validation form (schema-based) |
| **@videojs-player/vue** | Video player trang học bài giảng |
| **vue3-apexcharts** | Biểu đồ Dashboard Admin |
| **vue3-carousel** | Carousel khóa học nổi bật trang chủ |
| **vue-toastification** | Toast notification (top-right) |
| **nprogress** | Loading bar khi chuyển route |
| **@vueuse/core** | Composables: useDebounce, useLocalStorage... |

---

## ⚙️ Cài đặt & Chạy dự án

### Yêu cầu hệ thống

| Công cụ | Phiên bản tối thiểu |
|---------|---------------------|
| Node.js | >= 18.x |
| npm | >= 9.x |
| Backend API | Laravel 12 đang chạy tại `http://localhost:8000` |

### Bước 1 — Clone repository

```bash
git clone https://github.com/<your-username>/elearning-frontend.git
cd elearning-frontend
```

### Bước 2 — Cài đặt dependencies

```bash
# Dependencies chính
npm install

# Cài thêm khi làm đến Dashboard (Phase F4)
npm install vue3-apexcharts apexcharts
```

### Bước 3 — Cấu hình môi trường

```bash
cp .env.example .env
```

Chỉnh sửa file `.env`:

```env
VITE_APP_NAME="E-Learning Marketplace"
VITE_API_URL=/api/v1
VITE_FRONTEND_URL=http://localhost:5173
```

> **Lưu ý:** Axios dùng `baseURL: '/api/v1'` kết hợp với Vite proxy — **không** hardcode `http://localhost:8000` trong code.

### Bước 4 — Clone TailAdmin (Admin Layout)

```bash
# Clone TailAdmin Vue vào thư mục tạm
git clone https://github.com/TailAdmin/vue-tailwind-admin-dashboard.git tailadmin-temp

# Copy các file cần thiết vào project
cp -r tailadmin-temp/src/layouts/* src/layouts/
cp -r tailadmin-temp/src/components/common/* src/components/admin/

# Xóa thư mục tạm
rm -rf tailadmin-temp
```

> TailAdmin được **copy trực tiếp** vào project, không cài qua npm để dễ tuỳ chỉnh.

### Bước 5 — Khởi chạy

```bash
# Dev mode
npm run dev

# Build production
npm run build

# Preview production build
npm run preview
```

Truy cập: **`http://localhost:5173`**

---

## 🗂️ Cấu trúc thư mục

```
src/
├── api/                        # Toàn bộ HTTP calls (không gọi Axios trực tiếp trong component)
│   ├── authApi.js              # adminLogin, adminMe, studentRegister, studentLogin...
│   ├── courseApi.js            # getList, getBySlug, getLessons, adminCRUD
│   ├── lessonApi.js            # getById, reorder, adminCRUD
│   ├── categoryApi.js
│   ├── teacherApi.js
│   ├── orderApi.js             # getCart, applyCoupon, createOrder, getMyOrders
│   ├── paymentApi.js           # createVnpay, createMomo
│   ├── progressApi.js          # update, getCourseProgress
│   ├── quizApi.js              # generate, getByLesson, submitAnswer
│   ├── uploadApi.js            # uploadVideo, uploadDocument, uploadImage
│   └── dashboardApi.js         # getStats, getRevenue, getTopCourses
│
├── components/
│   ├── common/                 # Dùng ở cả admin lẫn client
│   │   ├── AppButton.vue
│   │   ├── AppInput.vue
│   │   ├── AppModal.vue
│   │   ├── AppPagination.vue
│   │   ├── AppAlert.vue        # Banner success / error / warning
│   │   └── AppSkeleton.vue     # Loading skeleton
│   ├── admin/                  # Chỉ dùng trong Admin Panel
│   │   ├── DataTable.vue       # Bảng dữ liệu tái sử dụng
│   │   ├── FormCard.vue        # Card bọc form
│   │   └── StatCard.vue        # Card thống kê Dashboard
│   └── client/                 # Chỉ dùng trong Client Site
│       ├── CourseCard.vue      # Card khóa học (thumbnail / giá / rating)
│       ├── VideoPlayer.vue     # Wrapper Video.js
│       └── LessonSidebar.vue   # Sidebar danh sách bài giảng
│
├── layouts/
│   ├── AdminLayout.vue         # Sidebar (TailAdmin style) + Header + <router-view>
│   └── ClientLayout.vue        # Flowbite Navbar + <router-view> + Footer
│
├── pages/
│   ├── admin/
│   │   ├── DashboardPage.vue   # ApexCharts + StatCard
│   │   ├── CoursesPage.vue
│   │   ├── CourseFormPage.vue  # Tạo / chỉnh sửa khóa học + upload Cloudinary
│   │   ├── LessonsPage.vue
│   │   ├── CategoriesPage.vue
│   │   ├── TeachersPage.vue
│   │   ├── StudentsPage.vue
│   │   ├── OrdersPage.vue
│   │   ├── CouponsPage.vue
│   │   └── UsersPage.vue
│   ├── client/
│   │   ├── HomePage.vue        # Carousel featured + danh sách nổi bật
│   │   ├── CoursesPage.vue     # Grid cards + filter + search debounce + pagination
│   │   ├── CourseDetailPage.vue # FwbAccordion + FwbModal video trial
│   │   ├── LearnPage.vue       # Video.js + sidebar + tiến độ
│   │   ├── MyCoursesPage.vue
│   │   ├── CartPage.vue
│   │   ├── CheckoutPage.vue
│   │   ├── PaymentResultPage.vue
│   │   └── ProfilePage.vue     # FwbTabs: thông tin / đơn hàng / đổi mật khẩu
│   └── auth/
│       ├── AdminLoginPage.vue
│       ├── LoginPage.vue
│       └── RegisterPage.vue
│
├── plugins/
│   └── axios.js                # Instance + request interceptor + response interceptor (401)
│
├── router/
│   └── index.js                # Routes + navigation guards + NProgress
│
├── stores/                     # Pinia stores
│   ├── adminAuth.js            # token, user | login() logout() fetchMe()
│   ├── studentAuth.js          # token, student | register() login() logout() fetchMe()
│   └── cart.js                 # items (persist localStorage) | addItem() removeItem() clear()
│
└── utils/
    ├── formatCurrency.js       # formatCurrency(150000) → "150.000 ₫"
    ├── formatDate.js           # formatDate, formatDatetime, timeAgo("3 giờ trước")
    └── formatDuration.js       # formatDuration(125) → "2 giờ 5 phút"
```

---

## 🔀 Routing & Phân quyền

```
/ ──────────────────────── ClientLayout (public)
│   ├── /                  HomePage
│   ├── /courses           CoursesPage
│   ├── /courses/:slug     CourseDetailPage
│   ├── /posts             PostsPage
│   ├── /my-courses   🔒   MyCoursesPage        (studentToken)
│   ├── /courses/:slug/learn 🔒 LearnPage       (studentToken)
│   ├── /cart          🔒  CartPage             (studentToken)
│   ├── /checkout      🔒  CheckoutPage         (studentToken)
│   ├── /payment/result    PaymentResultPage
│   └── /profile       🔒  ProfilePage          (studentToken)
│
/admin ──────────────────── AdminLayout
│   ├── /admin/login  👤   AdminLoginPage       (guest only)
│   ├── /admin/dashboard 🔒 DashboardPage       (adminToken)
│   ├── /admin/courses 🔒  CoursesPage          (adminToken)
│   └── ... (tất cả /admin/* đều cần adminToken)
│
/403 ─────────────────────── ForbiddenPage
/:pathMatch(.*)*  ──────────  NotFoundPage
```

**Guard logic:**
- Route có `meta.requiresAuth + guard: 'admin'` → kiểm tra `localStorage.adminToken`
- Route có `meta.requiresAuth + guard: 'student'` → kiểm tra `localStorage.studentToken`
- Route có `meta.requiresGuest` → nếu đã có token thì redirect về trang chính

---

## 🔌 Kết nối API

### Cấu hình Vite Proxy

```js
// vite.config.js
server: {
  proxy: {
    '/api': { target: 'http://localhost:8000', changeOrigin: true }
  }
}
```

### Axios Interceptor

```
Request  → tự gắn Authorization: Bearer {token}
           (adminToken nếu URL bắt đầu /admin/*, ngược lại studentToken)

Response → nếu 401: xoá token + redirect về trang login tương ứng
```

### Các API Endpoint chính

| Module | Method | Endpoint | Auth |
|--------|--------|----------|------|
| Auth Admin | POST | `/api/v1/admin/auth/login` | — |
| Auth Student | POST | `/api/v1/auth/register` | — |
| Auth Student | POST | `/api/v1/auth/login` | — |
| Courses | GET | `/api/v1/courses` | — |
| Course Detail | GET | `/api/v1/courses/:slug` | — |
| Lessons | GET | `/api/v1/courses/:slug/lessons` | Student |
| Progress | POST | `/api/v1/lessons/:id/progress` | Student |
| Cart | GET | `/api/v1/cart` | Student |
| Orders | POST | `/api/v1/orders` | Student |
| Payment VNPAY | POST | `/api/v1/payment/vnpay` | Student |
| Payment MoMo | POST | `/api/v1/payment/momo` | Student |
| Dashboard | GET | `/api/v1/admin/dashboard/stats` | Admin |

---

## 🎨 Design System

### Màu sắc chủ đạo

```js
// tailwind.config.js
colors: {
  primary: {
    50:  '#eff6ff',
    100: '#dbeafe',
    500: '#3b82f6',
    600: '#2563eb',   // màu chính — nút, link, active
    700: '#1d4ed8',
  }
}
```

### CSS Utility Classes tái sử dụng

```css
.btn-primary    /* Nút chính — bg primary-600 */
.btn-secondary  /* Nút phụ — bg gray-200 */
.btn-danger     /* Nút xoá — bg red-600 */
.input-field    /* Input chuẩn — border + focus ring */
.input-error    /* Input lỗi — border đỏ */
.error-msg      /* Text lỗi validation */
.card           /* Card trắng — shadow + rounded */
```

### Icon System

Toàn bộ icon dùng **lucide-vue-next**. Không dùng FontAwesome hay icon khác.

```js
import { Mail, Lock, Eye, EyeOff, BookOpen, Users, LayoutDashboard,
         PlayCircle, Tag, UserCheck, ShoppingBag, Ticket, Shield,
         Trash2, ShoppingCart, CheckCircle, XCircle, ChevronLeft,
         ChevronRight, ArrowLeft, ArrowRight, LogOut, Menu } from 'lucide-vue-next'
```

---

## 📦 Scripts

```bash
npm run dev        # Khởi chạy dev server tại localhost:5173
npm run build      # Build production vào thư mục dist/
npm run preview    # Preview bản build production
npm run lint       # ESLint kiểm tra code
npm run format     # Prettier format code
```

---

## 🔒 Lưu ý bảo mật

- Token lưu trong `localStorage` — **không** dùng cookie
- `adminToken` và `studentToken` là 2 key riêng biệt
- Axios interceptor tự xoá token và redirect khi nhận lỗi `401`
- File `.env` đã có trong `.gitignore` — chỉ commit `.env.example`
- Không hardcode URL backend trong code — luôn dùng `import.meta.env.VITE_API_URL`

---

## 🔧 VNPAY / MoMo — Test local

Khi backend webhook cần callback từ cổng thanh toán, phải expose port ra ngoài:

```bash
# Cài ngrok
npm install -g ngrok

# Expose backend port 8000
ngrok http 8000

# Copy URL ngrok (vd: https://abc123.ngrok.io) → cấu hình vào .env backend
VNPAY_RETURN_URL=https://abc123.ngrok.io/api/v1/payment/vnpay/callback
MOMO_RETURN_URL=https://abc123.ngrok.io/api/v1/payment/momo/callback
```

---

## 📅 Tiến độ phát triển

| Phase | Nội dung | Sprint | Trạng thái |
|-------|---------|--------|------------|
| F0 | Setup Vue project + Axios + Pinia + Router + Layouts | 15/03 | ⬜ |
| F1 | Auth UI (Admin Login, Student Register/Login) | Sprint 1 (22/03–07/04) | ⬜ |
| F2 | Nội dung (Categories, Teachers, Courses, Lessons, LearnPage) | Sprint 1–2 | ⬜ |
| F3 | Thương mại (Cart, Checkout, Payment, MyCourses, Profile) | Sprint 2–3 | ⬜ |
| F4 | Nâng cao (Quiz Admin, Quiz Client, Dashboard ApexCharts) | Sprint 3 | ⬜ |
| — | Testing, Fix bug, Responsive check | 14/05 | ⬜ |

---

## 👤 Tác giả

**Phan Văn Thành**  
📧 phvanthanh06@gmail.com  
📱 0327461459  
🎓 Sinh viên năm 4 — Khoa Khoa học Máy tính, Đại học Duy Tân

---

## 📄 License

Dự án phát hành theo giấy phép [MIT](LICENSE).

Được thực hiện với mục đích học thuật — Đồ án tốt nghiệp Đại học Duy Tân, 2026.
