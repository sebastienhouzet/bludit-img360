<?php
    class pluginImg360 extends Plugin {
        public function siteHead() {
            echo '<script src="/bl-plugins/img360/js/embed360.js"></script>';
            echo '<link rel="stylesheet" type="text/css" href="/bl-plugins/img360/css/styles.css">';
        }

        public function siteBodyEnd() {
            echo "<script>embed360('.embed360');</script>";
        }
    }
?>