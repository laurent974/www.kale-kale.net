var Navbar = {
  params: {
    flagAdd: true,
    elements: [".navbar",".navbar-inner",".navbar-brand"]
  },
  remove: function() {
    var that = this;

    for (var i = 0; i < this.params.elements.length; i++) {
      $(that.params.elements[i]).removeClass("navbar-theme");
    }
    this.params.flagAdd = true;
  },
  add: function() {
    var that = this;

    if (this.params.flagAdd) {
      for(var i = 0; i < this.params.elements.length; i++) {
        $(that.params.elements[i]).addClass("navbar-theme");
      }
      this.params.flagAdd = false;
    }
  },
  toggleFixedNavabar: function() {
    var that = this;
    var yOffset = 0;
    var currYOffset = window.pageYOffset;

    if (yOffset < currYOffset) {
      that.add();
    } else if (yOffset == currYOffset) {
      that.remove();
    }
  },
  handleScroll: function() {
    var that = this;

    window.onscroll = function(e) {
      that.toggleFixedNavabar();
    }
  },
  init: function() {
    //this.params.elements = elements;
    this.toggleFixedNavabar();
    this.handleScroll();
  }
}
