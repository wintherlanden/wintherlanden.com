<?php
if (!$nolayout) {
    ?>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-muted">
                        <a href="?datenschutz"><?=($lang == 'de' ? 'Datenschutz' : 'Privacy Policy');?></a>
                        <a href="?impressum"><?=($lang == 'de' ? 'Impressum' : 'About us');?></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="/ekko-lightbox.js?version=2"
            crossorigin="anonymous"></script>

    <script>

        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(function () {
            $('#button_lang_de').click(function () {
                $.post(
                    '/set-language.php?language=de',
                    function () {
                        window.location.reload();
                    }
                );
            });
            $('#button_lang_en').click(function () {
                $.post(
                    '/set-language.php?language=en',
                    function () {
                        window.location.reload();
                    }
                );
            });
        });


    $('.pfeil').click(function () {
	var $scrollview = $(this).parent().find('.gallery_scroll');
        $scrollview.animate({ scrollLeft: '+=' + ($scrollview.width() / 4)  }, 500);
    });
    $('.pfeil2').click(function () {
	var $scrollview = $(this).parent().find('.gallery_scroll');
        $scrollview.animate({ scrollLeft: '-=' + ($scrollview.width() / 4)  }, 500);
    });
    $('.gallery_scroll').scroll(function (e) {
        var $scrollview = $(this);
        console.log($scrollview.scrollLeft());
    });


    </script>


    <?php
}
?>

</body>
</html>


