
<footer>

    <div class="container">
    
        <div class="row">
        
            <div class="col-lg-4">
            <p><a href="#">Felhasználói feltételek</a> | <a href="#">Adatvédelem</a> | <a href="#">Impresszum</a></p>
            <p>© Copyright 2018 - {{ date('Y') }}. Avrasys Kft. Minden jog fenntartva.</p>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('public/assets/frontend/images/footer_logo.png') }}" alt="Avrasys - Olcsó webáruház készítés" class="img-fluid" lazy="loading">
            </div>
            <div class="col-lg-4">
            <p class="footer-right"><a href="{{ route('post.index') }}">Blog</a> | <a href="#">Szolgáltatások</a> | <a href="#">Kapcsolat</a> | <a href="{{ route('register') }}">Regisztráció</a></p>
            <p class="footer-right"><strong>Kövess minket:</strong> <span><a href="https://www.facebook.com/AvrasysHu-2344187535865304" target="_blank">Facebook</a></span> | <span><a href="https://twitter.com/AvrasysH" target="_blank">Twitter</a></span> | <span><a href="https://www.youtube.com/channel/UCPrLJbVHf9KcgKEIpMyvA6A/" target="_blank">YouTube</a></span></p>
            </div>
        
        </div>
    
    </div>

</footer>


<!-- Scripts -->
<script src="{{ asset('public/assets/frontend/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
@stack('js')
</body>
</html>