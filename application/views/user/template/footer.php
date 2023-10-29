<script>
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            navbar.classList.remove("bgtransparent");
            navbar.classList.add("myNavbar");
        } else {
            navbar.classList.remove("myNavbar");
            navbar.classList.add("bgtransparent");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>