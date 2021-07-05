<template>
    <div>
        <MainContainer>
            <div class="container">
                <form class="row g-3 col-6 m-auto" action="/api/newPost" method="post" enctype="multipart/form-data">
                    <input type="text"  class="form-control" name="theme" placeholder="theme">
                    <input type="text" class="form-control" name="title" placeholder="title">
                    <textarea type="text" class="form-control" name="text" placeholder="text"></textarea>
                    <input type="file" class="form-control" name="photo" placeholder="image">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
                    </div>
                </form>
            </div>
        </MainContainer>
    </div>
</template>


<script>
import MainContainer from '@/Layouts/MainContainer';
export default {
    name: "NewPost",
    components: {MainContainer},
    methods: {
        confirm() {
            axios.post()
        }
    }
}
</script>

<style scoped>

</style>
