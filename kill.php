<?php echo shell_exec("ps aux | grep -i php | grep -wv while | awk {'print $2'} | xargs kill -9") ?>
<?php
if(function_exists("opcache_get_status") && is_array(opcache_get_status())) {
if (opcache_reset()) { echo "DONE"; }
else { echo "GAGAL"; }
}
else { echo "NOTAVA"; }
