
// prevent moving down the page when hitting the space bar
$(document).on("keydown", function(event) {
  if (event.keyCode == 32) // space bar
    event.preventDefault();
});


// CARD

// timer
var display = $("#timer #display");

var time = { min: 0, sec: 0, timeoutId: 0 };

var updateTimer = function() {
  time.sec++;

  if (time.sec > 59) {
    time.min++;
    time.sec = 0;
  }

  var min = time.min+"";
  if (min.length === 1)
    min = "0"+min;

  var sec = time.sec+"";
  if (sec.length === 1)
    sec = "0"+sec;

  display.text(min+":"+sec);
}

var playButton = $("#play-btn");

playButton.on("click", function(event) {
  var btn = $(event.target);
  if (btn.attr("action") === "play") {
    btn.attr("action", "pause");
    btn.text("Pause");
    time.timeoutId = setInterval(updateTimer, 1000);
  }
  else if (btn.attr("action") === "pause") {
    btn.attr("action", "play");
    btn.text("Play");
    clearInterval(time.timeoutId);
  }
});

$("#stop-btn").on("click", function(event) {
  clearInterval(time.timeoutId);
  time.min = 0;
  time.sec = -1;
  time.timeoutId = 0;
  playButton.attr("action", "play");
  playButton.text("Play");
  bingoTime = "";
  bingoTimeElt.hide();
  updateTimer();
});

// toggle green background of the card table cell

var bingoTime = "";
var bingoTimeElt = $("#bingo-time");

function isItBingoYet() {
  var bingo = false;
  var directions = ["row", "col", "diag"];
  for (var dir of directions) {
    if (dir === "diag") $max = 2;
    else $max = 5;
    for (var i = 1; i <= $max; i++) {
      var count = $("#card ."+dir+i+".selected").length;
      if (count === 5)
        return true
    }
  };
  return false;
}

$("#card td").each(function(i, elt) {
  $(elt).on("click", function(event) {
    var td = event.target;
    if ($(td).is("img"))
      td = td.parentNode;

    $(td).toggleClass("selected");

    if (bingoTime === "" && isItBingoYet()) {
      var min = time.min+"";
      if (min.length === 1)
        min = "0"+min;
      var sec = time.sec+"";
      if (sec.length === 1)
        sec = "0"+sec;
      bingoTime = min+":"+sec;
      bingoTimeElt.find("span").text(bingoTime);
      bingoTimeElt.show();
    }
  });
});


// CONFIGURATION / ITEM POOL

// sitch + and - signs
$(".panel-heading").each(function(i, title) {
  $(title).on("click", function(event) {
    var span = $(event.target).find("span");
    if (span.hasClass("glyphicon-plus")) {
      span.removeClass("glyphicon-plus");
      span.addClass("glyphicon-minus");
    }
    else {
      span.removeClass("glyphicon-minus");
      span.addClass("glyphicon-plus");
    }
  });
});

function updateItemPoolSize() {
  var count = $("#configuration input[type=checkbox]:checked").length;
  $("#item-pool-count").text(count);
}


// toggle selected state of the items
$("#configuration input[type=checkbox]").each(function(i, box) {
  // $(box).hide();
  $(box).on("change", function(event) {
    var div = $(event.target.parentNode.parentNode); // first parentNode is <label>, second is div
    if (div.hasClass("selected"))
      div.removeClass("selected");
    else
      div.addClass("selected");

    updateItemPoolSize();
  });
});
updateItemPoolSize();
