<template>
  <ul class="users-list clearfix">
    <li v-for="(user, key) in users" v-bind:key="key">
      <img :src="user.image" :alt="user.imageAlt">
      <a class="users-list-name" href="javascript: void(0)" @click="view(user.id)">{{ user.name }}</a>
      <span class="users-list-date">{{ user.caption }}</span>
    </li>
  </ul>
</template>
<script>
export default {
  name: 'dashboard-users-list',
  props: {
    users: {
      type: Array,
      default: []
    }
  },
  methods: {
    view (id) {
      this.$emit('onuserclicked', id)
    }
  }
}
</script>