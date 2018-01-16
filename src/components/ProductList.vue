<template>
<ul class="products-list product-list-in-box">
  <li class="item" v-for="product in products" :key="product.id">
    <div class="product-img">
      <img :src="product.image" :alt="product.imageAlt">
    </div>
    <div class="product-info">
      <a :href="product.link" class="product-title">{{ product.name }}
        <span class="label label-warning pull-right">{{ product.label }}</span></a>
      <span class="product-description">
            {{ product.description }}
          </span>
    </div>
  </li>
</ul>
</template>
<script>
export default {
  name: 'dashboard-product-list',
  props: {
    products: {
      type: Array,
      default: []
    }
  }
}
</script>