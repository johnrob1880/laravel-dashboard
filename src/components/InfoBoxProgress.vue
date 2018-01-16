<template>
  <div :class="getClassnames">
    <span class="info-box-icon"><i :class="icon"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">{{ label }}</span>
      <span class="info-box-number">{{ metric }}</span>

      <div class="progress">
        <div class="progress-bar" :style="getProgressStyle"></div>
      </div>
      <span class="progress-description">
        {{ progressLabel }}
      </span>
          
    </div>
  </div>
</template>
<script>
  export default {
    name: 'dashboard-info-progress',
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
      },
      progress: Number,
      progressLabel: String
    },
    computed: {
      getClassnames () {
        return `info-box bg-${this.color}`
      },
      getProgressStyle () {
        return { 'width' : this.progress.toString() + '%' }
      }
    }
  }
</script>