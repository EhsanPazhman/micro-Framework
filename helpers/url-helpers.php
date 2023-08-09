<?php
function site_url($uri)
{
    return $_ENV['DOMAIN'] . $uri;
}
function asset_url($uri)
{
    return site_url('assets/' . $uri);
}
