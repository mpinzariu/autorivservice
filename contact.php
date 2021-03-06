<?php

echo
'
<section id="contact" class="home-section text-center">
  <div class="heading-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
              <h2>Intra în contact</h2>
              <i class="fa fa-2x fa-angle-down"></i>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

  <!-- Map -->
  <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>

    <br/>
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </section>

    <div class="row">
      <div class="col-lg-2 col-lg-offset-5">
        <hr class="marginbot-50">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="boxed-grey">

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form id="contact-form" action="" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">
                              Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="email">
                              Email Address</label>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">
                              Phone Number</label>
                  <div class="form-group">
                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="phone" data-msg="Please enter a valid phone" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="subject">
                              Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">
                              Message</label>
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                          Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="widget-contact">
          <h5>Main Office</h5>

          <address>
        <strong>Squas Design, Inc.</strong><br>
        Tower 795 Folsom Ave, Beautiful Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>

          <address>
        <strong>Email</strong><br>
        <a href="mailto:#">email.name@example.com</a>
      </address>
          <address>
        <strong>We\'re on social networks</strong><br>
                      <ul class="company-social">
                          <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                          <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
      </address>

        </div>
      </div>
    </div>

  </div>
</section>

';

 ?>
