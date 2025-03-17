import Chart from 'chart.js/auto';
class Graph{
    public chartBluePrint(ctx:any,graphType:any,colorOne:any){
        new Chart(ctx, {
            type: graphType,
            data: {
              labels: ['Jan', 'Feb', 'May', 'June', 'July', 'Ague'],
              datasets: [{
                label: 'total sale',
                data: [60, 200, 100, 300, 10, 90],
                borderWidth: 2,
                borderColor: "#6200FF",
                backgroundColor:colorOne
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
    }
}

export default Graph;
