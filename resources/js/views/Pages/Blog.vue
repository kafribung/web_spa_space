<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 px-10">
            <div class="container">
                <div class="flex flex-col items-center w-full">
                    <div class="text-xl  underline text-blue-400 mb-5">My Blog</div>
                    <div class="flex justify-center w-full" v-for="blog in blogs" :key="blog.id">
                        <router-link :to="'/blog/show/' + blog.slug" class="bg-white  mb-10 p-5 rounded-lg shadow hover:shadow-lg transform transition-all hover:-translate-y-1 duration-200">
                            <div class="font-semibold font-sans text-xl hover:underline">{{ blog.title }}</div>
                            <div class="font-serif leading-loose my-5 font-light" v-html="blog.description"></div>
                            <span class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="mr-3 flex-shrink-0">
                                        <img class="w-10 h-10 rounded-full" src="img_users/kafri.png" alt="Kafri" title="Kafris">
                                    </div>
                                    <div>
                                        {{ blog.user }}
                                    </div>
                                </div>
                                <div class="text-sm text-gray-600">
                                    {{ blog.created_at }}
                                </div>
                            </span>
                        </router-link>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Hero -->
        <Footer />
    </div>
</template>

<script>
import Navbar from "../../components/Navbar";
import Footer from '../../components/Footer'
export default {
    data() {
        return {
            blogs : [],
        }
    },
    mounted() {
        this.getData()
    },
    
    methods: {
        getData(){
            this.axios
            .get('/api/blog')
            .then((response) => {
                this.blogs = response.data.data
            })
            .catch(error => console.log(error))
        }
    },
    components: {
        Navbar,
        Footer
    }
};
</script>