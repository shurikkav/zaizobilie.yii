/* -------------------------------------------------- *
 * Collapsorz 1.1
 * Updated: 04/21/09
 * -------------------------------------------------- *
 * Author: Aaron Kuzemchak
 * URL: http://aaronkuzemchak.com/
 * Copyright: 2008-2009 Aaron Kuzemchak
 * License: MIT License
** -------------------------------------------------- */

(function($){$.fn.collapsorz=function(options){var defaults={toggle:"> *",minimum:5,showText:"Show",hideText:"Hide",linkLocation:"after",defaultState:"collapsed",wrapLink:null};var options=$.extend(defaults,options);return this.each(function(){if($(options.toggle,this).length>options.minimum){var $obj=$(this);var $targets=$(options.toggle,this);if(options.defaultState=="collapsed"){$targets.filter(":gt("+(options.minimum-1)+")").hide()}var $toggler=$('<a href="#collapsorz" class="toggler"></a>');if(options.linkLocation=="before"){$obj.before($toggler)}else{$obj.after($toggler)}if(options.wrapLink){$toggler.wrap(options.wrapLink)}if(options.defaultState=="expanded"){$obj.data("status","expanded");$toggler.addClass("expanded");$toggler.html(options.hideText)}else{$obj.data("status","collapsed");$toggler.addClass("collapsed");$toggler.html(options.showText)}$toggler.click(function(event){if($obj.data("status")=="collapsed"){$targets.filter(":hidden").show();$toggler.html(options.hideText);$obj.data("status","expanded")}else if($obj.data("status")=="expanded"){$targets.filter(":gt("+(options.minimum-1)+")").hide();$toggler.html(options.showText);$obj.data("status","collapsed")}$(this).toggleClass("collapsed").toggleClass("expanded");event.preventDefault();})}})}})(jQuery);