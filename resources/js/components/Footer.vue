<template>
    <div>
    <!-- Footer -->
        <footer class="bottom-0 mt-0">
            <div class="flex flex-col items-center">
                <div class="font-light font-serif text-base tracking-tighter">Stay curious, keep learning and exploring</div>
                <div class="font-extrabold font-serif text-sm mt-2">© {{ tahun }} . Crafted with &nbsp; ❤ &nbsp; by Kafri</div>
            </div>
        </footer>
    <!-- End Footer -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            tahun: new Date().getFullYear(),
        }
    },
}
</script>
