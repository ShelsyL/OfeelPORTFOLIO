<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ asset('assets/img/bg/bg6.jpg') }}" data-speed="0.7">
    <div id="contact-tabs" role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-justified icon-tabs" id="nav-tabs" role="tablist">
            <li role="presentation" class="ptb smoothie active">
                <a href="#contact1" aria-controls="contact1" role="tab" data-toggle="tab">
                    <span class="tabtitle heading-font smoothie text-right">Email Us</span>
                </a>
            </li>
            <li role="presentation" class="ptb smoothie">
                <a href="#contact2" aria-controls="contact2" role="tab" data-toggle="tab">
                    <span class="tabtitle heading-font smoothie text-left">Visit Us</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="tabs-collapse">
            <div role="tabpanel" class="tab-pane fade in active" id="contact1">
                <div id="contact-inner" class="nopadding-lr">
                    <div class="contact-section-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div id="message"></div>
                                    <form method="post" action="sendemail.php" id="contactform" class="main-contact-form wow">
                                        <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                        <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                        <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                        <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                        <input class="btn btn-primary mt30 btn-white pull-right" type="submit" name="submit" value="Submit" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="contact2">
                <div id="mapwrapper"></div>
            </div>

        </div>
    </div>
</section>
