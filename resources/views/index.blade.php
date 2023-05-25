<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <title>Travel Buddy</title>
    
</head>
<body>
    <header>
        <nav>
            <a href="index.html"><h4>Travel Buddy</h4></a>
            <ul>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('registration') }}">Register</a></li>

            </ul>
            <i class="bi bi-three-dots"></i>
        </nav>
        <!-- content layout -->
        <div class="content">
            <div class="cont_box">
            <h1>The Right Destination For Your Adventure</h1>
            <p>Book With Us And Book It Out Of Here!.</p>
            <button>Book Your Trip</button>
            </div>
            <!-- tripbox layout -->
            
            <div class="tripbox">
                <form action="{{ route('book_submit') }}" method="post">
                    @csrf
                <div class="search">
                    
          
                <div class="card">
                    <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="text" name="location" placeholder="Enter your destination">
                </div>
                <div class="card">
                    <h4>Date <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="date"  name="date" >
                </div>
                <div class="card">
                    <h4>Traveler <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="number" name="qty" placeholder="How many people?">
                </div>
                <button class="btn btn-primary" type="submit">Book trip</button>
            
                </div>
                </form>




                <div class="travelbox">
                    <h4>Places To Travel</h4>
                    <div class="cards">
                        <div class="card">
                            <h3>Sadapathor <img src="icon/river.png" alt="picture"></h3>
                            <img src="img/sadapathor.jpg" alt="picture">
                            <div class="button_city">
                                <a href="">Read Now</a>
                                <h5>Bholaganj, Sylhet <br><span>Tk 4500</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Nafakhum <img src="icon/waterfall.png" alt="picture"></h3>
                            <img src="img/nafakhum.jpg" alt="picture">
                            <div class="button_city">
                                <a href="">Read Now</a>
                                <h5>Nafakhum<br><span>Tk 5000</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Cox's Bazar <img src="icon/beach.png" alt="picture"></h3>
                            <img src="img/cb.jpg" alt="picture">
                            <div class="button_city">
                                <a href="">Read Now</a>
                                <h5>Saint Martin’s Island <br><span>Tk 6500</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Sundarban <img src="icon/forest.png" alt="picture"></h3>
                            <img src="img/sundarban.jpg" alt="picture">
                            <div class="button_city">
                                <a href="">Read Now</a>
                                <h5>Sundarban <br><span>Tk 9000</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <div class="offers">
        <h1>Best Tour Packages</h1>
        <p>Choose Your Next Destination</p>

        <div class="cards">
            <!-- card-1 -->
            <div class="card">
                <h3 style="text-align: center;">Khadim Nagar <br>National Park</h3>
                <div class="img_txt">
                    <img src="img/kn.jpg" alt="">
                    <h4>Included: Camping & Ride, Lunch, Dinner</h4>
                </div>
                <div class="contentbox">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>1374</span></i>
                            <i class="bi bi-chat-dots-fill"><span>253</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>Tk 2500</h4>
                        </div>
                    </div>
                    <div class="days">1 Days <br>Trip</div>
                </div>
            </div>
            
            <!-- card-2 -->
            <div class="card">
                <h3 style="text-align: center;">Nijhum Dip <br>Namar Bazar Beach</h3>
                <div class="img_txt">
                    <img src="img/nijhum.jpg" alt="">
                    <h4>Included: Bus Ticket, Breakfast, Lunch</h4>
                </div>
                <div class="contentbox">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>374</span></i>
                            <i class="bi bi-chat-dots-fill"><span>45</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>Tk 4000</h4>
                        </div>
                    </div>
                    <div class="days">2 Days <br>Trip</div>
                </div>
            </div>
            
            <!-- card-3 -->
            <div class="card">
                <h3 style="text-align: center;">Lawachara <br>National Park</h3>
                <div class="img_txt">
                    <img src="img/lc.jpg" alt="">
                    <h4>Included: Bus Ticket, Breakfast, Hotel</h4>
                </div>
                <div class="contentbox">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>945</span></i>
                            <i class="bi bi-chat-dots-fill"><span>356</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>Tk 4500</h4>
                        </div>
                    </div>
                    <div class="days">3 Days <br>Trip</div>
                </div>
            </div>
            
            <!-- card-4 -->
            <div class="card">
                <h3 style="text-align: center;">Kuakata <br>Sea Beach</h3>
                <div class="img_txt">
                    <img src="img/ksb.jpg" alt="">
                    <h4>Included: Bus Ticket, Breakfast, Hotel</h4>
                </div>
                <div class="contentbox">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>2044</span></i>
                            <i class="bi bi-chat-dots-fill"><span>977</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>Tk 4500</h4>
                        </div>
                    </div>
                    <div class="days">2 Days <br>Trip</div>
                </div>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="desbox">
            <h4>Our Destination</h4>
            <p>All 8 Divisions For Your Trip</p>
            <li>Dhaka</li>
            <li>Khulna</li>
            <li>Sylhet</li>
            <li>Barisal</li>
            <li>Rangpur</li>
            <li>Rajshahi</li>
            <li>Mymensing</li>
            <li>Chittagong</li>
            <button>MORE INFO</button>
        </div>
        <div class="imgbox">
            <img src="img/bus.png" alt="">
        </div>
    </div>

    <footer>
        <h2>Subscribe & <br> Get Special Discount</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit illum officia necessitatibus.</p>
        <div class="input">
            <input type="text" placeholder="Enter Your Email">
            <button>Subscribe</button>
        </div>
        <ul>
            <li>7823 <br> <h6>Years Serving The Travel Industry</h6></li>
            <li>6374 <br> <h6>Global <br> Partnership</h6></li>
            <li>1493 <br> <h6>Industry Awards Since 2020</h6></li>
            <li>5658 <br> <h6>Subscribe</h6></li>
        </ul>
    </footer>

    
    

    <script src="script.js"></script>


    <link rel="stylesheet" href="{{ asset('js/iziToast.min.js') }}">




     <!-- iziToast functionality code here -->
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ $error }}',
        });
    </script>
@endforeach
 @endif

 @if (session()->get('error'))
     <script>
         iziToast.error({
             title: '',
             position: 'topRight',
             message: '{{ session()->get('error') }}',
         });
     </script>
 @endif

 @if (session()->get('success'))
     <script>
         iziToast.success({
             title: '',
             position: 'topRight',
             message: '{{ session()->get('success') }}',
         });
     </script>
 @endif
 <!--// iziToast functionality code here -->    








</body>
</html>