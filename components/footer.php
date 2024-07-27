<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
document.querySelectorAll('.section').forEach((section) => {
    section.addEventListener('wheel', (event) => {
        event.preventDefault();
        if (event.deltaY > 0) {
            if (section.nextElementSibling) {
                section.nextElementSibling.scrollIntoView({ behavior: 'smooth' });
            }
        } else {
            if (section.previousElementSibling) {
                section.previousElementSibling.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
});
</script>

</body>

<footer>
<h4 class="text">© All Rights Reserved | Powered By <a href="havnix.000.pe" class="highlight">Havnix</a></h4>


</footer>


</html>