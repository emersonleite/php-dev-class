<?php

require "../../../bootstrap.php";

$request = getRequest();

$validate = validate($request);

dd($validate->name);











