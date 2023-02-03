<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Überprüfen Sie hier den Benutzernamen und das Passwort gegen Ihre Datenbank
  // Hier ist ein Beispiel, bei dem nur ein bestimmter Benutzername und Passwort akzeptiert werden
  if ($username === 'admin' && $password === 'password') {
    // Login erfolgreich
    // Weiterleiten zur geschützten Seite
    header('Location: protected.php');
    exit;
  } else {
