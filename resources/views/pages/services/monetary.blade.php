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
                        <h1 class="page-title">Monetary Contribution</h1>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <a href="#" class="me-4 thumbnail">
                            <img src="{{ asset('zenblog/assets/img/image-2.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            {{--   <div class="post-meta mt-4">About us</div> --}}
                          {{--   <h2 class="mb-2 display-4">Company History</h2> --}}
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



                </div>

            </div>
        </section>

        <section class="mb-5 bg-light py-5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">How it works</h2>
                                <p>See how fast and easy it is to get your projects funded through us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center mb-5">

                        <img src="{{ asset('zenblog/assets/img/register.png') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Register an account</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span> --}}
                        <p>Sign up takes few minutes</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/updateprofile.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Update the profile</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Update Your Profile</span> --}}
                        <p>Update your account for easy identification</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/newproject.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Create a Project</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Create a Project</span> --}}
                        <p>Add a project that you need help to fund</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">

                        <img src="{{ asset('zenblog/assets/img/share.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Share with family and friends</h4>
                       {{--  <span class="d-block mb-3 text-captialize">Share with family and friends</span> --}}
                        <p>Share on social media with family and friends.</p>
                    </div>
                </div>
                <div class="mt-2 mb-4 text-center">

                    <a href="{{route('register')}}" class="btn btn-primary">Register Now</a>
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
