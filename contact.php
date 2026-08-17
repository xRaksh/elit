<?php include 'header.php'; ?>

  <!-- ======= Page hero ======= -->
  <header class="page-hero">
    <div class="container position-relative">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <span class="hero-eyebrow reveal">Contact</span>
          <h1 class="display-hero reveal reveal-delay-1">Contact Us for Further<br class="d-none d-md-block"> Information About<br class="d-none d-md-block"> Green Energy.</h1>
          <a href="#contactForm" class="btn-brand mt-4 reveal reveal-delay-2">Send a Message</a>
        </div>
        <div class="col-lg-4 text-lg-center reveal reveal-delay-2">
          <a href="#info" class="play-ring" aria-label="Watch our intro video"><i class="bi bi-play-fill"></i></a>
        </div>
      </div>
    </div>
  </header>

  <!-- ======= Contact info cards ======= -->
  <section class="py-5" id="info">
    <div class="container py-lg-4">
      <div class="text-center mb-5">
        <span class="section-tag reveal">Get In Touch</span>
        <h2 class="section-title mt-2 reveal">For Further Info, Please <span class="script-accent">Contact Us</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 reveal">
          <div class="contact-card">
            <span class="cc-icon"><i class="bi bi-geo-alt"></i></span>
            <h5 class="h6">Our Address</h5>
            <p class="small mb-0">A-203, Ecotech-11, Greater Noida,<br>Gautam Buddha Nagar, UP – 201310</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal reveal-delay-1">
          <div class="contact-card">
            <span class="cc-icon"><i class="bi bi-telephone"></i></span>
            <h5 class="h6">Call Us</h5>
            <p class="small mb-0"><a href="tel:+919876543210" class="text-reset">+91 98765 43210</a><br>Mon – Fri, 8am – 7pm</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal reveal-delay-2">
          <div class="contact-card">
            <span class="cc-icon"><i class="bi bi-envelope"></i></span>
            <h5 class="h6">Email Us</h5>
            <p class="small mb-0"><a href="mailto:info@eltires.in" class="text-reset">info@eltires.in</a><br>We reply within one business day</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal reveal-delay-3">
          <div class="contact-card">
            <span class="cc-icon"><i class="bi bi-clock"></i></span>
            <h5 class="h6">Working Hours</h5>
            <p class="small mb-0">Monday – Friday<br>8:00 am – 7:00 pm</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Form + info ======= -->
  <section class="bg-light-brand py-5">
    <div class="container py-lg-4">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5">
          <span class="section-tag reveal">Request a Quote</span>
          <h2 class="section-title mt-2 reveal">Start Your <span class="script-accent">Green Energy</span> Journey</h2>
          <p class="mt-3 reveal reveal-delay-1">
            Tell us a little about your property and energy needs. One of our
            engineers will get back to you with a free survey booking and a
            clear, no-obligation estimate.
          </p>
          <div class="d-flex flex-column gap-3 mt-4">
            <div class="check-item reveal reveal-delay-1">
              <i class="bi bi-check-circle-fill"></i>
              <div><h6>Free Site Survey</h6><p class="mb-0 small">No cost, no commitment assessment of your property.</p></div>
            </div>
            <div class="check-item reveal reveal-delay-2">
              <i class="bi bi-check-circle-fill"></i>
              <div><h6>Clear Pricing</h6><p class="mb-0 small">A written quote with no hidden fees or surprises.</p></div>
            </div>
            <div class="check-item reveal reveal-delay-3">
              <i class="bi bi-check-circle-fill"></i>
              <div><h6>Fast Response</h6><p class="mb-0 small">Hear back from a real engineer within one business day.</p></div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 reveal reveal-delay-1">
          <div class="contact-form-wrap">
            <h4 class="h5 mb-4">Send Us a Message</h4>
            <form id="contactForm" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="cfName">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-brand" id="cfName" placeholder="Your name" required>
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="cfEmail">Email Address <span class="text-danger">*</span></label>
                  <input type="email" class="form-control form-control-brand" id="cfEmail" placeholder="you@example.com" required>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="cfPhone">Phone</label>
                  <input type="tel" class="form-control form-control-brand" id="cfPhone" placeholder="+1 000 000 0000" autocomplete="tel">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="cfService">Service Interested In</label>
                  <select class="form-select form-control-brand" id="cfService">
                    <option selected>Solar Panels</option>
                    <option>Wind Turbine</option>
                    <option>Eco Battery</option>
                    <option>Hybrid Power System</option>
                    <option>Smart Home Automation</option>
                    <option>Other / Not sure yet</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="cfMessage">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control form-control-brand" id="cfMessage" rows="5" placeholder="Tell us about your property and energy goals…" required></textarea>
                  <div class="invalid-feedback">Please write a short message.</div>
                </div>
                <div class="col-12 d-flex align-items-center gap-3 flex-wrap">
                  <button type="submit" class="btn-brand">Send Message <i class="bi bi-send"></i></button>
                  <span id="formStatus" class="small" role="status" aria-live="polite"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Map ======= -->
  <section class="py-5">
    <div class="container py-lg-4">
      <div class="text-center mb-5">
        <span class="section-tag reveal">Find Us</span>
        <h2 class="section-title mt-2 reveal">Visit Our <span class="script-accent">Office</span></h2>
      </div>
      <div class="map-embed reveal">
        <iframe
          src="https://maps.google.com/maps?q=Ecotech-11%20Greater%20Noida%20Uttar%20Pradesh%20201310&t=&z=13&ie=UTF8&iwloc=&output=embed"
          title="Eltires office location map"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <!-- ======= CTA band ======= -->
  <section class="pb-5">
    <div class="container">
      <div class="cta-band p-4 p-lg-5 reveal">
        <div class="row align-items-center position-relative g-4">
          <div class="col-lg-8">
            <h2 class="h3 mb-2">Prefer to Talk Right Now?</h2>
            <p class="mb-0 text-white-50">Call us Mon–Fri, 8am–7pm — a real engineer picks up, not a bot.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="tel:+919876543210" class="btn-brand-light"><i class="bi bi-telephone"></i> +91 98765 43210</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
