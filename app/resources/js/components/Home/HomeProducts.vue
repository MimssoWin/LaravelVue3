<template>
  <div class="product-list">
    <div class="product-card" v-for="product in productList" :key="product.id">
      <img
        v-if="product.images.length"
        :src="product.images[0].full_url"
        alt="" class="room-img"
      />
      <h4>{{ product.product_name }}</h4>
      <p>{{ product.product_price }}원</p>
    </div>
  </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name : 'HomeProducts',
        data(){
            return {
                productList : []
            }
        },
        async mounted() {
            try {
                const res = await axios.get('/api/v1/home/products')
                if (res.data.status === 'success') {
                    this.productList = res.data.data
                }
            } catch (e) {
                console.error('제품 불러오기 실패', e)
            }
        }
    }
</script>

<style scoped>
.room-img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 10px;
    margin: 0 auto; /* 이미지 자체 가운데 */
}
.product-list {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.product-card h4 {
    margin: 12px 0 4px;
    font-size: 20px;
}

.product-card p {
    margin: 0;
    font-size: 16px;
}
</style>
