<?php
// Load StatesTable directly
use Cake\ORM\TableRegistry;

// Fetch states without using a controller
$statesTable = TableRegistry::getTableLocator()->get('States');
$states = $statesTable->loadStates();
?>

<style>
    .estimateForm_wrap {
        position: relative;
    }

    .form-error {
        color: #ff5061;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: block;
    }

    .form-control.is-invalid,
    .form-select.is-invalid {
        border-color: #ff5061;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-control.is-valid,
    .form-select.is-valid {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .field-container {
        position: relative;
        margin-bottom: 0;
    }

    .error-message {
        color: #ff5061;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: none;
        line-height: 1.3;
    }

    .error-message.show {
        display: block;
    }

    .form-loading {
        pointer-events: none;
        opacity: 0.6;
    }

    .btn-loading {
        position: relative;
        pointer-events: none;
    }

    .btn-loading::after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        margin: auto;
        border: 2px solid transparent;
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* .refer_form {
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .header_label {
        color: #09428a;
        font-size: 18px;
        font-weight: 600;
    } */

    /* .checkItem {
        margin: 15px 0;
    } */

    /*  .custom_checkbox {
        display: flex;
        align-items: center;
        gap: 10px;
    } */

    /* .custom-control-input {
        width: 18px;
        height: 18px;
        margin: 0;
    }

    .custom-control-label {
        margin: 0;
        cursor: pointer;
    } */

    .submit-status {
        text-align: center;
        margin-top: 15px;
        font-weight: 500;
        color: #09428a;
    }
</style>

<div class="estimateForm_wrap refer_form">

    <?= $this->Form->create($refer ?? null, [
        'url' => ['controller' => 'Refers', 'action' => 'add'],
        'id' => 'referralForm',
        'novalidate' => true,
        'role' => 'form',
        'aria-labelledby' => 'form-title'
    ]) ?>

    <div class="row g-3">
        <div class="col-md-12">
            <h4 class="header_label">Let us connect with your referral</h4>
        </div>

        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('referral_name', [
                    'class' => 'form-control',
                    'placeholder' => 'Your referral name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'referral-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="referral-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('referral_email', [
                    'class' => 'form-control',
                    'placeholder' => 'Email (optional)',
                    'label' => false,
                    'required' => false,
                    'type' => 'email',
                    'aria-describedby' => 'referral-email-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'email'
                ]) ?>
                <div id="referral-email-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('referral_phone', [
                    'class' => 'form-control',
                    'placeholder' => 'Phone (optional, e.g., 123-456-7890)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'referral-phone-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'phone',
                    'maxlength' => '14'
                ]) ?>
                <div id="referral-phone-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('referral_state', [
                    'class' => 'form-select',
                    'placeholder' => 'Select State',
                    'label' => false,
                    'required' => true,
                    'type' => 'select',
                    'options' => $states,
                    'empty' => 'Select State',
                    'aria-describedby' => 'referral-state-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'select'
                ]) ?>
                <div id="referral-state-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('referral_city', [
                    'class' => 'form-control',
                    'placeholder' => 'City (optional)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'referral-city-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name',
                    'maxlength' => '255'
                ]) ?>
                <div id="referral-city-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('referral_zip', [
                    'class' => 'form-control',
                    'placeholder' => 'Zip (optional, e.g., 12345)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'referral-zip-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'zip',
                    'maxlength' => '10'
                ]) ?>
                <div id="referral-zip-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <h4 class="header_label">Tell us about yourself</h4>
        </div>

        <div class="col-md-12">
            <div class="field-container">
                <?= $this->Form->control('your_name', [
                    'class' => 'form-control',
                    'placeholder' => 'Your name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'your-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="your-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('your_email', [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                    'label' => false,
                    'required' => true,
                    'type' => 'email',
                    'aria-describedby' => 'your-email-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'email'
                ]) ?>
                <div id="your-email-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('your_phone', [
                    'class' => 'form-control',
                    'placeholder' => 'Phone (e.g., 123-456-7890)',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'your-phone-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'phone',
                    'maxlength' => '14'
                ]) ?>
                <div id="your-phone-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="checkItem">
                <div class="custom-control custom_checkbox">
                    <?= $this->Form->control('archer_customer_flag', [
                        'type' => 'checkbox',
                        'class' => 'custom-control-input',
                        'label' => false,
                        'id' => 'archerCustomer'
                    ]) ?>
                    <label style="font-size: 16px;" class="custom-control-label" for="archerCustomer">
                        Check if you're an Archer Customer
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('other', [
                    'class' => 'form-control',
                    'placeholder' => 'Other (optional)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'other-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'text',
                    'maxlength' => '255'
                ]) ?>
                <div id="other-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('archer_rep_name', [
                    'class' => 'form-control',
                    'placeholder' => 'Archer representative\'s name (optional)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'archer-rep-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name',
                    'maxlength' => '255'
                ]) ?>
                <div id="archer-rep-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <?= $this->Form->button('Submit', [
                'class' => 'theme-btn sm',
                'type' => 'submit',
                'id' => 'submitBtn'
            ]) ?>
        </div>

        <div class="col-12">
            <div class="submit-status" id="submitStatus"></div>
        </div>
    </div>

    <?= $this->Form->end() ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('referralForm');
        const submitBtn = document.getElementById('submitBtn');
        const submitStatus = document.getElementById('submitStatus');

        // Validation patterns
        const validationPatterns = {
            name: /^[a-zA-Z\s\'\-\.]+$/,
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            zip: /^\d{5}(-\d{4})?$/
        };

        // Phone number formatting
        const phoneInputs = document.querySelectorAll('input[data-validation-type="phone"]');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length >= 6) {
                    value = value.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
                } else if (value.length >= 3) {
                    value = value.replace(/(\d{3})(\d{0,3})/, '$1-$2');
                }
                e.target.value = value;
            });
        });

        // Real-time validation
        const fields = form.querySelectorAll('[data-validation-type]');
        fields.forEach(field => {
            field.addEventListener('blur', function() {
                validateField(this);
            });

            field.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (validateForm()) {
                submitForm();
            }
        });

        function validateField(field) {
            const fieldType = field.getAttribute('data-validation-type');
            const value = field.value.trim();
            let isValid = true;
            let errorMessage = '';

            // Clear previous validation state
            clearFieldError(field);

            // Check if field is required (explicit required attribute check)
            const isRequired = field.hasAttribute('required') && field.getAttribute('required') !== 'false';

            if (isRequired && !value) {
                isValid = false;
                errorMessage = `${getFieldLabel(field)} is required`;
            } else if (value) {
                switch (fieldType) {
                    case 'name':
                        if (!validationPatterns.name.test(value)) {
                            isValid = false;
                            errorMessage = `${getFieldLabel(field)} must contain only letters, spaces, apostrophes, hyphens, and periods`;
                        }
                        break;
                    case 'email':
                        if (!validationPatterns.email.test(value)) {
                            isValid = false;
                            errorMessage = 'Please enter a valid email address';
                        }
                        break;
                    case 'phone':
                        const cleanPhone = value.replace(/\D/g, '');
                        if (cleanPhone.length !== 10) {
                            isValid = false;
                            errorMessage = 'Please enter a valid 10-digit phone number';
                        }
                        break;
                    case 'zip':
                        if (value && !validationPatterns.zip.test(value)) {
                            isValid = false;
                            errorMessage = 'Please enter a valid zip code (e.g., 12345 or 12345-6789)';
                        }
                        break;
                    case 'select':
                        if (!value || value === '' || value === '0') {
                            isValid = false;
                            errorMessage = `Please select ${getFieldLabel(field).toLowerCase()}`;
                        }
                        break;
                }
            }

            setFieldValidation(field, isValid, errorMessage);
            return isValid;
        }

        function validateReferralContact() {
            const referralEmail = document.querySelector('input[name="referral_email"]').value.trim();
            const referralPhone = document.querySelector('input[name="referral_phone"]').value.trim();

            if (!referralEmail && !referralPhone) {
                // Show error on both fields
                const emailField = document.querySelector('input[name="referral_email"]');
                const phoneField = document.querySelector('input[name="referral_phone"]');
                const emailError = document.getElementById('referral-email-error');
                const phoneError = document.getElementById('referral-phone-error');

                emailField.classList.add('is-invalid');
                phoneField.classList.add('is-invalid');
                emailError.textContent = 'Please provide either an email or phone number';
                phoneError.textContent = 'Please provide either an email or phone number';
                emailError.classList.add('show');
                phoneError.classList.add('show');

                return false;
            }

            return true;
        }

        function validateForm() {
            let isFormValid = true;

            // Validate all input fields
            const fields = form.querySelectorAll('[data-validation-type]');
            fields.forEach(field => {
                if (!validateField(field)) {
                    isFormValid = false;
                }
            });

            // Validate referral contact requirement
            if (!validateReferralContact()) {
                isFormValid = false;
            }

            return isFormValid;
        }

        function setFieldValidation(field, isValid, errorMessage) {
            const errorContainer = document.getElementById(field.getAttribute('aria-describedby'));

            if (isValid) {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
                field.setAttribute('aria-invalid', 'false');
                if (errorContainer) {
                    errorContainer.textContent = '';
                    errorContainer.classList.remove('show');
                }
            } else {
                field.classList.remove('is-valid');
                field.classList.add('is-invalid');
                field.setAttribute('aria-invalid', 'true');
                if (errorContainer) {
                    errorContainer.textContent = errorMessage;
                    errorContainer.classList.add('show');
                }
            }
        }

        function clearFieldError(field) {
            field.classList.remove('is-invalid', 'is-valid');
            field.setAttribute('aria-invalid', 'false');
            const errorContainer = document.getElementById(field.getAttribute('aria-describedby'));
            if (errorContainer) {
                errorContainer.textContent = '';
                errorContainer.classList.remove('show');
            }
        }

        function getFieldLabel(field) {
            return field.placeholder || field.name.replace('_', ' ').replace(/\b\w/g, l => l.toUpperCase());
        }

        // Add client-side tracking data
        function addClientTrackingData() {
            // Add hidden fields for additional client-side tracking if needed
            // Note: Server-side tracking is primary, this is supplementary

            // Current URL (will be captured server-side as origin_url)
            if (!document.querySelector('input[name="client_url"]')) {
                const urlInput = document.createElement('input');
                urlInput.type = 'hidden';
                urlInput.name = 'client_url';
                urlInput.value = window.location.href;
                form.appendChild(urlInput);
            }

            // Referrer (will be captured server-side as referrer_url)
            if (document.referrer && !document.querySelector('input[name="client_referrer"]')) {
                const referrerInput = document.createElement('input');
                referrerInput.type = 'hidden';
                referrerInput.name = 'client_referrer';
                referrerInput.value = document.referrer;
                form.appendChild(referrerInput);
            }

            // User agent for additional context
            if (!document.querySelector('input[name="user_agent"]')) {
                const uaInput = document.createElement('input');
                uaInput.type = 'hidden';
                uaInput.name = 'user_agent';
                uaInput.value = navigator.userAgent.substring(0, 500); // Limit length
                form.appendChild(uaInput);
            }

            // Screen resolution for analytics
            if (!document.querySelector('input[name="screen_resolution"]')) {
                const screenInput = document.createElement('input');
                screenInput.type = 'hidden';
                screenInput.name = 'screen_resolution';
                screenInput.value = screen.width + 'x' + screen.height;
                form.appendChild(screenInput);
            }
        }

        function submitForm() {
            submitBtn.classList.add('btn-loading');
            submitBtn.disabled = true;
            form.classList.add('form-loading');
            submitStatus.textContent = 'Submitting your referral...';

            // Add client-side tracking data
            addClientTrackingData();

            // Debug: Log form data before submission (remove after testing)
            const formData = new FormData(form);
            console.log('Form submission data:');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            // Submit the form normally
            form.submit();
        }
    });
</script>