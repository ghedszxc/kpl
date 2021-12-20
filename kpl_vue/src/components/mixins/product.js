export default {
  computed: {
    productList() {
      return this.$store.state.global.productList
      // return this.$store.state.global.productList.filter(value => {
      //     return value.item_name.toLowerCase().includes(this.search_product.toLowerCase())
      // })
    },
    selectedItem() {
      return this.$store.state.global.selectedItem
    },
    page_distinction() {
      return this.$store.state.global.page_distinction
    },
    category_id() {
      return this.$store.state.global.category_id
    },
    categoryList() {
        return this.$store.state.global.categoryList
    }
  },
  methods: {
    onSelectProduct() {
      this.$store.commit("global/CHANGED_CATEGORY_ID", 0)
      this.$store.commit("global/FILTER_PAGE_DISTINCTION", 1)
      this.$store.dispatch("global/getProductList")
    },
    onFilterByCategory(data) {
      this.$store.commit("global/CHANGED_CATEGORY_ID", data.id)
      this.$store.commit("global/FILTER_PAGE_DISTINCTION", 2)
      this.$store.dispatch("global/getFilteredProductByCategory", data.id)
    },
    onChangePage(page_number) {
      if (this.page_distinction == 1){
        let path = this.$http.options.root + `/api/item?page=${page_number}`
        this.$store.dispatch("global/onChangePage", path)


      } else if (this.page_distinction == 2){
        let path = this.$http.options.root + `/api/item/${this.category_id}?page=${page_number}`
        this.$store.dispatch("global/onChangePageForCategory", { for_page: path, category_id: this.category_id})


      } else {
        let path = this.$http.options.root + `/api/item/filterByBrand/${this.brand_id}?page=${page_number}`
        this.$store.dispatch("global/onChangePageForBrand", { for_page: path, brand_id: this.brand_id})
      }
    }
  }
}
