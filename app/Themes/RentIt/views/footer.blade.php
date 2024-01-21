<footer class="footer">
<style>
    .social-links{
        display:flex;
        justify-content:end;
        align-items:center;
    }
    .social-links i{
    color:goldenrod;
        margin-right:16px;

    }
    .social-links :nth-child(1){
        padding:5px 7px;
    }
    .footer-meta{
        background-color:#23393d !important;
    }
    .footer-meta .copyright{
        flex:1;
        text-align:left;
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
                    <a href="https://www.facebook.com/profile.php?id=100071530377082&mibextid=LQQJ4d" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com/goldenlease.ae?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/message/EED5R6GPKGDII1" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</footer>
