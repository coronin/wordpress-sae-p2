jQuery(document).ready(function(){ jQuery("#tsg2011-main-menu ul ul").css({display: "none"}); jQuery('#tsg2011-main-menu ul li').hover( function() { jQuery(this).find('ul:first').slideDown(200).css('visibility', 'visible'); jQuery(this).addClass('selected'); }, function() { jQuery(this).find('ul:first').slideUp(200); jQuery(this).removeClass('selected'); }); });