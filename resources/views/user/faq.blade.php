@include('include.header')

<main id="content">
    <div class="container">
        <div class="py-4 py-lg-5 py-xl-8">
            <h6 class="font-weight-medium font-size-7 font-size-xs-25 text-center" >Frequently Asked Questions</h6>
        </div>
        <div class="col-lg-8 mx-auto">
            <div class="space-bottom-2 space-bottom-lg-3 faq-accordion">
                <div class="pb-lg-1">
                    <div class="mb-8 pb-1">
                        <div id="basicsAccordion" >

                            <div class="card rounded-0 border-0">
                                <div class="card-collapse card-header p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingOne">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none"
                                        data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                        aria-controls="basicsCollapseOne">
                                        <span class="mx-md-1">I couldn't find the book I wanted. Now what?</span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">There's no one magic solution; some ideas you may want to consider include:
                                            </p>
                                            <ul>
                                                <li>Try running your search again later
                                                </li>
                                                <li>You can always check with our verified partner booksellers specializing in your subject area.
                                                </li>
                                                <li>Double-check your data
                                                </li>
                                                <li>If the book is out of stock, you can make an order request. We will try to restock the book as soon as possible.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card rounded-0 border-0 ">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingTwo">
                                    <h5 class="mb-0">
                                        <button type="button"
                                            class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                            data-toggle="collapse" data-target="#basicsCollapseTwo"
                                            aria-expanded="false" aria-controls="basicsCollapseTwo">
                                            <span class="mx-md-1">How to make a request for a book that is unavailable?
                                            </span>
                                            <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                            </svg>
                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                            </svg>
                                        </button>
                                    </h5>
                                </div>
                                <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class=" m-1">
                                            <p class="mb-4 pb-1 font-size-2">Go to the request section on the website and place your request, soon as the book is available you will be notified via Email or phone
                                            </p>
                                            <span class="font-size-2">This feature is only available upto August 20, 2021; 2200 hours
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingThree">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false"
                                        aria-controls="basicsCollapseThree">
                                        <span class="mx-md-1">Do I need to have an account for shopping?</span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Yep, it is mandatory to have your own account on the website. You should create your account to experience an individualized shopping feel, also including suggestions, fast checkout procedure and a personal wishlist. You will also be able to rate and review the items and the vendors according to your choice.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingFour">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">Are the books new or old?
                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">We have a collection of both fresh and second hand books, all in good condition.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingFive">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false"
                                        aria-controls="basicsCollapseFive">
                                        <span class="mx-1">Can I cancel/return my product?
                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Product cancellation would not be approved after successful payment. For returning the product please view our return policy.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingSix">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">When will I get my refund?

                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">
                                                Kindly view our refund policy.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingSeven">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">Do you provide cash on delivery?


                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">
                                                No. Books can be purchased through online payment only due to the covid outbreak.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingEight">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseEight" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">Do you deliver outside India?



                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseEight" class="collapse" aria-labelledby="basicsHeadingEight"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">
                                                Yes, we provide delivery outside India.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingNine">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseNine" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">What is ISBN_code?

                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseNine" class="collapse" aria-labelledby="basicsHeadingNine"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Every published book is given both a 10-digit and a 13-digit ISBN which are unique to that exact edition of the text. The ISBN can be found on the back cover of the text or inside the book on the page containing copyright information. For books that come shrink-wrapped with additional content, the ISBN on the shrink-wrap will be different from the ISBN on the textbook.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeadingTen">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapseTen" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">Do I have to pay extra for shipping?


                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapseTen" class="collapse" aria-labelledby="basicsHeadingTen"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">We will let you know this Soon..

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading11">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse11" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        <span class="mx-1">What is ISBN_code?

                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse11" class="collapse" aria-labelledby="basicsHeading11"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Every published book is given both a 10-digit and a 13-digit ISBN which are unique to that exact edition of the text. The ISBN can be found on the back cover of the text or inside the book on the page containing copyright information. For books that come shrink-wrapped with additional content, the ISBN on the shrink-wrap will be different from the ISBN on the textbook.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading12">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse12" aria-expanded="false"
                                        aria-controls="basicsCollapse12">
                                        <span class="mx-1">How can I track my order?

                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse12" class="collapse" aria-labelledby="basicsHeading12"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">As soon as your order has been entered into logs and payment has been authorized, the vendors will affirm the order receipt and they will begin working on it.

                                            </p>
                                            <span class="font-size-2">You will get an email confirming your order details as soon as the vendor gets the information and he also affirms about the same. In that following email you will given a singular OrderID, the list of the item(s) ordered and by what the time period you can expect your order to be delivered
                                            </span>
                                            <span class="font-size-2">You will be informed beforehand about the shipment of your order. Shipment details will be given with your unique OrderID and tracking digits

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading13">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse13" aria-expanded="false"
                                        aria-controls="basicsCollapse13">
                                        <span class="mx-1">What is the best way to contact you?


                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse13" class="collapse" aria-labelledby="basicsHeading13"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">For any general queries regarding order details or any product, feel free to call or message us at  xxxxxxxxxx .You can also email us at xxxx . We shall get back to you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="card rounded-0 border-0">
                                <div class="card-collapse card-header p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading14">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse14" aria-expanded="false"
                                        aria-controls="basicsCollapse14">
                                        <span class="mx-md-1">Why can’t I receive orders in my area?
                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse14" class="collapse show" aria-labelledby="basicsHeading14"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2"> It could be possible because of following reasons:

                                            </p>
                                            <ul>
                                                <li>Your location is not suitable for the seller to ship the products.
                                                </li>
                                                <li>There might be a legal boundary of delivery of that product in your region.
                                                </li>
                                                <li>There might not be any genial courier service in your region.
                                                </li>
                                                <li>Sometimes vendors are not comfortable shipping in such regions and this is dependent on their free will entirely.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading15">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse15" aria-expanded="false"
                                        aria-controls="basicsCollapse15">
                                        <span class="mx-1">What should I do if I find my package opened or tampered with upon delivery?



                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse15" class="collapse" aria-labelledby="basicsHeading15"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Please don't accept an open or tampered package. Report this concern by contacting us through phone or mail within the 10 days period. We will look at it immediately and get back to you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0">
                                <div class="card-header card-collapse p-0 bg-transparent border-bottom-0"
                                    id="basicsHeading16">
                                    <button type="button"
                                        class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none mt-minus-1"
                                        data-toggle="collapse" data-target="#basicsCollapse16" aria-expanded="false"
                                        aria-controls="basicsCollapse16">
                                        <span class="mx-1">Can I buy more than one product in one go?


                                        </span>
                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="basicsCollapse16" class="collapse" aria-labelledby="basicsHeading14"
                                    data-parent="#basicsAccordion">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="mx-md-1">
                                            <p class="mb-4 pb-1 font-size-2">Yes, you can. As you click the Buy button on a product page, it gets added to your shopping cart. You can add as many products as you want and then pay for the entire order in one go!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('include.footer')

{{-- Script Start --}}
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
{{-- Script End --}}

</body>

</html>
