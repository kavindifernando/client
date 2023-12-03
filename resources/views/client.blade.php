<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/mainv1.css">
  </head>
  <body>
    <div class="XL-a-clients">
      <div class="div">
            <!-- header start here -->
            <div class="onboarding">
                <div class="value">
                  <div class="avatar-logo"><img class="icon-shopify" src="img/Avatar-Logo.png" /></div>
                  <div class="text-wrapper">Client onboarding</div>
                </div>
                <div class="step-system">
                      <div class="step">
                        <div class="div-wrapper"><div class="text-wrapper-2">1</div></div>
                        <div class="text-wrapper-3">Send proposal</div>
                      </div>
                      <img class="icon-short-right" src="img/short_right.png" />
                      <div class="step">
                        <div class="div-wrapper-2"><div class="text-wrapper-2">2</div></div>
                        <div class="label-here">Sign documents</div>
                      </div>
                      <img class="icon-short-right" src="img/short_right.png" />
                      <div class="step">
                        <div class="div-wrapper-2"><div class="text-wrapper-2">3</div></div>
                        <div class="label-here">Start project</div>
                      </div>
                </div>
                <button  type="button" class="btn btn-primary">
                    <div class="label"><div class="label-2">Next</div></div>
                </button>
            </div>
            <!-- header ends here -->
            <!-- notification starts here -->
            <div class="notification">
            <img class="icon-error" src="img/error.png" />
            <p  class="text-danger" >We will send an email notification to your client to join your network.</p>
            </div>
            <!-- notification ends here -->

            <!-- form section starts here -->
            <div class="overlap-group">
                          <!-- background shapes -->
                          <img class="shape" src="img/shape.png" /> 
                          <img class="img" src="img/shape.png" />
                          <!-- main section start -->
                          <div class="main">
                              <div class="text-wrapper-4">Send proposal</div>
                              <div class="divider"></div>
                                <!-- 2nd main section start -->
                                <div class="main-2">
                                  <!-- form start here -->
                                  <form method='post' action='/storeclient'>
                                  {{csrf_field()}}
                                        <div class="logo">
                                            <div class="frame"><img class="icon-facebook" src="img/facebook.png" /></div>
                                            <div class="text-wrapper-5">Replace</div>
                                            <div class="text-wrapper-5">Delete</div>
                                        </div>

                                        <div class="textfiled">
                                            <div class="text-wrapper-6"><label for="exampleFormControlInput1">Client Name</label></div>
                                            <input name="cname"  class="input">   
                                        </div>

                                        <div class="textfiled">
                                            <label class="text-wrapper-6" for="input-1">Client email address</label>
                                            <input  name="email" class="input">
                                        </div>

                                        <div class="divider"></div>

                                        <div class="storage">
                                              <div class="text-wrapper-6">Assign workspace</div>
                                              
                                              <div class="storage-card">
                                                    <div class="frame-2">
                                                      <img class="icon-drive" src="img/drive.png" />
                                                      <div class="google-drive">Workspace name</div>
                                                      <div class="b-link">
                                                          <div class="press-enter">Disconnect</div>
                                                          <img class="icon-short-right" src="img/short_right.png" />
                                                      </div>
                                                    </div>

                                                    <input name="work" class="text-wrapper-6" type="range" min="0" max="1000000000" >
                                              
                                                    <div class="frame-4">
                                                        <div class="text-wrapper-7">0 files</div>
                                                        <div class="text-wrapper-7">1GB / 1GB</div>
                                                    </div>
                                              </div>
                                        </div>


                                        <div class="textfiled-2">
                                                <div class="text-wrapper-6">Estimated budget</div>
                                                <input name="budget" class="input">    
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-default" >
                                                    <div class="label"><div class="text-wrapper-7">Back to list</div></div>
                                            </button>
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            
                                            <button  type="submit" type="button" class="btn btn-primary">
                                                    <!-- <div class="label"><div class="text-wrapper-7"> -->
                                                        Next step
                                                    <!-- </div></div> -->
                                            </button>
                                        </div>
                                  </form>
                                  <!-- form ends here -->
                                </div>
                                <!-- 2nd main section ends -->
                          </div>
                          <!-- main section ends here -->
              </div>
              <!-- form section ends here -->
        </div>
      </div>        
    </div>
  </body>
</html>
