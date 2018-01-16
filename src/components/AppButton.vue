<template>
  <a :class="getTheme" @click="click">
    <span v-if="metric" :class="getBadgeTheme">{{ metric }}</span>
    <i :class="icon"></i> {{ label }}
  </a>
</template>
<script>
export default {
  name: 'dashboard-app-button',
  props: {
    theme: {
      type: String,
      default: 'default'
    },
    badgeTheme: {
      type: String,
      default: 'yellow'
    },
    metric: {
      type: String,
      default: '0'
    },
    icon: {
      type: String,
      default: 'fa fa-bullhorn'
    },
    label: {
      type: String,
      default: 'Notifications'
    }
  },
  computed: {
    getTheme () {
      return `btn btn-app bg-${this.theme}`
    },
    getBadgeTheme () {
      return `badge bg-${this.badgeTheme}`
    }
  },
  methods: {
    click () {
      this.$emit('click')
    }
  }
}
</script>