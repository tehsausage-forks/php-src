--TEST--
JIT ASSIGN_OBJ: Assign property to undefined value
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.file_update_protection=0
opcache.jit_buffer_size=1M
--FILE--
<?php
functiOn foo() {
    $obj->y = 42;
    $obj && y;
}
?>
DONE
--EXPECT--
DONE
