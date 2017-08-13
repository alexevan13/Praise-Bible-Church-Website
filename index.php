<?php include 'header.php'; ?>


<div class="banner-social">
    <div class="container">
        <div class="agileinfo-social-grids">
            <ul>
                <li><a href="https://www.facebook.com/pages/Praise-Bible-Church/334492343366252"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.facebook.com/pages/Praise-Bible-Church/334492343366252"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/pages/Praise-Bible-Church/334492343366252"><i class="fa fa-rss"></i></a></li>
                <li><a href="https://www.facebook.com/pages/Praise-Bible-Church/334492343366252"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="w3ls-welcome-grids">
            <div class="col-md-4 w3l-welcome-left">
                <h2>Welcome</h2>
                <h5>Our prayer is that you will be blessed and strengthened by the power of Jesus, and that you will live a life of abundance in fellowship, joy and liberty. Praise Bible Church is here for you. It is not just a church; it is a fellowship of believers coming together to declare the glory of the Lord, and to celebrate Jesus as King. We study the Word, practice what we learn, and in the process grow together. May God richly bless you! May the Lord bless you and keep you! We hope to see you soon!	</h5>	
            </div>

            <div class="col-md-8 video">
                <video id="jvideo" controls>
                    <source src="video/myking.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->
<div class="services">
    <div id="googleMap" class="col-md-5 w3ls-services-left">

    </div>
    <script>
        function myMap() {
            var myLatLng = {lat: 43.7257752, lng: -79.6688052};

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 13,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Praise Bible Church'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOm4KJ7Z5m1YewVFaqE3J3SYRXLZ6skNI&callback=myMap"></script>

    <div class="col-md-7 w3ls-services-right">
        <h3>Contact Us</h3>
        <div class="w3ls-services-icons">
            <div class="agileits-icon-grid">
                <div class="icon-left hvr-radial-out">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="icon-right">
                    <h5>Dr. Viral Christian</h5>
                    <p>Phone: <a href="tel:+1 647-295-2501" style="color:white;">+1 647-295-2501</a><br/>
                        Email:<a href="mailto: viral_christian@hotmail.com" style="color:white;"> viral_christian@hotmail.com</a>
                    </p>		
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="agileits-icon-grid">
                <div class="icon-left hvr-radial-out">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="icon-right">
                    <h5>Mr. Basil Daniel</h5>
                    <p>Phone: <a href="tel:+1 416-825-4714" style="color:white;">+1 416-825-4714</a><br/>
                        Email:<a href="mailto: basil_danial@yahoo.ca" style="color:white;"> basil_danial@yahoo.ca</a>
                    </p></div>
                <div class="clearfix"> </div>
            </div>
            <div class="agileits-icon-grid">
                <div class="icon-left hvr-radial-out">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="icon-right">
                    <h5>Mr. Jaksolin Roziya</h5>
                    <p>Phone: <a href="tel:+1 416-806-1988" style="color:white;">+1 416-806-1988</a><br/>
                        Email:<a href="mailto: jaksolin_roziya@hotmail.com " style="color:white;"> jaksolin_roziya@hotmail.com </a>
                    </p></div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //services -->
<!-- work -->
<!--<div class="work">
    <div class="container">
        <div class="agileits-heading">
            <h3>Latest Events</h3>
        </div>
    </div>
    <div class="work-grids">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w1.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4></h4>
                        <p></p>
                    </div>
                </div>	
            </div>
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w2.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4></h4>
                        <p> </p>
                    </div>
                </div>	
            </div>
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w3.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4></h4>
                        <p> </p>
                    </div>
                </div>	
            </div>
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w4.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4></h4>
                        <p> </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w5.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4></h4>
                        <p> </p>
                    </div>
                </div>	
            </div>
            <div class="item">
                <div class="work-grid-info">
                    <img src="images/w6.jpg" alt="" />
                    <div class="work-grid-caption"> 
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h4> </h4>
                        <p> </p>
                    </div>
                </div>	
            </div>
            
        </div>
    </div>
</div>-->
<!-- //work -->
<!-- testimonial
<div class="testimonial jarallax">
    <div class="testimonial-dot">
        <div class="container">
            <div class="agileits-heading testimonial-heading">
                <h3>Our Team</h3>
            </div>
            <div class="wthree-testimonial-grid">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="w3-agile-testimonial">
                                    <div class="testimonial-info">
                                        <h4>Pastor Viral Christian</h4>
                                        <p>Pastor Viral Christian has been prophesized upon to serve and has been service Praise Bible Church since 2006. Pastor Viral has a passion for unpacking the truths of Scripture. Along with ministerial services He is strengthening believers by conducting Bible Studies. He is actively leading the church to Christian Living by guidance of the Holy Spirit and getting close into the intimate relationship with the Lord Jesus Christ.</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <div class="testimonial-img-left">
                                            <img src="images/ts1.jpg" alt="" />
                                        </div>
                                        <div class="testimonial-img-right">

                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3-agile-testimonial">
                                    <div class="testimonial-info">
                                        <h4>Pastor Mrunal Christian</h4>
                                        <p>Pastor Mrunal Christian has received Lord's calling to serve and minister. Pastor Mrunal is serving Praise Bible Church since 2006 in various roles including Choir Leader, Care and Counselling of mothers and active intersession with fervent prayer support. She is also equipping young adults to Powerful Worship and discipleship. She is ordained along with Pastor Viral and has blessed with two children. She has a heart for reaching out and evangelism at work places.</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <div class="testimonial-img-left">
                                            <img src="images/ts2.jpg" alt="" />
                                        </div>
                                        <div class="testimonial-img-right">

                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3-agile-testimonial">
                                    <div class="testimonial-info">
                                        <h4>Mr. Basil Daniel <em>Board Member & Choir Director</em></h4>
                                        <p>Basil Daniel has been in the Church Administration for more than 20 years and serving Praise Bible Church since 2006. The Lord not only has called you for church administration but also has equipped him with the guidance of the Holy Spirit. He is also gifted musician and serve the Lord with His talents as a grandson of Gujarati Hymn writer.</p>										</div>
                                    <div class="testimonial-img">
                                        <div class="testimonial-img-left">
                                            <img src="images/ts3.jpg" alt="" />
                                        </div>
                                        <div class="testimonial-img-right">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3-agile-testimonial">
                                    <div class="testimonial-info">
                                        <h4>Rashmikant Parmar <em>Board Member</em></h4>
                                        <p>Rashmikant Parmar is a active member of Praise Bible Church and always looking, willing and ready to fulfill any responsibility, entrusted to him. He strongly believes that God has planted him in Praise Bible Church in His divine plan, will and a purpose. He has intensive hunger for word of God. He devotes significant time in studying word of God to reveal the knowledge & wisdom for making his spiritual walk more and more stronger.</p>										</div>
                                    <div class="testimonial-img">
                                        <div class="testimonial-img-left">
                                            <img src="images/ts4.jpg" alt="" />
                                        </div>
                                        <div class="testimonial-img-right">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- //testimonial -->
<!-- subscribe -->
-->
<?php include 'footer.php'; ?>