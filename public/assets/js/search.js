$('#search').on('keyup', function(){
  $value = $(this).val(); //dapetin value

  if($value){
    $('.all-data').hide();
    $('.search-data').show();
  }else{
    $('.all-data').show();
    $('.search-data').hide();
  }
  $.ajax({

    type:'get',
    url: $('#content').data('url'),
    data : {'search':$value},
    success:function(response){
      console.log(response);
      $('#content').html(response);
    }
  });
  
})