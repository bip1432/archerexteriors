<?php
// Load StatesTable directly
use Cake\ORM\TableRegistry;

// Fetch states without using a controller
$statesTable = TableRegistry::getTableLocator()->get('States');
$states = $statesTable->loadStates();

// Fetch services
$servicesTable = TableRegistry::getTableLocator()->get('Services');
$services = $servicesTable->find()->where(['status' => 1])->all();
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

    .services-error {
        color: #ff5061;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        display: none;
    }

    .services-error.show {
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
        <h4>Get a free estimate</h4>
        <span class="icon"><i class="fi fi-rr-list-check"></i></span>
    </div>

    <?= $this->Form->create(null, [
        'url' => ['controller' => 'Estimates', 'action' => 'add'],
        'id' => 'estimateForm',
        'novalidate' => true,
        'role' => 'form',
        'aria-labelledby' => 'form-title'
    ]) ?>

    <div id="form-title" class="sr-only">Free Estimate Request Form</div>

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
                    'placeholder' => 'Phone (e.g., 123-456-7890)',
                    'label' => false,
                    'required' => true,
                    'aria-describedby' => 'phone-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'phone',
                    'maxlength' => '14'
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
                    'placeholder' => 'City (optional)',
                    'label' => false,
                    'required' => false,
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
                    'placeholder' => 'Zip Code (optional, e.g., 12345 or 12345-6789)',
                    'label' => false,
                    'required' => false,
                    'aria-describedby' => 'zip-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'zip',
                    'maxlength' => '10'
                ]) ?>
                <div id="zip-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="check_services">
                <h5>Let Us Know What You're Looking For</h5>
                <div class="checkItems_wrap" role="group" aria-labelledby="services-label" aria-describedby="services-error">
                    <div id="services-label" class="sr-only">Services Selection</div>
                    <?php foreach ($services as $service): ?>
                        <div class="checkItem">
                            <div class="custom-control custom_checkbox">
                                <input type="checkbox"
                                    name="services[]"
                                    id="service-<?= h($service->id) ?>"
                                    class="custom-control-input service-checkbox"
                                    value="<?= h($service->id) ?>"
                                    aria-describedby="services-error">
                                <label class="custom-control-label" for="service-<?= h($service->id) ?>"><?= h($service->name) ?></label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="services-error" class="services-error" role="alert" aria-live="polite"></div>
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
                    'placeholder' => 'Other - Please Specify',
                    'label' => false,
                    'id' => 'additional-info',
                    'aria-describedby' => 'additional-info-error',
                    'aria-invalid' => 'false',
                    'data-validation-type' => 'text'
                ]) ?>
                <div id="additional-info-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12">
            <div class="field-container">
                <?= $this->Form->control('comments', [
                    'class' => 'form-control',
                    'placeholder' => 'Tell us more about your project',
                    'rows' => 3,
                    'label' => false,
                    'aria-describedby' => 'comments-error',
                    'maxlength' => '1000'
                ]) ?>
                <div id="comments-error" class="error-message" role="alert" aria-live="polite"></div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <?= $this->Form->button('Request Free Estimate', [
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
        const form = document.getElementById('estimateForm');
        const stateSelect = document.getElementById('state-select');
        const heardAboutSelect = document.getElementById('heard-about-select');
        const additionalInfoContainer = document.getElementById('additional-info-container');
        const additionalInfoField = document.getElementById('additional-info');
        const phoneField = document.querySelector('[name="phone"]');
        const zipField = document.querySelector('[name="zip"]');
        const submitBtn = document.getElementById('submit-btn');
        const submitStatus = document.getElementById('submit-status');

        // Validation patterns
        const validationPatterns = {
            name: /^[a-zA-Z\s\'\-\.]+$/,
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

        // Service checkboxes validation
        const serviceCheckboxes = document.querySelectorAll('.service-checkbox');
        serviceCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', validateServices);
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

            // Special case for additional_info when "other" is selected
            if (field.id === 'additional-info' && heardAboutSelect.value === 'other' && !value) {
                isValid = false;
                errorMessage = 'Please specify how you heard about us';
            }

            setFieldValidation(field, isValid, errorMessage);
            return isValid;
        }

        function validateServices() {
            const checkedServices = document.querySelectorAll('.service-checkbox:checked');
            const servicesError = document.getElementById('services-error');

            if (checkedServices.length === 0) {
                servicesError.textContent = 'Please select at least one service';
                servicesError.classList.add('show');
                return false;
            } else {
                servicesError.textContent = '';
                servicesError.classList.remove('show');
                return true;
            }
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

            // Validate services
            if (!validateServices()) {
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
            submitStatus.textContent = 'Submitting your request...';

            // Debug: Log form data before submission (remove after testing)
            const formData = new FormData(form);
            console.log('Form submission data:');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            // Submit the form normally
            form.submit();
        }

        // AJAX functions for cascading dropdowns have been removed
        // County and city are now text input fields
    });
</script>