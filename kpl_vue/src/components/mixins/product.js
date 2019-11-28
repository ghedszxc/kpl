/* eslint-disable prettier/prettier */
export default {
  computed: {
    productList() {
      return this.$store.state.global.productList;
    },
    selectedItem() {
      return this.$store.state.global.selectedItem;
    },
    page_distinction() {
      return this.$store.state.global.page_distinction;
    },
    category_id() {
      return this.$store.state.global.category_id;
    },
    brand_id() {
      return this.$store.state.global.brand_id;
    }
  },
  methods: {
    onSelectProduct() {
      const self = this;
      if (!self.$route.path == "/product") {
        self.$router.push("/product");
      } else {
        self.$store.commit("global/CHANGED_BRAND_ID", 0);
        self.$store.commit("global/CHANGED_CATEGORY_ID", 0);
        self.$store.commit("global/FILTER_PAGE_DISTINCTION", 1);
        self.$store.dispatch("global/getProductList");
      }
    },
    onFilterByCategory(data) {
      const self = this;

      self.$store.commit("global/CHANGED_BRAND_ID", 0);
      self.$store.commit("global/CHANGED_CATEGORY_ID", data.category_id);
      self.$store.commit("global/FILTER_PAGE_DISTINCTION", 2);

      // eslint-disable-next-line prettier/prettier
      self.$store.dispatch("global/getFilteredProductByCategory", data.category_id);
    },
    onFilterByBrand(data) {
      const self = this;

      self.$store.commit("global/CHANGED_BRAND_ID", data.brand_id);
      self.$store.commit("global/CHANGED_CATEGORY_ID", data.category_id);
      self.$store.commit("global/FILTER_PAGE_DISTINCTION", 3);

      self.$store.dispatch("global/getFilteredProductByBrand", data.brand_id);
    },
    onChangePage(page_number) {
      const self = this;
      if (self.page_distinction == 1){
        console.log("for all")
        let path = self.$http.options.root + `/api/item?page=${page_number}`;
        self.$store.dispatch("global/onChangePage", path);


      } else if (self.page_distinction == 2){
        console.log("for category")
        let path = self.$http.options.root + `/api/item/${self.category_id}?page=${page_number}`;
        self.$store.dispatch("global/onChangePageForCategory", { for_page: path, category_id: self.category_id});


      } else {
        console.log("for brand")
        let path = self.$http.options.root + `/api/item/filterByBrand/${self.brand_id}?page=${page_number}`;
        self.$store.dispatch("global/onChangePageForBrand", { for_page: path, brand_id: self.brand_id});
      }
    }
  }
};
