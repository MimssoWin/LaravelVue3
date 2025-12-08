import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue'
import NavMenu from './components/Menu.vue'
import HomeProducts from './components/Home/HomeProducts.vue'

// NavMenu만 마운트
createApp(NavMenu).mount('#nav-menu-root')

// HomeProducts만 마운트
createApp(HomeProducts).mount('#home-products')
