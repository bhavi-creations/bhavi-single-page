<?php include 'header.php'; ?>


<style>
    .media-tab-buttons button {
        width: 100%;
        padding: 10px;
        background-color: #f3ecec;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
    }



    .media-tab-buttons button.active {
        background-color: #007BFF;

        /* background-color: #28323c; */
        color: #fff;
    }

    @media (max-width:768px) {
        .media-tab-buttons button.active {
            font-size: 12px !important;
        }
    }

    .media-tab-content {
        display: none;
        padding: 15px;
        background-color: #000000;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .media-tab-content.active {
        display: block;
    }



    .media-box {
        margin: 10px 0;
    }

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    @media (max-width:768px) {
        .media-tab-content video {
            width: 100% !important;
        }

    }

    /* size  */

    .media-tab-content {
        display: none;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
    }

    .media-tab-content.active {
        display: flex;
    }

    .equal-media {
        height: 250px;
        width: auto;
        object-fit: cover;
    }

    .media-tab-btn {
        padding: 10px 20px;
        margin: 5px;
        background-color: #ddd;
        border: none;
        cursor: pointer;
    }

    .media-tab-btn.active {
        background-color: #333;
        color: white;
    }

    @media (min-width:992px) and (max-width:1200px) {
        .logo_section {
            font-size: 10px !important;
        }

    }
</style>

</head>






