<template>
  <div id="app">
    <dashboard-expand-box>
      {{ message }}
    </dashboard-expand-box>
  </div>
</template>
<script>
let ExpandBox = require('./ExpandBox')

export default {
  name: 'dashboard-app',
  components: {
    'dashboard-expand-box': ExpandBox
  },
  data () {
    return {
      message: "Hello Dashboard!"
    }
  }
}
</script>
