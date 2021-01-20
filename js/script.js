var app = new Vue(
  {
    el: "#wrapper",
    data: {
      title: false,
      counter: 5,
      timer: null
    },
    methods: {

    },
    mounted: function () {
      const self = this;
      self.timer = setInterval(function() {
        if(self.counter >= 1) {
          self.counter--;
          
        } else {
          self.title = true;
          clearInterval(self.timer);
        }
      }, 1000);
    }
  }
);
