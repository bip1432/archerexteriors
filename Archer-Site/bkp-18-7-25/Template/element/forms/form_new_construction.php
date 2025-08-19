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

    .additional-info-field {
        display: none;
        transition: all 0.3s ease;
    }

    .additional-info-field.show {
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
        position: relative;
        width: 16px;
        height: 16px;
        margin: auto;
        margin-left: auto;
        border: 2px solid var(--grad-light);
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        top: 2px;
        display: inline-block;
        margin-left: 5px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
</style>

<div class="estimateForm_wrap">
    <div class="header">
        <h4>Builder Partnership Form</h4>
        <span class="icon"><?= $this->Html->tag('i', '', ['class' => 'fi fi-rr-list-check']) ?></span>
    </div>

    <?= $this->Form->create(null, [
        'url' => ['controller' => 'Companies', 'action' => 'newConstruction'],
        'id' => 'newConstructionForm',
        'novalidate' => true,
        'role' => 'form',
        'aria-labelledby' => 'form-title'
    ]) ?>

    <div id="form-title" class="sr-only">Builder Partnership Request Form</div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('first_name', [
                    'class' => 'form-control',
                    'placeholder' => 'First Name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'first-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="first-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('last_name', [
                    'class' => 'form-control',
                    'placeholder' => 'Last Name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'last-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="last-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="field-container">
                <?= $this->Form->control('company_name', [
                    'class' => 'form-control',
                    'placeholder' => 'Company Name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'company-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="company-name-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('email', [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                    'label' => false,
                    'required' => true,
                    'type' => 'email',
                    'aria-describedby' => 'email-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'email'
                ]) ?>
                <div id="email-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('phone', [
                    'class' => 'form-control',
                    'placeholder' => 'Phone',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'phone-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'phone',
                    'maxlength' => '12'
                ]) ?>
                <div id="phone-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="field-container">
                <?= $this->Form->control('address', [
                    'class' => 'form-control',
                    'placeholder' => 'Address',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'address-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="address-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('state', [
                    'class' => 'form-select',
                    'placeholder' => 'Select State',
                    'label' => false,
                    'required' => true,
                    'type' => 'select',
                    'options' => $states,
                    'empty' => 'Select State',
                    'id' => 'state-select',
                    'aria-describedby' => 'state-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'select'
                ]) ?>
                <div id="state-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('city', [
                    'class' => 'form-control',
                    'placeholder' => 'City',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'city-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="city-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="field-container">
                <?= $this->Form->control('zip', [
                    'class' => 'form-control',
                    'placeholder' => 'Zip Code',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'zip-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'zip',
                    'maxlength' => '10'
                ]) ?>
                <div id="zip-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('heard_about_us', [
                    'class' => 'form-select',
                    'options' => HEARD_ABOUT_US,
                    'empty' => 'How did you hear about us?',
                    'label' => false,
                    'required' => true,
                    'id' => 'heard-about-select',
                    'aria-describedby' => 'heard-about-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'select'
                ]) ?>
                <div id="heard-about-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-12 additional-info-field" id="additional-info-container">
            <div class="field-container">
                <?= $this->Form->control('additional_info', [
                    'class' => 'form-control',
                    'placeholder' => 'Other',
                    'label' => false,
                    'id' => 'additional-info',
                    'aria-describedby' => 'additional-info-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="additional-info-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('about_project', [
                    'class' => 'form-control',
                    'placeholder' => 'Tell us about your project',
                    'rows' => 3,
                    'label' => false,
                    'aria-describedby' => 'about-project-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'comments',
                    'maxlength' => '1000'
                ]) ?>
                <div id="about-project-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <?= $this->Form->button('Submit', [
                'class' => 'theme-btn sm',
                'id' => 'submit-btn',
                'type' => 'submit',
                'aria-describedby' => 'submit-status'
            ]) ?>
            <div id="submit-status" class="sr-only" aria-live="polite"></div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('newConstructionForm');
        const stateSelect = document.getElementById('state-select');
        const heardAboutSelect = document.getElementById('heard-about-select');
        const additionalInfoContainer = document.getElementById('additional-info-container');
        const additionalInfoField = document.getElementById('additional-info');
        const phoneField = document.querySelector('[name="phone"]');
        const zipField = document.querySelector('[name="zip"]');
        const submitBtn = document.getElementById('submit-btn');
        const submitStatus = document.getElementById('submit-status');

        /* const validationPatterns = {
            name: /^[a-zA-Z0-9\s\'\-\.,]+$/,
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            phone: /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,
            zip: /^\d{5}(-\d{4})?$/
        }; */

        // Validation patterns
        const validationPatterns = {
            name: /^[^<>]+$/,
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            phone: /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,
            zip: /^\d{5}(-\d{4})?$/
        };

        // Phone number formatting
        phoneField.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
            } else if (value.length >= 3) {
                value = value.replace(/(\d{3})(\d{3})/, '$1-$2');
            }
            e.target.value = value;
            validateField(e.target);
        });

        // Zip code formatting
        zipField.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 5) {
                value = value.replace(/(\d{5})(\d{4})/, '$1-$2');
            }
            e.target.value = value;
            validateField(e.target);
        });

        // Real-time validation for all fields
        form.addEventListener('input', function(e) {
            if (e.target.matches('[data-validation-type]')) {
                validateField(e.target);
            }
        });

        form.addEventListener('change', function(e) {
            if (e.target.matches('[data-validation-type]')) {
                validateField(e.target);
            }
        });

        // Handle "Heard About Us" conditional field
        heardAboutSelect.addEventListener('change', function() {
            additionalInfoField.value = '';
            if (this.value === 'other') {
                additionalInfoContainer.classList.add('show');
                additionalInfoField.setAttribute('required', 'required');
                additionalInfoField.setAttribute('aria-required', 'true');
            } else {
                additionalInfoContainer.classList.remove('show');
                additionalInfoField.removeAttribute('required');
                additionalInfoField.setAttribute('aria-required', 'false');
                clearFieldError(additionalInfoField);
            }
            validateField(this);
        });

        // State change handler (now only for validation)
        stateSelect.addEventListener('change', function() {
            validateField(this);
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (validateForm()) {
                // Add client-side tracking data before submission
                addClientTrackingData();
                submitForm();
            } else {
                // Focus on first error field
                const firstError = form.querySelector('.is-invalid');
                if (firstError) {
                    firstError.focus();
                }
            }
        });

        // Validation functions
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
                //errorMessage = `${getFieldLabel(field)} is required`;
                errorMessage = field.id === 'heard-about-select' ? 'How did you hear about us? is required' : `${getFieldLabel(field)} is required`;
            } else if (value) {
                switch (fieldType) {
                    case 'name':
                        if (!validationPatterns.name.test(value)) {
                            isValid = false;
                            errorMessage = `${getFieldLabel(field)} cannot contain < or > characters`;
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
                            errorMessage = 'Please enter a valid zip code.';
                        }
                        break;
                    case 'select':
                        if (!value || value === '' || value === '0') {
                            isValid = false;
                            errorMessage = `Please select ${getFieldLabel(field).toLowerCase()}`;
                        }
                        break;
                    case 'comments':
                        if (value.includes('<') || value.includes('>')) {
                            isValid = false;
                            errorMessage = 'Project description cannot contain < or > characters';
                        }
                        break;
                }
            }

            // Special case for additional_info when "Other - Please Specify Below" is selected
            if (field.id === 'additional-info' && heardAboutSelect.value === 'other' && !value) {
                isValid = false;
                errorMessage = 'Please specify, how did you hear about us?';
            }

            setFieldValidation(field, isValid, errorMessage);
            return isValid;
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
            return (field.placeholder || field.name.replace('_', ' ')).toLowerCase().replace(/^\w/, l => l.toUpperCase());
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
            submitStatus.textContent = 'Submitting your request...';

            // Submit the form normally
            form.submit();
        }
    });
</script>