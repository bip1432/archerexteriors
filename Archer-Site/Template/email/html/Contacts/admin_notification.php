<?= $this->element('EmailTemplate/email_header'); ?>
<table style="padding: 20px; border-collapse: separate; border-radius: 10px;" role="presentation"
    cellspacing="0" cellpadding="0" border="0" width="600" align="center" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td>
                <h2
                    style="color: #09428a;font-weight: 500;line-height: 1.2;font-size: 30px;text-align: left; font-family: 'Open Sans', sans-serif;margin-top: 0;padding: 0; margin-bottom: 20px; ">
                    New Contact Form Submission
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
                    A new contact form has been submitted on your website. Please review the details below and respond accordingly.
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
                                                    Contact Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Name</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($contact->first_name) ?> <?= h($contact->last_name) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Email</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <a href="mailto:<?= h($contact->email) ?>"><?= h($contact->email) ?></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Phone</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($contact->phone)) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Location</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php
                                                $location = [];
                                                if (!empty($contact->city)) {
                                                    $location[] = h($contact->city);
                                                }
                                                $location[] = h($contact->county);
                                                $location[] = h($contact->state);
                                                if (!empty($contact->zip)) {
                                                    $location[] = h($contact->zip);
                                                }
                                                echo implode(', ', $location);
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>What is your query releted to?</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($queryText) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Inquiry Details</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($contact->message)): ?>
                                                    <?= nl2br(h($contact->message)) ?>
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
                                                <?= h($trackingInfo['ip_address'] ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referrer</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($trackingInfo['referrer_url'] ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Origin URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php //echo h($trackingInfo['origin_url'] ?? 'N/A') 
                                                ?>
                                            </td>
                                        </tr> -->

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