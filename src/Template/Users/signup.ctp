<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br /><br /><br />
<div class="row container m-auto mt-5 pt-4" id="LOGIN_FORM">
    <div class="col-sm-8 shadow mb-5 p-5">
        <section class="section section-noleft">
            <div class="section-content">
                <h3 style="margin: 0 0 0px">Create your account for access to other members.</h3>
                <?= $this->Form->create($user) ?>
                <input id="LOGIN" type="hidden" name="_token" value="hLYLMCM5k9aHvJaPQiByWTcNUBK20OFHCpeLykTz">
                <div class="js-steps hide-until-steps-init">
                    <div class="form-section">
                        <section>
                            <!-- <h2 class="text-peach-1">Account info</h2> -->
                            <?= $this->Form->create($user) ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('email', ['label' => 'Email','class' => 'form-control','placeholder'=>'Enter your email address']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('user_name', ['label' => 'Username','class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row password-form">
                                <div class="col-sm-12">
                                    <div class="form-group primary-password">
                                        <label class="control-label" style="width: 100%;">
                                            Password <a data-toggle="modal" data-target="#pass" class="underlink"
                                                href="#" style="float: right; margin-right: 30px;">
                                                Why do I need a strong password? </a>
                                        </label>
                                        <?php echo $this->Form->control('password', ['class' => 'form-control','label'=>false]); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <p><a data-toggle="collapse" href="#hidden_detail">Add more info</a></p>
                    <div id="hidden_detail" class="collapse">
                        <section>
                            <!-- <h2 class=" text-peach-1">Profile</h2> -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('firstname', ['label' => 'Firstname','class' => 'form-control']); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('lastname', ['label' => 'Lastname','class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('birthday',['type' => 'text','class' => 'form-control sp_datepicker','label' => 'Date of birth']); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender" class="control-label">Gender</label>
                                        <div class="form-group">
                                            <?php echo $this->Form->radio('gender', ['Male', 'Female', 'No answer'],['style'=>'margin-left: 10px']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <label for="basic-url">Phone</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">+81</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url"
                                            aria-describedby="basic-addon3">
                                    </div>

                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 0">
                                        <label style="margin-right: 15px"><input type="radio" name="phone_type"
                                                value="mobile" data-e2e="phone_type_mobile" checked>
                                            Mobile</label>
                                        <label data-trigger="hover" data-container="body" data-placement="auto"
                                            data-toggle="popover" title="We recommend you use a mobile phone."
                                            data-content="During consultations, SENPAI sends you text messages when a doctor is ready to see you, or if you have any unread messages. We cannot send these if you provide a landline number, and you will only receive your notifications via email. ">
                                            <input type="radio" name="phone_type" value="landline"
                                                data-e2e="phone_type_landline"> Landline </label>
                                    </div>
                                </div> -->
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-section">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg text-serif "
                                data-heap="register-submit-button" data-e2e="submit">Create your account</button>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>

            <hr class="spacer visible-xs hide-for-step1" style="margin: 4px">
            <p class="hide-for-step1">
                <small>By creating an account, you agree to
                    SENPAI Team’s <a data-toggle="modal" data-target="#terms" class="underlink" href="#">Terms
                        of Use</a>.</small>
            </p>
            <!-- Modal -->
            <div class="modal fade" id="pass" tabindex="-1" role="dialog" aria-labelledby="termsLable">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="height: 400px; overflow: scroll">
                            <h2>Password strength</h2>
                            <p>We take privacy and security very seriously at SENPAI.</p>
                            <p> Creating a strong and unique password according to the set requirements is
                                the first step towards ensuring that the highest possible security and
                                privacy standards are met. </p>
                            <p>To set up your password that meets the strength requirements, your password
                                must include at least 3 of the following criteria:</p>
                            <p>1 uppercase character
                                1 lowercase character
                                1 numeric character (between 0 and 9)
                                1 special character " !"#$%&'()*+,-./:;<=>?@[\]^_`{|}~"</p>
                        </div>
                        <div class="modal-footer dialog-actions-dark">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="termsLable">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="height: 400px; overflow: scroll">
                            <h3>Terms of Use</h3>
                            <p>SENPAI reserves the right, in its sole discretion, to terminate your access
                                to all or part of this Site, with or without cause, and with or without
                                notice. SENPAI reserves the right to modify these Terms of Use at any time,
                                effective upon posting. Any use of this website after such changes will be
                                deemed an acceptance of those changes. You agree to review the Terms of Use
                                each time you access this website so that you may be aware of any changes to
                                these Terms. In the event that any of the Terms of Use are held by a court
                                or other tribunal of competent jurisdiction to be unenforceable, such
                                provisions shall be limited or eliminated to the minimum extent necessary so
                                that these Terms of Use shall otherwise remain in full force and effect.
                                These Terms of Use constitute the entire agreement between SENPAI and you
                                pertaining to the subject matter hereof. In its sole discretion, SENPAI may
                                from time-to-time revise these Terms of Use by updating this posting. You
                                should, therefore, periodically visit this page to review the current Terms
                                of Use, so you are aware of any such revisions to which you are bound.
                                Certain provisions of these Terms of Use may be superseded by expressly
                                designated legal notices or terms located on particular pages within this
                                Site.</p>
                            <h3>Revisions; General</h3>
                            <p>SENPAI reserves the right, in its sole discretion, to terminate your access
                                to all or part of this Site, with or without cause, and with or without
                                notice. SENPAI reserves the right to modify these Terms of Use at any time,
                                effective upon posting. Any use of this website after such changes will be
                                deemed an acceptance of those changes. You agree to review the Terms of Use
                                each time you access this website so that you may be aware of any changes to
                                these Terms. In the event that any of the Terms of Use are held by a court
                                or other tribunal of competent jurisdiction to be unenforceable, such
                                provisions shall be limited or eliminated to the minimum extent necessary so
                                that these Terms of Use shall otherwise remain in full force and effect.
                                These Terms of Use constitute the entire agreement between SENPAI and you
                                pertaining to the subject matter hereof. In its sole discretion, SENPAI may
                                from time-to-time revise these Terms of Use by updating this posting. You
                                should, therefore, periodically visit this page to review the current Terms
                                of Use, so you are aware of any such revisions to which you are bound.
                                Certain provisions of these Terms of Use may be superseded by expressly
                                designated legal notices or terms located on particular pages within this
                                Site.</p>
                            <h3>Copyright/Trademark Information. </h3>
                            <p>Copyright ©2020 SENPAI Team. All rights reserved. All trademarks, logos and
                                service marks (“Marks”) displayed on the Site are our property or the
                                property of other third parties. You are not permitted to use these Marks
                                without our prior written consent or the consent of such third party which
                                may own the Marks.</p>
                            <h3>Contact Us</h3>
                            <p>If you have questions about the SENPAI Platform or its use, you can contact
                                SENPAI Support by sending an email to <a
                                    href="mailto:mongolsenpai@gmail.com">mongolsenpai@gmail.com</a>.</p>
                        </div>
                        <div class="modal-footer dialog-actions-dark">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Datepiker -->
<script>
$('.sp_datepicker').attr('type', 'date', {
    format: "yyyy/mm/dd"
});
</script>