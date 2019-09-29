
<?php
if (!$nolayout) {
    ?>
    
    </div>

<br>
<br>

<style>
    /* Sticky footer styles
    -------------------------------------------------- */
    html {
        position: relative;
        min-height: 100%;
    }

    body {
        margin-bottom: 60px; /* Margin bottom by footer height */
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px; /* Set the fixed height of the footer here */
        line-height: 60px; /* Vertically center the text there */
        background-color: #f5f5f5;
    }

    .footer .text-muted {
        text-align: right;
    }

    .footer a {
        color: rgba(0, 0, 0, .5);
        margin-left: 20px;
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-muted">
                    <a href="?datenschutz">Datenschutz</a>
                    <a href="?impressum">Impressum</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
        integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>

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

</script>


<?php
}
?>

</body>
</html>


