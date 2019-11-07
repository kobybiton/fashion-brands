$('.addToCart').on('click', function(e){
  
  $('#login li a').slideUp(300).slideDown(300).fadeOut(300).fadeIn(300);  
  var id = $(this).data('id');  
  $.ajax({    
    url:BASE_URL + "cart/addToCart",
    type:"get",
    dataType:'html',
    data: {"id": id,},
    success: function(response){
      location.reload();
    }    
  });  
});

$('.update-item-checkout').on('click', function(){  
  $('#login li a').slideUp(300).slideDown(300).fadeOut(300).fadeIn(300);  
  var id = $(this).data('id');
  var op = $(this).data('op');  
  $.ajax({   
    url: BASE_URL + "cart/update",
    type: "get",
    dataType: "html",
    data: {"id": id, "op": op},
    success: function( response ){  
      location.reload();
    }
  });
});

 $('.dropdown').on('click', function(){  
    $('.nav-pills').fadeToggle(1000);
 });

$('.addToCart').mouseenter(function(){	
  var id = $(this).data('id');
  $("[data-discount= "+id+"]").fadeIn(1500);
}).mouseleave(function(){
  var id = $(this).data('id');
  $("[data-discount= "+id+"]").fadeOut(1000);
});  

$('.alert-wrapper').delay(3000).fadeOut(300);
$('.alert-cms').delay(5000).slideUp(300);

$('.search').keyup(function(e){  
  e.preventDefault();
  var input = $(this).val();
  if(input.length > 0){

  $('#myfooter').fadeOut(300);  
  $('#layout-container').fadeOut(300);
    $.ajax({
      url: BASE_URL + 'search/' + input,
      type: 'GET',
      dataType: 'html',
      success: function(result){
        $('.results').html(result);
      }
    })

    $('.results').show();
    $('.results').hover(function(){
      inside = true;
    }, function(){
      inside = false;
    });

    $('body').on('click', function(e){
      if(!inside){
        if(!$(e.target).is(".search")){
          $('.results').hide();
        }
      }
    })

    $(this).on('click', function(){
      $('.results').show();
    })

  } else {
    $('.results').hide();
    $('#layout-container').fadeIn(300);
  }
});

onload=function(){
  var e=document.getElementById("refreshed");
  if(e.value=="no")e.value="yes";
  else{e.value="no";location.reload();}
}

