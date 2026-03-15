# 📋 QUẢN LÝ CÔNG VIỆC — E-Learning Frontend
> Cập nhật lần cuối: 15/03/2026
> Stack: Vue.js 3 + Vite + Tailwind CSS + Pinia + Vue Router 4 + Axios
> Admin UI: TailAdmin Vue | Client UI: Flowbite Vue | Icons: lucide-vue-next

---

## PHẦN A — PROMPT DÙNG VỚI CLAUDE TRONG VSCODE

### 🔁 Prompt dùng MỖI KHI bắt đầu làm việc (buổi sáng / mở VSCode)

```
Tôi đang làm đồ án tốt nghiệp: E-Learning Marketplace Frontend
Backend: Laravel 12 API tại http://localhost:8000 (CORS đã cho phép localhost:5173)

Stack Frontend:
- Vue 3 + Vite, Vue Router 4, Pinia
- Tailwind CSS v3
- Axios (baseURL: '/api/v1', proxy Vite → localhost:8000)
- lucide-vue-next (icons xuyên suốt)
- flowbite-vue + flowbite (UI Client)
- TailAdmin Vue (Admin layout — clone, không install package)
- vee-validate + zod + @vee-validate/zod (form validation)
- vue-toastification (toast, top-right, 3000ms)
- nprogress (loading bar router)
- @vueuse/core (useDebounce, useLocalStorage...)
- @videojs-player/vue + video.js (LearnPage)
- vue3-carousel (featured courses)
- vue3-apexcharts + apexcharts (Dashboard charts)

Stores Pinia: adminAuth.js | studentAuth.js | cart.js
API modules: authApi | courseApi | lessonApi | orderApi | uploadApi | paymentApi | progressApi | quizApi | dashboardApi
Utils: formatCurrency.js | formatDate.js | formatDuration.js

Tiến độ hiện tại:
[ ] PHASE F0 — Setup Vue project
    [ ] F0.1 — Tạo project Vite + Vue 3 + cài toàn bộ dependencies
    [ ] F0.2 — Axios instance + interceptors (token + 401 redirect)
    [ ] F0.3 — Pinia stores + Vue Router + route guards + NProgress
    [ ] F0.4 — AdminLayout.vue (TailAdmin style) + ClientLayout.vue (Flowbite)

[ ] PHASE F1 — Auth UI
    [ ] F1.1 — AdminLoginPage (TailAdmin style + VeeValidate + Lucide)
    [ ] F1.2 — RegisterPage + LoginPage Student (VeeValidate+Zod + toast)
    [ ] F1.3 — Route guards (adminToken / studentToken)

[ ] PHASE F2 — Nội dung UI
    [ ] F2.1 — Admin: Trang quản lý Categories (DataTable + CRUD modal)
    [ ] F2.2 — Admin: Trang quản lý Teachers (DataTable + CRUD modal)
    [ ] F2.3 — Admin: Trang quản lý Courses (CRUD + Cloudinary upload)
    [ ] F2.4 — Client: Trang danh sách Courses (CourseCard + filter + useDebounce)
    [ ] F2.5 — Client: Trang chi tiết Course (FwbAccordion + FwbModal video trial)
    [ ] F2.6 — Admin: Trang quản lý Lessons (DataTable + upload video/doc)
    [ ] F2.7 — Client: LearnPage (Video.js + sidebar + FwbProgress + progressApi)

[ ] PHASE F3 — Thương mại UI
    [ ] F3.1 — CartPage (Trash2 lucide) + CheckoutPage (VNPAY/MoMo)
    [ ] F3.2 — PaymentResultPage (CheckCircle/XCircle lucide)
    [ ] F3.3 — MyCoursesPage (CourseCard + FwbProgress % hoàn thành)
    [ ] F3.4 — ProfilePage (FwbTabs: thông tin / đơn hàng / đổi mật khẩu)

[ ] PHASE F4 — Nâng cao UI
    [ ] F4.1 — Video.js + sidebar toggle + progressApi debounce (gộp F2.7)
    [ ] F4.2 — Admin: QuizPage (upload PDF + hiển thị câu hỏi từ AI)
    [ ] F4.3 — Client: QuizPage (làm quiz sau bài giảng — radio + submit)
    [ ] F4.4 — Admin: Dashboard (ApexCharts + StatCard)

Hôm nay tôi muốn làm: [ĐIỀN VÀO ĐÂY]
Hãy: 1. Nhắc lại context task. 2. Bắt đầu thực hiện luôn.
```

