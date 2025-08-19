<?php
// Load StatesTable and FormQueriesTable directly
use Cake\ORM\TableRegistry;

// Fetch states without using a controller
$statesTable = TableRegistry::getTableLocator()->get('States');
$states = $statesTable->loadStates();

// Fetch queries
$queriesTable = TableRegistry::getTableLocator()->get('FormQueries');
$queries = $queriesTable->loadQueries();
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
        <h4>Contact Us</h4>
        <span class="icon"><i class="fi fi-rr-list-check"></i></span>
    </div>

    <!-- Alert Messages -->
    <div id="contact-form-alerts"></div>

    <?= $this->Form->create(null, [
        'url' => ['controller' => 'Contacts', 'action' => 'add'],
        'id' => 'contactForm',
        'novalidate' => true,
        'role' => 'form',
        'aria-labelledby' => 'form-title'
    ]) ?>

    <div id="form-title" class="sr-only">Contact Form</div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('first_name', [
                    'class' => 'form-control',
                    'placeholder' => 'First name',
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
                    'placeholder' => 'Last name',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'last-name-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name'
                ]) ?>
                <div id="last-name-error" class="error-message" role="alert" aria-live="polite"></div>
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

        <div class="col-md-6">
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

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('county', [
                    'class' => 'form-control',
                    'placeholder' => 'County',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'county-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name',
                    'maxlength' => '255'
                ]) ?>
                <div id="county-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="field-container">
                <?= $this->Form->control('city', [
                    'class' => 'form-control',
                    'placeholder' => 'City',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'city-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'name',
                    'maxlength' => '255'
                ]) ?>
                <div id="city-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-md-6">
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
                <?= $this->Form->control('query_id', [
                    'class' => 'form-select',
                    'options' => $queries + ['estimate' => 'Get a Free Estimate'],
                    'empty' => 'What is your query related to?',
                    'label' => false,
                    'required' => true,
                    'id' => 'query-select',
                    'aria-describedby' => 'query-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'select',
                    'onchange' => 'if(this.value === "estimate") window.location.href="' . $this->Url->build(['controller' => 'Estimates', 'action' => 'index']) . '"'
                ]) ?>
                <div id="query-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('message', [
                    'class' => 'form-control',
                    'placeholder' => 'Tell us more about your inquiry',
                    'rows' => 4,
                    'label' => false,
                    'aria-describedby' => 'message-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'message',
                    'maxlength' => '1000'
                ]) ?>
                <div id="message-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <?= $this->Form->button('Submit Request', [
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
        const form = document.getElementById('contactForm');
        const stateSelect = document.getElementById('state-select');
        const querySelect = document.getElementById('query-select');
        const phoneField = document.querySelector('[name="phone"]');
        const zipField = document.querySelector('[name="zip"]');
        const submitBtn = document.getElementById('submit-btn');
        const submitStatus = document.getElementById('submit-status');

        //name: /^[a-zA-Z0-9\s\'\-\.]+$/,
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

        // State change handler
        stateSelect.addEventListener('change', function() {
            validateField(this);
        });

        // Query change handler
        querySelect.addEventListener('change', function() {
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
                errorMessage = field.id === 'query-select' ? 'Related query is required' : `${getFieldLabel(field)} is required`;
            } else if (value) {
                switch (fieldType) {
                    case 'name':
                        if (!validationPatterns.name.test(value)) {
                            isValid = false;
                            errorMessage = `${getFieldLabel(field)} must contain only letters, numbers, spaces, apostrophes, hyphens, and periods`;
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
                    case 'message':
                        if (value.includes('<') || value.includes('>')) {
                            isValid = false;
                            errorMessage = 'Inquiry details cannot contain < or > characters';
                        }
                        break;
                }
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
            submitStatus.textContent = 'Submitting your request...';

            // Submit the form normally
            form.submit();
        }
    });
</script>