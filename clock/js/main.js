clockActive = true;
soundPlaying = false;
height = 625;
time = "AM";


var audio = new Audio('alarm.mp3');
var alarms = new Array();
alarms[0] = "12:30:PM";









function soundAlarm() {
  if (!clockActive) {return};
  // get rido of clock
  $("div.alarm").animate({
    marginTop: "+="+height
  }, function(){
    $("div.clock").css("display", "none");
  });

  clockActive = false

  audio.play();
  soundPlaying = true;

}


// KEYPRESSES
$(document).keypress(function(event){
    var key = String.fromCharCode(event.which); 
    
    // SNOOZE
    if (event.which == 32 && clockActive == false) {

      // show clock
      $("div.clock").css("display", "block");
      $("div.alarm").animate({
        marginTop: "-="+height
      });

      clockActive = true

      // stop audio if playing
      if (soundPlaying) {
        audio.pause();
        audio.currentTime = 0;
        soundPlaying = false;
      }
    }

    // TEST ALARM
    if (key == "t") {
      soundAlarm();
    }


});


function startTime() {

  var today=new Date();
  var h=today.getHours();
  var m=today.getMinutes();
  var s=today.getSeconds();
  // add a zero in front of numbers<10
  h=to12hour(h)
  m=checkTime(m);
  s=checkTime(s);

  // Loop through all the alarms
  for (var i = 0; i <= alarms.length-1; i++) {

    var a = alarms[i].split(":");
    // if alarm is rung....
    if (h == a[0] && m == a[1] && s == 0) {
      // sound the alarm
      soundAlarm();
    }
  };
  
  $("span.h").html(h);
  $("span.m").html(m);
  $("span.s").html(s);
  $("span.ma").html(time);

  t=setTimeout(function(){startTime()},500);
}

function checkTime(i) {
  if (i<10) { i="0" + i; }
  return i;
}

function to12hour(h) {
  if (h > 12) {
    time = "PM";
    return h-12;
  } else if (h == 12) {
    time = "PM";
    return 12;
  } else {
    time = "AM";
    return h;
  }
}

startTime();
