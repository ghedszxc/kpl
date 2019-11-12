export default {
  data: () => ({
    products: []
  }),
  mounted() {
    const self = this;
    self.$http.get("api/item").then(response => {
      self.products = response.body;
    });
  }
};
