<?= $this->element('EmailTemplate/email_header'); ?>
<table style="padding: 20px; border-collapse: separate; border-radius: 10px;" role="presentation"
    cellspacing="0" cellpadding="0" border="0" width="600" align="center" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td>
                <h2
                    style="color: #09428a;font-weight: 500;line-height: 1.2;font-size: 30px;text-align: left; font-family: 'Open Sans', sans-serif;margin-top: 0;padding: 0; margin-bottom: 20px; ">
                    New Referral Form Submission
                </h2>
            </td>
        </tr>

        <tr>
            <td>
                <p
                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 18px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 10px;">
                    Hi <b>Archer Team</b>,
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p
                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 18px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 0;">
                    A new referral form has just been submitted through your website.
                </p>
            </td>
        </tr>

        <tr>
            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
        </tr>

        <tr>
            <td>
                <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                    style="font-weight:400; font-style:normal; color:#4a596d; font-size:15px; margin: 0;">
                                    <tbody>
                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Let us connect with your referral:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referral Name</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($refer->referral_name) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referral Email</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($refer->referral_email)): ?>
                                                    <a href="mailto:<?= h($refer->referral_email) ?>"><?= h($refer->referral_email) ?></a>
                                                <?php else: ?>
                                                    Not provided
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referral Phone</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($refer->referral_phone)): ?>
                                                    <?= preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($refer->referral_phone)) ?>
                                                <?php else: ?>
                                                    Not provided
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referral Location</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php
                                                $location = [];
                                                if (!empty($refer->referral_city)) {
                                                    $location[] = h($refer->referral_city);
                                                }
                                                $location[] = h($refer->referral_state);
                                                if (!empty($refer->referral_zip)) {
                                                    $location[] = h($refer->referral_zip);
                                                }
                                                echo implode(', ', $location);
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Tell us about yourself:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Your Name</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($refer->your_name) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Your Email</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <a href="mailto:<?= h($refer->your_email) ?>"><?= h($refer->your_email) ?></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Your Phone</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($refer->your_phone)) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Archer Customer Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Archer Customer</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= $refer->archer_customer_flag ? 'Yes' : 'No' ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Additional Information</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($refer->other)): ?>
                                                    <?= nl2br(h($refer->other)) ?>
                                                <?php else: ?>
                                                    Not provided
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Archer Representative</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($refer->archer_rep_name)): ?>
                                                    <?= h($refer->archer_rep_name) ?>
                                                <?php else: ?>
                                                    Not provided
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Submission Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>IP Address</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($refer->ip_address ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referrer URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($refer->referrer_url ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td style="height: 40px; line-height: 40px;">&nbsp;</td>
        </tr>

        <tr>
            <td>
                <h4
                    style="color: #09428a;font-weight: 400;line-height: 1.5;font-size: 20px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 0;">
                    Web Team
                </h4>
                <p
                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 18px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 0;">
                    <?= COMPANY_NAME ?>
                </p>

                <a style="display: inline-block; text-decoration: none; color: #09428a;font-weight: 400;line-height: 1.5;font-size: 18px;font-family: 'Open Sans', sans-serif;" href="<?= DOMAIN ?>" target="_blank"><?= COMPANY_WEBSITE ?></a>
            </td>
        </tr>

    </tbody>
</table>
<?= $this->element('EmailTemplate/email_footer'); ?>