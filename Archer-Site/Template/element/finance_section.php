<div class="auto-container">
    <div class="finance_options_box mb-4">
        <div class="left">
            <?= $this->Html->image('finance-options/financing-options-available-insignia.png', [
                'alt' => 'Financing Options Available',
                'title' => 'Financing Options Available'
            ]) ?>
        </div>
        <div>
            <div class="sec-title mb-0">
                <h2>Financing <span>Options Available</span></h2>
                <p class="sec_desc lead mt-3">For qualified applicants based on individual credit scores. Archer Exterior is
                    neither a lender nor broker. Lender approves applicants.*</p>

                <div class="mt-3">
                    <?= $this->Html->link(
                        'Learn More<i class="flaticon-login"></i>',
                        ['controller' => 'Financings', 'action' => 'index'],
                        ['class' => 'theme-btn sm', 'escape' => false]
                    ) ?>
                </div>
            </div>
        </div>
    </div>
    <p style="font-size: 15px; max-width: 1000px; margin: 0 auto;">*Archer Exterior is neither a lender nor a broker.
        All financing is provided by 3rd party lending institutions under the terms and conditions of each lender. All
        applications are subject to approval through credit, income, and residency verification. All advertised finance
        terms, rates and payments are subject to change without notice. Advertised terms are solely to be used as
        estimating tools, actual terms will be disclosed at time of approval. Not all applications will be approved for
        all programs. Archer Exteriors does not assist with, counsel, or negotiate financing other than submitting
        credit applications on behalf of our customers to the lender. Approved applications become customers of the
        lender and will make payments directly to lender. Lender has final say to approve or decline of an application
        based on fair lending guidelines.</p>
</div>