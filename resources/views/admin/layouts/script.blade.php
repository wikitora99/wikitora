<!-- Required vendors -->
<script src="/dashboard/vendor/global/global.min.js"></script>
<script src="/dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/dashboard/vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="/dashboard/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="/dashboard/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="/dashboard/js/dashboard/dashboard-1.js"></script>

<script src="/dashboard/vendor/owl-carousel/owl.carousel.js"></script>
<script src="/dashboard/js/custom.js"></script>
<script src="/dashboard/js/deznav-init.js"></script>
    
<script>
  jQuery(document).ready(function(){
    setTimeout(function() {
      dezSettingsOptions.version = 'dark';
      new dezSettings(dezSettingsOptions);
    },1500)
  });
</script>