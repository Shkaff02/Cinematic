$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({html: true});
});

// function tooltipShow() {
//     document.getElementById("tooltip").classList.toggle("show");
// }

// var res;
let sum = 0;

$(document).ready(function() {
    $(".place-box").one('click', function() {
        $(this).css("background-color", "#AB23EB");
        let row = Number($(this).attr('data-row'));
        let column = Number($(this).attr('data-column'));
        let price = Number($(this).attr('data-price'));

        sum++;
        let res = price * sum;

        $(".here").append($(`<div class="place-pay" data-row="${row}" data-column="${column}" data-price="${price}">` + '<p class="row">' + row + " ряд" + '</p>' + '<p class="place">'+ column + " місце" + '</p>' + '<p class="place-price">' + price + " грн" + '</p>' + '<img src="../images/ticket-cross.png" alt="close" class="ticket-cross">' + '/div'));

        $("body").on('click', '.ticket-cross', function() {
            let row = Number($(this).closest('div').attr('data-row'));
            let column = Number($(this).closest('div').attr('data-column'));

            $(`[data-column = ${column}][data-row = ${row}]`).css('background-color', '#221F1F');

            $(this).closest('div').remove();
            res = res - price;
            $(".pay-sum").html(parseInt(res) + " грн");
        });
        $(".pay-sum").html(parseInt(res) + " грн");
    });
});


// $(document).ready(function() {
//     $(".place-box").hover(function() {
//         let row = Number($(this).attr('data-row'));
//         let place = Number($(this).attr('data-column'));
//
//         let str = String("Ряд: " + row + " місце: " + place);
//         $(this).attr('title', str);
//     });
// });
