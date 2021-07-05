<template>

        <img alt="" class="photo" :src="(`/img/blogPostPhotos/${data.photo}`)">
        <h2 class="main-title">{{data.theme}}</h2>
        <h1 class="article-title">{{data.title}}</h1>
        <p class="text">{{data.text}}</p>

</template>


<script>
export default {
    props: ['data'],
}
</script>
