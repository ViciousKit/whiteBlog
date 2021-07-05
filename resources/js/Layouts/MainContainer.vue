<template>
    <Header />
    <main>
        <slot></slot>
    </main>
    <Footer />
</template>

<script>
import '/scss/index.scss';

import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue'
export default {
    components: { Header, Footer },
}
</script>
<style lang="scss">

</style>
