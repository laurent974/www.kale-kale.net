var App={init:function(){Navbar.init()}};$(document).ready(function(){App.init()});var Navbar={params:{flagAdd:!0,elements:[".navbar",".navbar-inner",".navbar-brand"]},remove:function(){for(var a=0;a<this.params.elements.length;a++)$(this.params.elements[a]).removeClass("navbar-theme");this.params.flagAdd=!0},add:function(){if(this.params.flagAdd){for(var a=0;a<this.params.elements.length;a++)$(this.params.elements[a]).addClass("navbar-theme");this.params.flagAdd=!1}},toggleFixedNavabar:function(){var a=window.pageYOffset;0<a?this.add():0==a&&this.remove()},handleScroll:function(){var a=this;window.onscroll=function(n){a.toggleFixedNavabar()}},init:function(){this.toggleFixedNavabar(),this.handleScroll()}};