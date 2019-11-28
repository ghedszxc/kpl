export default {
  data: () => ({
    category_id: 0,
    brand_id: 0
  }),
  computed: {
    productList() {
      return this.$store.state.global.productList;
    },
    selectedItem() {
      return this.$store.state.global.selectedItem;
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
    },
    onChangePage(page_url) {
      this.$store.dispatch("global/onChangePage", page_url);
      console.log(page_url);
    }
  }
};
