<?php
$id = dba_open("/tmp/test.db", "n", "gdbm");
if (!$id) {
        echo "dba_open failed\n";
        exit;
}
dba_replace("key", "This is an example!", $id);
if (dba_exists("key", $id)) {
        echo dba_fetch("key", $id);
        dba_delete("key", $id);
}
dba_close($id);
?>