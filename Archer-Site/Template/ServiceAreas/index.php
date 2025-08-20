<?php
// Set Meta Tags
$this->set('title', 'Service Areas | Roofing & Siding | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Service Areas');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Service Areas | Roofing & Siding | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Service Areas');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/service-areas'); // TODO: Change to the current page URL
?>
<?php
// Load MapStatesTable directly
use Cake\ORM\TableRegistry;

// Fetch map states without using a controller
$mapStatesTable = TableRegistry::getTableLocator()->get('MapStates');
?>
<!-- Hero-section -->
<!-- Elfsight Google Maps | Archer Exteriors Branch Locations -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-84c02a38-7283-40c6-ac05-f58000b7ec33" data-elfsight-app-lazy></div>
<!-- Hero-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<section class="section light">
  <div class="container">
    <div class="row gx-lg-4 gy-5">
      <div class="col-lg-7">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i> Headquarters</h6>
          <h2>Archer Exteriors' <br> <span>National Headquarters</span></h2>
        </div>

        <?= $this->Html->image('service-area/national-headquarters.jpg', [
          'class' => 'img-fluid',
          'alt' => 'National Headquarters',
          'title' => 'National Headquarters'
        ]) ?>

        <div class="our_service service-area">
          <div class="row justify-content-center mt-5" style="gap: 20px 0;">
            <div class="col-lg-4 col-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/map-marker.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Headquarters Location'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_ADDRESS ?></h4>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/call.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Call'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_PHONE ?> <br> Mon-Fri: 8am- 5pm</h4>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/license.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'License'
                  ]) ?>
                </div>
                <h4 class="item_title">NJ LIC#13VH01492600 <br> PA LIC#PA082127</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '11', 'formKey' => 'servarea76788d097d18d4fab590d7da9d1e2e5f']) ?>
      </div>
    </div>
  </div>
</section>


<section class="section" style="background: var(--secondary);">
  <div class="container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i> Service Area</h6>
      <h2>Archer Exteriors' <span>Branch Locations</span></h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7">
        <h4 class="text-white mb-3">Find branch by location</h4>
        <form action="">
          <div class="find_branch">
            <div style="min-width: 200px;">
              <?= $this->Form->control('state', [
                'class' => 'form-select',
                'placeholder' => 'Search by State',
                'label' => false,
                'required' => true,
                'type' => 'select',
                'options' => $mapStatesIso,
                'empty' => 'Search by State',
                'id' => 'service-area-state-select',
                'aria-describedby' => 'state-error',
                'aria-invalid' => 'false',
                'data-validation-type' => 'select'
              ]) ?>
            </div>
            <div style="min-width: 200px;">
              <?= $this->Form->control('county', [
                'class' => 'form-select',
                'placeholder' => 'Search by County',
                'label' => false,
                'required' => false,
                'type' => 'select',
                'options' => $selectedCounties,
                'empty' => 'Search by County',
                'id' => 'service-area-county-select',
                'aria-describedby' => 'county-error',
                'aria-invalid' => 'false',
                'data-validation-type' => 'select',
                'disabled' => true
              ]) ?>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-5">
        <h4 class="text-white mb-3">Department</h4>
        <div class="find_branch">
          <div>
            <a href="#" class="filter_btn" data-dept="1" id="service-filter-1">
              <?= $this->Html->image('service-area/icon-construction.png', [
                'alt' => 'New Construction'
              ]) ?>
              New Construction
            </a>
          </div>
          <div>
            <a href="#" class="filter_btn" data-dept="2" id="service-filter-2">
              <?= $this->Html->image('service-area/icon-remodelling.png', [
                'alt' => 'Remodeling'
              ]) ?>
              Remodeling
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Area Start  -->
<section class="section light">
  <div class="container">
    <?php
    // Create dynamic search result message
    $hasFilters = !empty($filters['state']) || !empty($filters['county']) || !empty($filters['service']);

    if ($hasFilters) {
      $searchParts = [];

      // Add state information
      if (!empty($filters['state'])) {
        $stateName = $mapStatesIso[$filters['state']] ?? $filters['state'];
        $searchParts[] = $stateName;
      }

      // Add county information
      if (!empty($filters['county'])) {
        $countyName = '';
        if (isset($counties[$filters['county']])) {
          $countyData = $counties[$filters['county']];
          // Extract county name from format "STATE-COUNTY"
          $countyName = explode('-', $countyData)[1] ?? $countyData;
        }
        if (!empty($countyName)) {
          $searchParts[] = $countyName;
        }
      }

      // Add service information
      $serviceNames = [];
      if (!empty($filters['service'])) {
        switch ($filters['service']) {
          case '1':
            $serviceNames[] = 'New Construction';
            break;
          case '2':
            $serviceNames[] = 'Remodeling';
            break;
        }
      }

      // Build the message
      $message = 'Showing branch listings';

      if (!empty($searchParts)) {
        $message .= ' for ' . implode(' in ', $searchParts);
      }

      if (!empty($serviceNames)) {
        $message .= ' offering ' . implode(' and ', $serviceNames) . ' services';
      }

      $message .= '.';

      // Display the message
      echo '<div class="search-results-message">';
      echo '<div class="search-message-content">';
      echo '<span class="search-message-text">' . $message . '</span>';
      echo $this->Html->link('Clear Filters', ['controller' => 'ServiceAreas', 'action' => 'index'], ['class' => 'btn btn-primary btn-sm search-clear-btn']);
      echo '</div>';
      echo '</div>';
    }
    ?>
    <!-- Branch List Container for AJAX updates -->
    <div id="branch-list-container" style="scroll-margin-top: 250px;">
      <?= $this->element('branch_listings') ?>
    </div>

    <!-- Loading spinner (hidden by default) -->
    <div id="pagination-loading" style="display: none; text-align: center; padding: 20px;">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <p>Loading branches...</p>
    </div>
  </div>
