document.querySelector('.action-print').addEventListener('click', function(event) {
  event.preventDefault();
  /* Act on the event */
  var printContents = document.getElementById('printarea').innerHTML;
  

  document.body.innerHTML = printContents;
  window.print();
});