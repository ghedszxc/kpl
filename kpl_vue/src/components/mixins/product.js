export default {
  data: () => ({
    // products: []
    category_id: 0,
    brand_id: 0
  }),
  // mounted() {
  //   const self = this;
  //   self.$http.get("api/item").then(response => {
  //     self.products = response.body;
  //   });
  // }
  computed: {
    productList() {
      return this.$store.state.global.productList;
    }
  },
  methods: {
    onSelectProduct() {
      const self = this;
      if (!self.$route.path == "/product") {
        self.$router.push("/product");
      } else {
        self.brand_id = 0;
        self.category_id = 0;
        self.$store.dispatch("global/getProductList");
      }
    },
    onFilterByCategory(data) {
      const self = this;
      self.brand_id = 0;
      self.category_id = data.category_id;
      // eslint-disable-next-line prettier/prettier
      self.$store.dispatch("global/getFilteredProductByCategory", data.category_id);
    },
    onFilterByBrand(data) {
      const self = this;
      self.brand_id = data.brand_id;
      self.category_id = data.category_id;
      self.$store.dispatch("global/getFilteredProductByBrand", data.brand_id);
    }
  }
};
