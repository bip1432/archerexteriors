<?php

/**
 * New Construction Partnership Request Email Template
 * CakePHP 5 Email Template for New Construction Partnership Request Notifications
 * 
 * Available Variables:
 * @var \App\Model\Entity\NewConstruction $newConstruction Customer new construction data
 * @var string $companyName Company name from constants
 * @var string $companyPhone Company phone from constants
 * @var array $trackingInfo Tracking information array
 * @var \Cake\View\View $this View instance
 */

// Set email title and preheader for layout
$this->set('title', 'New Construction Partnership Request - ' . h($companyName));
$this->set('preheader', 'A new builder partnership request has been submitted through your website.');

// Format phone number for display
$phoneFormatted = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', $newConstruction->phone);

// Format location string
$location = [];
if (!empty($newConstruction->city)) {
    $location[] = h($newConstruction->city);
}
if (!empty($newConstruction->state)) {
    $location[] = h($newConstruction->state);
}
if (!empty($newConstruction->zip)) {
    $location[] = h($newConstruction->zip);
}
$locationString = implode(', ', $location);
?>

<?= $this->element('EmailTemplate/email_header'); ?>
<table style="padding: 20px; border-collapse: separate; border-radius: 10px;" role="presentation"
    cellspacing="0" cellpadding="0" border="0" width="600" align="center" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td>
                <h2
                    style="color: #09428a;font-weight: 500;line-height: 1.2;font-size: 30px;text-align: left; font-family: 'Open Sans', sans-serif;margin-top: 0;padding: 0; margin-bottom: 20px; ">
                    New Construction Partnership Request
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
                    A new construction partnership request has just been submitted through your website.
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
                                                <?= h($newConstruction->first_name) ?> <?= h($newConstruction->last_name) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Company</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($newConstruction->company_name) ?>
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
                                                <a href="mailto:<?= h($newConstruction->email) ?>"><?= h($newConstruction->email) ?></a>
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
                                                <?php if (!empty($newConstruction->phone)): ?>
                                                    <?= h($phoneFormatted) ?>
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
                                                <strong>Address</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($newConstruction->address) ?>
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
                                                <?= $locationString ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>How did you hear about us?</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($newConstruction->heard_about_us) && $newConstruction->heard_about_us !== 'other'): ?>
                                                    <?= h($newConstruction->heard_about_us) ?>
                                                <?php elseif (!empty($newConstruction->additional_info) && $newConstruction->heard_about_us === 'other'): ?>
                                                    <?= h($newConstruction->additional_info) ?>
                                                <?php else: ?>
                                                    Not specified
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <?php if (!empty($newConstruction->about_project)): ?>
                                            <tr>
                                                <td style="height: 10px; line-height: 10px;"></td>
                                            </tr>

                                            <tr>
                                                <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                    <strong>Project Description</strong>
                                                </td>
                                                <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                    <strong>:</strong>
                                                </td>
                                                <td style="vertical-align:top" valign="top">
                                                    <?= nl2br(h($newConstruction->about_project)) ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;"></td>
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
                                                <?= h($newConstruction->ip_address ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Referrer URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($newConstruction->referrer_url ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <!-- <tr>
                            <td style="height: 30px; line-height: 30px;">&nbsp;</td>
                        </tr>

                        <tr>
                            <td>
                                <p
                                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 16px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 10px;">
                                    Please follow up with this builder partnership request as soon as possible.
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                        </tr>

                        <tr>
                            <td>
                                <p
                                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 16px;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 0;">
                                    Best regards,<br>
                                    <strong><?= h($companyName) ?> Website</strong>
                                </p>
                            </td>
                        </tr> -->

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