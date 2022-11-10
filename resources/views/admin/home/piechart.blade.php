<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Donations vs Requests Chart</h5>

            <div id="pieChart"></div>

            <script>
                var total_requested = <?php echo json_encode($requested_value[0]); ?>;
                var donations = <?php echo json_encode($donations); ?>;
                document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#pieChart"), {
                        series: [total_requested, donations],
                        chart: {
                            height: 251,
                            type: 'pie',
                            toolbar: {
                                show: true
                            }
                        },
                        labels: ['Total Requested', 'Donations']
                    }).render();
                });
            </script>

        </div>
    </div>
</div>
