<?php

require_once( _DIR_ '/init_auth');

$inquiry_id = (string)@$_GET['inquiry_id']

$dbh = 'SELECT * FROM inuqirys WHERE inquiry_id = :inquiry_id ';
$pre = $dbh->prepare($sql);

$pre->bindValue(':inquiry_id', $inquiry_id);

$r = $pre->bind

error_repo

