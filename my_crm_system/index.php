<?php
// Main CRM Index
echo '<h1>Welcome to My CRM</h1>';

// Include modules (example - you'd likely use a more sophisticated approach)
foreach (array('contacts', 'deals', 'products', 'invoices', 'reports') as $module) {
  echo '<h2><a href="' . $module . '/">' . ucfirst($module) . '</a></h2>';
}

?>
