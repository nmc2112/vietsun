<?php

    $xtp = new XTemplate('views/clients/list.html');

    $xtp->parse('OUT');
    $acontent = $xtp->text('OUT');