function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

var clip = new Clipboard('.btn');

clip.on("success", function() {
  document.body.insertAdjacentHTML('beforeend', '<div>that worked.</div>');
});
clip.on("error", function() {
  document.body.insertAdjacentHTML('beforeend', '<div>that didn\'t work.</div>');
});