<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.partials.head')
</head>

<body>

    @include('pages.partials.header')

    <main id="main">

        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">About us</h1>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <a href="#" class="me-4 thumbnail">
                            <img src="{{ asset('zenblog/assets/img/image-1.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            {{--   <div class="post-meta mt-4">About us</div> --}}
                            <h2 class="mb-2 display-4">Company History</h2>
                            <p>
                                MOREN-O Goodwill Foundation was incorporated in Nigeria three and half years ago as a
                                non-profit organization with the main objective of assisting the underprivileged in the
                                society through its charitable activities and programmes.
                                The Founder, Dr Oluwaseun Olusegun was inspired to set up MOREN-O in memory of his Mum
                                who passed away several years ago.
                                Mama Morenike Olusegun had this mantra in her lifetime that “…help whenever you can”,
                                and she was well known in her community as a woman with a golden heart and immense
                                goodwill.
                                The name MOREN-O was formed from part of her first name, Moren-ikeji and the initial of
                                her last name O-lusegun.
                            </p>
                            <p>
                                As part of Dr Olusegun’s vision to make MOREN-O Goodwill Foundation a global charity
                                organization he decided to establish an International outreach of the Foundation in his
                                base in the Texas, United States of America.

                            </p>

                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half mt-5">
                        <a href="#" class="me-4 thumbnail order-2">
                            <img src="{{ asset('zenblog/assets/img/image-2.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="pe-md-5 mt-4 mt-md-0">
                            {{--  <div class="post-meta mt-4">Mission &amp; Vision</div> --}}
                            {{--  <h2 class="mb-2 display-4">Mission &amp; Vision</h2> --}}
                            <p>
                                As part of the Foundation’s long term plan, we hope to carry out charitable activities
                                and programmes in many regions across the world, especially developing countries around
                                the world.
                            </p>

                            <p>We currently have offices in Odessa, Texas in the United States of America, Lagos and
                                Ibadan in western Nigeria; and we hope to establish many more across regions where we
                                hope to carry our international outreaches.
                            </p>
                            <p>We have a compact team of talented young men and women working on ad hoc basis for our
                                foundation; and as we expand our operations across multiple regions some of them will be
                                full-fledged members of our team.
                                We have organized several charity events in low income communities in Nigeria handing
                                out clothing items to women and children and serving them hot meals during our
                                charitable events.
                            </p>
                            <p>
                                We seek support from donor agencies and institutions both private and public in
                                realizing most
                                of our aims and objectives. Join our list of donors as your donation today will go a
                                long way in
                                alleviating the suffering of the underprivileged and the vulnerable in our various
                                communities.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="mb-5 bg-light py-5">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between align-items-lg-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="display-4 mb-4">Latest News</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores
                            iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas
                            architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate
                            eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
                        <p>At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam
                            fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel
                            impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe
                            eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
                        <p><a href="#" class="more">View All Blog Posts</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('zenblog/assets/img/post-portrait-3.jpg') }}" alt=""
                                    class="img-fluid mb-4">
                            </div>
                            <div class="col-6 mt-4">
                                <img src="{{ asset('zenblog/assets/img/post-portrait-4.jpg') }}" alt=""
                                    class="img-fluid mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Our Team</h2>
                                <p>The Heroes with the passion to transform the world</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/person-1.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Dr. Oluwaseun Olusegun</h4>
                        <span class="d-block mb-3 text-uppercase">Board &amp; Chair</span>
                        <p>
                            Dr. Oluwaseun is the Founder and Chairman of Moren-o Goodwill Foundation. He is a
                            philanthropist who is passionate about alleviating the suffering of underprivileged people,
                            not
                            just in his local community in Dallas where he is a parish pastor of the Redeemed Christian
                            Church of God; but as well as his native country Nigeria where he organizes quarterly
                            charity
                            events in some low income communities in Lagos State. {{-- The Nigerian branch of the foundation
                            has been actively involved in the distribution of clothing items, as well as handing out
                            packed
                            hot meals to women and children in many communities around Idimu, a suburban town in Lagos
                            State. Dr Seun, fondly called Mr Shawn by friends and colleagues in and around his base in
                            Dallas, Texas is also chief executive of two other companies, Jessmart Multimedia Studios
                            and
                            Divine Habitat; and the Parish Pastor of RCCG Redemption Parish, MIDLAND TEXAS. He holds a
                            doctorate degree from the prestigious...... Dr Oluwaseun is happily married with children --}}
                        </p>
                        <div class="position-relative">
                            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                            <a href="#" class="mx-2"><span class="bi-linkedin"></span></a>
                            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                        </div>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/person-3.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Folashade Olusegun</h4>
                        <span class="d-block mb-3 text-uppercase">Donor Relationship Director</span>
                        <p>
                            From her base in Odessa, Texas, Folashade explore her network of contacts both in Nigeria,
                            and
                            the United States, ensuring the Foundation gets support from donors and other relevant
                            stakeholders. She is a KYC/AML Analyst working with Capital Staffing Solutions where she is
                            contributing to Wealth Development in the digital banking and her vigilance serve as a
                            deterrent
                            to money laundering. {{-- Folashade desire to serve and care for humanity which necessitate
                            studying nursing. She is a professional teacher, a graduate nurse married with children and
                            also
                            a church minister. --}}
                        </p>
                        <div class="position-relative">
                            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                            <a href="#" class="mx-2"><span class="bi-linkedin"></span></a>
                            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                        </div>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/person-3.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Ayomide Olusegun</h4>
                        <span class="d-block mb-3 text-uppercase">Communications Director</span>
                        <p>
                            As our Communications Director, Ayomide oversees and manages all our communication
                            channels and multiple media platforms both traditional and social media; ensuring that we
                            constantly engage with our stakeholders and develop synergies for immediate, intermediate
                            and long term benefits of the Foundation. She currently lives in Odessa, Texas where she
                            also
                            heavily involved with the literary community of her local area.
                        </p>
                        <div class="position-relative">
                            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                            <a href="#" class="mx-2"><span class="bi-linkedin"></span></a>
                            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main><!-- End #main -->

    @include('pages.partials.footer')

</body>

</html>
