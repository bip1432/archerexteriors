<?php

/**
 * Job Application Notification Email Template
 * CakePHP 5 Email Template for Job Application Notifications
 * 
 * Available Variables:
 * @var \App\Model\Entity\JobApplication $jobApplication Job application data
 * @var \App\Model\Entity\JobList $jobList Job listing data
 * @var string $companyName Company name from constants
 * @var string $companyPhone Company phone from constants
 * @var array $trackingInfo Tracking information array
 * @var \Cake\View\View $this View instance
 */

// Set email title and preheader for layout
$this->set('title', 'Job Application Submission - ' . h($companyName));
$this->set('preheader', 'New job application received for ' . h($jobList->job_title));

// Format phone number for display
$phoneFormatted = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $jobApplication->phone);

// Format location string
$location = [];
if (!empty($jobApplication->city)) {
    $location[] = h($jobApplication->city);
}
if (!empty($jobApplication->state)) {
    $location[] = h($jobApplication->state);
}
if (!empty($jobApplication->zip)) {
    $location[] = h($jobApplication->zip);
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
                    New Job Application Submission
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
                    A new job application has just been submitted through your website for the position: <strong><?= h($jobList->job_title) ?></strong>
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
                                                    Job Information:
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Position</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($jobList->job_title) ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Category</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($jobList->job_category ?? 'Not specified') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Job Location</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($jobList->job_location ?? 'Not specified') ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 20px; line-height: 20px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <h3 style="color: #09428a; font-weight: 500; font-size: 20px; font-family: 'Open Sans', sans-serif; margin: 0 0 15px 0; padding: 0;">
                                                    Applicant Information:
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
                                                <?= h($jobApplication->first_name) ?> <?= h($jobApplication->last_name) ?>
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
                                                <a href="mailto:<?= h($jobApplication->email) ?>"><?= h($jobApplication->email) ?></a>
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
                                                <?php if (!empty($jobApplication->phone)): ?>
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
                                                <?php if (!empty($jobApplication->address)): ?>
                                                    <?= h($jobApplication->address) ?>
                                                    <?php if (!empty($locationString)): ?>
                                                        <br><?= $locationString ?>
                                                    <?php endif; ?>
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
                                                <strong>Previously Worked for Archer</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= $jobApplication->work_archer ? 'Yes' : 'No' ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Resume</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?php if (!empty($jobApplication->resume_path)): ?>
                                                    <span style="background-color: #e8f4f8; padding: 5px 10px; border-radius: 5px; color: #09428a; font-weight: 500;">
                                                        📎 Resume attached - <?= h(basename($jobApplication->resume_path)) ?>
                                                    </span>
                                                    <!-- <br><small style="color: #666773;">File location: <?= h($jobApplication->resume_path) ?></small> -->
                                                <?php else: ?>
                                                    No resume uploaded
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
                                                <?= h($jobApplication->ip_address ?? 'N/A') ?>
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
                                                <?= h($jobApplication->referrer_url ?? 'N/A') ?>
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Origin URL</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= h($jobApplication->origin_url ?? 'N/A') ?>
                                            </td>
                                        </tr> -->

                                        <tr>
                                            <td style="height: 10px; line-height: 10px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 160px; vertical-align:top" width="200" valign="top">
                                                <strong>Submission Date</strong>
                                            </td>
                                            <td style="vertical-align:top; width: 30px;" width="30" valign="top">
                                                <strong>:</strong>
                                            </td>
                                            <td style="vertical-align:top" valign="top">
                                                <?= $jobApplication->created->format('F j, Y \a\t g:i A') ?>
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
                    <?= h($companyName) ?>
                </p>

                <p
                    style="color: #666773;font-weight: 400;line-height: 1.5;font-size: 16px;font-family: 'Open Sans', sans-serif;margin-top: 5px;margin-bottom: 0;padding-top: 0;text-align: left; padding-bottom: 0;">
                    Phone: <?= h($companyPhone) ?>
                </p>
            </td>
        </tr>

    </tbody>
</table>
<?= $this->element('EmailTemplate/email_footer'); ?>