@extends('layout-frontend.mainlayout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>A propos de nous</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/school.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>[ IUES / INSAM (INSTITUT UNIVERSITAIRE ET STRATÉGIQUE DE L'ESTUAIRE) ].</h3>
                        <p class="fst-italic">
                            IUEs/INSAM fait aujourd’hui partie des sept (07) instituts universitaire privés reconnus par le
                            MINESUP. Notre groupe comprend plusieurs grandes écoles de formation universitaire et
                            professionnelle, à savoir : EFPSA, INSAM, ISSAS et ISTE .
                        </p>

                        <p>
                            Fondé en 2005, notre institut s’est progressivement agrandi. Et actuellement, fort de nos
                            multiples partenariats avec des universités internationales, nous offrons plusieurs types de
                            cursus. Nous octroyons également des bourses d’études pour les meilleurs étudiants, et notre
                            collaboration avec de grandes écoles internationales nous a permis de lancer des spécialités
                            avancées qui aboutissent à des Certifications.

                            En tant que l’un des leaders sur le territoire camerounais, nous avons fait construire plusieurs
                            campus à travers le territoire national et la sous-région. La diversité de nos filières et la
                            qualité de nos produits font de nous l’un des acteurs majeurs pour l’amélioration de la qualité
                            de notre environnement professionnel. Nous disposons d'une radio pour les étudiants qui nous
                            sert également de support d'information et de communication
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Students</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Courses</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Events</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Trainers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->


    </main><!-- End #main -->
@endsection
