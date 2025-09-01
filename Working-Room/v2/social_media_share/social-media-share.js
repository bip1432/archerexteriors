$(document).ready(function () {
  // Declare variables inside $(document).ready so they are accessible globally
  const pageUrl = encodeURIComponent(window.location.href);
  const pageTitle = encodeURIComponent($('meta[property="og:title"]').attr('content'));
  const pageDescription = encodeURIComponent($('meta[property="og:description"]').attr('content'));
  const pageImage = encodeURIComponent($('meta[property="og:image"]').attr('content'));

  $("#btn-share").click(function () {
    var shareHtml = "",
      shareUrl = pageUrl,  // Use the globally defined pageUrl
      el = $(this),
      shareModalTitle = el.data("modal-title"),
      shareModalDescription = el.data("modal-description"),
      shareFacebookLabel = el.data("facebook-label"),
      shareTwitterLabel = el.data("twitter-label"),
      shareTwitterText = el.data("twitter-text"),
      shareLinkedInLabel = el.data("linkedin-label"),
      shareLinkedInTitle = encodeURIComponent(el.data("linkedin-title")),
      shareLinkedInSummary = encodeURIComponent(el.data("linkedin-summary")),
      shareLinkedInSource = window.location.protocol + "//" + window.location.hostname,
      shareEmailLabel = el.data("email-label"),
      shareEmailSubject = el.data("email-subject");

    shareHtml += `
          <div class="modal fade text-center" id="modal-share" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" style="padding-bottom: 0; border-bottom: 0;">
                          <h5 class="modal-title" id="myModalLabel">${shareModalTitle}</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa-regular fa-xmark"></i></span></button>
                      </div>
                      <div class="modal-body" style="padding-top: 0;">
                          ${shareModalDescription ? `<p>${shareModalDescription}</p>` : ''}
                          <ul class="list-unstyled">
                              ${shareFacebookLabel ? `
                                  <li><a href="https://www.facebook.com/sharer/sharer.php?u=${shareUrl}" title="${shareFacebookLabel}" target="_blank" class="btn btn-facebook"><i class="icon-facebook"></i> ${shareFacebookLabel}</a></li>
                              ` : ''}
                              ${shareTwitterLabel ? `
                                  <li><a href="https://twitter.com/intent/tweet?text=${pageTitle}&url=${shareUrl}" title="${shareTwitterLabel}" target="_blank" class="btn btn-twitter"><i class="icon-twitter"></i> ${shareTwitterLabel}</a></li>
                              ` : ''}
                              ${shareLinkedInLabel ? `
                                  <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=${shareUrl}" title="${shareLinkedInLabel}" target="_blank" class="btn btn-linkedin"><i class="icon-linkedin"></i> ${shareLinkedInLabel}</a></li>
                              ` : ''}
                              ${shareEmailLabel ? `
                                  <li><a href="mailto:?subject=${shareEmailSubject}" title="${shareEmailLabel}" class="btn btn-email"><i class="icon-mail"></i> ${shareEmailLabel}</a></li>
                              ` : ''}
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      `;

    $("body").append(shareHtml);

    // Show modal using appropriate method for Bootstrap 4 or 5
    $('#modal-share').modal('show');
  });
});
