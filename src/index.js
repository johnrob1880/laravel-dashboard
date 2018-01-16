const NotificationStore = {
  state: [],
  removeNotification (id) {
    var notification = this.state.filter(a => {
      return a.Id === id
    })
    if (!notification) {
      return;
    }
    var idx = this.state.indexOf(notification);
    this.state.splice(idx, 1)
  },
  notify (notification) {
    this.state.push(notification)
  }
}

const MessageStore = {
  state: [],
  removeMessage (id) {

  },
  compose (message) {
    this.state.push(message)
  }  
}

const TaskStore = {
  state: [],
  removeMessage (id) {

  },
  create (task) {
    this.state.push(task)
  }  
}

var DashboardPlugin = {

  install (Vue) {
    
    Vue.component('dashboard-app-button', require('./AppButton.vue'))
    Vue.component('dashboard-box', require('./Box.vue'))
    Vue.component('dashboard-description-block', require('./DescriptionBlock.vue'))
    Vue.component('dashboard-expand-box', require('./ExpandBox.vue'))
    Vue.component('dashboard-info-box', require('./InfoBox.vue'))
    Vue.component('dashboard-info-box-progress', require('./InfoBoxProgress.vue'))
    Vue.component('dashboard-padding', require('./Padding.vue'))
    Vue.component('dashboard-product-list', require('./ProductList.vue'))
    Vue.component('dashboard-spark-line', require('./SparkLine.vue'))
    Vue.component('dashboard-stat-box', require('./StatBox.vue'))
    Vue.component('dashboard-user-block', require('./UserBlock.vue'))
    Vue.component('dashboard-users-list', require('./UsersList.vue'))
    Vue.component('dashboard-user-widget', require('./UserWidget.vue'))
    Vue.component('dashboard-user-widget-alt', require('./UserWidgetAlt.vue'))

    Object.defineProperty(Vue.prototype, '$dashboard', {
      get () {
        return {
          'notifications': NotificationStore,
          'messages': MessageStore,
          'tasks': TaskStore
        }
      }
    })

  }
}

export default DashboardPlugin
