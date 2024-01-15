<footer class="footer">
<style>
     .social-links i{
			background: goldenrod;
			border-radius: 50%;
			padding:5px;
		}
		.footer-meta{
			background-color:#23393d !important;
		}
</style>

    @if(!isset($hide_widgets) || $hide_widgets == false )
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    @if( app('BaseCms')->dynamicSidebar('rentit-footer-sidebar'))
                        @dynamic_sidebar('rentit-footer-sidebar')
                    @endif


                </div>
            </div>
        </div>
    @endif

    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-12" style ="display:flex; justify-content:space-between">
                <div class="copyright ">
                       <span>Copyright © 2023 - Aspiration Marketers</span>
                    </div>
                    <div class="social-links">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</footer>
