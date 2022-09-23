<footer>
    <div class="bg-secondary mb-5">
        <div class="row  ">
            <div class="col-md-3 bg-danger">
                <div class="card bg-secondary mt-2 ms-2 mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Association Kongodania</h5>
                        <ul>
                            <li><a href="{{ route('parraines') }} ">Parainner un enfant</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('mentions-legales') }}">Mentions Légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 bg-success">
                <address class="card bg-secondary mt-2 px-3 pt-3">
                    <h5 class="card-title">Contact</h5>
                    <p class-text>
                        AHBLYON <br>
                        9 rue Du Chemin <br>
                        69 000 Lyon <br>
                        asbh@sfr.fr <br>
                        tél:123456789 <br>
                    </p>
                </address>
            </div>
            <div class="col-md-3 bg-danger">
                <div class="card bg-secondary mt-2 px-2 mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Newletter</h5>
                        <label>E-mail</label>
                        <input type="text" size="10"><br>
                        <input type="checkbox"> En souscrivant à la newlettter; j'accepte les Mentions Légales de
                        l'Association Kongodania
                    </div>
                </div>
            </div>
            <div class="col-md-3 bg-success">
                <div class="card bg-secondary mt-2 mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Réseaux sociaux</h5>
                        <span><a href="#">Facebook</a></span><br>
                        <span><a href="#">Twitter</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
