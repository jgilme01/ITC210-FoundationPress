$('.menu-item-60').click(function(e) {
	e.preventDefault();
  $('.desktop-search').toggleClass('show');
});

$(document).click(function(e) {
    if (e.target.class != 'menu-item-75' && !$('.menu-item-60').find(e.target).length && e.target.id != 's') {
        $(".desktop-search").removeClass('show');
    }
});