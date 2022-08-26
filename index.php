<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

    <!-- Content -->
    <main id="Content">
        <!-- jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <div class="summary">
                    <small>FORGET NORMAL,</small>
                    <p>WE'RE</p>
                    <p>NONSENSE <span>FORMATS</span></p>
                </div>
            </div>
        </div>
        <!-- introduce -->
        <article class="introduce effect">
            <div class="container">
                <p>
                    <b>We</b> offer something different.<br class="d-block">
                    Broad entertainment formats <br>
                    with a distinct South Korean twist. <br class="d-block">
                    Unique ideas that capture our <br>
                    love of life, warm hearts and <br>
                    playful mischief. 
                </p>
                <p>
                    Nonsense Co., Ltd. was established in <br>
                    June 2021 to create “interesting and <br>
                    unique entertainment content”. <br class="d-block">
                    We specialize in the pre-production <br>
                    phase by producing format packages <br>
                    consisting of treatments,<br class="visible-lg"> format <br>
                    bibles and trailers. Through online/mobile <br>
                    platforms and networks, we sell content <br>
                    worldwide to generate<br class="visible-lg"> various <br>
                    license revenues.<br class="d-block"><br class="d-block">
                    Focusing on original formats that reflect <br>
                    Korean culture and values, we are <br>
                    targeting overseas markets with <br class="d-block">
                    favourable IP positions. Our goal is to <br>
                    promote the excellence of Korea's <br>
                    entertainment creativity.
                </p>
            </div>
        </article>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            setTimeout(function(){
                $('.jumbotron').addClass('action');
            }, 500);
            setTimeout(function(){
                $('.jumbotron span').addClass('active');
            }, 1800);
            
            $(window).on('scroll', function() {
                $('.effect').each(function(index, elem) {
                    if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 2)) {
                        $(elem).addClass('action');
                    }
                });
            });
        })(jQuery);
    </script>
</body>
</html>