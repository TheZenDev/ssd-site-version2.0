fetch('http://ssdscheduleapi20180326021240.azurewebsites.net/api/values')
  .then(function (response) {
    return response.json();
  })
  .then(function (myJson) {
    console.log(myJson);
    let txt = '';
    // variable for setting the count 
    var day_count = 1;
    for (x in myJson) {
      let current_date = myJson[x].date.substring(0, 9);
      txt += "<div id='inner_cal_div'>"
      txt += '<ul>'
      txt += "<li>" + 'Day: ' + day_count + "</li>";
      txt += "<li>" + 'Date: ' + current_date + "</li>";
      txt += "<li>" + 'Course: ' + myJson[x].course + "</li>";
      txt += "<li>" + 'Instructor: ' + myJson[x].instructor + "</li>";
      txt += "</ul>"
      txt += '</div>'
      txt += '<br>'
      day_count++;
    }
    document.getElementById("calendar_div").innerHTML = txt;
  });

function toggle_view() {
  // need to toggle style to calendar view 
  var sched_div = document.getElementById("calendar_div");
  sched_div.classList.toggle("flex_calendar");
  // for testing purposes
  //alert('Toggle Worked!');
}

