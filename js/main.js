new Vue({
  el: '#app',
  data:{
    selected: '',
    playList:[

    ],
  },
  methods:{
    search: function () {
      const self = this;
      console.log(self.selected)
      axios.get('app/server.php')
      .then(function(response){
        self.playList = response.data;
        console.log(self.playlist);
      })
    }
  },
  mounted() {
    const self = this;
      axios.get('app/server.php')
    .then(function(resp) {
       const disk = resp.data;
      self.playList = disk;
      console.log(disk);
    });
  }
});
Vue.config.devtools = true
