BHAVI OUR_WORKS - EXACT SOURCE EXTRACTION

Source: Pasted text(20261104-173813).txt (PHP/backend source)

our_works_section.php: active original portfolio markup, 13 categories, and all 13 database queries, copied verbatim. Removed unrelated header, footer, loader, and inactive commented-out duplicate All block.
our_works.css: original portfolio CSS declarations, unchanged; unrelated logo_section CSS omitted.
our_works.js: original JavaScript functions, unchanged.

Use PHP include at the desired location in the single-page website:
<?php include __DIR__ . "/our_works_section.php"; ?>
Load CSS in head and JS before </body>. Original page uses Bootstrap grid (Bootstrap 5.2 CSS).

BACKEND DEPENDENCIES NOT PROVIDED IN SOURCE:
- db.connection/db_connection.php (must already exist and define $conn)
- database table our_works and existing data
- admin/public/uploads/staff/ media files

These cannot be bundled without the actual files. Keep their original paths relative to your deployed PHP entrypoint. Original code includes DB connection separately in each category.

IMPORTANT: JavaScript is intentionally byte-for-byte original logic, including window.onload, window.onhashchange, and showMediaTab(null,...) behavior. This may conflict with existing single-page scripts and may throw on initial page load. No changes were made because exact original code was requested.
