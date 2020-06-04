<?php
    $xtp = new XTemplate('views/huongdan.html');

    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');