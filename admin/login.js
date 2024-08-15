const labels = document.querySelectorAll(".form-control label");

labels.forEach((label) => {
  label.innerHTML = label.innerText
    .split("")
    .map(
      (letter, idx) =>
        `<span style="transition-delay:${idx * 50}ms">${letter}</span>`
    )
    .join("");
});

$(function() {
    $('#user-option,#m-user-option').click(function(){
      $(this).parent().prev().toggle();
    });
    $('#hamburger').click(function(){
      $('body, #m-sidebar-wrapper').toggleClass('active');
    });
  });
