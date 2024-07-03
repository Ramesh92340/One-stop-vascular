<?php
// Database connection (replace with your actual database connection details)
include './db.connection/db_connection.php';

// Fetch blog data
$sql = "SELECT id, title, main_content, main_image FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>One Stop Vascular Solutions</title>
    <meta name="title" content="Your Comprehensive Guide | Best Vascular and Endovascular Treatments in Hyderabad">
    <meta name="keywords" content="Vascular treatment in hyderabad, Best vascular hospital in hyderabad, Best vascular doctor in hyderabad, Best endovascular surgery hospital in hyderabad, Best endovascular surgeon in hyderabad">
    <meta name="description" content=" Discover the best vascular and endovascular treatments in Hyderabad. Explore our comprehensive guide to find expert care and innovative solutions for your health needs.">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/Onestop-Logo.webp">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
    <script>
        // scripts.js
        document.addEventListener("DOMContentLoaded", function() {
            // Ensure the preloader is visible initially
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('content');

            // Listen for the window load event to hide the preloader
            window.addEventListener('load', function() {
                preloader.style.display = 'none';
                content.style.display = 'block';
            });
        });
    </script>
</head>

<body>
    <!------------------------------------------------
	loading overlay - start
	------------------------------------------------>
    <div id="preloader">
        <img src="assets/images/logo_upscaled.webp" alt="logo" class="preloader-logo">
    </div>
    <!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
        <!------------------------------------------------
		navigation - start
		------------------------------------------------>
        <header class="header" style="background-color:#314274;">
            <div class="header-top   non_md">
                <div class="container-fluid">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu">
                            <li><a href="tel:#" class="link-phone"><i class="fas fa-phone"></i>Emergency: +91 96660
                                    88000</a></li>
                            <li><a href="#" class="link-email"><i class="fas fa-envelope-open"></i>Onestopvascular@gmail.com</a></li>
                            <li><a href="#" class="link-email"><i class="fa fa-map-marker"></i>CARE Hospitals Outpatient
                                    Centre,</a></li>
                            <li><a href="#" class="link-email"><i class="fas fa-clock"></i>OP- Mon - Sat: 9:00 am - 5:00
                                    pm</a></li>

                        </ul>
                    </div>

                    <div class="header-right">

                        <ul class="top-menu">
                            <li><a href="https://www.facebook.com/Hyderabadvascularspecialists/" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/onestopvascularsolutions/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a></li>
                            <!-- <li><a href="#"     class="social-link"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="https://pin.it/7gszVxIH9" target="_blank" class="social-link"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/onestopvascular/?viewAsMember=true
                                " target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://youtube.com/@OneStopVascularSolutions?si=zPsI71A6yPQAzhVL" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="header-middle sticky-header  mob_ss" style="background-color: #ebf6fa;">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <h1 class="mb-0"><img src="assets/images/Onestop-Logo.webp" alt="Onestop-Logo"></h1>
                    </a>
                </div>
                <div class="header-right">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="fal fa-bars"></i>
                    </button>
                    <nav class="main-nav ls-20">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="index.html" class="sf-with-ul">Home</a>
                            </li>
                            <li>
                                <a href="about.html" class="sf-with-ul">About</a>
                            </li>
                            <li>
                                <a href=" our_services.html" class="sf-with-ul">Our Services<i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">

                                    <li><a href="#"><i class="fas fa-angle-right"></i>Vascular Surgery Services</a>

                                        <ul class="sub-menu">
                                            <li><a href="varicose_veins_in_hyderabad.html"><i class="fas fa-angle-right"></i>Varicose Veins</a></li>
                                            <li><a href="deep_vein_thrombosis_in_hyderabad.html"><i class="fas fa-angle-right"></i>Deep Vein Thrombosis</a></li>
                                            <li><a href="vascular_malformation_in_hyderabad.html"><i class="fas fa-angle-right"></i>Vascular Malformation</a></li>
                                            <li><a href="aortic_aneurysms_in_hyderabad.html"><i class="fas fa-angle-right"></i>Aortic Aneurysms</a></li>
                                            <li><a href="mesenteric_vasculature_in_hyderabad.html"><i class="fas fa-angle-right"></i>Mesenteric Vasculature</a></li>
                                            <li><a href="acute_limb_ischemia_in_hyderabad.html"><i class="fas fa-angle-right"></i>Acute limb Ischemia</a></li>
                                            <li><a href="peripheral_artery_disease_in_hyderabad.html"><i class="fas fa-angle-right"></i>Peripheral Artery Disease</a></li>
                                            <li><a href="tos_in_hyderabad.html"><i class="fas fa-angle-right"></i>Thoracic Outlet Syndrome (TOS) </a></li>
                                            <li><a href="stroke_prevention_in_hyderabad.html"><i class="fas fa-angle-right"></i>Stroke Prevention</a></li>
                                            <li><a href="angiography_in_hyderabad.html"><i class="fas fa-angle-right"></i> Angiography</a></li>
                                            <li><a href="vascular_access_dialysis_patients_in_hyderabad.html"><i class="fas fa-angle-right"></i>Vascular Access(dialysis patients) </a></li>
                                            <li><a href="vascular_access_for_chemotherapy_in_hyderabad.html"><i class="fas fa-angle-right"></i> Vascular Access For Chemotherapy</a></li>
                                            <li><a href="wound_care_in_hyderabad.html"><i class="fas fa-angle-right"></i> Wound Care</a></li>
                                        </ul>

                                    </li>

                                    <li><a href="#"><i class="fas fa-angle-right"></i>Interventional Radiology Services</a>

                                        <ul class="sub-menu">

                                            <li><a href="hepatobiliary_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Hepatobiliary Interventions</a></li>
                                            <li><a href="iog_in_hyderabad.html"><i class="fas fa-angle-right"></i>Interventions In Obstetrics & Gynaecology</a></li>
                                            <li><a href="lti_in_hyderabad.html"><i class="fas fa-angle-right"></i>Liver Transplant Interventions</a></li>
                                            <li><a href="renal_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Renal Interventions</a></li>
                                            <li><a href="pulmonary_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Pulmonary Interventions</a></li>
                                            <li><a href="gastrointestinal_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Gastrointestinal Interventions</a></li>
                                            <li><a href="oncology_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Oncology Interventions</a></li>


                                        </ul>



                                    </li>

                                    <li><a href="#"><i class="fas fa-angle-right"></i>Podiatry
                                            Services</a>

                                        <ul class="sub-menu">

                                            <li><a href="callus_trimming_in_hyderabad.html"><i class="fas fa-angle-right"></i>Callus Trimming</a>
                                            </li>
                                            <li><a href="nail_trimming_in_hyderabad.html"><i class="fas fa-angle-right"></i>Nail Trimming</a></li>
                                            <li><a href="ozoneandoxyzen_therapy_in_hyderabad.html"><i class="fas fa-angle-right"></i>Ozone and Oxyzen Therapy</a></li>
                                            <li><a href="anodyne_treatment_in_hyderabad.html"><i class="fas fa-angle-right"></i>Anodyne Treatment</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="emergency_vascular_services_in_hyderabad.html"><i class="fas fa-angle-right"></i>Emergency Vascular Services</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="treatments.html" class="sf-with-ul">Treatments</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Speciality Clinics<i class="fas fa-caret-down"></i></a>
                                <ul class="sub-menu">

                                    <li class="li-with-arrow">
                                        <a href="diabetic_foot&wound_care_clinic_in_hyderabad.html"><i class="fas fa-angle-right"></i>Diabetic Foot & Wound Care Clinic<i class="far fa-caret-right"></i></a>
                                        <a href="vascular_genetic_clinic_in_hyderabad.html"><i class="fas fa-angle-right"></i>Vascular Genetic Clinic<i class="far fa-caret-right"></i></a>
                                        <a href="aortic_clinic_in_hyderabad.html"><i class="fas fa-angle-right"></i>Aortic Clinic<i class="far fa-caret-right"></i></a>
                                        <a href="thrombosis_clinic_in_hyderabad.html"><i class="fas fa-angle-right"></i>Thrombosis Clinic<i class="far fa-caret-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html" style="color: Red;">Blog</a>
                            </li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact </a>
                            </li>
                        </ul><!-- End .menu -->
                    </nav>
                    <!-- End .main-nav -->
                    <a href="appointment.html" class="btn btn-sm btn-primary-color ls-0">
                        <span>Book an Appointment</span>
                    </a>

                </div>
            </div>
        </header>
        <!------------------------------------------------
		navigation - end
		------------------------------------------------>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <img class="img-fluid  img_sts" src="assets/images/title images2/blog_page_title_image_one_stop_vascular_solutions_best_hospital_in_hyderbad.webp" style="width: 3000px;" alt="blog_page_title_image_one_stop_vascular_solutions_best_hospital_in_hyderbad">
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>

            <!------------------------------------------------
		    contact details - start
		    ------------------------------------------------>

