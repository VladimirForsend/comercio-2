<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    $(document).ready(function($) {

        $(window).load(function() {
            $('#page-loader').fadeOut(50000);
        });
    });
</script>
<script>
    $(document).ready(function($) {
        var Body = $('body');
        Body.addClass('preloader-site');
    });
    $(window).load(function() {
        $('.preloader-wrapper').fadeOut(3000);
        $('body').removeClass('preloader-site');
    });
</script>

<style>
    .preloader-wrapper {
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0; 
        left: 0;
        z-index: 9999999;
        background-color: #000;
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }




    .container-preload {
    width: 400px;
    height: 220px;
    position: relative;
    background-image: url('https://crazyoutlets.cl/wp-content/uploads/2020/02/logo-1.png');
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: center;
}

    .container-preload {
        width: 400px;
        height: 220px;
        position: relative;
    }

    .container-preload h4,
    .container-preload h5 {
        font-size: 1.5rem;
        text-transform: uppercase;
    }

    .container-preload h4 span,
    .container-preload h5 span {
        width: 100%;
        float: left;
        color: #ffffff;
        -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        transform: translateY(-50px);
        opacity: 0;
        animation-name: titleAnimation;
        animation-timing-function: ease;
        animation-duration: 3s;

    }

    .container-preload h4 span {
        animation-delay: 0.6s;
        -webkit-animation-fill-mode: forwards;
    }

    .container-preload h4 span:first-child {
        animation-delay: 0.7s;
    }

    .container-preload h4 span:last-child {
        color: #ffe221;
        animation-delay: 0.5s;
    }

    .container-preload h5 {
        top: 0;
        position: absolute;
    }

    .container-preload h5 span {
        animation-delay: 4.1s;
        -webkit-animation-fill-mode: forwards;
    }

    .container-preload h5 span:first-child {
        animation-delay: 4.2s;
    }

    .container-preload span:last-child {
        color: #ffe221;
        animation-delay: 4s;
    }

    @keyframes titleAnimation {
        0% {
            transform: translateY(-50px);
            opacity: 0;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        }

        20% {
            transform: translateY(0);
            opacity: 1;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
        }

        80% {
            transform: translateY(0);
            opacity: 1;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
        }

        100% {
            transform: translateY(50px);
            opacity: 0;
            -webkit-clip-path: polygon(100% 0, 100% 0%, 0 100%, 0 100%);
            clip-path: polygon(100% 0, 100% 0%, 0 100%, 0 100%);
        }
    }
</style>
<div class="preloader-wrapper">

    <div class="preloader">
        <div id="page-loader">

            <section class="container-preload">
                <h4 class="title">
                
                </h4>

                <h5 class="title">
                    <span>Cargando...</span>
                </h5>
            </section>

        </div>
    </div>
</div>