<?php
    // إعداد الاتصال بقاعدة البيانات
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_panel";

    // الاتصال بقاعدة البيانات
    $conn = new mysqli($servername, $username, $password, $dbname);

    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // معالجة النموذج عند الإرسال
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // تأمين البيانات المدخلة
        $name = $conn->real_escape_string($name);
        $email = $conn->real_escape_string($email);
        $phone = $conn->real_escape_string($phone);
        $message = $conn->real_escape_string($message);

        // إدخال البيانات في قاعدة البيانات
        $sql = "INSERT INTO Messages (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success text-center'>تم إرسال رسالتك بنجاح! سنعاود الاتصال بك قريبًا.</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>حدث خطأ أثناء إرسال الرسالة: " . $conn->error . "</div>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="ar">
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#products">products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">

                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <a class="btn btn-light btn-xl" href="#products">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="products">
            <h2>products</h2>
            <div class="product-list">
                <div class="product">
                    <a href="me.html">
                    <img src="الفرع العلمي_2022_2023_2024/1.png" alt="" />
                    <p>28F
                        YH-040
                       4PCS</p>
                    </a>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/10.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/100.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/10.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/10.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/10.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
                <div class="product">
                    <img src="الفرع العلمي_2022_2023_2024/10.png" alt=" " />
                    <p>60F 
                        YH-048</p>
                </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                            <!-- Name input-->
                            <div class="container my-5">
        <h1 class="text-center">إرسال رسالة</h1>
        <form method="POST" action="">
            <div class="form-floating mb-3">
                <input class="form-control" name="name" type="text" placeholder="Enter your name..." required />
                <label for="name">Full name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="email" type="email" placeholder="name@example.com" required />
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890" />
                <label for="phone">Phone number</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                <label for="message">Message</label>
            </div>
            <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Submit</button></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->

                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+111111111111</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
