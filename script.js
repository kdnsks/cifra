$('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$(function(){
  $('#list-home-list').click(function () {
    $('#list-home-list').remove()
    $('#list').prepend('<a class="list-group-item list-group-item-action active" id="list-home-list-activate" data-toggle="list" href="#" role="tab" aria-controls="home">Информационная</a>');
    $('#list').prepend('<input id="direction" style="display:none;" value="Информационная"></input>');
  });

  $('#list-profile-list').click(function () {
    $('#list-profile-list').remove()
    $('#list').prepend('<a class="list-group-item list-group-item-action active" id="list-profile-list-activate" data-toggle="list" href="#" role="tab" aria-controls="profile">Информационная</a>');
    $('#list').prepend('<input id="direction" style="display:none;" value="Компьютерная"></input>');
  });

  

   $('.addTask').click(function(){
      $('.list').prepend(
         `
         <div class="task">
              <div class="line">
                <h4>${ $('#title').val() }</h4>
                <img src="img/clear-button.png" alt="clear-button" class="delete">
                <img src="img/стрелка.png" alt="arrow" class="arrow">
              </div>
              <hr>
              <p>${ $('#direction').val() }</p>
              <p>${ $('#description').val() }</p>
              <p>${ $('#price').val() }</p>
            </div>
         `
      );
   });

   $('body').on('click', '.delete', function (){
   		$('.task').remove();
   });
});