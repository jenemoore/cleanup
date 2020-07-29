function allocateSidebarHeight() {
var contentDom = document.getElementById("content");
var sidebarDom = document.getElementById("leftCol");
if((contentDom.offsetHeight-65) > sidebarDom.offsetHeight) {
sidebarDom.style.height = (contentDom.offsetHeight-65)+"px"; }
}

startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() { this.className+=" over"; }
node.onmouseout=function() { this.className=this.className.replace(" over", ""); } } } }
allocateSidebarHeight(); }

window.onload=startList;
