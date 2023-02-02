<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>fadjarrafi.be</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/world-wide-web.png') }}">
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#home" class="nav_logo">
                Fadjar Irfan Rafi
            </a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav-item">
                        <a href="#home" class="nav_link active_link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav_link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav_link">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav_link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav_link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav_link">Writings</a>
                    </li>
                </ul>

                <div class="nav_close" id="nav-close">
                    <i class="uil uil-times nav_close" id="nav-close"></i>
                </div>
            </div>

            <div class="nav_btns">
                <!--===== THEME CHANGE BUTTON =====-->
                <i class="uil uil-moon change_theme" id="theme-button"></i>

                <div class="nav_toogle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_img">
                    <img src="{{ asset('img/main_photo.png') }}" alt="">
                </div>

                <div class="home_data">
                    <h1 class="home_title">Hi🖐, I'm Fadjar </h1>
                    <h3 class="home_subtitle">Web developer</h3>
                    <p class="home_description">
                        Fresh Graduate from Computer Science at Amikom University Yogyakarta. Experience in 1 year as a
                        Backend Programmer Freelancer.
                    </p>
                    <a href="#contact" class="button button--flex">
                        Contact Me <i class="uil uil-message button__icon"></i>
                    </a>
                    <div class="home_scroll">
                        <a href="#about" class="home_scroll-button button--flex"></a>
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </div>
                    <div class="home_social">
                        <p class="home_social-follow">Follow Me</p>
                        <div class="home_social-links">
                            <a href="https://www.linkedin.com" target="_blank" rel=”noopener noreferrer”
                                class="home_social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://www.dribbble.com" target="_blank" rel=”noopener noreferrer”
                                class="home_social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="https://www.github.com" target="_blank" rel=”noopener noreferrer”
                                class="home_social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home_scroll_social">
                        <div class="home_scroll1">
                            <a href="#about" class="home_scroll-button button--flex"></a>
                            <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                            <span class="home_scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home_scroll-arrow"></i>
                        </div>
                        <div class="home_social1">
                            <div class="home_social-link">
                                <a href="mailto:dark.fir21@gmail.com" target="_blank" rel="noopener noreferrer"
                                    class="home_social-icon">
                                    <i class="uil uil-envelope"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/fadjar-irfan-rafi/" target="_blank"
                                    rel="noopener noreferrer" class="home_social-icon">
                                    <i class="uil uil-linkedin-alt"></i>
                                </a>
                                <a href="https://github.com/fadjarrafi" target="_blank" rel="noopener noreferrer"
                                    class="home_social-icon">
                                    <i class="uil uil-github-alt"></i>
                                </a>
                                <a href="https://www.instagram.com/fadjar.rafi/" target="_blank"
                                    rel="noopener noreferrer" class="home_social-icon">
                                    <i class="uil uil-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about_container container grid">
                <!-- <img src="assets/img/about-img.png" alt="" class="about_img"> -->

                <div class="about_data">
                    <p class="about_description">
                        Hello, i am Fadjar Irfan Rafi. As a backend developer with over 1 year of experience, I have
                        expertise in developing
                        apps using PHP and Laravel framework. In my current role, I have been responsible for designing
                        and implementing server-side logic, ensuring system performance and scalability. I have also
                        been involved in troubleshooting and debugging issues, as well as maintaining and improving
                        existing codebase.
                    </p>
                    <div class="about_info">
                        <div>
                            <span class="about_info-title">01+</span>
                            <span class="about_info-name">Years <br>experience</span>
                        </div>
                        <div>
                            <span class="about_info-title">04+</span>
                            <span class="about_info-name">Completed <br>project</span>
                        </div>
                        <div>
                            <span class="about_info-title">02+</span>
                            <span class="about_info-name">Companies <br>worked</span>
                        </div>
                    </div>
                    <div class="about_buttons">
                        <a href="assets/pdf/CV-Fadjar_Irfan_Rafi.pdf" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Tech Stack</h2>
            <span class="section__subtitle">My technical skills</span>

            <div class="skills_container container grid">
                <div>
                    <!--=========== SKILL 1 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Frontend</h1>
                                <!-- <span class="skills_subtitle">More than 4 years</span> -->
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_box">
                                <div class="skills_img">
                                    <img src="{{ asset('img/html.svg') }}" alt="html">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/css.svg') }}" alt="css">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/javascript.svg') }}" alt="javascript">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/bootstrap.svg') }}" alt="bootstrap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=========== SKILL 2 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Tools</h1>
                                <!-- <span class="skills_subtitle">More than 7 years</span> -->
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_box">
                                <div class="skills_img">
                                    <img src="{{ asset('img/laragon.svg') }}" alt="laragon">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/postman.svg') }}" alt="postman">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/git.svg') }}" alt="git">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--=========== SKILL 3 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Backend</h1>
                                <!-- <span class="skills_subtitle">More than 5 years</span> -->
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_box">
                                <div class="skills_img">
                                    <img src="{{ asset('img/php.svg') }}" alt="php">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/golang.svg') }}" alt="golang">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/laravel.svg') }}" alt="laravel">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/nodejs.svg') }}" alt="nodejs">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/gin-gonic.png') }}" alt="gin-gonic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=========== SKILL 3 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Database</h1>
                                <!-- <span class="skills_subtitle">More than 5 years</span> -->
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_box">
                                <div class="skills_img">
                                    <img src="{{ asset('img/postgresql.svg') }}" alt="postgresql">
                                </div>
                                <div class="skills_img">
                                    <img src="{{ asset('img/mysql.svg') }}" alt="mysql">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journel</span>

            <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification_icon"></i>
                        Education
                    </div>
                    <div class="qualificaction_button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification-icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification_sections">
                    <!--========== QUALIFICATION CONTENT 1 ==========-->
                    <div class="qualification_content qualification_active" data-content id="education">
                        <!--============= QUALIFICATION 1 ===========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Computer Science</h3>
                                <span class="qualification_subtitle">Amikom University Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    2018 - 2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--============= QUALIFICATION 2 ===========-->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">Research Assistant</h3>
                                <span class="qualification_subtitle">Amikom University Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    2021 - 2022
                                </div>
                            </div>

                        </div>
                        <!--============= QUALIFICATION 3 ===========-->
                        <div class="qualification_data">

                            <div>
                                <h3 class="qualification_title">Penggalian Potensi Mahasiswa</h3>
                                <span class="qualification_subtitle">Amikom University Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    2020 - 2021
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--============= QUALIFICATION 4 ===========-->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <!--<span class="qualification_line"></span>-->
                            </div>


                            <div>
                                <h3 class="qualification_title">FOSSIL (Free Open Source Software Interest League)</h3>
                                <span class="qualification_subtitle">Amikom University Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    2019
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--========== QUALIFICATION CONTENT 2 ==========-->
                    <div class="qualification_content" data-content id="work">
                        <!--============= QUALIFICATION 1 ===========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Backend Programmer</h3>
                                <span class="qualification_subtitle">Kardusinfo - Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    April 2021 - November 2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>
                        <!--============= QUALIFICATION 2 ===========-->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <!-- <span class="qualification_line"></span> -->
                            </div>

                            <div>
                                <h3 class="qualification_title">Backend Programmer</h3>
                                <span class="qualification_subtitle">CRSL - Yogyakarta</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    June 2021 - August 2022
                                </div>
                            </div>

                        </div>
                        <!--============= QUALIFICATION 3 ===========-->
                        <!-- <div class="qualification_data">
                          <div>
                              <h3 class="qualification_title">Ui Designer</h3>
                              <span class="qualification_subtitle">Figma - Germany</span>
                              <div class="qualificaation_calender">
                                  <i class="uil uil-calender-alt"></i>
                                  2017 - 2019
                              </div>
                          </div>
                          <div>
                              <span class="qualification_rounder"></span>
                              <span class="qualification_line"></span>
                          </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Stuff I do</h2>
            <span class="section__subtitle">What is offer</span>

            <div class="services_container container grid">
                <!--============== SERVICES 1 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">API <br> Development</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal ">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">API <br> Development</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Help design and develop REST APIs for ecommerce that are integrated into the
                                        Mobile App.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Write clean, efficient, and well-documented code.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Test and debug APIs to ensure they meet specifications.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Ensure that all APIs are secure and adhere to industry standards.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 2 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Database <br> Development</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Database <br> Development</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Design and develop databases.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Test and debug databases to ensure they meet specifications.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Write and maintain documentation for databases and their functions.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 3 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Backend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Backend <br> Developer</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Design and develop robust and scalable backend systems.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Test and debug backend systems to ensure they meet specifications.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Write clean, efficient, and well-documented code.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Write and maintain documentation for backend systems and their functions.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div class="portfolio_container container swiper-container">
                <div class="swiper-wrapper">
                    <!--============ PORTFOLIO 1 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{ asset('img/ciptawiratirta.png') }}" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Cipta Wira Tirta</h3>
                            <p class="portfolio_description">
                                The company was established in May 2000 as a representative office for Wilhelmsen Ship
                                Management formerly known as Barber International.
                            </p>
                            <a href="https://ciptawiratirta.com/"
                                class="button button--flex button--small portfolio_button">
                                Visit
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============ PORTFOLIO 2 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{ asset('img/kardusinfo.png') }}" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Kardusinfo</h3>
                            <p class="portfolio_description">
                                Digital agency based on Yogyakarta
                            </p>
                            <a href="https://kardusinfo.com/"
                                class="button button--flex button--small portfolio_button">
                                Visit
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============ PORTFOLIO 3 ==============-->
                    <!-- <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/portfolio3.jpeg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Online Store</h3>
                            <p class="portfolio_description">
                                Website adaptable to all devices,with ui description
                                and animated interactions.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div> -->
                </div>

                <!--Add Arrow-->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                <!--Add Pagination-->
                <div class="swiper-pagination"></div>
            </div>
            <br>
            <br>
            <br>
            <br>

        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <!-- <section class="project section">
            <div class="project_bg">
                <div class="project_container container grid">
                    <div class="project_data">
                        <h2 class="project_title">You have new project</h2>
                        <p class="project_description">Contact me now and get a 50% discounted</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contact Me
                            <i class="uil uil-message project_icon button_icon"></i>
                        </a>
                    </div>

                    <img src="assets/img/home.png" alt="" class="project_img">
                </div>
            </div>
        </section> -->

        <!-- ==================== TESTIMONIAL ====================
        <section class="testimonial section">
            <h2 class="section__title">Testimonial</h2>
            <span class="section__subtitle">My client saying</span>

            <div class="testimonial_container container swiper-container">
                <div class="swiper-wrapper">
                    ========= TESTIMONIAL 1 ==========
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Jay Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    ========= TESTIMONIAL 2 ==========
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">John Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    ========= TESTIMONIAL 3 ==========
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial3.jpeg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Mike Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>

                </div>
                Add Pagination
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>
        </section> -->

        <!--==================== CONTACT ME ====================-->
        <!-- <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle">444-444-444</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">dark.fir21@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Sleman, Yogyakarta #1234</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">Name</label>
                            <input type="text" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Email</label>
                            <input type="email" class="contact_input">
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Project</label>
                        <input type="tetx" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Project description</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
                    </div>
                    <div>
                        <a href="#" class="button button--flex">
                            Send Message
                            <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </form>
            </div>
        </section> -->
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Fadjar Irfan Rafi</h1>
                    <span class="footer_subtitle">Web developer</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Contact Me</a>
                    </li>
                </ul>
                <div class="footer_social">
                    <a href="mailto:dark.fir21@gmail.com" target="_blank" rel="noopener noreferrer"
                        class="footer_social">
                        <i class="uil uil-envelope"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel=”noopener noreferrer”
                        class="footer_social">
                        <i class="uil uil-linkedin"></i>
                    </a>
                    <a href="https://github.com/fadjarrafi" target="_blank" rel=”noopener noreferrer”
                        class="footer_social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/fadjar.rafi/" target="_blank" rel="noopener noreferrer"
                        class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; Share Tutorials. All right reserved</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