---

### ✅ Prompt báo cáo hoàn thành task

```
Tôi vừa hoàn thành task Frontend: [TÊN TASK]

Kết quả:
- [Mô tả ngắn những gì đã làm]
- [Vấn đề gặp phải nếu có]

Task tiếp theo: [TÊN TASK TIẾP THEO]
Hãy bắt đầu task đó cho tôi.
```

---

### 🐛 Prompt khi gặp lỗi

```
Stack: Vue 3 + Vite + Tailwind + Pinia + Vue Router + Axios
Task đang làm: [TÊN TASK]
Lỗi:

[PASTE TOÀN BỘ ERROR MESSAGE]

File liên quan: [tên file nếu biết]
Đã thử: [những gì đã thử nếu có]

Phân tích lỗi và đưa ra cách fix cụ thể.
```

---

### 🔍 Prompt review component trước khi sang task mới

```
Tôi vừa xong: [TÊN COMPONENT / TASK]
Stack: Vue 3, Tailwind, Pinia, lucide-vue-next, flowbite-vue, VeeValidate+Zod

Hãy review nhanh và cho biết:
1. UX/UI có hợp lý không?
2. Validate form có đủ không?
3. Xử lý loading/error state có ổn không?
4. Có component nào nên tách thêm không?

[PASTE CODE CẦN REVIEW]
```

---

### 📊 Prompt kiểm tra tiến độ cuối ngày

```
Hôm nay tôi hoàn thành các task Frontend:
- [task 1]
- [task 2]

Lộ trình sprint:
- Setup FE F0: 15/03/2026 (hôm nay)
- Sprint 1 (22/03 – 07/04): F1 + F2 một phần
- Sprint 2 (08/04 – 25/04): F2 hoàn tất
- Sprint 3 (26/04 – 13/05): F3 + F4
- Testing & Fix: 14/05 | Deadline: 15/05

Hãy: 1. Tính % hoàn thành. 2. Nhận xét tiến độ. 3. Gợi ý task ngày mai.
```

---

### ⚡ Prompt hỏi nhanh

```
FE: Vue 3, Pinia, Vue Router 4, Tailwind, Axios, Lucide, Flowbite Vue, VeeValidate+Zod
Task: [TÊN TASK]
Hỏi: [CÂU HỎI]
```

---

## PHẦN B — TODO CHECKLIST

> Tick tay sau khi hoàn thành mỗi task. Ghi ngày thực tế vào cột "Hoàn thành".

---

### 🟢 PHASE F0 — Setup Frontend (LÀM NGAY 15/03/2026)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| F0.1 | Tạo project Vite+Vue3 + cài toàn bộ deps (Tailwind, Axios, Lucide, Flowbite, VeeValidate+Zod, Video.js, vue-toastification, nprogress, @vueuse/core, vue3-carousel) | ⬜ Todo | |
| F0.2 | Axios instance (baseURL /api/v1) + interceptor request (adminToken/studentToken) + interceptor response (401 clear + redirect) | ⬜ Todo | |
| F0.3 | Pinia: adminAuth.js + studentAuth.js + cart.js — Vue Router 4 (history mode + lazy loading + route guards) — NProgress beforeEach/afterEach | ⬜ Todo | |
| F0.4 | AdminLayout.vue (sidebar TailAdmin style, 250px, bg-slate-800, lucide icons, hamburger mobile) + ClientLayout.vue (Flowbite navbar + footer) | ⬜ Todo | |

---

