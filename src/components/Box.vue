<template>
  <div :class="boxClassnames">
    <div :class="headerClassnames">
      <h3 class="box-title">{{ title }}</h3>
      <div class="box-tools pull-right">
        <slot name="tools"></slot>
      </div>
    </div>
    <div class="box-body">
      <slot></slot>
    </div>
    <div v-if="loading" class="overlay text-success">
      <i ref="loader" class="fa fa-refresh fa-spin"></i>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'dashboard-box',
    props: {      
      theme: {
        type: String,
        default: ''
      },
      title: {
        type: String,
        default: 'Box'
      },
      solid: {
        type: Boolean,
        default: true
      },
      loading: {
        type: Boolean,
        default: false
      }
    },
    computed: {
      boxClassnames () {
        return `box${this.solid ? ' box-solid' : ''}`
      },
      headerClassnames () {
        return `box-header with-border${this.theme && ' bg-' + this.theme || ''}`
      }
    }
  }
</script>