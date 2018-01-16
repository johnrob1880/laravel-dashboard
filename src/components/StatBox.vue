<template>
  <div :class="getClassnames">
    <div class="inner">
      <h3>{{ metric }}</h3>

      <p>{{ label }}</p>
    </div>
    <div class="icon">
      <i :class="backgroundIcon"></i>
    </div>
    <a :href="link" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</template>
<script>
  export default {
    name: 'dashboard-stat-box',
    props: {
      color: {
        type: String,
        default: 'aqua'
      },
      metric: {
        type: String,
        default: '100'
      },
      label: {
        type: String,
        default: 'Widgets'
      },
      backgroundIcon: {
        type: String,
        default: 'ion ion-stats-bars'
      },
      link: {
        type: String,
        default: '#'
      }
    },
    computed: {
      getClassnames () {
        return `small-box bg-${this.color}`
      }
    }
  }
</script>