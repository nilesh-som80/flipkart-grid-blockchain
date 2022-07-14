@include('include.header');

<section>
    <main id="content">
        <div class="mb-5 space-bottom-lg-3">
            <div class="py-3 py-lg-7">
                <h6 class="font-weight-medium font-size-7 text-center my-1">About Us</h6>
            </div>
            <img class="img-fluid" src="./assets/img/1920x650/img1.jpg" alt="Image-Description">
            <div class="container">
                <div class="mb-lg-8">
                    <div class="col-lg-9 mx-auto">
                        <div class="bg-white mt-n10 mt-md-n13 pt-5 pt-lg-7 px-3 px-md-5 pl-xl-10 pr-xl-4">
                            <div class="mb-4 mb-lg-7 ml-xl-4">
                                <h6 class="font-weight medium font-size-10 mb-4 mb-lg-7">Welcome to E-CELL MANIT</h6>

                            </div>
                            <div class="mb-4 pb-xl-1 ml-xl-4">
                                {{-- <h6 class="font-weight-medium font-size-4 mb-4">What we really do?</h6> --}}
                                <p class="font-size-3" style="text-align:justify;">Maulana Azad National Institute of Technology (MANIT),
                                    established in year 1960 has been a prestigious institute of higher learning,
                                    producing meritorious students with excellent career growth and universal
                                    recognition since it's advent. The mesmerising all-embracing campus is of 650 acres,
                                    encompassed by boundary wall and ring road. The infrastructure of campus consists of
                                    administrative and academic buildings, workshops, community centre and residential
                                    area for accommodation of students and staff. Besides general infrastructure it
                                    includes elementary amenities such as post office, shopping complex, a school for
                                    children, dispensary, a campus temple, an auditorium with capacity of seating
                                    thousand people and sports complex with vast stretches of open area. It's a pride
                                    for anyone to be a part of this prestigious institute as the students get the best
                                    of opportunities in the form of highly advanced courses, eminent faculty members,
                                    well-equipped laboratories, library, hostels and immense facilities to excel in
                                    research and development.
                                    IDEOCLASH Entrepreneurship Development Cell MANIT conducted its first-ever online
                                    event, a webinar, on 6th September 2020 via the google meet platform. The event,
                                    which started at around 10:30 am saw massive participation from MANIT students and
                                    other colleges. Metamorphosis During the yearly technical fest (18th – 19th October
                                    2019) – Technosearch, the ED-Cell organized an event, 'Metamorphosis.' The aim was
                                    to inspire young, entrepreneurial minds by setting them up in an interactive session
                                    with MANIT Alumni – Mr. Yashraj Sunhare and Mr. Shubham Kumar, CEO and CTO of Jarvis
                                    Labs, respectively. StartUp Sunday StartUp Sunday was the second highly successful
                                    event conducted by the ED-Cell of MANIT on 1st March. ED Cell organized StartUp
                                    Sunday to make Sundays more productive for budding entrepreneurs to witness a
                                    startup's journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-5 mb-lg-7">
                    <div class="d-md-flex align-items-center justify-content-between px-xl-10">
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ml-lg-2">45M</div>
                            <span class="font-size-4">Active Readers</span>
                        </div>
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ml-2">+6k</div>
                            <span class="font-size-4">Total Pages</span>
                        </div>
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ">30.6M</div>
                            <span class="font-size-4">Buyers Activie</span>
                        </div>
                        <div class="text-center mb-0">
                            <div class="font-size-12 font-weight-medium ml-2">283</div>
                            <span class="font-size-4">Cup Of Coffe</span>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="mb-5 mb-lg-10">
                    <h6 class="font-weight-medium font-size-7 mb-5 mb-lg-6">Why We</h6>
                    <ul class="list-unstyled my-0 list-features row d-md-flex">
                        <li class="list-feature mb-5 mb-lg-0 col-md-6 col-lg-3">
                            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
                                <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                                    <i class="glyph-icon flaticon-delivery"></i>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <h4 class="feature__title font-size-3 text-dark">Free Delivery</h4>
                                    <p class="feature__subtitle m-0 text-dark">Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-feature  mb-5 mb-lg-0 col-md-6 col-lg-3">
                            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
                                <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                                    <i class="glyph-icon flaticon-credit"></i>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <h4 class="feature__title font-size-3 text-dark">Secure Payment</h4>
                                    <p class="feature__subtitle m-0 text-dark">Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-feature  mb-5 mb-md-0 col-md-6 col-lg-3">
                            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
                                <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                                    <i class="glyph-icon flaticon-warranty"></i>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <h4 class="feature__title font-size-3 text-dark">Money Back Guarantee</h4>
                                    <p class="feature__subtitle m-0 text-dark">Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-feature  mb-5 mb-md-0 col-md-6 col-lg-3">
                            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
                                <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                                    <i class="glyph-icon flaticon-help"></i>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <h4 class="feature__title font-size-3 text-dark">24/7 Support</h4>
                                    <p class="feature__subtitle m-0 text-dark">Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </main>
</section>

@include('include.footer')

<script type="text/javascript">
    getCategory();

    function getCategory() {

        $.ajax({
            url: '/api/category',
            method: 'GET',
            success: function(response) {
                // console.log(response);
                response.forEach(category => {
                    console.log(category.name);
                    $('#category').append(
                        `<li class="has-submenu">
                                <a href="/book_by_category/${category.category_id}" data-submenu="art-photo">${category.name}</a>
                            </li>`
                    )
                })
            }
        })
    }
</script>

</body>

</html>
