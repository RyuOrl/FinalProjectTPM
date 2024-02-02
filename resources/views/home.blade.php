<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
   <!-- loading animation -->
    <div id="loading-container">
        <img id="loading-image" src="{{ asset('assets/image/load1.png') }}" alt="Loading...">
        <div><br>loading...</div>
    </div>
    

    <nav class="navbar">
        <img src="{{ asset('assets/image/image1.png') }}" alt="" class="image1">
      
        <div class="navbar-nav">
            <a href="#kosong0">Home</a>
            <a href="#kosong5">Prizes</a>
            <a href="#kosong1">Mentor & Jury</a>
            <a href="#kosong2">About</a>
            <a href="#kosong3">FAQ</a>
            <a href="#kosong4">Timeline</a>
            
        </div>

        <div class="extra">
            <a href="{{ route('login') }}" class="border">Login</a>
            <a href="#" id="humbur-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <div class="kosong" id="kosong0"></div>

    <section class="page" id="home">
        <main class="content">
            <div class="hack">
                <h1>HACK</h1>
                <img src="{{ asset('assets/image/image2.png') }}" alt="">
                <h1>THON</h1>
            </div>

            <p>Creating The Future Through Innovation</p>

            <a href="{{ route('dashboard') }}" class="lets">Let’s Start</a>
        </main>

        <!-- contoh video -->
        <iframe class="contohVid" align="right" width="560" height="315" src="https://www.youtube.com/embed/LlqqM1a1GQI?si=Pu67cROuUcU8vLh9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>

    <div class="kosong" id="kosong5"></div>

    <section class="prizeContainer" id="prizes">
            <div class="header">
                <br>
                <h1 class="champ">Champion Prizes</h1>
            </div>

            <section class="vtr">
                <img class="vektor v6" src="{{ asset('assets/image/image6.png') }}" width="550" height="600" alt="">
                <br>
                <img class="vektor v7" src="{{ asset('assets/image/image7.png') }}" width="480" height="680" alt="">
            </section>
            
            <section class="prizegroup">
                <div class="prize">
                        <div class="card card1">
                            <h2>Juara 2</h2>
               
                            <div class="TEXT">
                               <div class="text1">
                                   <img src="{{ asset('assets/image/piala2.png') }}" class= "trophy2" alt="">
                                   <br>
                                  <p><img src="{{ asset('assets/image/money.png') }}" class="money" alt=""> Rp 3.000.000,00</p>              
                                  <p><img src="{{ asset('assets/image/merch.png') }}" class="merch" alt=""> Merchandise</p>
                                  <p><img src="{{ asset('assets/image/cert.png') }}" alt=""> Certificate</p>
                                   </div>
                            </div>
               
                       </div>
               
                       <div class="card card2">
                           <h2>Juara 1</h2>
                           <div class="TEXT">
                               <div class="text2">
                                   <img src="{{ asset('assets/image/piala1.png') }}" class="trophy2" alt="">
                                   <br>
                                   <p><img src="{{ asset('assets/image/money.png') }}" class="money" alt=""> Rp 5.000.000,00</p>
                                   <p><img src="{{ asset('assets/image/merch.png') }}" class="merch" alt=""> Merchandise</p>
                                   <p><img src="{{ asset('assets/image/cert.png') }}" alt=""> Certificate</p>
                                   </div>
                           </div>
               
                       </div>
                       
                       <div class="card card3">
                           <h2>Juara 3</h2>
                           <div class="TEXT">
                               <div class="text3">
                                   <img src="{{ asset('assets/image/piala3.png') }}" class="trophy2" alt="">
                                   <br>
                                   <p><img src="{{ asset('assets/image/money.png') }}" class="money" alt=""> Rp 1.500.000,00</p>
                                   <p><img src="{{ asset('assets/image/merch.png') }}" class="merch" alt=""> Merchandise</p>
                                   <p><img src="{{ asset('assets/image/cert.png') }}" alt=""> Certificate</p>
                                   </div>
                           </div>
                       </div>
                    
                    </div>
            </section>

        </section>

        <div class="kosong" id="kosong1"></div>

        <hr class="horizontal" id="mentorpage"></hr>
        <div class="vertical"></div>
        <br>
        <section class="line">
            <div class="Mentors">
                <h1>Mentors</h1>
                <h3>Meet your mentors!</h3>
            </div>
            
        <div class="mentorContainer">
            <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse1.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse2.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse3.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>
        </div>

        <div class="mentorContainer">
            <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse1.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse2.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse3.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>
        </div>

        <div class="mentorContainer">
            <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse1.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse2.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>

             <div class="profiles">
                <img src="{{ asset('assets/image/Ellipse3.png') }}" class="img1" alt="">
                <div class="name">NAME NAME</div>
                <p class="job">Software Engineer at</p>
                <p class="company">----- <p>----- <p>-------</p></p></p>
             </div>
        </div>
                
                <hr class="hr2">
                <div class="vertical2">
                </div>
        <section class="line2">
            <div class="jury">
                <h1>Jury</h1>
                <h3>Meet our juries!</h3>
            </div>
            
            <div class="mentorContainer2">
                <div class="profiles">
                    <img src="{{ asset('assets/image/Ellipse1.png') }}" class="img1" alt="">
                    <div class="name">NAME NAME</div>
                    <p class="job">Software Engineer at</p>
                    <p class="company">----- <p>----- <p>-------</p></p></p>
                 </div>
    
                 <div class="profiles">
                    <img src="{{ asset('assets/image/Ellipse2.png') }}" class="img1" alt="">
                    <div class="name">NAME NAME</div>
                    <p class="job">Software Engineer at</p>
                    <p class="company">----- <p>----- <p>-------</p></p></p>
                 </div>
    
                 <div class="profiles">
                    <img src="{{ asset('assets/image/Ellipse3.png') }}" class="img1" alt="">
                    <div class="name">NAME NAME</div>
                    <p class="job">Software Engineer at</p>
                    <p class="company">----- <p>----- <p>-------</p></p></p>
                 </div>
            </div>    
            <hr class="hr3">
        </section>
            <br>

        <div class="kosong" id="kosong2"></div>

        <section class="aboutPage" id="aboutpage">
            <div class="header">About
                <div class="h1">
                <br>Crystal Hackathon is a publicly available hackathon for everyone who are passionate in new technologies and have an innovative mindset. We want those technologies to have</br><br>Our mission is to connect innovators help create new or accelerate existing technologies that will help the future of our world by giving them the space needed to innovate.</br><br>Come be a part of this innovative community and join us as a contestant team! Let’s get innovative!</br> 
                </div>
            </div>
        </section>

        <section class="benefitPage">
            <div class="headerbenefit">Benefits</div>

            <div class="benefitContainer">
                <div class="benefit1">
                    <img src="{{ asset('assets/image/network.png') }}" class="net" alt="">
                    <div class="text1"></div>
                    <p class="net">Networking Opportunities and <p>Professional Growth</p>
                    <br><p class="textb1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>


                <div class="benefit2">
                   <img src="{{ asset('assets/image/gift_.png') }}" class="gift" alt="">
                  <div class="text2"></div>
                  <p class="net">Prizes</p>
                  <br><p class="textb2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                 <div class="benefit3">
                   <img src="{{ asset('assets/image/pagestar_.png') }}" class="pagestar" alt="">
                   <div class="text3"></div>
                   <p class="net">Get Found!</p>
                   <br><p class="textb3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>


            <div class="benefitContainer2">
                <div class="benefit4">
                    <img src="{{ asset('assets/image/stars_.png') }}" class="stars" alt="">
                    <div class="text4"></div>
                    <p class="net">Perfect Your Skills</p>
                    <br><p class="textb4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="benefit5">
                   <img src="{{ asset('assets/image/peeps.png') }}" class="peeps" alt="">
                  <div class="text5"></div>
                  <p class="net">Step Into Lime</p>
                  <br><p class="textb5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="benefit6">
                   <img src="{{ asset('assets/image/global.png') }}" class="global" alt="">
                   <div class="text6"></div>
                   <p class="net">Get Found!</p>
                   <br><p class="textb6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </section>
    </section>
        </div>
    </section> 

    <div class="kosong" id="kosong3"></div>

    <div class="container">
        <h1>FAQ</h1>

        <div class="tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
                <h2>01</h2>
                <h3>Pertanyaan 01</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                <h2>02</h2>
                <h3>Pertanyaan 02</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                <h2>03</h2>
                <h3>Pertanyaan 03</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                <h2>04</h2>
                <h3>Pertanyaan 04</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc5">
            <label for="acc5">
                <h2>05</h2>
                <h3>Pertanyaan 05</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc6">
            <label for="acc6">
                <h2>06</h2>
                <h3>Pertanyaan 06</h3>
            </label>
            <div class="content"><p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p></div>
        </div>
    </div>

    <div class="kosong" id="kosong4"></div>

    <div class="timeline">
        <h1 class="title-timeline">Timeline</h1>

        <div class="stt">
            <div class="step">
                <h3 class="date" id="date1">24 January</h3>

                <div class="lingkaran" id="lingkaran1"></div>
                
                <div class="text">
                    <h2>Open Registration</h2>
                    <h3>Registration open to all starting from 24th of January. You can register by signing up in this website</h3>
                </div>
            </div>

            <div class="garis"></div>
    
            <div class="step">
                <h3 class="date" id="date2">15 February</h3>

                <div class="lingkaran"></div>
                
                <div class="text">
                    <h2>Close Registration</h2>
                    <h3>Registration will be closed on the 15th of February</h3>
                </div>
            </div>

            <div class="garis1"></div>
    
            <div class="step">
                <h3 class="date" id="date3">18 February</h3>
                
                <div class="lingkaran"></div>

                <div class="text">
                    <h2>Technical Meeting</h2>
                    <h3>Technical meeting will be held through ZOOM and the details will be sent to all teams via registered e-mail</h3>
                </div>
            </div>

            <div class="garis1"></div>
    
            <div class="step">
                <h3 class="date" id="date4">23 February</h3>

                <div class="lingkaran"></div>
                
                
                <div class="text">
                    <h2>Competition Day</h2>
                    <h3>The competition will be held at Bridge Shop HQ for 2 days straight</h3>
                </div>
            </div>
        </div>
    </div>
    

    <div class="sponsor">
        <h1 class="title-sponsor">Sponsor</h1>

        <div class="container3">
            <h2>Platinum Sponsors</h2>
            <div class="img5">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            </div>

            <h2>Gold Sponsors</h2>
            <div class="img5">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            </div>

            <h2>Silver Sponsors</h2>
            <div class="img5">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="media">
        <h1 class="title-media">Media Partners</h1>

        <div class="img6">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
        </div>
        <div class="img6">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
        </div>
    </div> 

    <div class="other">
        <h1 class="title-other">Other Events</h1>

        <div class="container4">
            <div class="cont4">
                <h2>Virtual Conference</h2>
                <h3>A multiday conference talking about technologies</h3>
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            </div>
            <div class="cont4">
                <h2>Developer Workshop</h2>
                <h3>A workshop where developers can learn new things</h3>
                <img src="{{ asset('assets/image/BNCC.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="title-contact">Contact Us</div>

        <form action="{{ route('send.mail') }}" onsubmit="tampilkanPopup()" method="POST">
            @csrf
            <div class="colomn">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" name="name" placeholder="Your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email address</span>   
                    <input type="email" name="email" placeholder="Your Email"/>
                </div>
                <div class="input-box">
                    <span class="details">Subject</span>
                    <input type="text" name="subject" placeholder="Your subject" required>
                </div>
                <div class="input-box">
                    <span class="details">Message</span>   
                    <textarea class="inp" name="message" placeholder="Your Message" required></textarea>
                </div>
            </div>
            <button type="submit">Send</button>
        </form>
        
    
        
    </div>

    <script>
        feather.replace();
    </script>

    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>
</html>