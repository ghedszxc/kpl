<template>
    <div>
        <h1>table</h1>
        <!-- <v-data-table
            :headers="headers"
            :items="items"
        ></v-data-table> -->
    </div>
</template>
<script>
export default {
    data:() => ({
        items: [],
        headers: [
            { text: 'Image', align: 'left', sortable: false, value: 'image' },
            { text: 'Item Name', align: 'left', sortable: false, value: 'item_name' },
            { text: 'Action', align: 'left', sortable: false, value: 'action' },
        ]
    }),
    mounted() {
        const self = this;
        self.$http.get('api/item/getItemsForAdmin').then(response => {
            console.log("gerard: ", response.body)
            self.items = response.body;
        })
    }
}
</script>