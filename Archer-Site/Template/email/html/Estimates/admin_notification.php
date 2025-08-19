<?php

/**
 * Customer Confirmation Email Template
 * CakePHP 5 Email Template for Estimate Request Confirmations
 *
 * Available Variables:
 * @var \App\Model\Entity\Estimate $estimate Customer estimate data
 * @var string $companyName Company name from constants
 * @var string $companyPhone Company phone from constants
 * @var array $trackingInfo Tracking information array
 * @var \Cake\View\View $this View instance
 */

// Set email title and preheader for layout
$this->set('title', 'Estimate Request Confirmation - ' . h($companyName));
$this->set('preheader', 'We received your estimate request and will contact you within 2 or 3 business days.');

// Format phone number for display
$phoneFormatted = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', $estimate->phone);

// Format services list if available
$servicesList = '';
if (!empty($estimate->services) && is_array($estimate->services)) {
    $serviceNames = [];
    foreach ($estimate->services as $service) {
        if (is_object($service) && isset($service->name)) {
            $serviceNames[] = h($service->name);
        } elseif (is_string($service)) {
            $serviceNames[] = h($service);
        }
    }
    $servicesList = implode(', ', $serviceNames);
}

// Get state name from the state field
$stateName = h($estimate->state);

// Get county name from the county field
$countyName = h($estimate->county);

// Get city name from the city field
$cityName = h($estimate->city);

// Format location string
if (!empty($countyName)) {
    $location = h($countyName);
}
if (!empty($cityName)) {
    $location = h($cityName) . ', ' . $location;
}
if (!empty($stateName)) {
    $location .= ', ' . $stateName;
}
if (!empty($estimate->zip)) {
    $location .= ', ' . h($estimate->zip);
}
?>

<?= $this->element('EmailTemplate/email_header'); ?>
<table style="padding: 20px; border-collapse: separate; border-radius: 10px;" role="presentation"
    cellspacing="0" cellpadding="0" border="0" width="600" align="center" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td>
                <h2
                    style="color: #09428a;font-weight: 500;line-height: 1.2;font-size: 30px;text-align: left; font-family: 'Open Sans', sans-serif;margin-top: 0;padding: 0; margin-bottom: 20px; text-align: left;">
                    New Estimate Request Submission
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
                    A new estimate request has just been submitted through your website.
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
                                                <h3 style="color: #09428a; font-weight: 500;text-align: left; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Customer Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left;width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Name</strong>
                                            </td>
                                            <td style="text-align: left;vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="text-align: left;vertical-align:top" valign="top">
                                                <?= h($estimate->first_name) ?> <?= h($estimate->last_name) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left;width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Email</strong>
                                            </td>
                                            <td style="text-align: left;vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="text-align: left;vertical-align:top" valign="top">
                                                <a href="mailto:<?= h($estimate->email) ?>"><?= h($estimate->email) ?></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left;width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Phone</strong>
                                            </td>
                                            <td style="text-align: left;vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php if (!empty($estimate->phone)): ?>
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
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>Location</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php
                                                $location = [];
                                                if (!empty($estimate->city)) {
                                                    $location[] = h($estimate->city);
                                                }
                                                if (!empty($estimate->county)) {
                                                    $location[] = h($estimate->county);
                                                }
                                                if (!empty($estimate->state)) {
                                                    $location[] = h($estimate->state);
                                                }
                                                if (!empty($estimate->zip)) {
                                                    $location[] = h($estimate->zip);
                                                }
                                                echo implode(', ', $location);
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>Services Requested</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php if (!empty($estimate->services) && is_array($estimate->services)): ?>
                                                    <?php
                                                    $serviceNames = [];
                                                    foreach ($estimate->services as $service) {
                                                        if (is_object($service) && isset($service->name)) {
                                                            $serviceNames[] = h($service->name);
                                                        } elseif (is_string($service)) {
                                                            $serviceNames[] = h($service);
                                                        }
                                                    }
                                                    echo implode(', ', $serviceNames);
                                                    ?>
                                                <?php else: ?>
                                                    Not specified
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>Property Type</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php
                                                $propertyTypes = [
                                                    1 => 'Residential',
                                                    2 => 'Business',
                                                ];

                                                if (!empty($estimate->property_type)) {
                                                    echo h($propertyTypes[$estimate->property_type] ?? 'Unknown');
                                                } else {
                                                    echo 'Not specified';
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>How did you hear about us?</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php if (!empty($estimate->heard_about_us) && $estimate->heard_about_us !== 'other'): ?>
                                                    <?= h($estimate->heard_about_us) ?>
                                                <?php elseif (!empty($estimate->additional_info) && $estimate->heard_about_us === 'other'): ?>
                                                    <?= h($estimate->additional_info) ?>
                                                <?php else: ?>
                                                    Not specified
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px;text-align: left; vertical-align:top" width="200" valign="top">
                                                <strong>Comments</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?php if (!empty($estimate->comments)): ?>
                                                    <?= nl2br(h($estimate->comments)) ?>
                                                <?php else: ?>
                                                    Not specified
                                                <?php endif; ?>
                                            </td>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px;text-align: left; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Submission Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>IP Address</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?= h($estimate->ip_address ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top;text-align: left;" width="200" valign="top">
                                                <strong>Referrer URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;text-align: left;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top;text-align: left;" valign="top">
                                                <?= h($estimate->referrer_url ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Client URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($estimate->client_url ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Client Referrer</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($estimate->client_referrer ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>User Agent</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($estimate->user_agent ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Screen Resolution</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($estimate->screen_resolution ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Submission Date</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= $estimate->created->format('F j, Y \a\t g:i A') ?>
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

                <a style="display: inline-block; text-decoration: none; color: #09428a;font-weight: 400;line-height: 1.5;font-size: 18px;font-family: 'Open Sans', sans-serif; text-align: left;" href="<?= DOMAIN ?>" target="_blank"><?= COMPANY_WEBSITE ?></a>
            </td>
        </tr>

    </tbody>
</table>
<?= $this->element('EmailTemplate/email_footer'); ?>