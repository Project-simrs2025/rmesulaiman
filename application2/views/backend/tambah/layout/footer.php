<script>
    function limitInputLength(input) {
        if (input.value.length > 3) {
            input.value = input.value.slice(0, 3); // Memotong input ke 3 karakter pertama
        }
    }

    function preventE(event) {
        // Cegah huruf 'e', 'E', '+', dan '-' untuk masuk
        if (['e', 'E', '+', '-'].includes(event.key)) {
            event.preventDefault();
        }
    }
</script>