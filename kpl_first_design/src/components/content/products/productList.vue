<template>
    <div style="border: 1px solid red;">
        <v-list>
            <v-list-item>
                <v-list-item-icon>
                    <v-icon>mdi-home</v-icon>
                </v-list-item-icon>

                <v-list-item-title>Home</v-list-item-title>
            </v-list-item>

            <v-list-group prepend-icon="account_circle" value="true">
                <template v-slot:activator>
                    <v-list-item-title>Users</v-list-item-title>
                </template>

                <v-list-group no-action sub-group value="true">
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-title>Admin</v-list-item-title>
                        </v-list-item-content>
                    </template>

                    <v-list-item v-for="(admin, i) in admins" :key="i" link>
                        <v-list-item-title v-text="admin[0]"></v-list-item-title>
                        <v-list-item-icon>
                            <v-icon v-text="admin[1]"></v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </v-list-group>
            </v-list-group>
        </v-list>
    </div>
</template>
<script>
export default {
    data: () => ({
        admins: [
            ['Management', 'people_outline'],
            ['Settings', 'settings'],
      ]
    })
}
</script>
