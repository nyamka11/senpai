<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="mt-5">
</div>

<div class="row container m-auto">
    <div class="col-sm-8 pad-right full-height">
        <section class="section section-noleft">
            <div class="section-content">
                <h2 style="margin: 0 0 0px">Create your account for access to other members.</h2>
                <?= $this->Form->create($user) ?>
                <input type="hidden" name="_token" value="hLYLMCM5k9aHvJaPQiByWTcNUBK20OFHCpeLykTz">
                <div class="js-steps hide-until-steps-init">
                    <div class="form-section">
                        <section>
                            <h2 class="text-peach-1">Account info</h2>
                            <?= $this->Form->create($user) ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('user_name', ['class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="first_name" class="control-label">First name</label>
                                    <input data-e2e="first_name" class="form-control" required name="first_name"
                                        type="text" id="first_name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <a data-trigger="hover" class="pull-right" data-container="body"
                                        data-placement="auto" data-toggle="popover"
                                        title="Please provide us with your full legal name."
                                        data-content="Your full legal name must match the name on your identification card.">
                                        <i class="icon icon-help-with-circle"></i>
                                    </a>
                                    <label for="last_name" class="control-label">Last name</label>
                                    <input data-e2e="last_name" class="form-control" required name="last_name"
                                        type="text" id="last_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <span class="pull-right js-email-validating"
                                            style="display:none"><small>validating...</small></span>
                                        <label class="control-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" value="" class="form-control"
                                            required data-e2e="email" placeholder="mongolsenpai@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row password-form">
                                <div class="col-sm-12">
                                    <div class="form-group primary-password">
                                        <label class="control-label" style="width: 100%;">
                                            Create password <a data-toggle="modal" data-target="#pass" class="underlink"
                                                href="#" style="float: right; margin-right: 30px;">
                                                Why do I need a strong password? </a>
                                        </label>
                                        <div style="position:relative">
                                            <input type="password" name="password" value="" id="password"
                                                class="form-control js-password-strength" data-e2e="password"
                                                data-is-strong-password="1" required>
                                            <span aria-hidden="true"
                                                class="icon icon-eye-crossed icon-fw icon-lg text-purple-3"
                                                data-toggle-password-visibility="password"
                                                style="position:absolute;top:-32px;right:0;cursor:pointer;padding:8px 0;"></span>
                                        </div>
                                        <div class="js-password-strength-rules" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="form-section">
                        <section>
                            <h2 class="text-peach-1">Profile</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="birthday_at" class="control-label">Date of
                                            birth</label>
                                        <input data-e2e="birthday_at" class="form-control js-dob-mask" im-insert="false"
                                            name="birthday_at" type="text" id="birthday_at">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <a data-trigger="hover" class="pull-right" data-container="body"
                                            data-placement="auto" data-toggle="popover"
                                            title="Please provide us with your biological sex at birth."
                                            data-content="Your biological sex at birth plays an important role in your unique disease risk factors. It helps our doctors provide the best possible care.">
                                            <i class="icon icon-help-with-circle"></i>
                                        </a>
                                        <label for="gender" class="control-label">Sex</label>

                                        <div>
                                            <div class="btn-group btn-group-stylized btn-group-justified"
                                                data-toggle="buttons">
                                                <label class="btn btn-default " data-e2e="gender-female">
                                                    <input autocomplete="off" name="gender" type="radio" value="female"
                                                        id="gender"> Female
                                                </label>
                                                <label class="btn btn-default " data-e2e="gender-male">
                                                    <input autocomplete="off" name="gender" type="radio" value="male"
                                                        id="gender"> Male
                                                </label>
                                                <label class="btn btn-default " data-e2e="gender-intersex">
                                                    <input autocomplete="off" name="gender" type="radio"
                                                        value="intersex" id="gender"> Intersex
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="province" class="control-label">Residence</label>
                                        <select data-e2e="province" class="form-control js-reg-province-select" required
                                            id="province" name="province">
                                            <option value="Alberta">Alberta</option>
                                            <option value="British Columbia">British Columbia</option>
                                            <option value="Manitoba">Manitoba</option>
                                            <option value="New Brunswick">New Brunswick</option>
                                            <option value="Newfoundland and Labrador">Newfoundland and
                                                Labrador</option>
                                            <option value="Nova Scotia">Nova Scotia</option>
                                            <option value="Ontario" selected="selected">Ontario</option>
                                            <option value="Prince Edward Island">Prince Edward Island
                                            </option>
                                            <option value="Quebec">Quebec</option>
                                            <option value="Saskatchewan">Saskatchewan</option>
                                            <option value="Northwest Territories">Northwest Territories
                                            </option>
                                            <option value="Nunavut">Nunavut</option>
                                            <option value="Yukon Territory">Yukon Territory</option>
                                            <option value="New York">New York</option>
                                            <option value="Florida">Florida</option>
                                            <option value="California">California</option>
                                            <option value="US State">US State</option>
                                            <option value="Outside Canada and USA">Outside Canada and
                                                USA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <a data-trigger="hover" class="pull-right" data-container="body"
                                            data-placement="auto" data-toggle="popover"
                                            title="Why do we need your phone number?"
                                            data-content="SENPAI will only use your phone number to alert you when a doctor is ready to see you. You can change this setting at any time.">
                                            <i class="icon icon-help-with-circle"></i>
                                        </a>
                                        <label for="phone" class="control-label">Phone number <span
                                                id="phoneOptional"></span></label>
                                        <div class="input-group">
                                            <div class="input-group-addon">&nbsp;&nbsp;+1&nbsp;&nbsp;
                                            </div>
                                            <input data-e2e="phone" placeholder="(416) 555-5555"
                                                class="form-control phone"
                                                data-inputmask="&#039;mask&#039;: &#039;(999) 999-9999&#039;"
                                                name="phone" type="tel">
                                        </div>
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
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="show-for-step2">
                    <p><a data-toggle="collapse" href="#credit_code">Have a promo code?</a></p>
                    <div id="credit_code" class="collapse">
                        <div style="padding: 10px 0">
                            <div class="form-group" id="check_credit_code_wrapper">
                                <input data-reg="true" type="text" name="credit_code" id="check_credit_code"
                                    class="form-control" placeholder="Enter promo code here" value="" />
                                <div class="text-right" id="credit_code_result" style="height: 40px; padding-top: 10px">
                                </div>
                            </div>
                        </div>
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
                <small>By creating an account, you certify you are at least 16 years of age, and agree to
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
                            <h1>Terms of Use</h1>
                            <p>The SENPAI Terms of Use were updated on May 4, 2020.</p>
                            <h2>Terms of Use</h2>
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
            <hr class="spacer" />
    </div>
</div>