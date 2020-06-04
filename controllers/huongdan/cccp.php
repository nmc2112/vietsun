<?php
    $xtp = new XTemplate('views/huongdan/cccp.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');