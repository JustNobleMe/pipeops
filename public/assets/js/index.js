const logStatus = null;
const header = document.querySelector(".bottom-header");
const topNotchPortrait = document.querySelector(".topNotchPortrait");
const topNotchLandscape = document.querySelector(".topNotchLandscape");
const popularPackages = document.querySelector(".popularPackages");
const specialOffer = document.querySelector(".specialOffer");

// storages
const locations = {
    portrait: [
        {
            locationName: "Disney Land",
            locationCountry: "Thailand",
            img: "img1.jpg"
        },
        {
            locationName: "Besseggen Ridge",
            locationCountry: "Norway",
            img: "img2.jpg"
        }
    ],
    landscape: [
        {
            locationName: "Oxolotan City",
            locationCountry: "New Zealand",
            img: "img3.jpg"
        },
        {
            locationName: "Marina Bay Sand City",
            locationCountry: "Singapore",
            img: "img4.jpg"
        }
    ]
};
const packages = [
    {
        image: "img28.jpg",
        name: "Sunset view of beautiful lakeside resident",
        discription: "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus",
        price: 1900,
        numberOfDays: 7,
        numberOfNights: 6,
        maxPeople: 5,
        location: "Malaysia",
        reviews: 25,
        rate: ""
    },
    {
        image: "img27.jpg",
        name: "Experience the natural beauty of island",
        discription: "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus",
        price: 1230,
        numberOfDays: 5,
        numberOfNights: 4,
        maxPeople: 8,
        location: "Canada",
        reviews: 17,
        rate: ""
    },
    {
        image: "img29.jpg",
        name: "Vacation to the water city of Portugal",
        discription: "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus",
        price: 2000,
        numberOfDays: 6,
        numberOfNights: 5,
        maxPeople: 6,
        location: "Portugal",
        reviews: 22,
        rate: ""
    }

];
const offer = [
    {
        image: "img9.jpg",
        location: "Canada",
        name: "Experience the natural beauty of glacier",
        discount: 20,
        price: {
            normal: 1500,
            current: 1200
        }
    },
    {
        image: "img10.jpg",
        location: "New Zealand",
        name: "Trekking to the mountain camp site",
        discount: 15,
        price: {
            normal: 1300,
            current: 1105
        }
    },
    {
        image: "img11.jpg",
        location: "Malaysia",
        name: "Sunset view of beautify lakeside city",
        discount: 15,
        price: {
            normal: 1800,
            current: 1476
        }
    }
];

// Header
header.innerHTML = `
    <div class="container d-flex justify-content-between align-items-center">
    <div class="site-identity">
    <h1 class="site-title">
        <a href="index.php">
            <img class="white-logo" src="assets/images/travele-logo.png" alt="logo">
            <img class="black-logo" src="assets/images/travele-logo1.png" alt="logo">
        </a>
    </h1>
    </div>
    <div class="main-navigation d-none d-lg-block">
    <nav id="navigation" class="navigation">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Tour</a>
                <ul>
                <li>
                    <a href="destination.html">Destination</a>
                </li>
                <li>
                    <a href="tour-packages.html">Tour Packages</a>
                </li>
                <li>
                    <a href="package-offer.html">Package Offer</a>
                </li>
                <li>
                    <a href="package-detail.html">Package Detail</a>
                </li>
                <li>
                    <a href="tour-cart.html">Tour Cart</a>
                </li>
                <li>
                    <a href="booking.html">Package Booking</a>
                </li>
                <li>
                    <a href="confirmation.html">Confirmation</a>
                </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Pages</a>
                <ul>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="service.html">Service</a>
                </li>
                <li>
                    <a href="career.html">Career</a>
                </li>
                <li>
                    <a href="career-detail.html">Career Detail</a>
                </li>
                <li>
                    <a href="tour-guide.html">Tour Guide</a>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="single-page.html">Single Page</a>
                </li>
                <li>
                    <a href="faq.html">FAQ Page</a>
                </li>
                <li>
                    <a href="testimonial-page.html">Testimonial Page</a>
                </li>
                <li>
                    <a href="popup.html">Popup</a>
                </li>
                <li>
                    <a href="search-page.html">Search Page</a>
                </li>
                <li>
                    <a href="404.html">404 Page</a>
                </li>
                <li>
                    <a href="comming-soon.html">Comming Soon</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="wishlist-page.html">Wishlist</a>
                </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="single-page.html">Shop</a>
                <ul>
                <li>
                    <a href="product-right.html">Shop Archive</a>
                </li>
                <li>
                    <a href="product-detail.html">Shop Single</a>
                </li>
                <li>
                    <a href="product-cart.html">Shop Cart</a>
                </li>
                <li>
                    <a href="product-checkout.html">Shop Checkout</a>
                </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Blog</a>
                <ul>
                <li><a href="blog-archive.html">Blog List</a></li>
                <li><a href="blog-archive-left.html">Blog Left Sidebar</a></li>
                <li><a href="blog-archive-both.html">Blog Both Sidebar</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Dashboard</a>
                <ul>
                <li>
                    <a href="admin/dashboard.html">Dashboard</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">User</a>
                    <ul>
                        <li>
                            <a href="admin/user.html">User List</a>
                        </li>
                        <li>
                            <a href="admin/user-edit.html">User Edit</a>
                        </li>
                        <li>
                            <a href="admin/new-user.html">New User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="admin/db-booking.html">Booking</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="admin/db-package.html">Package</a>
                    <ul>
                        <li>
                            <a href="admin/db-package-active.html">Package Active</a>
                        </li>
                        <li>
                            <a href="admin/db-package-pending.html">Package Pending</a>
                        </li>
                        <li>
                            <a href="admin/db-package-expired.html">Package Expired</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="admin/db-comment.html">Comments</a>
                </li>
                <li>
                    <a href="admin/db-wishlist.html">Wishlist</a>
                </li>
                <li>
                    <a href="admin/login.html">Login</a>
                </li>
                <li>
                    <a href="admin/forgot.html">Forget Password</a>
                </li>
                </ul>
            </li>
        </ul>
    </nav>
    </div>
    <div class="header-btn">
    <a href="tour-packages.html" class="button-primary">BOOK NOW</a>
    </div>
    </div>
`;

