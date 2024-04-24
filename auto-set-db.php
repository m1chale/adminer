<?php
/** Plugin to auto-set the database name and driver on the login page */
class AdminerAutoSetDB {
    function loginForm() {

        $databaseName = getenv('DATABASE'); 
        $dbDriver = getenv('DB_DRIVER'); 
        ?>
        <script<?php echo nonce();?> type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var dbInput = document.querySelector('input[name="auth[db]"]');
                if (dbInput) {
                    dbInput.value = <?php echo json_encode($databaseName); ?>; 
                }
                var driverInput = document.querySelector('select[name="auth[driver]"]');
                if (driverInput) {
                    driverInput.value = <?php echo json_encode($dbDriver); ?>; 
                }
            });
        </script>
        <?php
    }
}

return new AdminerAutoSetDB();
