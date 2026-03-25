</div>

<script>
    $(document).ready(function () {
        HashName = window.location.hash;
        if (HashName !== '') {
            id = $('.main-image-tab-1 a[href$="' + HashName + '"]').children('.post').data('id');
        } else {
            id = 1;
        }
        $('.main-image-tab-1 .post').removeClass('active');
        $('.main-image-tab-1 .post[data-id = ' + id + ']').addClass('active');
        $('.main-image-tab-1 .post-dtls .dtl').removeClass('active');
        $('.main-image-tab-1 .post-dtls .dtl-' + id).addClass('active');
        $('.main-image-tab-1 .mobile-image-tab').removeClass('active');
        $('.main-image-tab-1 .mobile-image-tab[data-id = ' + id + ']').addClass('active');


        $('.fee-sixth-blk .tab').click(function () {
            id = $(this).data('id');
            $('.fee-sixth-blk .tab').removeClass('active');
            $('.fee-sixth-blk .tab-dtl').removeClass('active');
            $(this).addClass('active');
            $('.fee-sixth-blk .tab-dtl-' + id).addClass('active');
        });

        $('.tab').on('click', function () {
            var tabId = $(this).data('id');
            // Active tab
            $('.tab').removeClass('active');
            $(this).addClass('active');
            // Show matching tab detail
            $('.tab-dtl').removeClass('active');
            $('.tab-dtl-' + tabId).addClass('active');

        });
    });</script>

<footer>
    <div class="footer-top">
        <div class="wrapper clear">
            <div class="blk contact-blk">
                <!--                <div class=" form">
                  
                                </div>-->


                </form>
                <script>
                    $(document).ready(function () {
                        $("#course-name").on("change", function () {
                            $val = $(this).val();
                            switch ($val) {
                                case 'College Of Engineering':
                                    $email = 'coe@ku.ac.ae';
                                    break;
                                case 'College of Arts and Sciences':
                                    $email = 'coas@ku.ac.ae';
                                    break;
                                case 'College of Medicine and Health Sciences':
                                    $email = 'md@ku.ac.ae';
                                    break;
                                default:
                                    $email = 'info@ku.ac.ae';
                            }
                            $('#to-emaiil-d').val($email);
                        });
                        $("#mc-embedded-subscribe").click(function () {
                            var newsfield = $("#mce-EMAIL").val();
                            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                            if (newsfield == '') {
                                alert('Please Enter Email');
                                return false;
                            }

                        });
                    });

                </script>

            </div>
            <div class="blk location">
                <div class="clear">
                    <span class="link address">P.O. Box: 127788, <br> Abu Dhabi, UAE</span>
                    <span class="link email"><a href="https://www.ku.ac.ae/contact">Reach us</a></span>
                    <!--<span class="email"><a href="mailto:%69%6E%66%6F%40%6B%75%2E%61%63%2E%61%65">info@ku.ac.ae</a> <br /><br/></span>-->
                    <span class="link tel">
                        T: <a href="tel:97123123333">+971 (2) 312 3333 </a>                     </span>
                    <!--<span class="link fax">
                        F: <a href="tel:97123123888">+971 2 312 3888</a>                    </span>  --> 
                </div>                            

                <div class="newsletter">        
                    <h4 class="title">Get The Latest News From KHALIFA UNIVERSITY</h4>

                    <form action="https://www.us10.list-manage.com/subscribe/post?u=0751a11a6d1aee4d5f1618a3e&amp;id=2b39c2e468" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="email input-field" id="mce-EMAIL" placeholder="Enter your email address" required>
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button common-btn">
                        </div>
                    </form>
                </div>

                <div class="social">
                    <h4 class="title">Social links</h4>
                    <a href="https://www.facebook.com/khalifauniversity/" class="fb" target="_blank" title="Facebook">
                        <img class="footer-fb" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-fb.png">
                    </a>
                    <a href="https://www.youtube.com/user/KhalifaUniversity" class="ytb" target="_blank" title="Youtube">
                        <img class="footer-yt" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-yt.png">
                    </a>
                    <a href="https://twitter.com/KhalifaUni" class="twt" target="_blank" title="Twitter">
                        <img class="footer-tw" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-twt.png?v=2">
                    </a>
                    <a href="https://www.instagram.com/khalifauniversity" class="inst" target="_blank" title="Instagram">
                        <img class="footer-in" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-inst.png">
                    </a>
                    <a href="https://www.linkedin.com/school/khalifa-university-/" class="inst" target="_blank" title="Linkedin">
                        <img class="footer-ln" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-lin.png" width="32" height="32">
                    </a>
                    <a href="https://whatsapp.com/channel/0029Va5xAeH2Jl8LlJULDo0u" class="wtsp" target="_blank" title="Whatsapp Channel">
                        <img class="footer-wtsp" src="https://www.ku.ac.ae/wp-content/themes/khalifauniversity/assets/img/news/footer-wtsp.png" width="22" height="22">
                    </a>
                </div>
            </div>
            <div class="blk links">
                <h4 class="title">Other links</h6>
                    <ul id="menu-quick_links" class="menu"><li id="menu-item-94651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94651"><a href="https://www.ku.ac.ae/colleges">Colleges</a></li>
                        <li id="menu-item-41511" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41511"><a href="https://www.ku.ac.ae/research">Research</a></li>
                        <li id="menu-item-1459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1459"><a title="University Leadership" href="https://www.ku.ac.ae/about/university-leadership">University Leadership</a></li>
                        <li id="menu-item-1461" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1461"><a title="Partnership" href="https://www.ku.ac.ae/about/strategic-partnerships">Partnership</a></li>
                        <li id="menu-item-1677" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1677"><a title="Achievements &#038; Rankings" href="https://www.ku.ac.ae/about/rankings-old">Achievements &#038; Rankings</a></li>
                        <li id="menu-item-1458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1458"><a title="General FAQ" href="https://www.ku.ac.ae/about/general-faqs">General FAQ</a></li>
                        <li id="menu-item-87981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87981"><a href="https://www.ku.ac.ae/covid-19">Covid 19</a></li>
                        <li id="menu-item-41510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41510"><a href="https://www.ku.ac.ae/academics/center-for-teaching-and-learning">Center for Teaching and Learning (CTL)</a></li>
                        <li id="menu-item-41509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41509"><a href="https://www.ku.ac.ae/research-offices/technology-management-innovation">Technology, Management &#038; Innovation</a></li>
                        <li id="menu-item-88414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88414"><a href="https://www.ku.ac.ae/open-data">Open Data</a></li>
                    </ul>            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="wrapper clear">
            <span class="left">Copyright 2024 - Khalifa University | All Rights Reserved</span>
            <img class="right" src="https://www.ku.ac.ae/wp-content/uploads/2021/04/iso-certification-for-footer_revised-1.png" height="70" alt="">
        </div>
    </div>
</footer>



</body>
</html>