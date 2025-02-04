#!/bin/bash

# CRM System Directory
CRM_DIR="my_crm_system"

# Modules
MODULES=("contacts" "deals" "products" "invoices" "reports")

# Create the main directory
mkdir -p "$CRM_DIR"
echo "Created CRM system directory: $CRM_DIR"

# Create module directories and basic files
for module in "${MODULES[@]}"; do
  module_dir="$CRM_DIR/$module"
  mkdir -p "$module_dir"
  echo "Created module directory: $module_dir"

  # Create some basic files within each module (example)
  touch "$module_dir/index.php"  # Main file for the module
  touch "$module_dir/functions.php" # Functions related to the module
  echo "Created basic files in $module_dir"

  # Add some example content to index.php (optional)
  echo "<?php
  // $module Module - Basic CRM functionality
  echo '<h1>$module Module</h1>';
  // Add your code here...
  ?>" > "$module_dir/index.php"

done

# Create a main index.php for the CRM (optional)
echo "<?php
// Main CRM Index
echo '<h1>Welcome to My CRM</h1>';

// Include modules (example - you'd likely use a more sophisticated approach)
foreach (array('contacts', 'deals', 'products', 'invoices', 'reports') as \$module) {
  echo '<h2><a href=\"' . \$module . '/\">' . ucfirst(\$module) . '</a></h2>';
}

?>" > "$CRM_DIR/index.php"


# Create a database connection file (example)
echo "<?php
// database_connection.php
\$servername = 'localhost'; // Replace with your DB server
\$username = 'aenzbi_'; // Replace with your DB username
\$password = 'aenzbi_password'; // Replace with your DB password
\$dbname = 'your_crm_db';    // Replace with your DB name

// Create connection
\$conn = new mysqli(\$servername, \$username, \$password, \$dbname);

// Check connection
if (\$conn->connect_error) {
    die('Connection failed: ' . \$conn->connect_error);
}
//echo 'Connected successfully'; // Uncomment for debugging

?>" > "$CRM_DIR/database_connection.php"

# Create a CSS file for styling (example)
echo "/* style.css */
body {
  font-family: sans-serif;
}
h1, h2 {
  color: #333;
}
/* Add more styles as needed */
" > "$CRM_DIR/style.css"

echo "CRM system structure created in: $CRM_DIR"
echo "Remember to configure your database connection in database_connection.php"
echo "Start building your CRM logic in the module files."