// Top-Notchs
locations.portrait.forEach((e) => {
        topNotchPortrait.innerHTML += `
            <div class="col-sm-6">
                <div class="desti-item overlay-desti-item">
                    <figure class="desti-image">
                        <img src="assets/images/${e.img}" alt="">
                    </figure>
                    <div class="meta-cat bg-meta-cat">
                        <a href="#">${e.locationCountry}</a>
                    </div>
                    <div class="desti-content">
                        <h3>
                            <a href="#">${e.locationName}</a>
                        </h3>
                        <div class="rating-start" title="Rated 5 out of 4">
                            <span style="width: 53%"></span>
                        </div>
                    </div>
                </div>
            </div>
        `;
});

locations.landscape.forEach((e) => {
    topNotchLandscape.innerHTML += `
    <div class="col-md-6 col-xl-12">
        <div class="desti-item overlay-desti-item">
            <figure class="desti-image">
                <img src="assets/images/${e.img}" alt="">
            </figure>
            <div class="meta-cat bg-meta-cat">
                <a href="#">${e.locationCountry}</a>
            </div>
            <div class="desti-content">
                <h3>
                    <a href="#">${e.locationName}</a>
                </h3>
                <div class="rating-start" title="Rated 5 out of 5">
                    <span style="width: 100%"></span>
                </div>
            </div>
        </div>
    </div>
    `
})

// POPULAR PACKAGES
packages.forEach((e) => {
    popularPackages.innerHTML += `
        <div class="col-lg-4 col-md-6">
            <div class="package-wrap">
                <figure class="feature-image">
                    <a href="#">
                        <img src="assets/images/${e.image}" alt="">
                    </a>
                </figure>
                <div class="package-price">
                    <h6>
                        <span>$${e.price} </span> / per person
                    </h6>
                </div>
                <div class="package-content-wrap">
                    <div class="package-meta text-center">
                        <ul>
                            <li>
                            <i class="far fa-clock"></i>
                            ${e.numberOfDays}D/${e.numberOfNights}N
                            </li>
                            <li>
                            <i class="fas fa-user-friends"></i>
                            People: ${e.maxPeople}
                            </li>
                            <li>
                            <i class="fas fa-map-marker-alt"></i>
                            ${e.location}
                            </li>
                        </ul>
                    </div>
                    <div class="package-content">
                        <h3>
                            <a href="#">${e.name}</a>
                        </h3>
                        <div class="review-area">
                            <span class="review-text">(${e.reviews} reviews)</span>
                            <div class="rating-start" title="Rated 5 out of 5">
                            <span style="width: 60%"></span>
                            </div>
                        </div>
                        <p>${e.discription}.</p>
                        <div class="btn-wrap">
                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `
})

// SPECIAL OFFERS 
offer.forEach((e) => {
    specialOffer.innerHTML += `
        <div class="col-md-6 col-lg-4">
            <div class="special-item">
                <figure class="special-img">
                    <img src="assets/images/${e.image}" alt="">
                </figure>
                <div class="badge-dis">
                    <span>
                        <strong>${e.discount}%</strong>
                        off
                    </span>
                </div>
                <div class="special-content">
                    <div class="meta-cat">
                        <a href="#">${e.location}</a>
                    </div>
                    <h3>
                        <a href="#">${e.name}</a>
                    </h3>
                    <div class="package-price">
                        Price:
                        <del>${e.price.normal}</del>
                        <ins>$${e.price.current}</ins>
                    </div>
                </div>
            </div>
        </div>
    `
})