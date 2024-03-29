</div>
<!-- End Container -->
<!-- Begin Page Footer-->
<footer class="main-footer">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
            <p class="text-gradient-02">Design By Saerox</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="documentation.html">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="changelog.html">Changelog</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- End Page Footer -->
<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
<!-- Offcanvas Sidebar -->
<div class="off-sidebar from-right">
    <div class="off-sidebar-container">
        <header class="off-sidebar-header">
            <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
            </ul>
            <a href="#off-canvas" class="off-sidebar-close"></a>
        </header>
        <div class="off-sidebar-content offcanvas-scroll auto-scroll">
            <div class="tab-content">
                <!-- Begin Messenger -->
                <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                    <!-- Begin Chat Message -->
                    <span class="date">Today</span>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?= base_url()?>assets/img/avatar/avatar-02.jpg" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    <span class="mb-2">Brandon wrote</span>
                                    Hi David, what's up?
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    Hi Brandon, fine and you?
                                </p>
                                <p>
                                    I'm working on the next update of Elisyam
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?= base_url()?>assets/img/avatar/avatar-02.jpg" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    <span class="mb-2">Brandon wrote</span>
                                    I can't wait to see
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    I'm almost done
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <span class="date">Yesterday</span>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?= base_url()?>assets/img/avatar/avatar-05.jpg" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    I updated the server tonight
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    Didn't you have any problems?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?= base_url()?>assets/img/avatar/avatar-05.jpg" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    No!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    Great!
                                </p>
                                <p>
                                    See you later!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Chat Message -->
                    <!-- Begin Message Form -->
                    <div class="enter-message">
                        <div class="enter-message-form">
                            <input type="text" placeholder="Enter your message..."/>
                        </div>
                        <div class="enter-message-button">
                            <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                        </div>
                    </div>
                    <!-- End Message Form -->
                </div>
                <!-- End Messenger -->
                <!-- Begin Today -->
                <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                    <!-- Begin Today Stats -->
                    <div class="sidebar-heading pt-0">Today</div>
                    <div class="today-stats mt-3 mb-3">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="la la-users"></i>
                                <div class="counter">264</div>
                                <div class="heading">Clients</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-cart-arrow-down"></i>
                                <div class="counter">360</div>
                                <div class="heading">Sales</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-money"></i>
                                <div class="counter">$ 4,565</div>
                                <div class="heading">Earnings</div>
                            </div>
                        </div>
                    </div>
                    <!-- End Today Stats -->
                    <!-- Begin Friends -->
                    <div class="sidebar-heading">Friends</div>
                    <div class="quick-friends mt-3 mb-3">
                        <ul class="list-group w-100">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?= base_url()?>assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Brandon Smith</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?= base_url()?>assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Louis Henry</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?= base_url()?>assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Nathan Hunter</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?= base_url()?>assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Megan Duncan</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?= base_url()?>assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Beverly Oliver</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Friends -->
                    <!-- Begin Settings -->
                    <div class="sidebar-heading">Settings</div>
                    <div class="quick-settings mt-3 mb-3">
                        <ul class="list-group w-100">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Notifications Email</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox" checked>
                                            <span>
                                                                    <span></span>
                                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Notifications Sound</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox">
                                            <span>
                                                                    <span></span>
                                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Chat Message Sound</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox" checked>
                                            <span>
                                                                    <span></span>
                                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Settings -->
                </div>
                <!-- End Today -->
            </div>
        </div>
        <!-- End Offcanvas Container -->
    </div>
    <!-- End Offsidebar Container -->
</div>
<!-- End Offcanvas Sidebar -->
</div>
<!-- End Content -->
</div>
<!-- End Page Content -->
</div>
<!-- Begin Success Modal -->
<div id="delay-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="sa-icon sa-success animate" style="display: block;">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
                <div class="section-title mt-5 mb-5">
                    <h2 class="text-dark">Meeting successfully created</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Success Modal -->
<!-- Begin Modal -->
<div id="modal-view-event" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title event-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left align-self-center mr-3">
                        <div class="event-icon"></div>
                    </div>
                    <div class="media-body align-self-center mt-3 mb-3">
                        <div class="event-body"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- Begin Vendor Js -->

<script src="<?= base_url()?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?= base_url()?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/jszip.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets/vendors/js/datatables/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/app/app.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/chart/chart.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/progress/circle-progress.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/calendar/moment.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/calendar/fullcalendar.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/app/app.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?= base_url()?>assets/js/components/validation/validation.min.js"></script>
<script src="<?= base_url()?>assets/js/components/tables/tables.js"></script>
<script src="<?= base_url()?>assets/js/dashboard/db-default.js"></script>
<script src ="<?= base_url()?>assets/js/app.js"></script>
<script src="<?= base_url()?>assets/vendors/js/noty/noty.min.js"></script>
<script src="<?= base_url()?>assets/js/components/notifications/notifications.min.js"></script>
<!-- End Page Snippets -->
</body>
</html>