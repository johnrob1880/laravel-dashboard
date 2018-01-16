<template>
  <span ref="sparkline" :values="values"></span>
</template>
<script>
export default {
  name: 'dashboard-spark-line',
  props: {
    type: {
      type: String,
      default: 'line'
    },
    barColor: {
      type: String,
      default: '#000'
    },
    width: {
      type: String,
      default: 'auto'
    },
    height: {
      type: String,
      default: 'auto'
    },
    values: {
      type: String,
      default: '1,1,1,1,1,1'
    }
  },
  methods: {
    bind () {
      $(this.$refs.sparkline).sparkline('html', {
        type: this.type, barColor: this.barColor, width: this.width, height: this.height
      });
    }
  },
  mounted () {
    this.bind()
  } 
}
</script>