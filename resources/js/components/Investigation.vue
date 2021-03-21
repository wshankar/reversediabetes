<template>
    <v-alert type="warning" :value="true">
      Vuetify was installed properly
    </v-alert>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
