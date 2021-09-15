function getPageData(page) {
        $('#main-content .md-modal').remove();
        $('#main-content .md-overlay').remove();
        $('#main-content').append('<div class="md-modal md-effect-1" id="modal-12"><span class="cross">&#x2715;</span><div class="md-content"></div></div><div class="md-overlay"></div>');
  jQuery.ajax({
    type: "POST",
    url: ajax_object.ajaxurl,
      data: {
          action: 'get_page_data',
        'page_slug': page  
      },
    dataType: 'html',
    success: function (data) {
      $(".md-modal .md-content").html(data);
        $('#wrapper-navbar .navbar').css('z-index', '0');
        $('#wrapper-navbar .navbar').css('width', '98.8%');
        $('html').css('overflow', 'hidden');
        $(".md-modal").addClass('md-show');
        modalCloseButton();
    }
  });
}