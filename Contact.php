<?php
$title = "Contact";
include "header.php";
?>  
    <div class="container">
      <h1>Get In Touch 📝</h1>
      <form
        target="_blank"
        action="https://formsubmit.co/a1371279ace755bdcd5e69954485863c"
        method="POST"
      >
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_template" value="table">
      <input type="hidden" name="_next" value="https://angelpandey.com/thankyou.html">  
      <div class="form-group">
          <div class="form-row">
            <div class="col">
              <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Full Name"
                required
              />
            </div>
            <div class="col">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email Address"
                required
              />
            </div>
          </div>
        </div>
        <div class="from-group">
          <div class="form-row">
            <div class="col">
              <h5>Subject:</h5>
            </div>
            <div class="col">
              <input
                type="radio"
                name="_subject"
                id="enquiry"
                value="New Enquiry email from Website !!"
                required
              />
              <label for="enquiry"> Enquiry </label>
            </div>
            <div class="col">
              <input
                type="radio"
                name="_subject"
                id="collaboration"
                value="New Collaboration email from Website!!"
              />
              <label for="collaboration"> Collaboration </label>
            </div>
            <div class="col">
              <input
                type="radio"
                name="_subject"
                id="feedback"
                value="New FeedBack Email from Website !!"
              />
              <label for="feedback"> Feedback </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <textarea
            placeholder="Your Message"
            class="form-control"
            name="message"
            rows="10"
            required
          ></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-dark btn-block">
          Send Message
        </button>
      </form>
    </div>
<?php
include "footer.php";
?>