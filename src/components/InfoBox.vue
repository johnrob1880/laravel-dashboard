<template>
  <div class="info-box">
    <span :class="getClassnames"><i :class="icon"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">{{ label }}</span>
      <span class="info-box-number">{{ metric }}</span>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'dashboard-info-box',
    props: {
      color: {
        type: String,
        default: 'aqua'
      },
      icon: {
        type: String,
        default: 'fa fa-envelope-o'
      },
      label: {
        type: String,
        default: 'Messages'
      },
      metric: {
        string: String,
        default: '1,140'
      }
    },
    computed: {
      getClassnames () {
        return `info-box-icon bg-${this.color}`
      }
    }
  }
</script>