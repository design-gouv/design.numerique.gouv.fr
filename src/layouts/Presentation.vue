<template>
    <div>
        <h1>PDF REVEAL</h1>
        <slot/>
    </div>
</template>

<script>

export default {
    mounted() {
        let src = "/assets/js/reveal.js";
        let reveal = document.createElement('script');
        reveal.type = "module";
        reveal.src = src;
        let scripts = document.querySelectorAll('[src="' + src + '"]');
        if (scripts.length > 0) {
            scripts[0].remove();
        }
        document.body.appendChild(reveal);
    }
}
</script>