<template>
    <div>
        <add-product></add-product>
        <product-list></product-list>
    </div>
</template>
<script>
import addProduct from './action_admin/addProduct'
import productList from './productList'
export default {
    components: {
        'add-product': addProduct,
        'product-list': productList
    }
}
</script>