</section>
<!-- Service Area End  -->

<!-- Service Types Section Start  -->
<section class="service-section">
  <?= $this->element('current_activities') ?>
</section>
<!-- Types Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Recent Project section Start  -->
<section class="section recent_project">
  <?= $this->element('our_recent_work') ?>
</section>
<!-- Recent Project section End  -->

<script>
  // Plain JavaScript implementation - no jQuery dependency
  //console.log('Cascading dropdown script loading...');

  // Function to initialize the cascading dropdown
  function initializeCascadingDropdown() {
    //console.log('Initializing cascading dropdown with plain JavaScript...');

    const stateSelect = document.getElementById('service-area-state-select');
    const countySelect = document.getElementById('service-area-county-select');

    //console.log('State select found:', !!stateSelect);
    //console.log('County select found:', !!countySelect);

    if (!stateSelect) {
      console.error('State select element with ID "service-area-state-select" not found!');
      //console.log('Available select elements:');
      const allSelects = document.querySelectorAll('select');
      allSelects.forEach((select, index) => {
        //console.log(`- ID: ${select.id || 'no-id'}, Name: ${select.name || 'no-name'}, Class: ${select.className}`);
      });
      return false;
    }

    if (!countySelect) {
      console.error('County select element with ID "service-area-county-select" not found!');
      return false;
    }

    // Remove any existing event listeners to prevent duplicates
    stateSelect.removeEventListener('change', handleStateChange);

    // Add event listener for state dropdown change
    stateSelect.addEventListener('change', handleStateChange);

    //console.log('Event listener attached successfully');

    // Initial state check
    if (stateSelect.value) {
      //console.log('Initial state value found, triggering change');
      handleStateChange.call(stateSelect);
    }

    return true;
  }

  // Handle state dropdown change
  function handleStateChange() {
    //console.log('State dropdown change event fired');
    const stateIso = this.value;
    const countySelect = document.getElementById('service-area-county-select');

    //console.log('Selected state ISO:', stateIso);

    if (stateIso) {
      // Show loading state
      countySelect.disabled = true;
      countySelect.innerHTML = '<option value="">Loading counties...</option>';

      //console.log('Making fetch request for counties...');

      // Make fetch request to get counties
      const url = '<?= $this->Url->build(['controller' => 'ServiceAreas', 'action' => 'getCounties']) ?>?state_iso=' + encodeURIComponent(stateIso);

      // Get CSRF token for secure requests
      const csrfToken = document.querySelector('meta[name="csrfToken"]')?.getAttribute('content');

      const headers = {
        'X-Requested-With': 'XMLHttpRequest',
        'Content-Type': 'application/json'
      };

      // Add CSRF token if available
      if (csrfToken) {
        headers['X-CSRF-Token'] = csrfToken;
      }

      fetch(url, {
          method: 'GET',
          headers: headers
        })
        .then(response => {
          //console.log('Response status:', response.status);
          if (!response.ok) {
            throw new Error('Network response was not ok: ' + response.status);
          }
          return response.json();
        })
        .then(data => {
          //console.log('AJAX response:', data);

          if (data.success && data.counties) {
            // Clear and populate county dropdown
            countySelect.innerHTML = '<option value="">Search by County</option>';

            // Add county options
            Object.entries(data.counties).forEach(([id, name]) => {
              const option = document.createElement('option');
              option.value = id;
              option.textContent = name;
              countySelect.appendChild(option);
            });

            // Enable county dropdown
            countySelect.disabled = false;
            //console.log('County dropdown populated with', Object.keys(data.counties).length, 'counties');
          } else {
            // Handle error
            countySelect.innerHTML = '<option value="">Error loading counties</option>';
            countySelect.disabled = true;
            console.error('Error in response:', data);
          }
        })
        .catch(error => {
          // Handle fetch error
          countySelect.innerHTML = '<option value="">Error loading counties</option>';
          countySelect.disabled = true;
          console.error('Fetch Error:', error);
        });
    } else {
      // Reset county dropdown when no state is selected
      countySelect.innerHTML = '<option value="">Search by County</option>';
      countySelect.disabled = true;
      //console.log('State cleared, county dropdown reset');
    }
  }

  // Current filter state
  let currentFilters = {
    state: '',
    county: '',
    dept: ''
  };

  // Initialize filters from current URL parameters
  function initializeFiltersFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);

    // Always get parameters from URL first
    currentFilters.state = urlParams.get('state') || '';
    currentFilters.county = urlParams.get('county') || '';
    currentFilters.dept = urlParams.get('dept') || '';

    // Set UI state based on current filters
    updateUIState();
  }

  // Department filter buttons
  const deptButtons = document.querySelectorAll('.filter_btn[data-dept]');

  deptButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault();

      const deptValue = this.getAttribute('data-dept');

      // Always update both the filter state and URL
      if (currentFilters.dept === deptValue) {
        // If clicking the same department, do nothing to maintain the filter
        return;
      }

      // Remove active class from all buttons first
      deptButtons.forEach(btn => btn.classList.remove('active'));

      // Set the new department filter
      currentFilters.dept = deptValue;
      this.classList.add('active');

      // Always update URL with current state
      const newUrl = buildFilterUrl();
      history.pushState(currentFilters, '', newUrl);

      // Perform the search with current filters
      performFilteredSearch();
    });
  });

  // Handle browser back/forward
  window.addEventListener('popstate', function(event) {
    // Re-initialize filters from URL and maintain dept parameter
    initializeFiltersFromUrl();
    performFilteredSearch();
  });

  // Handle form submissions to prevent losing dept parameter
  document.addEventListener('submit', function(event) {
    if (event.target.matches('form')) {
      event.preventDefault();
      performFilteredSearch();
    }
  });

  // AJAX Pagination System
  function initializePagination() {
    //console.log('Initializing AJAX pagination...');

    // Use event delegation to handle clicks on pagination links
    document.addEventListener('click', function(event) {
      // Check if clicked element is a pagination link
      if (event.target.matches('.pagination-link') || event.target.closest('.pagination-link')) {
        event.preventDefault(); // Prevent default anchor behavior

        const link = event.target.matches('.pagination-link') ? event.target : event.target.closest('.pagination-link');
        const url = link.getAttribute('href');

        if (url) {
          loadPaginatedContent(url);
        }
      }
    });

    //console.log('Pagination event listeners attached');
  }

  // Initialize filters
  function initializeFilters() {
    //console.log('Initializing AJAX filters...');

    // State dropdown change handler
    const stateSelect = document.getElementById('service-area-state-select');
    const countySelect = document.getElementById('service-area-county-select');

    if (stateSelect) {
      stateSelect.addEventListener('change', function() {
        currentFilters.state = this.value;
        currentFilters.county = ''; // Reset county when state changes

        // Reset county dropdown
        if (countySelect) {
          countySelect.value = '';
          countySelect.disabled = !this.value;
        }

        // Trigger cascading dropdown for counties (existing functionality)
        if (this.value) {
          handleStateChange.call(this);
        }

        // Perform filtered search (will happen after county dropdown is populated or immediately if no state)
        performFilteredSearch();
      });
    }

    if (countySelect) {
      countySelect.addEventListener('change', function() {
        currentFilters.county = this.value;
        performFilteredSearch();
      });
    }

    // Department filter buttons
    const deptButtons = document.querySelectorAll('.filter_btn[data-dept]');

    deptButtons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault();

        const deptValue = this.getAttribute('data-dept');

        // Toggle department filter
        if (currentFilters.dept === deptValue) {
          // If already selected, deselect it
          currentFilters.dept = '';
          this.classList.remove('active');
        } else {
          // Remove active class from all department buttons
          deptButtons.forEach(btn => btn.classList.remove('active'));

          // Set new department filter and add active class
          currentFilters.dept = deptValue;
          this.classList.add('active');
        }

        // Perform filtered search
        performFilteredSearch();
      });
    });
  }

  // Perform filtered search with current filters
  function performFilteredSearch(page = 1) {
    // Ensure we're using current filter state
    const url = buildFilterUrl(page);
    loadPaginatedContent(url, true);
  }

  // Build URL with current filters - ensure dept parameter is always included
  function buildFilterUrl(page = 1) {
    const baseUrl = '<?= $this->Url->build(['controller' => 'ServiceAreas', 'action' => 'index']) ?>';
    const params = new URLSearchParams();

    // Add page parameter
    if (page > 1) {
      params.set('page', page);
    }

    // Always include current filters in URL
    if (currentFilters.state) {
      params.set('state', currentFilters.state);
    }
    if (currentFilters.county) {
      params.set('county', currentFilters.county);
    }
    // Always include dept parameter if set
    if (currentFilters.dept) {
      params.set('dept', currentFilters.dept);
    }

    // Always add AJAX parameter for AJAX requests
    params.set('ajax_pagination', '1');

    const queryString = params.toString();
    return baseUrl + (queryString ? '?' + queryString : '');
  }

  // Extract current filters from URL (for pagination links)
  function extractFiltersFromUrl(url) {
    const urlObj = new URL(url, window.location.origin);
    const params = urlObj.searchParams;

    return {
      state: params.get('state') || '',
      county: params.get('county') || '',
      dept: params.get('dept') || ''
    };
  }

  // Build URL with filters for history state
  function buildUrlWithFilters(url) {
    const urlObj = new URL(url, window.location.origin);
    const params = new URLSearchParams();

    // Add page parameter if exists
    if (urlObj.searchParams.get('page')) {
      params.set('page', urlObj.searchParams.get('page'));
    }

    // Add current filter parameters
    if (currentFilters.state) {
      params.set('state', currentFilters.state);
    }
    if (currentFilters.county) {
      params.set('county', currentFilters.county);
    }
    if (currentFilters.dept) {
      params.set('dept', currentFilters.dept);
    }

    const queryString = params.toString();
    return url.split('?')[0] + (queryString ? '?' + queryString : '');
  }

  // Load paginated content via AJAX
  function loadPaginatedContent(url, isFilterChange = false) {
    // Parse current URL to maintain dept parameter
    const currentUrl = new URL(url, window.location.origin);
    const currentParams = currentUrl.searchParams;

    // Ensure dept parameter is preserved if it exists
    if (currentFilters.dept && !currentParams.has('dept')) {
      currentParams.set('dept', currentFilters.dept);
      url = currentUrl.toString();
    }

    // Update current filters from the URL (for pagination links)
    const urlFilters = extractFiltersFromUrl(url);
    currentFilters = urlFilters;

    // Update UI state to match current filters
    updateUIState();

    // Save current scroll position (only for pagination, not for filtering)
    const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    // Dispose of existing tooltips before loading new content
    if (typeof window.bootstrap !== 'undefined' && bootstrap.Tooltip) {
      const existingTooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      existingTooltips.forEach(function(tooltipEl) {
        const existingTooltip = bootstrap.Tooltip.getInstance(tooltipEl);
        if (existingTooltip) {
          existingTooltip.dispose();
        }
      });

      // Remove any leftover tooltip elements from the DOM
      const tooltipElements = document.querySelectorAll('.tooltip');
      tooltipElements.forEach(function(tooltip) {
        tooltip.remove();
      });
    }

    // Show loading spinner
    const branchContainer = document.getElementById('branch-list-container');
    const loadingSpinner = document.getElementById('pagination-loading');

    if (branchContainer && loadingSpinner) {
      branchContainer.style.opacity = '0.5';
      loadingSpinner.style.display = 'block';
    }

    // Parse URL to ensure AJAX parameter is set
    const urlObj = new URL(url, window.location.origin);
    if (!urlObj.searchParams.has('ajax_pagination')) {
      urlObj.searchParams.set('ajax_pagination', '1');
    }

    //console.log('AJAX URL:', urlObj.toString());

    // Get CSRF token for secure requests
    const csrfToken = document.querySelector('meta[name="csrfToken"]')?.getAttribute('content');
    //console.log('CSRF Token:', csrfToken ? 'present' : 'missing');

    const headers = {
      'X-Requested-With': 'XMLHttpRequest',
      'Accept': 'application/json, text/javascript, */*; q=0.01',
      'Cache-Control': 'no-cache'
    };

    // Add CSRF token if available
    if (csrfToken) {
      headers['X-CSRF-Token'] = csrfToken;
    }

    //console.log('Request headers:', headers);

    fetch(urlObj.toString(), {
        method: 'GET',
        headers: headers,
        credentials: 'same-origin' // Include cookies for session handling
      })
      .then(response => {
        //console.log('Response status:', response.status);
        //console.log('Response content-type:', response.headers.get('content-type'));

        if (!response.ok) {
          throw new Error('Network response was not ok: ' + response.status);
        }

        // Check if response is JSON
        const contentType = response.headers.get('content-type');
        if (contentType && contentType.includes('application/json')) {
          return response.json();
        } else {
          // If not JSON, get text to see what we received
          return response.text().then(text => {
            console.error('Expected JSON but received:', text.substring(0, 200) + '...');
            throw new Error('Expected JSON response but received: ' + contentType);
          });
        }
      })
      .then(data => {
        //console.log('AJAX pagination response:', data);

        if (data.success && data.html) {
          // Update the branch listings container
          if (branchContainer) {
            branchContainer.innerHTML = data.html;
            branchContainer.style.opacity = '1';
          }

          // Hide loading spinner
          if (loadingSpinner) {
            loadingSpinner.style.display = 'none';
          }

          // Handle scrolling - for filter changes, scroll to results; for pagination, preserve position
          if (isFilterChange) {
            // Scroll to the branch list container to show results
            const branchListContainer = document.getElementById('branch-list-container');
            if (branchListContainer) {
              branchListContainer.scrollIntoView({
                behavior: 'smooth'
              });
            }
          } else {
            // Restore scroll position for pagination
            window.scrollTo(0, scrollPosition);
          }

          // Update the URL without reloading the page with filters
          const newUrl = buildUrlWithFilters(url);
          history.replaceState(null, '', newUrl);

          // Re-initialize any tooltips or other components that might be in the new content
          initializeTooltips();

          // Update search results message to match current filters
          updateSearchResultsMessage();

          //console.log('Pagination content updated successfully');
        } else {
          console.error('Invalid response format or success=false:', data);
          throw new Error(data.error || 'Invalid response format');
        }
      })
      .catch(error => {
        console.error('Pagination Error:', error);

        // Hide loading spinner
        if (loadingSpinner) {
          loadingSpinner.style.display = 'none';
        }

        // Restore container opacity
        if (branchContainer) {
          branchContainer.style.opacity = '1';
        }

        // Show error message with more details
        if (branchContainer) {
          branchContainer.innerHTML = '<div class="alert alert-danger">Error loading content: ' + error.message + '. Please try again.</div>';
        }
      });
  }

  // Initialize tooltips (if using Bootstrap tooltips)
  function initializeTooltips() {
    // Check if Bootstrap tooltips are available
    if (typeof window.bootstrap !== 'undefined' && bootstrap.Tooltip) {
      // First, dispose of any existing tooltips to prevent conflicts
      const existingTooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      existingTooltips.forEach(function(tooltipEl) {
        const existingTooltip = bootstrap.Tooltip.getInstance(tooltipEl);
        if (existingTooltip) {
          existingTooltip.dispose();
        }
      });

      // Remove any leftover tooltip elements from the DOM
      const tooltipElements = document.querySelectorAll('.tooltip');
      tooltipElements.forEach(function(tooltip) {
        tooltip.remove();
      });

      // Initialize new tooltips
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      tooltipTriggerList.forEach(function(tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
      });
    }
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
      //console.log('DOM Content Loaded');
      initializeFiltersFromUrl();
      initializeCascadingDropdown();
      initializePagination();
      initializeFilters();
      initializeTooltips();
      updateSearchResultsMessage();
    });
  } else {
    //console.log('DOM already ready');
    initializeFiltersFromUrl();
    initializeCascadingDropdown();
    initializePagination();
    initializeFilters();
    initializeTooltips();
    updateSearchResultsMessage();
  }

  // Fallback: Initialize on window load
  window.addEventListener('load', function() {
    //console.log('Window load event fired');
    initializeFiltersFromUrl();
    initializeCascadingDropdown();
    initializePagination();
    initializeFilters();
    initializeTooltips();
    updateSearchResultsMessage();
  });

  // Update UI state to match current filters
  function updateUIState() {
    // Update state dropdown
    const stateSelect = document.getElementById('service-area-state-select');
    if (stateSelect) {
      stateSelect.value = currentFilters.state || '';
    }

    // Update county dropdown
    const countySelect = document.getElementById('service-area-county-select');
    if (countySelect) {
      countySelect.value = currentFilters.county || '';
    }

    // Update department button active states
    const deptButtons = document.querySelectorAll('.filter_btn[data-dept]');
    deptButtons.forEach(btn => btn.classList.remove('active'));

    if (currentFilters.dept) {
      const activeButton = document.querySelector(`.filter_btn[data-dept="${currentFilters.dept}"]`);
      if (activeButton) {
        activeButton.classList.add('active');
      }
    }
  }

  // Update search results message based on current filters
  function updateSearchResultsMessage() {
    const branchListContainer = document.getElementById('branch-list-container');

    // Remove existing message more specifically
    const existingMessages = document.querySelectorAll('.search-results-message');
    existingMessages.forEach(message => message.remove());

    // Check if we have any filters
    const hasFilters = currentFilters.state || currentFilters.county || currentFilters.dept;

    if (!hasFilters) {
      return; // No filters, no message
    }

    // Build message parts
    const searchParts = [];

    // Add state information
    if (currentFilters.state) {
      const stateSelect = document.getElementById('service-area-state-select');
      if (stateSelect) {
        const selectedOption = stateSelect.options[stateSelect.selectedIndex];
        if (selectedOption && selectedOption.value === currentFilters.state) {
          searchParts.push(selectedOption.text);
        }
      }
    }

    // Add county information
    if (currentFilters.county) {
      const countySelect = document.getElementById('service-area-county-select');
      if (countySelect) {
        const selectedOption = countySelect.options[countySelect.selectedIndex];
        if (selectedOption && selectedOption.value === currentFilters.county) {
          searchParts.push(selectedOption.text);
        }
      }
    }

    // Add department information
    const deptNames = [];
    if (currentFilters.dept) {
      switch (currentFilters.dept) {
        case '1':
          deptNames.push('New Construction');
          break;
        case '2':
          deptNames.push('Remodeling');
          break;
      }
    }

    // Build the message
    let message = 'Showing';

    if (deptNames.length > 0) {
      message += ' ' + deptNames.join(' and ') + ' services';
    } else {
      message += ' branch listings';
    }

    if (searchParts.length > 0) {
      message += ' in ' + searchParts.join(', ');
    }

    message += '.';

    // Create message element with better structure
    const messageDiv = document.createElement('div');
    messageDiv.className = 'search-results-message';
    messageDiv.innerHTML = `
            <div class="search-message-content">
                <span class="search-message-text">${message}</span>
                <a href="<?= $this->Url->build(['controller' => 'ServiceAreas', 'action' => 'index']) ?>" class="theme-btn sm search-clear-btn"><i style="top: 5px;" class="fi fi-ts-clear-alt"></i> Clear Filters</a>
            </div>
        `;

    // Insert before branch list container
    branchListContainer.parentNode.insertBefore(messageDiv, branchListContainer);
  }

  // Clear filters button handler
  document.querySelector('.search-clear-btn')?.addEventListener('click', function(event) {
    event.preventDefault();

    // Reset filters but maintain department if set
    const deptValue = currentFilters.dept;
    currentFilters = {
      state: '',
      county: '',
      dept: deptValue // Maintain department filter
    };

    // Update UI state
    updateUIState();

    // Update URL and perform search
    const newUrl = buildFilterUrl();
    history.pushState(currentFilters, '', newUrl);
    performFilteredSearch();
  });

  // Test alert to confirm script is working
  //console.log('Script setup complete');
</script>