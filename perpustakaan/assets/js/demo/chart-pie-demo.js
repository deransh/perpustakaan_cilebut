// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["January", "February", "March", "April", "May", "June","Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32, 9.87, 17.43, 9.08, 24.12, 14.21, 16.09, 34.10 , 15.09],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#007bcc', '#ffc105', '#28a745', '007bcc', '#dc3545','#28a745','007bff'],
    }],
  },
});
