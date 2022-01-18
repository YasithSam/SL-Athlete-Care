$(document).ready(function(){
    $.ajax({
      url: "http://localhost/SL-Athlete-Care/api/v1/sportChart.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var sport=[];
        var color=['red','yellow','#cc65fe','yellow','grey'];
        const sportLabels = [
            'Cricket',
            'Athletics',
            'Rugby',
            'Football',
            'Other'
          ];
          var d=JSON.parse(data);

          for(var i in d) {
            sport.push(d[i]);
          }
  
          var chart_data = {
            labels: sportLabels,
            datasets:[
                {
                    label:'Sport',
                    backgroundColor:['red','blue','#cc65fe','yellow','green'],
                    color:'#fff',
                    data:sport
                }
            ]
        };
  
        var group_chart1 = $('#pie_chart');

        var graph1 = new Chart(group_chart1, {
            type:"pie",
            data:chart_data
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });