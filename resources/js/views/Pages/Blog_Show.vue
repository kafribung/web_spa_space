<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 mb-10 px-10 h-screen">
            <div class="container">
                <div class="flex flex-col items-center mx-auto">
                    <div class="text-2xl font-extrabold underline text-blue-400">{{ blog.title }}</div>
                    <div class="text-sm font-light  italic text-dark">[{{ blog.user }} => {{ blog.created_at }}]</div>
                    <div class="flex justify-center mx-auto md:mx-64">
                        <div class="mt-2 leading-loose tracking-widest  font-light" v-html="blog.description_2"></div>
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
            blog : {},
        }
    },
    mounted() {
        this.getData()
    },
    methods: {
        getData(){
            this.axios
            .get(`/api/blog/${this.$route.params.slug}`)
            .then((response) => {
                this.blog = response.data.data
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