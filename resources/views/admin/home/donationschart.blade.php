<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Year {{ date('Y') }} Donation Chart</h5>

            <!-- Bar Chart -->
            <canvas id="barChart" style="max-height: 400px;"></canvas>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#barChart'), {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($month); ?>,
                            datasets: [{
                                label: 'Total Donations',
                                data: <?php echo json_encode($total); ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)',
                                    'rgba(128, 0, 0, 0.2)',
                                    'rgba(170, 110, 140, 0.2)',
                                    'rgba(0, 128, 128, 0.2)',
                                    'rgba(128, 128, 0, 0.2)',
                                    'rgba(220, 190, 255, 0.2)',

                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)',
                                    'rgba(128, 0, 0)',
                                    'rgba(170, 110, 140)',
                                    'rgba(0, 128, 128)',
                                    'rgba(128, 128, 0)',
                                    'rgba(220, 190, 255)',
                                ],
                                borderWidth: 1
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
            <!-- End Bar CHart -->

        </div>
    </div>
</div>
