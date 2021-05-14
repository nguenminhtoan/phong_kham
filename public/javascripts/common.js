$(document).on('turbolinks:load', function() {
  submitNewMessage();
});

function submitNewMessage(){
  $('textarea#message_content').keydown(function(event) {
    if (event.keyCode == 13) {
        $('[data-send="message"]').click();
        $('[data-textarea="message"]').val(" ")
        return false;
     }
  });
}

$(document).ready(function(){
    $(".show").click(function(){
            $(".box-chat").addClass("active");
            sessionStorage.setItem("close", true);
    });
    
    $('textarea#message_content').keyup(function(event) {
    if (event.keyCode == 13) {
        $.ajax({
            method: "get",
            data: $("#form_message").serialize(),
            url: "/messages/create",
            success: (function(data){
            })
        });
        $("#messages").append('<div class="user wpb_row"><div class="group"><span class="noidung">' + $("#form_message textarea").val() + '</span></div></div>');
        $("#form_message textarea").val("");
        var d = $('#messages');
        d.scrollTop(d.prop("scrollHeight"));
     }
  });
});

$(window).scroll(function(){
    if ($(window).scrollTop() > 159) {
        $(".scroll-top ").show();
        $("#nav-menu").addClass("move");
    } else
    {
        $("#nav-menu").removeClass("move");
        $(".scroll-top ").hide();
    }

});

$(".scroll-top").click(function () {
    $('body,html').animate({
        scrollTop: 0
    });
});
$(".show").click(function () {
    $(".box-chat").addClass("active");
    sessionStorage.setItem("close", true);
});

function initMap() {
    var uluru = {lat: 10.022475, lng: 105.744728};
    // The map, centered at Uluru
    var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
}

function DeleteRow() {
    if(confirm('Bạn có muốn xóa không ?'))
    {
      return true;
    }
    else
    {
      return false;
    }
}

function showMenu(){
    if ($("#mobile").attr("data-show") == 0){
        $('#mobile').show();
        $('#mobile').attr("data-show", 1);
    }
    else{
        $('#mobile').hide();
        $('#mobile').attr("data-show", 0);
    }
}


function pageCurrent(num){
    location.href = location.protocol + '//' + location.host + location.pathname + "?page=" + num;
}