<template>
    <div>
        <Navbar />
        <!-- Hero -->
        <main class="mt-5 px-10 h-screen">
            <div class="container">
                <div class="flex flex-col w-full">
                    <div class="flex justify-center text-xl underline text-blue-400">My Contact</div>
                    <div class="flex justify-center">
                        <div class="mt-3 mb-10 p-5">
                            <a :href="'mailto:kafribung07@gmail.com'" target="_blank" class="font-light block text-lg hover:underline hover:font-italic">kafribung07@gmail.com</a>
                            <a :href="'mailto:60900117001@uin-alauddin.ac.id'" target="_blank" class="font-light text-lg hover:underline hover:font-italic">60900117001@uin-alauddin.ac.id</a>
                            <div class="font-light text-lg mt-2">Mamuju Sulawesi Barat, Indonesia</div>
                            <div class="font-serif leading-loose my-5 font-light">Menjadi programmer sebab pernah dihianati :v</div>
                        </div>
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
    components: {
        Navbar,
        Footer
    }
};
</script>

