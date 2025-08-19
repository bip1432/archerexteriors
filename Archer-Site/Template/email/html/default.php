<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \Cake\View\View $this
 * @var string $content
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title><?= h($this->get('title', 'Archer Exteriors')) ?></title>

    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->

    <style type="text/css">
        /* Reset and normalize */
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        img {
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
            height: auto;
            border: 0;
            outline: none;
            text-decoration: none;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        /* What it does: Fixes webkit padding issue. */
        .webkit {
            max-width: 600px;
        }

        /* What it does: Forces table cells into full-width rows. */
        .force-row,
        .force-col {
            display: table-cell;
            vertical-align: top;
        }

        .force-row table {
            width: 100%;
        }

        .force-col,
        .force-col table {
            width: 280px;
        }

        u+.body .force-col {
            width: 280px;
        }

        u+.body .force-row {
            width: 100%;
        }

        /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
        .center-on-narrow {
            text-align: center;
            display: inline-block;
            width: 100%;
            max-width: 280px;
        }

        .email-summary {
            display: none !important;
        }

        @media only screen and (max-device-width: 480px) {
            .email-summary {
                display: block !important;
                max-height: none !important;
                overflow: visible !important;
            }
        }

        /* Media Queries */
        @media only screen and (max-width: 480px) {

            .force-row,
            .force-col {
                display: block;
                width: 100% !important;
                max-width: 100% !important;
            }

            .force-col table {
                width: 100% !important;
            }

            .center-on-narrow {
                display: block !important;
                width: auto !important;
            }

            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }

            .mobile-padding {
                padding: 20px !important;
            }

            .mobile-text-center {
                text-align: center !important;
            }

            .mobile-full-width {
                width: 100% !important;
                max-width: 100% !important;
            }
        }

        /* Dark Mode Styles */
        @media (prefers-color-scheme: dark) {
            .email-bg {
                background-color: #1a1a1a !important;
            }

            .email-container {
                background-color: #2d2d2d !important;
            }

            .dark-mode-text {
                color: #ffffff !important;
            }

            .dark-mode-text-secondary {
                color: #cccccc !important;
            }
        }
    </style>
</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f4f4f4;" class="body">
    <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #f4f4f4;" class="email-bg">
        <!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
        <td>
        <![endif]-->

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="max-height:0; overflow:hidden; mso-hide:all;" aria-hidden="true">
            <?= h($this->get('preheader', 'Thank you for your interest in Archer Exteriors. We will contact you within 24 hours.')) ?>
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Create white space after the desired preview text so email clients don't pull other distracting text into the inbox preview. Extend as necessary. -->
        <!-- Preview Text Spacing Hack : BEGIN -->
        <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!-- Email Container : BEGIN -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;" class="email-container">

            <!-- Header : BEGIN -->
            <tr>
                <td style="padding: 20px 0; text-align: center; background-color: #ffffff;">
                    <img src="<?= DOMAIN ?>/img/Archer-Exteriors-Logo.png" width="200" height="auto" alt="<?= h(DOMAIN_NAME) ?>" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;" class="g-img">
                </td>
            </tr>
            <!-- Header : END -->

            <!-- Email Body : BEGIN -->
            <tr>
                <td style="background-color: #ffffff;" class="email-container">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 20px; font-family: sans-serif; font-size: 16px; line-height: 24px; color: #333333;" class="mobile-padding dark-mode-text">
                                <?= $content ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Email Body : END -->

            <!-- Footer : BEGIN -->
            <tr>
                <td style="background-color: #2c3e50; padding: 20px;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 0 0 10px 0; font-family: sans-serif; font-size: 14px; line-height: 20px; color: #ffffff; text-align: center;">
                                <strong><?= h(DOMAIN_NAME) ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0 0 10px 0; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #ecf0f1; text-align: center;">
                                <?= h(COMPANY_ADDRESS) ?><br>
                                Phone: <a href="tel:<?= h(COMPANY_PHONE_TEL) ?>" style="color: #3498db; text-decoration: none;"><?= h(COMPANY_PHONE) ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 0 0 0; font-family: sans-serif; font-size: 11px; line-height: 16px; color: #95a5a6; text-align: center;">
                                <p style="margin: 0;">© <?= date('Y') ?> <?= h(DOMAIN_NAME) ?>. All rights reserved.</p>
                                <p style="margin: 5px 0 0 0;">
                                    You received this email because you requested an estimate from our website.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Footer : END -->

        </table>
        <!-- Email Container : END -->

        <!--[if mso | IE]>
        </td>
        </tr>
        </table>
        <![endif]-->
    </center>
</body>

</html>