window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "Salary Time Line"
        },
        data: [{        
            type: "line",
              indexLabelFontSize: 14,
            dataPoints: [
                { y: 10000 },
                { y: 20000},
                { y: 30000, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
                { y: 40000 },
                { y: 50000 },
                { y: 60000 },
                { y: 70000 },
                { y: 80000 },
                { y: 90000 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" }
               
            ]
        }]
    });
    chart.render();
    
    }