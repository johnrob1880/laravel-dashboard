<template>
<div :class="{ 'description-block': true, 'border-right': bordered }">
  <span :class="descriptionClassnames"><i :class="caretClassnames"></i> {{ pct }}%</span>
  <h5 class="description-header">{{ header }}</h5>
  <span class="description-text">{{ text }}</span>
</div>
</template>
<script>
export default {
  name: 'dashboard-description-block',
  props: {
    header: {
      type: String,
      default: '$0.00'
    },
    text: {
      type: String,
      default: 'TOTAL REVENUE'
    },
    percent: {
      type: Number,
      default: 0
    },
    bordered: {
      type: Boolean,
      default: true
    }
  },
  computed: {
    pct () {
      return Math.abs(this.percent)
    },
    descriptionClassnames () {
      let color = 'yellow'
      if (this.percent > 0) {
        color = 'green'
      }
      if (this.percent < 0) {
        color = 'red'
      }
      return `description-percentage text-${color}`
    },
    caretClassnames () {
      let caret = 'left'
      if (this.percent > 0) {
        caret = 'up'
      }
      if (this.percent < 0) {
        caret = 'down'
      }

      return `fa fa-caret-${caret}`
    }
  }
}
</script>
