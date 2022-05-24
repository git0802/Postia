<template>
    <Head title="About Page" />

    <AppLayout>
        <h2 class="mt-4 text-2xl">About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam at eos veniam voluptas ipsa nisi dicta rem quasi inventore eum.</p>
    </AppLayout>
</template>

<script>
import AppLayout from '../Layouts/App'
import { Head } from '@inertiajs/inertia-vue3'
export default{
    components: {
        AppLayout,
        Head
    }
}
</script>
