<?php
<nav class="navbar">
    <li><a href="/">Homepage</a></li>
    <li><a href="{{ route('About') }}">About</a></li>
    <li><a href="{{ route('about') }}">Login</a></li>
</nav>
<style>
    navbar {
        width: 100%;
        height: 50px;
        background-color: darkblue;
    }
</style>
?>