<!-- <img src="./admin/public/sample/6684d5c0e6355_1719981504.jpg" > -->
<!-- <img src="./admin/public/uploads/photos/6684d5a614e8f_1719981478.png" class="img-fluid" > -->


            <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="grid row">
                            <div class="grid-sizer col-1"></div>

                            <?php
                            // Database connection (replace with your actual database connection details)
                            include './db.connection/db_connection.php';

                            // Fetch blog data (latest first)
                            $sql = "SELECT id, title, main_content, title_image, main_image FROM blogs ORDER BY created_at DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // Determine image to display (use main_image if exists)
                                    $image_path = !empty($row['main_image']) ? "../../uploads/photos/{$row['main_image']}" : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";

                                    echo "
                                    <div class='grid-item col-sm-12 col-lg-4'>
                                        <div class='post-box'>
                                            <figure>
                                                <a href='blog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' width='370' height='257'>
                                                    <div class='hover'>
                                                        <div class='circle'>
                                                            <i class='fas fa-link'></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a href='blog.php?id={$row['id']}'>{$row['title']}</a></h5>
                                                <p class='post-desc' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 100) . "...</p>
                                                <a href='openblogs.php?id={$row['id']}'><button class='bg-primary mt-2 p-2' style='border-width:0px; color:white; border-radius:2px'>Read More</button></a>
                                            </div>
                                        </div>
                                    </div>";
                                }
                            } else {
                                echo "<p>No blog posts found.</p>";
                            }
                            $conn->close();
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <!------------------------------------------------
		    contact details - end
		    ------------------------------------------------>
            <!------------------------------------------------
			type section - start
			------------------------------------------------>

            <!------------------------------------------------
			type section - end
			------------------------------------------------>

        </main>
        <!------------------------------------------------
		footer - start
		------------------------------------------------>
        <footer class="footer  " style="background-color: #1D2A4D;">


            <div class="footer-middle">
                <div class="container" style="padding-top: 90px;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 dep_min">
                            <a href="index.html" class="logo">
                                <img class="footer-logo" src="assets/images/footer_logo.webp" alt="Onestop-Logo">
                            </a>

                            <p class="width_para" style="color: white; ">Our goal is to deliver quality of care in a
                                courteous, respectful, and compassionate manner. We hope you will allow us to care for
                                you and strive to be the first and best choice for your family healthcare.</p>
                            <a href="./appointment.html" style="color: #00AFEF;text-decoration: none;"><i class="fas fa-arrow-right"></i> Make Appointment</a>


                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6 dep_dep ">
                            <div class="title_box">
                                <h5 class="title_head" style="color: white;">Our Services
                                </h5>
                                <ul class="title_list">
                                    <li><a href="./dialysis_access_in_hyderabad.html" class="title_link">Dialysis Access</a></li>
                                    <li><a href="./varicose_veins_in_hyderabad.html" class="title_link">Varicose Veins</a></li>
                                    <li><a href="./diabetic_foot_in_hyderabad.html" class="title_link">Diabetic Foot</a></li>

                                    <li><a href="./peripheral_artery_disease_in_hyderabad.html" class="title_link">Peripheral-Artery-Disease</a></li>
                                    <li><a href="./deep_vein_thrombosis_in_hyderabad.html" class="title_link">Deep-Vein-Thrombosis</a></li>
                                    <li><a href="./emergency_vascular_services_in_hyderabad.html" class="title_link">Emergency
                                            Vascular Services</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
                            <div class="title_box">
                                <h5 class="title_head" style="color: white;">Links</h5>
                                <ul class="title_list">
                                    <li><a href="./about.html" class="title_link">About Us</a></li>
                                    <li><a href="./blog.html" class="title_link">Blogs
                                        </a></li>
                                    <li><a href="./appointment.html" class="title_link">Appointments</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="title_box dimensions_card">
                                <h5 class="  title_head">Quick Contacts</h5>

                                <p>
                                    Department of vascular & Endovascular surgery, Interventional radiology and Podiatric surgery.</p>




                                <strong>
                                    <p style="margin-left: 0px;"> CARE Hospital, Outpatient centre, Banjara Hills, Road no 10, Hyderabad
                                    </p>
                                </strong>
                                <h4><i class="fas fa-phone phone-icon"></i> &nbsp;+91 96660 88000</h4>
                                <div class="">
                                    <ul class="social-icons">


                                        <li><a href="https://www.facebook.com/Hyderabadvascularspecialists/" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/onestopvascularsolutions/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <!-- <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li> -->
                                        <li><a href="https://pin.it/7gszVxIH9" target="_blank" class="social-link"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/onestopvascular/?viewAsMember=true
											" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://youtube.com/@OneStopVascularSolutions?si=zPsI71A6yPQAzhVL" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a></li>

                                    </ul>
                                </div>
                                <br>
                                <div>
                                    <ul>
                                        <li> <a href="https://www.google.com/maps/place/One+Stop+Vascular+Solutions/@17.379,78.4273417,12z/data=!4m6!3m5!1s0x3bcb97a1d54a0281:0x306912977fe9795a!8m2!3d17.41426!4d78.4464927!16s%2Fg%2F11vf6sw42c?entry=ttu" target="_blank" style="color: #00AFEF; text-decoration: none;"> <i class="fas fa-arrow-right"></i><strong> Get Directions</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="container" style="padding-top: 50px; padding-bottom:  10px;">
                <div class="row" style="color: white">
                    <div class="  col-lg-8 col-md-12 col-12">
                        <div class="footer-widget__copyright">
                            <span> ©2023 Onestopvascular,<i>All Rights Reserved. Designed & Developed by <a href="https://bhavicreations.com/" target="_blank" style="color: #00AFEF;">BhaviCreations</a></i></span>
                        </div>
                    </div>
                    <div class="  col-lg-4 col-md-12 col-12">
                        <div class="footer-widget__copyright-info info-direction">
                            <ul class="d-flex align-items-center">
                                <li><a href="#" style="color:white">Terms & conditions &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="#" style="color:white">Privacy & policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!------------------------------------------------
		footer - end
		------------------------------------------------>

    </div>

    <!-- WhatsApp link -->

    <div class="whatsapp_logo">
        <a href="https://api.whatsapp.com/send?phone=919666088000&text=Wellcome%20to%20onestop%20vascular " target="_blank">
            <img class="logo" class="whatsapp_icon" alt="whatsapp_icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOSIgaGVpZ2h0PSIzOSIgdmlld0JveD0iMCAwIDM5IDM5Ij48cGF0aCBmaWxsPSIjMDBFNjc2IiBkPSJNMTAuNyAzMi44bC42LjNjMi41IDEuNSA1LjMgMi4yIDguMSAyLjIgOC44IDAgMTYtNy4yIDE2LTE2IDAtNC4yLTEuNy04LjMtNC43LTExLjNzLTctNC43LTExLjMtNC43Yy04LjggMC0xNiA3LjItMTUuOSAxNi4xIDAgMyAuOSA1LjkgMi40IDguNGwuNC42LTEuNiA1LjkgNi0xLjV6Ij48L3BhdGg+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTMyLjQgNi40QzI5IDIuOSAyNC4zIDEgMTkuNSAxIDkuMyAxIDEuMSA5LjMgMS4yIDE5LjRjMCAzLjIuOSA2LjMgMi40IDkuMUwxIDM4bDkuNy0yLjVjMi43IDEuNSA1LjcgMi4yIDguNyAyLjIgMTAuMSAwIDE4LjMtOC4zIDE4LjMtMTguNCAwLTQuOS0xLjktOS41LTUuMy0xMi45ek0xOS41IDM0LjZjLTIuNyAwLTUuNC0uNy03LjctMi4xbC0uNi0uMy01LjggMS41TDYuOSAyOGwtLjQtLjZjLTQuNC03LjEtMi4zLTE2LjUgNC45LTIwLjlzMTYuNS0yLjMgMjAuOSA0LjkgMi4zIDE2LjUtNC45IDIwLjljLTIuMyAxLjUtNS4xIDIuMy03LjkgMi4zem04LjgtMTEuMWwtMS4xLS41cy0xLjYtLjctMi42LTEuMmMtLjEgMC0uMi0uMS0uMy0uMS0uMyAwLS41LjEtLjcuMiAwIDAtLjEuMS0xLjUgMS43LS4xLjItLjMuMy0uNS4zaC0uMWMtLjEgMC0uMy0uMS0uNC0uMmwtLjUtLjJjLTEuMS0uNS0yLjEtMS4xLTIuOS0xLjktLjItLjItLjUtLjQtLjctLjYtLjctLjctMS40LTEuNS0xLjktMi40bC0uMS0uMmMtLjEtLjEtLjEtLjItLjItLjQgMC0uMiAwLS40LjEtLjUgMCAwIC40LS41LjctLjguMi0uMi4zLS41LjUtLjcuMi0uMy4zLS43LjItMS0uMS0uNS0xLjMtMy4yLTEuNi0zLjgtLjItLjMtLjQtLjQtLjctLjVoLTEuMWMtLjIgMC0uNC4xLS42LjFsLS4xLjFjLS4yLjEtLjQuMy0uNi40LS4yLjItLjMuNC0uNS42LS43LjktMS4xIDItMS4xIDMuMSAwIC44LjIgMS42LjUgMi4zbC4xLjNjLjkgMS45IDIuMSAzLjYgMy43IDUuMWwuNC40Yy4zLjMuNi41LjguOCAyLjEgMS44IDQuNSAzLjEgNy4yIDMuOC4zLjEuNy4xIDEgLjJoMWMuNSAwIDEuMS0uMiAxLjUtLjQuMy0uMi41LS4yLjctLjRsLjItLjJjLjItLjIuNC0uMy42LS41cy40LS40LjUtLjZjLjItLjQuMy0uOS40LTEuNHYtLjdzLS4xLS4xLS4zLS4yeiI+PC9wYXRoPjwvc3ZnPg==">
        </a>
    </div>

    <button id="scroll-top" title="Back to Top"><i class="fal fa-angle-up"></i></button>

    <div class="mobile-menu-overlay "></div>

    <div class="mobile-menu-container mobile-menu-light  ">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fal fa-times"></i></span>

            <form class="input-group input-light input-search" action="#">
                <input type="text" class="form-control search-control" placeholder="search" required>
                <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
            </form>

            <nav class="mobile-nav mt-5">
                <ul class="mobile-menu">
                    <li>
                        <a href="index.html" class="sf-with-ul">Home</a>

                    </li>
                    <li>
                        <a href="about.html" class="sf-with-ul">About</a>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Our Services</a>
                        <ul>
                            <li><a href="#"><i></i>Vascular Surgery Services</a>

                                <ul class="sub-menu">
                                    <li><a href="varicose_veins_in_hyderabad.html"><i class="fas fa-angle-right"></i>Varicose
                                            Veins</a></li>
                                    <li><a href="deep_vein_thrombosis_in_hyderabad.html"><i class="fas fa-angle-right"></i>Deep Vein
                                            Thrombosis</a></li>
                                    <li><a href="vascular_malformation_in_hyderabad.html"><i class="fas fa-angle-right"></i>Vascular
                                            Malformation</a></li>
                                    <li><a href="aortic_aneurysms_in_hyderabad.html"><i class="fas fa-angle-right"></i>Aortic
                                            Aneurysms</a></li>
                                    <li><a href="mesenteric_vasculature_in_hyderabad.html"><i class="fas fa-angle-right"></i>Mesenteric Vasculature</a></li>
                                    <li><a href="acute_limb_ischemia_in_hyderabad.html"><i class="fas fa-angle-right"></i>Acute limb
                                            Ischemia</a></li>
                                    <li><a href="peripheral_artery_disease_in_hyderabad.html"><i class="fas fa-angle-right"></i>Peripheral Artery Disease</a></li>
                                    <li><a href="tos_in_hyderabad.html"><i class="fas fa-angle-right"></i>Thoracic Outlet Syndrome
                                            (TOS) </a></li>
                                    <li><a href="stroke_prevention_in_hyderabad.html"><i class="fas fa-angle-right"></i>Stroke
                                            Prevention</a></li>
                                    <li><a href="angiography_in_hyderabad.html"><i class="fas fa-angle-right"></i> Angiography</a>
                                    </li>
                                    <li><a href="vascular_access_dialysis_patients_in_hyderabad.html"><i class="fas fa-angle-right"></i>Vascular Access(dialysis patients) </a>
                                    </li>
                                    <li><a href="vascular_access_for_chemotherapy_in_hyderabad.html"><i class="fas fa-angle-right"></i> Vascular Access For Chemotherapy</a>
                                    </li>
                                    <li><a href="wound_care_in_hyderabad.html"><i class="fas fa-angle-right"></i> Wound Care</a></li>
                                </ul>

                            </li>

                            <li><a href="#"><i></i>Interventional Radiology Services</a>

                                <ul class="sub-menu">

                                    <li><a href="hepatobiliary_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Hepatobiliary Interventions</a></li>
                                    <li><a href="iog_in_hyderabad.html"><i class="fas fa-angle-right"></i>Interventions In Obstetrics
                                            & Gynaecology</a></li>
                                    <li><a href="lti_in_hyderabad.html"><i class="fas fa-angle-right"></i>Liver Transplant
                                            Interventions</a></li>
                                    <li><a href="renal_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Renal
                                            Interventions</a></li>
                                    <li><a href="pulmonary_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Pulmonary Interventions</a></li>
                                    <li><a href="gastrointestinal_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Gastrointestinal Interventions</a></li>
                                    <li><a href="oncology_interventions_in_hyderabad.html"><i class="fas fa-angle-right"></i>Oncology
                                            Interventions</a></li>


                                </ul>



                            </li>

                            <li><a href="#">Podiatry
                                    Services</a>

                                <ul class="sub-menu">

                                    <li><a href="callus_trimming_in_hyderabad.html"><i class="fas fa-angle-right"></i>Callus Trimming</a>
                                    </li>
                                    <li><a href="nail_trimming_in_hyderabad.html"><i class="fas fa-angle-right"></i>Nail Trimming</a></li>
                                    <li><a href="ozoneandoxyzen_therapy_in_hyderabad.html"><i class="fas fa-angle-right"></i>Ozone and Oxyzen Therapy</a></li>
                                    <li><a href="anodyne_treatment_in_hyderabad.html"><i class="fas fa-angle-right"></i>Anodyne Treatment</a></li>
                                </ul>
                            </li>

                            <li><a href="emergency_vascular_services_in_hyderabad.html"><i></i>Emergency Vascular Services</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="treatments.html" class="sf-with-ul">Treatments</a>

                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Speciality Clinics</a>
                        <ul>
                            <li><a href="diabetic_foot&wound_care_clinic_in_hyderabad.html">Diabetic Foot and Wound Care Clinic</a>
                            </li>
                            <li><a href="vascular_genetic_clinic_in_hyderabad.html">Vascular Genetic Clinic</a></li>
                            <li><a href="aortic_clinic_in_hyderabad.html">Aortic Clinic</a></li>
                            <li><a href="thrombosis_clinic_in_hyderabad.html">Thrombosis Clinic</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html" class="sf-with-ul">Blog</a>

                    </li>
                    <li>
                        <a href="gallery.html" class="sf-with-ul">Gallery</a>

                    </li>
                    <li>
                        <a href="contact.html" class="sf-with-ul">Contact</a>

                    </li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <div class="social-icons mt-6">

                <a href="https://www.facebook.com/Hyderabadvascularspecialists/" class="social-icon" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/onestopvascularsolutions/" class="social-icon" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a> -->
                <a href="https://pin.it/7gszVxIH9" class="social-icon" target="_blank" title="Pintrest"><i class="fab fa-pinterest"></i></a>
                <li><a href="https://www.linkedin.com/company/onestopvascular/?viewAsMember=true
                            " target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                <a href="#" class="social-icon" title="Youtube"><i class="fab fa-youtube"></i></a>




            </div><!-- End .social-icons -->

            <div class="mobile-actions">
                <a href="appointment.html" class="btn btn-secondary-color btn-xs"><span>Book
                        Appointment</span></a>
            </div><!-- End .mobile-actions -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->



    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/datepicker.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>

</body>

</html>