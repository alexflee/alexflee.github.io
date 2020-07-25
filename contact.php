<?php include 'includes/header.php'; ?>

<section role="banner" class="banner">

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-push-1">
          <h1 class="">Get in touch</h1>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit erat ac ipsum accumsan pulvinar.</h4>
      </div>
    </div>
  </div>

  <div class="banner__background contact transformIn animation-delay--1"></div>

</section>

<section class="contact padded-section">
    <div class="container">

        <div class="row">

            <main class="col-xs-12 col-sm-7 m-bottom--l text-align--left">

              <h5 class="m-bottom--l">Contact us with your enquiries below</h5>

              <form id="contact__form" class="contact__form" role="form" action="#" method="GET">
                <div class="row">
                  <div class="col-xs-12 text-align--left m-bottom--s">
                    <p>Name</p>
                    <div class="has-float-label">
                        <input id="name" type="text" placeholder="Your name">
                        <label for="name">Name</label>
                    </div>
                  </div>
                  <div class="col-xs-12 text-align--left m-bottom--s">
                    <p>Email</p>
                    <div class="has-float-label">
                        <input id="email" type="email" placeholder="Your email address">
                        <label for="email">Email address</label>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <p>Comments</p>
                    <div class="has-float-label">
                      <textarea id="additional" data-gramm="true" spellcheck="false" data-gramm_editor="true">Additional comments...</textarea>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <p>Contact reason</p>
                    <div class="has-float-label">
                      <select>
                        <option value="0">Feedback</option>
                        <option value="1">Business Enquiry</option>
                        <option value="1">Employment opportunities</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-xs-12 clearfix m-bottom--l m-top--l">
                      <input type="submit" class="btn btn--primary w100" value="Send">
                  </div>
                </div>
              </form>

            </main>


            <aside class="col-xs-12 col-sm-5">

              <div id="map" class="contact__map">

              </div>

              <div class="col-xs-12 col-sm-12 m-bottom--l text-align--left p--zero">
                  <div class="w100 p--l border float--l">
                      <div class="col-xs-12 p--zero float--l">
                          <h5 class="fw4">Our address:</h5>
                          <p class="">
                            YourHealth Ltd.<br/>
                            Common Rd,<br/>
                            Tadcaster<br/>
                            LS24 9UN,<br/>
                            UK
                          </p>
                      </div>
                  </div>
              </div>

            </aside>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
