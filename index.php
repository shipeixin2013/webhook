<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd /home/ubuntu/test/sae/ && git reset --hard HEAD && git pull' );
}
?>hi
