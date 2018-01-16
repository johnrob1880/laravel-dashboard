<template>
  <div class="box box-widget widget-user-2">
    <div :class="getTheme">
      <div class="widget-user-image">
        <img class="img-circle" :src="userImage" alt="User Avatar">
      </div>
      <h3 class="widget-user-username">{{ username }}</h3>
      <h5 class="widget-user-desc">{{ userDescription }}</h5>
    </div>
    <div class="box-footer no-padding">
      <slot></slot>
    </div>
  </div>
</template>
<script>
export default {
  name: 'dashboard-user-widget',
  props: {
    theme: {
      type: String,
      default: 'yellow'
    },
    username: {
      type: String,
      default: 'John Doe'
    },
    userDescription: {
      type: String,
      default: 'Developer'
    },
    userImage: {
      type: String,
      default: 'bower_components/admin-lte/dist/img/avatar.png'
    }
  },
  computed: {
    getTheme () {
      return `widget-user-header bg-${this.theme}`
    }
  }
}
</script>