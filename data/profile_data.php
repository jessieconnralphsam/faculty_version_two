      <div class="container  py-2 px-2">
        <div class="container rounded bg-white">
            <div class="px-3 py-3">
              <strong><a href="index.php">All Colleges</a> / <?php echo $college; ?> (<?php echo $college_abbreviation; ?>)</strong>
              <div class="py-4">
                <div class="row row-cols-auto">
                    <div class="col col-12 col-md-4 mt-2">
                        <div class="container bg-white rounded shadow">
                            <div>
                                <div class="col" style="display: flex;justify-content: center;">
                                    <img src="<?php echo $photoSrc; ?> " class="rounded profile-image align-middle mt-2 mb-2" alt="...">
                                </div>
                                <div class="col">
                                    <p class="fw-bolder fs-sm text-center"><strong>Contact Information</strong></p>
                                    <p class="fw-lighter fs-sm text-center mb-3"><i class="fa fa-envelope"></i> <?php echo $email; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-8 mt-2">
                        <div class="container">
                            <div class="mb-2">
                                <h2 class="profile-text" style="color: #8F0A03;"><strong><?php echo $first_name; ?> <?php echo $middle_name; ?> <?php echo $last_name; ?> <?php echo $suffix; ?></strong></h2>
                                <h3 class="fw-lighter mt-0"><?php echo $transformedRank; ?>, <?php echo $department; ?>, <?php echo $college_abbreviation; ?></h3>
                                <p class="fw-lighter fs-sm mt-2">[Dr.] [Name] is an [Rank] and currently the [chairperson] in the [Department]. [She] publishes research about lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum quam lorem, sed scelerisque massa venenatis id. Nulla congue elementum augue, quis gravida massa fermentum quis.</p>
                                <h3 class="fw-bold mt-4">Specialization</h3>
                                <?php
                                $specializations_array = explode("; ", $specialization);
                                echo '<div class="row">';
                                foreach ($specializations_array as $spec) {
                                    echo '<div class="col col-md-5 mt-2 mb-2">';
                                    echo '<div class="profile-container rounded border">';
                                    echo '<p class="fw-lighter fs-sm py-2 mx-0 px-0 text-center">' . $spec . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                echo '</div>';
                                ?>
                            </div>
                        </div>
                        <div class="container bg-white rounded shadow mt-5 border">
                            <div class="container">
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mt-3 me-3">Education</h3>
                                    <div class="flex-grow-1 d-flex justify-content-end">
                                    <i class="fa fa-caret-down" style="font-size:36px"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mt-3 me-3">Research Interest</h3>
                                    <div class="flex-grow-1 d-flex justify-content-end">
                                    <i class="fa fa-caret-down" style="font-size:36px"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mt-3 me-3">Publications</h3>
                                    <div class="flex-grow-1 d-flex justify-content-end">
                                    <i class="fa fa-caret-down" style="font-size:36px"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mt-3 me-3">Affiliations</h3>
                                    <div class="flex-grow-1 d-flex justify-content-end">
                                    <i class="fa fa-caret-down" style="font-size:36px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>