<body>

    <section  class="mb-5"     style="padding-top:120px;">
        <div class="container">


            <div class="row g-2 mb-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 media-tab-buttons mx-1">
                <div><button class="media-tab-btn active" onclick="showMediaTab(event, 'all')">All</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'logo')">Logo</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'website')">Website</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'posters')">Posters</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'reels')">Reels</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'photoshoot')">Photo Shoot</button> </div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'videos')">Videos</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'testimonials')">Testimonials</button> </div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'animatedvideos')">Animated Videos</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'visitingcards')">Visiting Cards</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'pamphlets')">Pamphlets</button></div>
                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'brochures')">Brochures</button></div>

                <div><button class="media-tab-btn" onclick="showMediaTab(event, 'hoardings')">Hoardings</button></div>
            </div>

            <?php
            include 'db.connection/db_connection.php';
            $workCategories = [
                'logo' => 'Logo', 'website' => 'Website', 'posters' => 'Posters', 'reels' => 'Reels',
                'photoshoot' => 'Photo Shoot', 'videos' => 'Videos', 'testimonials' => 'Testimonials',
                'animatedvideos' => 'Animated Videos', 'visitingcards' => 'Visiting Cards',
                'pamphlets' => 'Pamphlets', 'brochures' => 'Brochures', 'hoardings' => 'Hoardings',
            ];
            $works = [];
            $worksResult = $conn->query('SELECT media_type, title, file_path, media_link FROM our_works ORDER BY id DESC');
            $worksQueryError = $worksResult === false ? $conn->error : '';
            if ($worksResult) while ($workRow = $worksResult->fetch_assoc()) $works[] = $workRow;

            $renderWorks = static function (array $items, string $emptyMessage, string $queryError = ''): void {
                if ($queryError !== '') {
                    echo "<div class='col-12'><p class='text-white text-center'>Unable to load works right now.</p></div>";
                    return;
                }
                if (!$items) {
                    echo "<div class='col-12'><p class='text-white text-center'>" . htmlspecialchars($emptyMessage, ENT_QUOTES, 'UTF-8') . "</p></div>";
                    return;
                }
                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'];
                $videoExtensions = ['mp4', 'webm', 'mov', 'avi'];
                foreach ($items as $item) {
                    $file = basename(trim((string) ($item['file_path'] ?? '')));
                    $title = trim((string) ($item['title'] ?? ''));
                    $type = trim((string) ($item['media_type'] ?? ''));
                    $link = trim((string) ($item['media_link'] ?? ''));
                    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $label = htmlspecialchars($title !== '' ? $title : ($type !== '' ? $type : 'Our work'), ENT_QUOTES, 'UTF-8');
                    $safeType = htmlspecialchars($type, ENT_QUOTES, 'UTF-8');
                    $mediaUrl = htmlspecialchars('admin/public/uploads/staff/' . rawurlencode($file), ENT_QUOTES, 'UTF-8');
                    $safeLink = filter_var($link, FILTER_VALIDATE_URL) && in_array(strtolower((string) parse_url($link, PHP_URL_SCHEME)), ['http', 'https'], true)
                        ? htmlspecialchars($link, ENT_QUOTES, 'UTF-8') : '';
                    $fileExists = $file !== '' && is_file(__DIR__ . '/admin/public/uploads/staff/' . $file);

                    echo "<div class='col-12 col-sm-6 col-lg-4 mb-4'><article class='card shadow-sm h-100'><div class='card-body p-3'>";
                    if (!$fileExists) {
                        echo "<div class='d-flex align-items-center justify-content-center text-center text-white' style='min-height:180px;background:rgba(255,255,255,.06);border-radius:8px;'>Media file is missing</div>";
                    } elseif (in_array($extension, $imageExtensions, true)) {
                        echo "<img src='{$mediaUrl}' alt='{$label}' loading='lazy' class='img-fluid w-100' style='object-fit:contain;max-height:360px;border-radius:8px;'>";
                    } elseif (in_array($extension, $videoExtensions, true)) {
                        echo "<video controls preload='metadata' class='w-100' style='max-height:420px;border-radius:8px;'><source src='{$mediaUrl}' type='video/" . htmlspecialchars($extension, ENT_QUOTES, 'UTF-8') . "'>Your browser does not support video playback.</video>";
                    } elseif ($extension === 'pdf') {
                        echo "<a href='{$mediaUrl}' target='_blank' rel='noopener noreferrer' class='btn btn-outline-info btn-sm'>View PDF</a>";
                    } else {
                        echo "<p class='text-white text-center'>Unsupported media format</p>";
                    }
                    echo "<p class='mt-3 mb-0 text-center'><strong>{$label}</strong></p>";
                    if ($safeType !== '') echo "<p class='mb-0 text-center small text-white-50'>{$safeType}</p>";
                    if ($safeLink !== '') echo "<p class='mt-2 mb-0 text-center'><a href='{$safeLink}' target='_blank' rel='noopener noreferrer' class='btn btn-outline-info btn-sm'>Visit project</a></p>";
                    echo '</div></article></div>';
                }
            };
            $conn->close();
            ?>
            <div id="all" class="media-tab-content active"><div class="row"><?php $renderWorks($works, 'No media uploaded yet.', $worksQueryError); ?></div></div>
            <?php foreach ($workCategories as $tabId => $categoryName): ?>
                <div id="<?= htmlspecialchars($tabId, ENT_QUOTES, 'UTF-8') ?>" class="media-tab-content"><div class="row">
                    <?php
                    $categoryWorks = array_values(array_filter($works, static function (array $item) use ($categoryName): bool {
                        return strcasecmp(trim((string) ($item['media_type'] ?? '')), $categoryName) === 0;
                    }));
                    $renderWorks($categoryWorks, 'No ' . $categoryName . ' uploaded yet.', $worksQueryError);
                    ?>
                </div></div>
            <?php endforeach; ?>
        </div>


        <script>
            function showMediaTab(event, tabName) {
                // Hide all tab contents
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("media-tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.remove("active");
                }

                // Deactivate all tab buttons
                tablinks = document.getElementsByClassName("media-tab-btn");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active");
                }

                // Show the specific tab content
                document.getElementById(tabName).classList.add("active");

                // Activate the button that opened the tab
                if (event && event.currentTarget) event.currentTarget.classList.add("active");

                // Update URL hash
                window.location.hash = tabName;
            }

            // Function to show the correct tab on page load based on URL hash
            function showTabFromHash() {
                let hash = window.location.hash.substring(1); // Remove the '#'
                if (hash) {
                    let targetTab = document.getElementById(hash);
                    let targetButton = document.querySelector(`.media-tab-btn[onclick*="'${hash}'"]`);

                    if (targetTab && targetButton) {
                        // Manually trigger the tab display
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("media-tab-content");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].classList.remove("active");
                        }
                        tablinks = document.getElementsByClassName("media-tab-btn");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].classList.remove("active");
                        }

                        targetTab.classList.add("active");
                        targetButton.classList.add("active");
                    } else {
                        // If hash doesn't match a valid tab, default to 'all'
                        showMediaTab(null, 'all');
                    }
                } else {
                    // Default to 'all' tab if no hash is present
                    showMediaTab(null, 'all');
                }
            }

            // Call showTabFromHash when the page loads
            window.onload = showTabFromHash;

            // Listen for hash changes (e.g., when user uses browser back/forward buttons)
            window.onhashchange = showTabFromHash;
        </script>


    </section>


<?php include 'chatbot.php'; ?>
<?php include 'footer.php'; ?>