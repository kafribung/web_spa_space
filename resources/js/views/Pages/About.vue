<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 mb-10 px-10">
            <div class="container">
                <div class="flex flex-col items-center w-full">
                    <div class="text-xl underline text-blue-400 mb-5">About Me</div>
                    <div class="flex justify-center mx-auto md:mx-64" >
                        <div v-if="about" class="mt-2  leading-loose font-light font-serif tracking-widest">{{ about.description }}</div>
                        <div v-else class="mt-2  leading-relaxed font-light font-serif tracking-widest">~ ~ ~</div>
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
            about : ''
        }
    },
    mounted() {
        this.getData()
    },
    methods: {
        getData(){
            this.axios
            .get('/api/about')
            .then((response) => {this.about = response.data.data})
            .catch(error => console.log(error))
        }
    },
    components: {
        Navbar,
        Footer
    }
}
</script>