<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br /><br /><br />
<div class="row container m-auto mt-5 pt-4">
    <div class="col-sm-8 shadow mb-5 p-5">
        <section class="section section-noleft">
            <div class="section-content">
                <h3 class="margin: 0 0 0px">Sign In</h3>
                <p class="ipsType_reset ipsType_large ipsType_light">
                    Don't have an account?
                    <?= $this->Html->link(__('Sign Up'), ['action' => 'signup'], ['class'=>' ']) ?>
                </p>
                <input type="hidden" name="_token" value="hLYLMCM5k9aHvJaPQiByWTcNUBK20OFHCpeLykTz">
                <div class="js-steps hide-until-steps-init">
                    <div class="form-section">
                        <section>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo $this->Form->control('user_name', ['class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row password-form">
                                <div class="col-sm-12">
                                    <div class="form-group primary-password">
                                        <label class="control-label" style="width: 100%;">
                                            Password
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
                    <div class="col-sm-12">
                        <div class="form-section">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg text-serif "
                                    data-heap="register-submit-button" data-e2e="submit">Sign In</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <p class="hide-for-step1">
                    <a data-toggle="modal" data-target="#forgot-pass" class="underlink" href="#"
                        style="float: right; margin-right: 30px;">Forgot your password?</a>
                </p>

                <!-- Modal -->
                <div class="modal fade" id="forgot-pass" tabindex="-1" role="dialog" aria-labelledby="termsLable">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body" style="height: 200px; overflow: scroll">
                                <h4>Forgot your password?</h4>
                                <hr class="spacer visible-xs hide-for-step1" style="margin: 4px">
                                <div class="form-group">
                                    <span class="pull-right js-email-validating"
                                        style="display:none"><small>validating...</small></span>
                                    <label class="control-label" for="email">Email Address</label>
                                    <input type="email" name="email" id="email" value="" class="form-control" required
                                        data-e2e="email" placeholder="Type your email address here">
                                </div>
                                <button type="submit" class="btn btn-info float-right"
                                    data-heap="register-submit-button" data-e2e="submit">Recover Password</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="spacer" />

            </div>
        </section>
    </div>
    <div class="col-sm-4  mb-5 p-5 ">
        <section class="section section-noright">
            <h3 class="margin: 0 0 0px">Sign In Faster</h3>
            <hr class="spacer visible-xs hide-for-step1">
            <div class="social-links text-center text-md-left pt-3 pt-md-0">
                <div> <a href="#" class="twitter"><i class="bx bxl-twitter"> Twitter</i></a>
                </div>
                <div> <a href="#" class="facebook"><i class="bx bxl-facebook"> Facebook</i></a>
                </div>
                <div> <a href="#" class="instagram"><i class="bx bxl-instagram"> Instagram</i></a>
                </div>
                <div> <a href="#" class="google-plus"><i class="bx bxl-skype"> Google-plus</i></a>
                </div>
                <div> <a href="#" class="linkedin"><i class="bx bxl-linkedin"> Linkedin</i></a>
                </div>
            </div>
        </section>
    </div>
</div>