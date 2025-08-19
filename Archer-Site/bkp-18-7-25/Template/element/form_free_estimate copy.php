<?php
// Load StatesTable directly
use Cake\ORM\TableRegistry;

// Fetch states without using a controller
$statesTable = TableRegistry::getTableLocator()->get('States');
$states = $statesTable->loadStates();

$countiesTable = TableRegistry::getTableLocator()->get('Counties');
$counties = $countiesTable->loadCounties($state_id);

$citiesTable = TableRegistry::getTableLocator()->get('Cities');
$cities = $citiesTable->loadCities($state_id, $county_id);
?>
<div class="estimateForm_wrap">
    <div class="header">
        <h4>Get a free estimate</h4>
        <span class="icon"><i class="fi fi-rr-list-check"></i></span>
    </div>

    <?= $this->Form->create(null, ['url' => ['controller' => 'Estimates', 'action' => 'add']]) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <?= $this->Form->control('first_name', [
                'class' => 'form-control',
                'placeholder' => 'First name',
                'label' => false,
                'required' => true
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('last_name', [
                'class' => 'form-control',
                'placeholder' => 'Last name',
                'label' => false,
                'required' => true
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('email', [
                'class' => 'form-control',
                'placeholder' => 'Email',
                'label' => false,
                'required' => true,
                'type' => 'email'
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('phone', [
                'class' => 'form-control',
                'placeholder' => 'Phone',
                'label' => false,
                'required' => true
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('state', [
                'class' => 'form-control',
                'placeholder' => 'Select State',
                'label' => false,
                'required' => true,
                'type' => 'select',
                'options' => $states,
                'empty' => 'Select State'
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('county', [
                'class' => 'form-control',
                'placeholder' => 'Select County',
                'label' => false,
                'required' => true,
                'type' => 'select',
                'options' => $counties,
                'empty' => 'Select County'
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('city', [
                'class' => 'form-control',
                'placeholder' => 'Select City',
                'label' => false,
                'required' => true,
                'type' => 'select',
                'options' => $cities,
                'empty' => 'Select City'
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('zip', [
                'class' => 'form-control',
                'placeholder' => 'Zip',
                'label' => false,
                'required' => true
            ]) ?>
        </div>
        <div class="col-12">
            <div class="check_services">
                <h5>Let Us Know What You’re Looking For</h5>
                <div class="checkItems_wrap">
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Roofing" class="custom-control-input" value="roofing">
                            <label class="custom-control-label" for="Roofing">Roofing</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Siding" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Siding">Siding</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Windows" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Windows">Windows</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Doors" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Doors">Doors</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Decks" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Decks">Decks</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Gutters" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Gutters">Gutters</label>
                        </div>
                    </div>
                    <div class="checkItem">
                        <div class="custom-control custom_checkbox ">
                            <input type="checkbox" name="services[]" id="Repairs" class="custom-control-input" value="siding">
                            <label class="custom-control-label" for="Repairs">Repairs</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <?= $this->Form->control('heard_about_us', [
                'class' => 'form-select',
                'options' => [
                    '' => 'How did you hear about us?',
                    'Google Search' => 'Google Search',
                    'Bing Search' => 'Bing Search',
                    'Social media (Facebook, Instagram, etc.)' => 'Social media (Facebook, Instagram, etc.)',
                    'Printed Flyer or Mailer' => 'Printed Flyer or Mailer',
                    'Referred by Someone' => 'Referred by Someone',
                    'Online Forum / Community Event' => 'Online Forum / Community Event',
                    'Saw a Sign/Billboard' => 'Saw a Sign/Billboard',
                    'Trade Shows' => 'Trade Shows',
                    'YouTube / Video Content' => 'YouTube / Video Content',
                    'Newsletter or Email Campaign' => 'Newsletter or Email Campaign',
                    'TV Ad/Streaming' => 'TV Ad/Streaming',
                    'Other - Please Specify Below' => 'Other - Please Specify Below'
                ],
                'label' => false,
                'required' => true
            ]) ?>
        </div>
        <div class="col-12" style="display: none;">
            <?= $this->Form->control('additional_info', [
                'class' => 'form-control',
                'placeholder' => 'Please Specify Below',
                'label' => false
            ]) ?>
        </div>
        <div class="col-12">
            <?= $this->Form->control('comments', [
                'class' => 'form-control',
                'placeholder' => 'Tell us more about your project',
                'rows' => 3,
                'label' => false
            ]) ?>
        </div>

        <div class="col-12 mt-4">
            <?= $this->Form->button('Request Free Estimate', ['class' => 'theme-btn sm']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>