### 🔵 PHASE F1 — Auth UI (~2 ngày | 22/03 – 24/03)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| F1.1 | AdminLoginPage.vue — layout chia đôi, form VeeValidate+Zod, icons Mail/Lock/Eye/EyeOff, loading spinner, error 401, redirect /admin/dashboard | ⬜ Todo | |
| F1.2 | RegisterPage.vue — form VeeValidate+Zod (name/email/password/confirm), icons User/Mail/Lock/Eye/EyeOff, toast success | ⬜ Todo | |
| F1.3 | LoginPage.vue Student — VeeValidate+Zod, redirect sau login, link quên mật khẩu | ⬜ Todo | |
| F1.4 | Route guards hoàn chỉnh — /admin/* kiểm tra adminToken, /my-courses /cart /profile kiểm tra studentToken, redirect /403 sai role | ⬜ Todo | |

---

### 🟣 PHASE F2 — Nội dung UI (~7 ngày | 25/03 – 07/04)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| F2.1 | Admin CategoriesPage.vue — DataTable, CRUD modal (nested set), search, pagination | ⬜ Todo | |
| F2.2 | Admin TeachersPage.vue — DataTable, CRUD modal (tên/bio/avatar), search, pagination | ⬜ Todo | |
| F2.3 | Admin CoursesPage.vue — DataTable danh sách, CourseFormPage upload thumbnail (Cloudinary), chọn teacher/category, price/sale_price | ⬜ Todo | |
| F2.4 | Client CoursesPage.vue — grid CourseCard (thumbnail/badge/rating/price), filter search debounce 500ms, sort FwbDropdown, skeleton loading, AppPagination | ⬜ Todo | |
| F2.5 | Client CourseDetailPage.vue — layout 2 cột, FwbAccordion danh sách bài, FwbModal video trial, sticky card mua hàng, FwbTooltip, breadcrumb | ⬜ Todo | |
| F2.6 | Admin LessonsPage.vue — DataTable, upload video+doc, reorder drag, toggle publish | ⬜ Todo | |
| F2.7 | Client LearnPage.vue — VideoPlayer Video.js (70%) + sidebar toggle (30%), FwbProgress % hoàn thành, onTimeUpdate debounce 5s → progressApi, nút bài trước/tiếp | ⬜ Todo | |

---

### 🟡 PHASE F3 — Thương mại UI (~4 ngày | 08/04 – 14/04)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| F3.1 | CartPage.vue — bảng items (Trash2 lucide xóa), empty state (ShoppingCart icon), coupon input + POST apply-coupon, tổng tiền có discount | ⬜ Todo | |
| F3.2 | CheckoutPage.vue — xác nhận đơn + chọn VNPAY/MoMo + free enroll, redirect payment_url | ⬜ Todo | |
| F3.3 | PaymentResultPage.vue — query ?status=success|failed, CheckCircle/XCircle lucide, nút CTA tương ứng | ⬜ Todo | |
| F3.4 | MyCoursesPage.vue — grid CourseCard + FwbProgress % hoàn thành, click → LearnPage | ⬜ Todo | |
| F3.5 | ProfilePage.vue — FwbTabs (thông tin cá nhân / lịch sử đơn hàng FwbBadge / đổi mật khẩu) | ⬜ Todo | |

---

### 🔴 PHASE F4 — Nâng cao UI (~4 ngày | 15/04 – 20/04)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| F4.1 | Admin QuizPage.vue — upload PDF → POST generate-quiz → hiển thị câu hỏi từ AI, cho phép sửa trước khi lưu | ⬜ Todo | |
| F4.2 | Client QuizPage.vue — làm quiz sau bài giảng (radio options + submit + hiện kết quả) | ⬜ Todo | |
| F4.3 | Admin DashboardPage.vue — 4 StatCard (Students/Courses/Revenue/Orders), ApexCharts area doanh thu theo tháng, bảng top 5 khóa học | ⬜ Todo | |

---

### 🔧 GIAI ĐOẠN CUỐI (14/05 – 15/05)

| # | Task | Trạng thái | Hoàn thành |
|---|------|-----------|------------|
| E1 | Test toàn bộ luồng: register → login → mua khóa → xem bài → làm quiz | ⬜ Todo | |
| E2 | Test responsive trên mobile/tablet | ⬜ Todo | |
| E3 | Fix bug UI/UX từ testing | ⬜ Todo | |
| E4 | Kiểm tra loading state & empty state tất cả trang | ⬜ Todo | |
| E5 | Nộp báo cáo | ⬜ Todo | |

---

## 📊 Tổng tiến độ

| Phase | Tổng task | Hoàn thành | % |
|-------|-----------|------------|---|
| Phase F0 — Setup | 4 | 0 | 0% |
| Phase F1 — Auth UI | 4 | 0 | 0% |
| Phase F2 — Nội dung UI | 7 | 0 | 0% |
| Phase F3 — Thương mại UI | 5 | 0 | 0% |
| Phase F4 — Nâng cao UI | 3 | 0 | 0% |
| Giai đoạn cuối | 5 | 0 | 0% |
| **Tổng** | **28** | **0** | **0%** |

---

## 📅 Mốc thời gian

| Mốc | Ngày | Ghi chú |
|-----|------|---------|
| Bắt đầu setup FE | 15/03/2026 | Phase F0 — hôm nay |
| Sprint 1 bắt đầu | 22/03/2026 | F1 + F2 song song BE Phase 1+2 |
| Sprint 1 kết thúc | 07/04/2026 | Xong F1 + F2 một phần |
| Sprint 2 kết thúc | 25/04/2026 | F2 hoàn tất |
| Sprint 3 kết thúc | 13/05/2026 | F3 + F4 xong |
| Testing & Fix | 14/05/2026 | |
| **Deadline nộp** | **15/05/2026** | |

---

## 🗂️ Cấu trúc thư mục dự án

```
src/
├── api/
│   ├── authApi.js          ← adminLogin, adminMe, studentRegister, studentLogin, forgotPassword...
│   ├── courseApi.js        ← getList, getBySlug, getLessons
│   ├── lessonApi.js        ← getById, reorder
│   ├── orderApi.js         ← getCart, applyCoupon, createOrder, getMyOrders
│   ├── paymentApi.js       ← createVnpay, createMomo
│   ├── progressApi.js      ← update(lessonId, data), getCourseProgress(slug)
│   ├── quizApi.js          ← generate, getByLesson, submitAnswer
│   ├── uploadApi.js        ← uploadVideo, uploadDocument, uploadImage
│   └── dashboardApi.js     ← getStats, getRevenue, getTopCourses
│
├── components/
│   ├── common/
│   │   ├── AppButton.vue
│   │   ├── AppInput.vue
│   │   ├── AppModal.vue
│   │   ├── AppPagination.vue
│   │   ├── AppSkeleton.vue
│   │   └── AppAlert.vue
│   ├── admin/
│   │   ├── DataTable.vue
│   │   ├── FormCard.vue
│   │   └── StatCard.vue
│   └── client/
│       ├── CourseCard.vue
│       ├── VideoPlayer.vue
│       └── LessonSidebar.vue
│
├── layouts/
│   ├── AdminLayout.vue     ← sidebar TailAdmin, header, router-view
│   └── ClientLayout.vue   ← Flowbite navbar, router-view, footer
│
├── pages/
│   ├── admin/
│   │   ├── DashboardPage.vue
│   │   ├── CoursesPage.vue
│   │   ├── CourseFormPage.vue
│   │   ├── LessonsPage.vue
│   │   ├── CategoriesPage.vue
│   │   ├── TeachersPage.vue
│   │   ├── StudentsPage.vue
│   │   ├── OrdersPage.vue
│   │   ├── CouponsPage.vue
│   │   └── UsersPage.vue
│   ├── client/
│   │   ├── HomePage.vue
│   │   ├── CoursesPage.vue
│   │   ├── CourseDetailPage.vue
│   │   ├── LearnPage.vue
│   │   ├── MyCoursesPage.vue
│   │   ├── CartPage.vue
│   │   ├── CheckoutPage.vue
│   │   ├── PaymentResultPage.vue
│   │   └── ProfilePage.vue
│   └── auth/
│       ├── AdminLoginPage.vue
│       ├── LoginPage.vue
│       └── RegisterPage.vue
│
├── plugins/
│   ├── axios.js            ← instance + interceptors
│   └── nprogress.js
│
├── router/
│   └── index.js            ← guards + lazy loading
│
├── stores/
│   ├── adminAuth.js        ← token, user, login(), logout(), fetchMe()
│   ├── studentAuth.js      ← token, student, register(), login(), logout(), fetchMe()
│   └── cart.js             ← items (localStorage), addItem(), removeItem(), clear()
│
└── utils/
    ├── formatCurrency.js   ← Intl vi-VN VND
    ├── formatDate.js
    └── formatDuration.js
```

---

## ⚙️ Biến môi trường

```env
# .env.local
VITE_API_URL=http://localhost:8000/api/v1
```

```js
// vite.config.js — proxy
server: {
  proxy: {
    '/api': 'http://localhost:8000'
  }
}
// → Axios dùng baseURL: '/api/v1' (không hardcode localhost)
```

---

## 🎨 CSS Utility Classes (main.css)

```css
@layer components {
  .btn-primary   { @apply bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition disabled:opacity-50; }
  .btn-secondary { @apply bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition; }
  .btn-danger    { @apply bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition; }
  .input-field   { @apply w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500; }
  .input-error   { @apply border-red-500 focus:ring-red-500; }
  .error-msg     { @apply text-sm text-red-600 mt-1; }
  .card          { @apply bg-white rounded-xl shadow-sm border border-gray-100 p-6; }
}
```

---

*Cập nhật lần cuối: 15/03/2026 — Backend Phase 0 ✅ (10/10) | Frontend Phase F0 ⬜ (0/4)*