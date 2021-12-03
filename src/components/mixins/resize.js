export default {
  data: () => ({
    windowSize: {
      x: '',
      y: ''
    }
  }),
  methods: {
    onResize() {
      this.windowSize = { x: window.innerWidth, y: window.innerHeight };
    }
  }
};
