 | capvalgo.online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body class="d-flex flex-column h-100">
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <button type="button" class="btn btn-success" id="btn-back-to-top">
                <i class="bi bi-arrow-up-circle"></i>
            </button>
            <style>
                #btn-back-to-top {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    display: none;
                }
            </style>
            <script>
                //Get the button
                let mybutton = document.getElementById("btn-back-to-top");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                scrollFunction();
                };

                function scrollFunction() {
                    if (
                        document.body.scrollTop >= 20 ||
                        document.documentElement.scrollTop >= 20
                    ) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }
                // When the user clicks on the button, scroll to the top of the document
                mybutton.addEventListener("click", backToTop);

                function backToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
