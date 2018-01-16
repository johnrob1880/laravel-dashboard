<template>
  <div :style="getStyle">
    <slot></slot>
  </div>
</template>
<script>
export default {
  name: 'dashboard-padding',
  props: {
    padding: {
      type: String,
      default: '0'
    }
  },
  computed: {
    getStyle () {
      return {
        'padding': this.padding
      }
    }
  }
}
</script>