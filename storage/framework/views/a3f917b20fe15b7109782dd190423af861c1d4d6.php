<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/main.css"> 
  </head>
  <body>
    <div class="XL-a-clients">
      <div class="div">
        <div class="top-navigation">
              <img class="more" src="img/More.png" />
              <div class="logo">
                <img class="img" src="img/Logo.png" />
                <p class="SOCIALGAINES"><span class="text-wrapper">SOCIAL</span> <span class="span">GAINES</span></p>
              </div>
              <div class="controlls">
                <img class="img-2" src="img/search-2.png" />
                <img class="img-2" src="img/help_circle_outline.png" />
                <img class="img-2" src="img/notification_outline.png" />
                <div class="avatar-profile"></div>
              </div>
              <div class="tab-system">
                <div class="tab">
                  <div class="content">
                    <div class="label"><div class="tab-2">Clients</div></div>
                    <img class="icon-chevron-down" src="img/chevron_down.png" />
                  </div>
                </div>
                <div class="content-wrapper">
                  <div class="content">
                    <div class="label"><div class="tab-3">Work</div></div>
                    <img class="icon-chevron-down" src="img/chevron_down.png" />
                  </div>
                </div>
                <div class="content-wrapper">
                  <div class="content">
                    <div class="label"><div class="tab-3">Contributors</div></div>
                    <img class="icon-chevron-down" src="img/chevron_down.png" />
                  </div>
                </div>
                <div class="content-wrapper">
                  <div class="content">
                    <div class="label"><div class="tab-3">Resources</div></div>
                    <img class="icon-chevron-down" src="img/chevron_down.png" />
                  </div>
                </div>
                <div class="content-wrapper">
                  <div class="content">
                    <div class="label"><div class="tab-3">Contracts</div></div>
                    <img class="icon-chevron-down" src="img/chevron_down.png" />
                  </div>
                </div>
        </div>

      </div>
        <div class="main">
                    <!-- title starts-->
                    <div class="title">
                      <div class="text-wrapper-2"><h2>Clients</h2></div>
                      <button class="btn btn-primary">
                        Add new
                        <img class="img-2" src="img/coolicon.png" />
                      </button>
                    <!-- title ends -->
                    </div>
                    <!-- content wrapper start -->
                    <div class="tab-system-2">
                          <div class="tab">
                            <div class="content">
                              <div class="label"><div class="tab-2">All</div></div>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="label"><div class="tab-3">In progress</div></div>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="label"><div class="tab-3">Proposal</div></div>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="label"><div class="tab-3">Contract</div></div>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="label"><div class="tab-3">Completed</div></div>
                            </div>
                          </div>
                    </div>
                    <!-- content wrapper ends -->
                
                    <img class="controlls-2" src="img/controlls.png" />
                    <!-- table starts -->
                    <div class="table">
                              <!-- table header starts here -->
                              <div class="top">
                                  <div class="sort"><div class="checkbox"></div></div>
                                  <div class="sort-2">
                                    <div class="sort-3">Name</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>

                                  <div class="sort-4">
                                    <div class="sort-3">Status</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>

                                  <div class="sort-4">
                                    <div class="sort-3">Created</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>

                                  <div class="sort-4">
                                    <div class="sort-3">Tasks</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>

                                  <div class="sort-4">
                                    <div class="sort-3">Contributors</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>

                                  <div class="sort-4">
                                    <div class="sort-3">Budget ($)</div>
                                    <img class="img-3" src="img/Vector.png" />
                                  </div>
                                  <div class="sort-5"></div>
                              </div> 
                              <!-- table header ends here -->
                              <!-- table row starts here -->
                              <div class="table-row-client">
                              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="table-cell"><div class="checkbox"></div></div>

                                    <div class="table-cell-default">
                                      <div class="avatar-logo"><img class="img-4" src="img/image.png" /></div>
                                    </div>

                                    <div class="table-cell-2"><div class="value"><?php echo e($client->Name); ?></div></div>

                                    <div class="table-cell-3">
                                      <div class="tag">
                                        <div class="div-wrapper"><div class="label-3"><?php echo e($client->Status); ?></div></div>
                                      </div>
                                    </div>
                        
                                    <div class="table-cell-4"><div class="value-2"><?php echo e($client->Created); ?></div></div>

                                    <div class="table-cell-4"><div class="value-2"><?php echo e($client->Tasks); ?></div></div>

                                    <div class="table-cell-4"><div class="value-2"><?php echo e($client->Contributers); ?></div></div>

                                    <div class="table-cell-4"><div class="value-2"><?php echo e($client->Budget); ?></div></div>

                                    <div class="icon-chevron-right-wrapper"><img class="img-2" src="img/chevron_right.png" /></div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                              <!-- table row ends here -->
                    </div>
                    <!-- table ends -->
                    
    </div>
  </body>
</html>
<?php /**PATH C:\Users\kavin\Documents\project1\clients\client\resources\views//clientpopulated.blade.php ENDPATH**/ ?>