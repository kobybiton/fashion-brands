$('.game-over').hide();
$('.btn').hide();
var onCardClick = function(e){
  
  if ($(this).hasClass('opened') || $(this).hasClass('matched')){
    
    return;
  }

  countSellected++;
  $(this).find('img').fadeIn(500).delay(500);
  $(this).addClass('opened');

    if(countSellected === 1){
      var id = $(this).data('id');
      firstCard = id;
     
    } else if(countSellected === 2){
        var id = $(this).data('id');
        secondeCard = id;
 
        if(firstCard === secondeCard){
        
          $('.cards-container .card.opened').removeClass('opened').addClass('matched');
          countSellected = 0;
          success++;
          counterMatched += 2;
          
          score = 100 * success / (success + fail);
          var fixedScore = Math.round(score).toFixed(0);
          $('.score').html('your score is' + '<br>' + fixedScore + '%').animate({right:'5px'},2000);         
          
          if(counterMatched === pictures.length){
            
            $('.game-over').delay(1000).fadeIn(2000);
            $('.btn').delay(1000).fadeIn(2000);
            $('.score').delay(1000).fadeOut(2000);
            $('.btn').on('click', function(){
              
              location.reload();
            });
           
            $('.matched').delay(500).fadeOut(1000);
                       
          }
         } else {
           
           $('.opened').find('img').fadeOut(500).delay(100);
           $('.cards-container .card.opened').removeClass('opened');
           countSellected = 0;
           fail++;
           }  
          
      }     
      
}


var pictures = [
                'sunglasses1.jpg', 'sunglasses1.jpg',
                'sunglasses2.jpg', 'sunglasses2.jpg',
                'sunglasses3.jpg', 'sunglasses3.jpg',
                'sunglasses4.jpg', 'sunglasses4.jpg',
                'sunglasses5.jpg', 'sunglasses5.jpg',
                'bag1.jpg','bag1.jpg','bag2.jpg',
                'bag2.jpg','bag3.jpg','bag3.jpg',
                'shoes1.jpg', 'shoes1.jpg', 
                'shoes3.jpg', 'shoes3.jpg',  
                ];
                
var firstCard, secondeCard;
var counterMatched = 0;
var countSellected = 0;
var success = 0;
var fail = 0;
var score = 0;

shuffle(pictures);

for(var i in pictures){

  var showCards = '<div class="card" data-id="'+ pictures[i] +'"> <img class="card-images" src="game_images/' + pictures[i] + '" width="100%" height="100%"/></div>';
  $('.cards-container').append(showCards);

}

$('.card-images').hide();
$('.cards-container .card').on('click', onCardClick);

function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}
