<?php
include "functions.php";
if (!isset($_SESSION['user_id'])) { header("Location: ./login.php"); exit; }
if (!$rPermissions["is_admin"]) { exit; }
if (!isset($_GET["id"])) { exit; } ?>
<html>
    
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<script src="assets/js/vendor.min.js"></script>
    <body>
        <video id="video" width="100%" height="100%" controls></video>
    </body>
	<script src="assets/js/vendor.min.js"></script>
    <script>
    $(document).ready(function() {
        var video = document.getElementById('video');
        if(Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource("http://<?=($rServers[$_INFO["server_id"]]["domain_name"] ? $rServers[$_INFO["server_id"]]["domain_name"] : $rServers[$_INFO["server_id"]]["server_ip"])?>:<?=$rServers[$_INFO["server_id"]]["http_broadcast_port"]?>/live/<?=$rAdminSettings["admin_username"]?>/<?=$rAdminSettings["admin_password"]?>/<?=$_GET["id"]?>.m3u8");
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED,function() {
                video.play();
            });
        }
    });
    </script>
</html>