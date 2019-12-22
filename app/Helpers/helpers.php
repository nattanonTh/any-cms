<?php

function isActiveLink(string $currentLink)
{
    return \Illuminate\Support\Facades\Request::is($currentLink);
}
