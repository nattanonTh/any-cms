<?php

use Carbon\Carbon;

function isActiveLink(string $currentLink)
{
    return \Illuminate\Support\Facades\Request::is($currentLink);
}

function date_ui(string $date): string
{
    return Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
}
