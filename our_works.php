<?php include 'header.php'; ?>


    <div class="container"  >


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

        <!-- <div id="all" class="media-tab-content active">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path as necessary

                $sql = "SELECT * FROM our_works ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card shadow-sm h-100' style='overflow: hidden;'>
                        <div class='card-body p-2'>";

                        // Wrap in link if available
                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display image (centered)
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<div class='d-flex justify-content-center'>
                            <img src='$path' class='img-fluid' style='object-fit: cover; max-width: 100%; border-radius: 8px;'>
                          </div>";
                        }
                        // Display video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='object-fit: cover; width: 100%; border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Display PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported type
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>  -->

      <div id="all" class="media-tab-content active">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path as necessary

                $sql = "SELECT * FROM our_works ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card shadow-sm h-100' style='overflow: hidden;'>
                        <div class='card-body p-2'>";

                        // Wrap in link if available
                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display image (centered)
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<div class='d-flex justify-content-center'>
                            <img src='$path' class='img-fluid'  border-radius: 8px;'>
                          </div>";
                        }
                        // Display video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls   border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Display PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported type
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div> 


        <div id="logo" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Logo' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "./admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-3 mb-4'>
                        <div class='card' style='overflow: hidden; '>
                            <div class='card-body ' style='text-align: left;'>";

                        if ($link) echo "<a href='$link' target='_blank' style='display: block;'>";

                        echo "<div  display: flex; align-items: center;'>";

                        // Show image
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' alt='$title' style='max-width: 100%; max-height: 100%; object-fit: contain;'>";
                        }
                        // Show video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls   object-fit: contain;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Show PDF
                        elseif ($ext === 'pdf') {
                            echo "<a href='$path' target='_blank' class='btn btn-outline-primary'>📄 View PDF</a>";
                        } else {
                            echo "<p class='text-muted'>Unsupported file</p>";
                        }

                        echo "</div>"; // end media wrapper

                        if ($link) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No logo media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="website" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Website' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-lg-4 col-md-6 col-12 mb-4'>
                    <div class='card border-0 shadow-sm h-100 hover-card'>
                        <div class='card-body d-flex flex-column justify-content-between' style='padding: 10px;'>";

                        // Media Preview with link
                        echo "<div style='width: 100%; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa; height: 145px; overflow: hidden;'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank' style='display:block; width:100%; text-align:center;'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='max-height: 100%; max-width: 100%; object-fit: contain; transition: transform 0.3s;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='max-height: 100%; max-width: 100%; object-fit: contain;'>
                        <source src='$path' type='video/$ext'>
                        Your browser does not support the video tag.
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<div class='w-100 h-100 d-flex align-items-center justify-content-center'>
                            <span class='text-muted'>📄 PDF</span>
                        </div>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "</div>"; // end media preview

                        // Title
                        echo "<div class='mt-2 text-center'><strong>$title</strong></div>";

                        // View Site Button
                        if (!empty($link)) {
                            echo "<div class='mt-2 text-center'>
                        <a href='$link' target='_blank' class='btn btn-sm btn-success'>🌐 View Site</a>
                    </div>";
                        }

                        echo "</div></div></div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Website media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="posters" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Posters' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                        <div class='card border-0 shadow-sm'>
                            <div class='card-body p-2 text-center'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // ✅ Display media with original ratio
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                            Your browser does not support the video tag.
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Posters uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

        <div id="reels" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Reels' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Show image
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        }
                        // Show video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Show PDF link
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported format
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Reels uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="photoshoot" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Photo Shoot' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            // 👉 Full-size image, no height/width restrictions
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='width: 100%; border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Photo Shoot media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

        <div id="videos" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust path as needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Videos' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // adjust this path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // IMAGE
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        }
                        // VIDEO
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // OTHER
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No video media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="testimonials" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path if necessary

                $sql = "SELECT * FROM our_works WHERE media_type = 'Testimonials' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Adjust path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No testimonials uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>




        <div id="animatedvideos" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust if path differs

                $sql = "SELECT * FROM our_works WHERE media_type = 'Animated Videos' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                      </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No animated videos uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>



        <div id="visitingcards" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust this path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Visiting Cards' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No visiting cards uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>




        <div id="pamphlets" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Update path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Pamphlets' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No pamphlets uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <!-- Brochures Tab Content -->
        <div id="brochures" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust the path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Brochures' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card h-100'>
                        <div class='card-body p-2 text-center'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;  object-fit: contain;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='border-radius: 8px;  object-fit: contain;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<div style=' overflow: hidden; border-radius: 8px; margin: auto;'>
                            <iframe src='$path#toolbar=0' width='100%' height='100%' style='border: none;'></iframe>
                          </div>";
                            // echo "<p class='mt-2'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 Open Full PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No brochures uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="hoardings" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Hoardings' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display media based on file type
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No hoardings uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

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
            var activeButton = event && event.currentTarget ? event.currentTarget :
                document.querySelector('.media-tab-btn[onclick*="' + "'" + tabName + "'" + '"]');
            if (activeButton) activeButton.classList.add("active");

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
        addEventListener('load', showTabFromHash, { once: true });

        // Listen for hash changes (e.g., when user uses browser back/forward buttons)
        addEventListener('hashchange', showTabFromHash);
    </script>





<?php include 'chatbot.php'; ?>
<?php include 'footer.php'; ?>
