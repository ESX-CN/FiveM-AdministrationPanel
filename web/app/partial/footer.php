</div>
</body>
    <!--<script src="//code.jquery.com/jquery-1.9.1.js"></script>-->
    <script type="text/javascript">
        console.log("Page Load Time: <?php echo round((microtime(true) - $GLOBALS['time_start']), 4); ?>");
    </script>
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/bootstrap-checkbox-radio-switch.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/chartist.min.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/bootstrap-notify.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/light-bootstrap-dashboard.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/date.format.js"></script>
    <script src="<?php echo $GLOBALS['domainname']; ?>app/js/application.js?v=<?php echo time();?>"></script>
</html>