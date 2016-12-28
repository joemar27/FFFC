//  Move this to another page, create a "view" page for pages, and look into
//  requirejs.
var breadcrumb = function(){
  var pagename = location.pathname;
  this.parse_pagename = function(){
    //regex for pagename.
  }
  this.compile_page_name = function(){
    var node = document.createElement("LI");
    var textnode = document.createTextNode(pagename);
    node.appendChild(textnode);
    document.getElementById("page_crumb").appendChild(node);
  }
}

var page_breadcrumb = new breadcrumb();
window.onload = page_breadcrumb.compile_page_name();
