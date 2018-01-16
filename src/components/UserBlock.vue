<template>
  <div class="user-block">
    <img class="img-circle img-bordered-sm" :src="image" :alt="imageAlt">
        <span class="username">
          <a href="#">{{ username }}</a>
        </span>
    <span class="description">{{ description }}</span>
  </div>
</template>
<script>
export default {
  name: 'dashboard-user-block',
  props: {
    image: String,
    imageAlt: String,
    username: String,
    description: String
  }
}
</script>