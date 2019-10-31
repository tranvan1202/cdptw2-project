new Vue({
  data() {
    return {
      value: [0, 20]
    }
  },
  created() {
    this.min = 0
    this.max = 20
    this.enableCross = false
    this.tooltipMerge = false
    this.formatter = value => `$${value}`
  }
}).$mount('#app')
