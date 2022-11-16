<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Yearly Donation Chart</h5>

            <!-- Line Chart -->
            <canvas id="lineChart" style="max-height: 400px;"></canvas>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#lineChart'), {
                        type: 'line',
                        data: {
                            labels: <?php echo json_encode($year); ?>,
                            datasets: [{
                                label: 'Yearly Total Donations',
                                data: <?php echo json_encode($yearlytotal); ?>,
                                fill: false,
                                borderColor: 'rgb(75, 192, 192)',
                                tension: 0.1
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
                });
            </script>
            <!-- End Line CHart -->

        </div>
    </div>
</div>
