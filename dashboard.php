<?php
session_start();
if (isset($_SESSION['username'])) {
          echo "Welcome to your dashboard, " . $_SESSION['username'] . "!";
} else {
          echo "You are not logged in. Please log in to access the dashboard.";
}
