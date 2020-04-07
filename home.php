   <?php 

      include 'include/top-header.php';
      include 'include/topbar.php';
      include 'include/sidebar.php';

    ?>

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <!--card stats start-->
<div id="card-stats">
   <div class="row">
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
            <div class="padding-4">
               <div class="col s7 m7">
                  <i class="material-icons background-round mt-5">add_shopping_cart</i>
                  <p>Orders</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text">690</h5>
                  <p class="no-margin">New</p>
                  <p>6,00,00</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
            <div class="padding-4">
               <div class="col s7 m7">
                  <i class="material-icons background-round mt-5">perm_identity</i>
                  <p>Clients</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text">1885</h5>
                  <p class="no-margin">New</p>
                  <p>1,12,900</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="col s7 m7">
                  <i class="material-icons background-round mt-5">timeline</i>
                  <p>Sales</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text">80%</h5>
                  <p class="no-margin">Growth</p>
                  <p>3,42,230</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="col s7 m7">
                  <i class="material-icons background-round mt-5">attach_money</i>
                  <p>Profit</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text">$890</h5>
                  <p class="no-margin">Today</p>
                  <p>$25,000</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--card stats end-->
<!--yearly & weekly revenue chart start-->

<div id="daily-data-chart">
   <div class="row">
      <div class="col s12 m4 l4">
         <div class="card pt-0 pb-0 animate fadeLeft">
            <div class="padding-2 ml-2">
               <span class="new badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">+ 42.6%</span>
               <p class="mt-2 mb-0">Members online</p>
               <p class="no-margin grey-text lighten-3">360 avg</p>
               <h5>3,450</h5>
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-one" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4 l4 animate fadeUp">
         <div class="card pt-0 pb-0">
            <div class="padding-2 ml-2">
               <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+ 12%</span>
               <p class="mt-2 mb-0">Current server load</p>
               <p class="no-margin grey-text lighten-3">23.1% avg</p>
               <h5>+2500</h5>
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-two" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4 l4">
         <div class="card pt-0 pb-0 animate fadeRight">
            <div class="padding-2 ml-2">
               <span class="new badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ $900</span>
               <p class="mt-2 mb-0">Today's revenue</p>
               <p class="no-margin grey-text lighten-3">$40,512 avg</p>
               <h5>$ 22,300</h5>
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-three" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Member online, Currunt Server load & Today's Revenue Chart start -->

   <!-- ecommerce offers start-->
   <div id="ecommerce-offer">
      <div class="row">
         <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
               <div class="card-content center">
                  <img src="../../../app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5"
                     alt="" class="responsive-img" />
                  <h5 class="white-text lighten-4">50% Off</h5>
                  <p class="white-text lighten-4">On apple watch</p>
               </div>
            </div>
         </div>
         <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
               <div class="card-content center">
                  <img src="../../../app-assets/images/icon/printer.png" class="width-40 border-round z-depth-5" alt=""
                     class="responsive-img" />
                  <h5 class="white-text lighten-4">20% Off</h5>
                  <p class="white-text lighten-4">On Canon Printer</p>
               </div>
            </div>
         </div>
         <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
               <div class="card-content center">
                  <img src="../../../app-assets/images/icon/laptop.png" class="width-40 border-round z-depth-5" alt=""
                     class="responsive-img" />
                  <h5 class="white-text lighten-4">40% Off</h5>
                  <p class="white-text lighten-4">On apple macbook</p>
               </div>
            </div>
         </div>
         <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
               <div class="card-content center">
                  <img src="../../../app-assets/images/icon/bowling.png" class="width-40 border-round z-depth-5" alt=""
                     class="responsive-img" />
                  <h5 class="white-text lighten-4">60% Off</h5>
                  <p class="white-text lighten-4">On any game</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ecommerce offers end-->
   <!-- //////////////////////////////////////////////////////////////////////////// -->
</div>
<!--end container--><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
   <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
      <div class="row">
         <div class="slide-out-right-title">
            <div class="col s12 border-bottom-1 pb-0 pt-1">
               <div class="row">
                  <div class="col s2 pr-0 center">
                     <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                  </div>
                  <div class="col s10 pl-0">
                     <ul class="tabs">
                        <li class="tab col s4 p-0">
                           <a href="#messages" class="active">
                              <span>Messages</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#settings">
                              <span>Settings</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#activity">
                              <span>Activity</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>


         <div class="slide-out-right-body">
            <div id="messages" class="col s12">
               <div class="collection border-none">
                  <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                  <ul class="collection p-0">
                     


                  </ul>
               </div>
            </div>


            <div id="settings" class="col s12">
               <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
               <ul class="collection border-none">
                  

               </ul>
            </div>


            <div id="activity" class="col s12">
               <div class="activity">
                  <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                  <ul class="collection with-header">
                     
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Slide Out Chat -->
</aside>
<!-- END RIGHT SIDEBAR NAV -->

<?php include 'include/customizer.php'; ?>

          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
<?php 
   include 'include/footer.php';
    ?>