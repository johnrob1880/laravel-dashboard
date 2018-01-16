<template>
  <div ref="box" :class="getClassnames">
    <div class="box-header with-border">
      <h3 class="box-title">{{ title }}</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i ref="toggle" class="fa fa-minus"></i>
        </button>
        <button v-if="removeable" type="button" class="btn btn-box-tool" data-widget="remove" @click="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body" style="">
      <slot></slot>
    </div>
    <div v-if="loading" class="overlay text-success">
      <i ref="loader" class="fa fa-refresh fa-spin"></i>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'dashboard-expand-box',
    props: {      
      theme: {
        type: String,
        default: 'default'
      },
      title: {
        type: String,
        default: 'Expandable'
      },
      collapsed: {
        type: Boolean,
        default: false
      },
      solid: {
        type: Boolean,
        default: false
      },
      loading: {
        type: Boolean,
        default: false
      },
      removeable: {
        type: Boolean,
        default: false
      }
    },
    methods: {
      remove () {
        this.$emit('onremove')
      }
    },
    computed: {
      getClassnames () {
        return `box box-${this.theme}`
      }
    },
    mounted () {
      if (this.collapsed) {
        this.$refs.box.className = `box box-${this.theme} collapsed-box`

        if (this.solid) {
          this.$refs.box.className = this.$refs.box.className + ' box-solid'
        }

        this.$refs.toggle.className = 'fa fa-plus'
      }
    }
  }
</script>