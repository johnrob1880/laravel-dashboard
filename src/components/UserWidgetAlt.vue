<template>
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div :class="getHeaderClassnames" :style="headerStyle">
      <h3 class="widget-user-username">{{ username }}</h3>
      <h5 class="widget-user-desc">{{ userDescription }}</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" :src="userImage" alt="User Avatar">
    </div>
    <div class="box-footer">
      <slot></slot>
    </div>
  </div>
</template>
<script>
export default {
  name: 'dashboard-user-widget-alt',
  props: {
    theme: {
      type: String,
      default: 'aqua'
    },
    username: {
      type: String,
      default: 'Jane Doe'
    },
    userDescription: {
      type: String,
      default: 'Developer'
    },
    userImage: {
      type: String,
      default: 'bower_components/admin-lte/dist/img/avatar2.png'
    },
    backgroundImage: String
  },
  computed: {
    getHeaderClassnames () {
      return `widget-user-header bg-${this.theme}-active`
    },
    headerStyle () {
      return {
        'background': this.backgroundImage ? `url('${this.backgroundImage}') center center` : 'none'
      }
    }
  }
}
</script>