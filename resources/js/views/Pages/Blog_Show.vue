<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 px-10 h-screen">
            <div class="container">
                <div class="flex flex-col items-center mx-auto">
                    <div class="text-2xl font-extrabold underline text-blue-400">Lorem ipsum dolor sit amet.</div>
                    <div class="flex justify-center mx-auto md:mx-64">
                        <div class="mt-2 leading-loose tracking-widest  font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel earum reprehenderit atque! Neque eligendi vitae laudantium odit, ipsam reprehenderit animi. Velit dolorem accusantium eligendi, illum nobis quidem quibusdam repudiandae illo doloremque saepe ipsam rerum placeat culpa quia fugiat tempora dolor, in perferendis recusandae libero possimus numquam itaque quis! Repellat eaque officia odit vitae iste exercitationem distinctio dignissimos magnam numquam.</div>
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
            .then((response) => {this.blogs = response.data.data})
            .catch(error => console.log(error))
        }
    },
    mounted(){
        console.log(this.$route.params.slug)
    },
    components: {
        Navbar,
        Footer
    }
};
</script>