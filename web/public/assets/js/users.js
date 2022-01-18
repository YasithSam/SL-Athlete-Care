$(document).ready(function(){
    $.ajax({
      url: "http://localhost/SL-Athlete-Care/api/v1/chart.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var users=[]
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'Auguest',
            'September',
            'October',
            'November',
            'December'
          ];
          var d=JSON.parse(data);

          for(var i in d) {
            users.push(d[i]);
          }
          console.log(users);
  
        var chartdata = {
          labels: labels,
          datasets: [{
            label: 'Change of users by month',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [users[0],users[1],users[2] ,users[3],users[4],users[5],users[6],users[7],users[8],users[9],users[10],users[11]],
          }]
        };
      
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'line',
          data: chartdata,
 
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });