
<script src="assets/js/apexcharts.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/echarts.min.js"></script>
<script src="assets/js/quill.min.js"></script>
<script src="assets/js/simple-datatables.js"></script>
<script src="assets/js/tinymce.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/main.js"></script> 


<!-- alertifyjs -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<script >
    <?php 
        if(isset($_SESSION['message'])){
            ?>

                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['message']; ?> ');

            <?php
            unset($_SESSION['message']);
        }

        if(isset($_SESSION['error'])){
            ?>

                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['error']; ?> ');

            <?php
            unset($_SESSION['error']);
        }

        if(isset($_SESSION['warning'])){
            ?>

                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['warning']; ?> ');

            <?php
            unset($_SESSION['warning']);
        }
    ?>
</script>



