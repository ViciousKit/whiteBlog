<template>
    <div>
        <MainContainer>
            <div class="home container">
                <div class="main text-center"><img src="/img/main.png" alt=""></div>
            </div>
            <div class="top-article container">
            <div class="col-m-12 top-article_container">
              <h3 class="main-title">PHOTODIARY</h3>
              <h1 class="article-title">The perfect weeked getaway</h1>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <div class="comment">LEAVE A COMMENT</div>
            </div>
          </div>
            <div class="container articles articles_before">
                <div class="row d-flex justify-content-around text-center" >
    <!--              <div class="col-md-5 post">-->
    <!--                <Article :data="articlesRender[0]" />-->
    <!--              </div>-->
    <!--              <div class="col-md-5 post">-->
    <!--                <Article :data="articlesRender[1]" />-->
    <!--              </div>-->
    <!--              <div class="col-md-5 post">-->
    <!--                <Article :data="articlesRender[2]" />-->
    <!--              </div>-->
    <!--              <div class="col-md-5 post">-->
    <!--                <Article :data="articlesRender[3]" />-->
    <!--              </div>-->
                    <div class="col-md-5 post" v-for="item in startArticlesRender" :key="item.id">
                        <Article :data="item"/>
                    </div>
                </div>
          </div>
            <div class="newsletter container-fluid">
              <div class="col-md-5 b">
                <p class="text text-center">Sign up for our newsletter!</p>
                <form action="" class="text-center">
                  <p class="text-form d-inline ">Enter a valid email address</p>
                  <input type="text" class="">
                  <span class="send"><img src="img/icons/send_icon.png" alt=""></span>
                </form>
              </div>
          </div>
            <div class="container articles articles_after">
                    <div class="row d-flex justify-content-around text-center" >
                      <div class="col-md-5 post" v-for="item in lastArticlesRender" :key="item.id">
                        <Article :data="item"/>
                      </div>
                    </div>
                    <div class="load text-center">
                      <button @click="updateLastArticles()">LOAD MORE</button>
                    </div>
              </div>
        </MainContainer>
    </div>
</template>

<script>
// @ is an alias to /src

import Article from '@/components/Article.vue';
import MainContainer from '@/Layouts/MainContainer';



export default {
  name: 'Home',
  components: {
      MainContainer,
      Article
  },
  data() {
    return {
      startArticlesRender: [],
      lastArticlesRender: [],
      articles: [],
      countPosts: 8
    }
  },
  methods: {
    updateLastArticles() {
      this.countPosts += 4;
        axios.get('/api/posts/' + this.countPosts)
            .then(response => {
                this.articles = response.data
                this.makeLastArticles();
            })
            .catch(error => {
                console.log(error)
            })
      setTimeout(this.scrollDown, 400);
    },
    makeLastArticles() {
        this.lastArticlesRender = [];
        for(let i = 4; i < this.countPosts; i++) {
            if(this.articles[i] !== undefined) {
                this.lastArticlesRender.push(this.articles[i]);
            }
            else {
                break;
            }
        }
    },
    scrollDown() {
      window.scrollBy(0, 600);
    }
  },
  created() {
    axios.get('/api/posts/8')
    .then(response => {
        this.articles = response.data
        for(let i = 0; i < 4; i++) {
            this.startArticlesRender[i] = this.articles[i];
        }
        for(let i = 4; i < this.countPosts; i++) {
            this.lastArticlesRender.push( this.articles[i]);
        }
    })
    .catch(error => {
        console.log(error)
    });
  }
}
</script>
