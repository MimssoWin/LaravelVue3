<template>
    <nav class="NavMenu">
    <a v-for="menu in menuList" :href="menu.url" :key="menu.id">
    {{ menu.label }}
    </a>
</nav>
</template>

<script>
    import axios from 'axios'


    export default {
        name : 'NavMenu',
        data() {
            return {
                menuList: []
            }
        },
        async mounted() {
            try {
                const res = await axios.get('/api/menus')
                if (res.data.status === 'success') {
                    this.menuList = res.data.data
                }
            } catch (e) {
                console.error('메뉴 불러오기 실패', e)
            }
        }

    }
</script>

<style>
    .NavMenu{
        background: darkslateblue;
        padding : 15px;
        border-radius : 5px;
    }

    .NavMenu a{
        color : white;
        padding : 10px;
    }
</style>


