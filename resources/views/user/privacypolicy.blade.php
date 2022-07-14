@include('include.header')

<main id="content">
    <div class="container"  >
        <div class="space-bottom-1 space-bottom-lg-2 space-bottom-xl-3">
            <div class="pb-lg-4">
                <div class="py-4 py-lg-5 py-xl-8">
                    <h6 class="font-weight-medium font-size-7 font-size-xs-25 text-center">Privacy policy</h6>
                </div>
                <div class="mb-5 mb-lg-8">

                    <ol class="list-unstyled mb-0">
                        <p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service.
                            If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect is used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
                            The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at , unless otherwise defined in this Privacy Policy.
                            </p>
                    </ol>
                </div>
                <div class="mb-5 mb-lg-9">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Information Collection and Use

                    </h6>
                   <p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.
                </p>
                </div>
                <div class="mb-5 mb-lg-10">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Log Data
                        </h6>
                    <p>We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer's Internet Protocol address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.</p>
                </div>
                <div>
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Cookies
                    </h6>
                   <p>Cookies are files with a small amount of data that is commonly used as an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.
                    Our website uses these cookies to collect information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.
                    </p>
                </div>

                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Service Providers

                        </h6>
                    <p>We may employ third-party companies and individuals due to the following reasons:
                        To facilitate our Service;
                        To provide the Service on our behalf;
                        To perform Service-related services.
                        We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.
                        </p>
                </div>
                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Security</h6>
                  <p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>

                </div>
                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Children's Privacy
                    </h6>
                   <p>Our Services do not address anyone under the age of 18. We do not knowingly collect personal identifiable information from children under 18. In the case we discover that a child under 18 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>
                </div>
                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Changes to This Privacy Policy
                    </h6>
                   <p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. These changes are effective immediately, after they are posted on this page.</p>
                </div>
                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">ERRORS, INACCURACIES AND OMISSIONS
                    </h6>
                    <p class="font-size-2 mb-0 text-lh-1dot72">Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order). The concerned booksellers are liable for the inaccuracies of any information.
                        We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.

                        </p>
                </div>
                <div style="margin-top: 30px">
                    <h6 class="font-weight-medium font-size-4 mb-4 pb-1">Contact Us
                    </h6>
                    <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at info <email-id>.
                        This Privacy Policy page was created by Team E-CELL NIT-B.
                        </p>
                </div>

    </div>
</main>

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
