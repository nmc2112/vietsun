<?php
    $xtp = new XTemplate('views/huongdan/thaotacchung.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');