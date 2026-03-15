<template>
  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-slate-800 flex flex-col shrink-0 transition-all duration-300">
      <div class="p-4 text-white font-semibold text-lg border-b border-slate-700 flex items-center gap-2">
        <BookOpen class="w-6 h-6 text-primary-500" />
        E-Learning Admin
      </div>
      <nav class="flex-1 py-4 overflow-y-auto custom-scrollbar">
        <router-link
          v-for="item in navItems"
          :key="item.path"
          :to="item.path"
          class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors text-sm"
          active-class="bg-slate-700 text-white border-l-4 border-primary-500"
        >
          <component :is="item.icon" class="w-5 h-5" />
          {{ item.label }}
        </router-link>
      </nav>
    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="h-16 bg-white border-b flex items-center justify-between px-6 shrink-0 shadow-sm">
        <div class="flex items-center gap-4">
          <button class="text-gray-500 hover:text-gray-700 lg:hidden focus:outline-none">
            <Menu class="w-6 h-6" />
          </button>
          <h1 class="text-lg font-medium text-gray-800">{{ currentRouteName }}</h1>
        </div>
        <div class="flex items-center gap-5">
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-700 flex items-center justify-center font-bold text-sm">
              {{ adminStore.user?.name?.charAt(0).toUpperCase() || 'A' }}
            </div>
            <span class="text-sm font-medium text-gray-700 hidden sm:block">{{ adminStore.user?.name || 'Administrator' }}</span>
          </div>
          <div class="h-6 w-px bg-gray-200"></div>
          <button @click="handleLogout" class="text-gray-500 hover:text-red-600 transition-colors focus:outline-none flex items-center gap-1" title="Đăng xuất">
            <LogOut class="w-5 h-5" />
          </button>
        </div>
      </header>
      <!-- Content -->
      <main class="flex-1 overflow-auto p-6 bg-gray-100">
        <router-view />
      </main>
    </div>
  </div>
</template>

<script>
import { computed } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import { useAdminAuthStore } from '@/stores/adminAuth'
import { useToast } from 'vue-toastification'
import { 
  LayoutDashboard, BookOpen, PlayCircle, Tag, UserCheck, 
  Users, ShoppingBag, Ticket, Shield, Newspaper, Menu, LogOut 
} from 'lucide-vue-next'

export default {
  components: {
    LayoutDashboard, BookOpen, PlayCircle, Tag, UserCheck,
    Users, ShoppingBag, Ticket, Shield, Newspaper, Menu, LogOut
  },
  setup() {
    const adminStore = useAdminAuthStore()
    const router = useRouter()
    const route = useRoute()
    const toast = useToast()

    const navItems = [
      { path: '/admin/dashboard', label: 'Dashboard', icon: 'LayoutDashboard' },
      { path: '/admin/courses', label: 'Khóa học', icon: 'BookOpen' },
      { path: '/admin/lessons', label: 'Bài giảng', icon: 'PlayCircle' },
      { path: '/admin/categories', label: 'Danh mục', icon: 'Tag' },
      { path: '/admin/teachers', label: 'Giảng viên', icon: 'UserCheck' },
      { path: '/admin/students', label: 'Học viên', icon: 'Users' },
      { path: '/admin/orders', label: 'Đơn hàng', icon: 'ShoppingBag' },
      { path: '/admin/coupons', label: 'Mã giảm giá', icon: 'Ticket' },
      { path: '/admin/users', label: 'Người dùng', icon: 'Shield' },
      { path: '/admin/posts', label: 'Tin tức', icon: 'Newspaper' },
    ]

    const handleLogout = async () => {
      await adminStore.logout()
      toast.info('Đã đăng xuất khỏi quản trị viên')
      router.push('/admin/login')
    }

    const currentRouteName = computed(() => {
      const match = navItems.find(item => route.path.startsWith(item.path))
      return match ? match.label : 'Bảng điều khiển'
    })

    return { adminStore, handleLogout, navItems, currentRouteName }
  }
}
</script>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
  width: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
  background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
  background-color: #475569;
  border-radius: 20px;
}
</style>
