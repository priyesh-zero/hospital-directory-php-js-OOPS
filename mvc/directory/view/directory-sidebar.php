<aside class="side-block">
    <input id="r1" type="radio" name="group1" value="1" class="side-block__radio side-block__radio--filters"
     checked>
    <label for="r1" class="side-block__label">Filtres</label>

    <input id="r2" type="radio" name="group1" value="2" class="side-block__radio side-block__radio--favourite">
    <label for="r2" class="side-block__label">Favoris <span class="side-block__favoris">(8)</span></label>

    <div class="side-block__content">
        <div class="filters">
            <form action="#">
                <fieldset class="search">
                    <svg class="search__search-svg" width="20" height="21">
                        <use xlink:href="#logo-search"></use>
                    </svg>
                    <input class="search__search" type="search" placeholder="Enter your request">

                    <svg class="search__loader" width="38" height="38" viewBox="0 0 38 38"
                     xmlns="http://www.w3.org/2000/svg" stroke="#bcbccb">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(1 1)" stroke-width="2">
                                <circle stroke-opacity=".5" cx="18" cy="18" r="18" />
                                <path d="M36 18c0-9.94-8.06-18-18-18">
                                    <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                     to="360 18 18" dur="1s" repeatCount="indefinite" />
                                </path>
                            </g>
                        </g>
                    </svg>
                </fieldset>

                <fieldset class="checkbox">
                    <legend class="legend">afficher</legend>
                    <ul class="checkbox__list">
                        <li>
                            <input type="checkbox" id="patients" class="checkbox__checkbox"
                             checked>
                            <label for="patients" class="checkbox__label">Patients
                                <svg width="11" height="9">
                                    <use xlink:href="#logo-tick"></use>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="pharmacies" class="checkbox__checkbox">
                            <label for="pharmacies" class="checkbox__label">Hospitals
                                <svg width="11" height="9">
                                    <use xlink:href="#logo-tick"></use>
                                </svg>
                            </label>
                        </li>

                    </ul>



                </fieldset>

            </form>
        </div>

        <div class="favourite">
            <div class="favourite__block">
                <h3 class="legend">Patients <span class="favourite__patients-number">(4)</span></h3>

                <ul class="favourite__list">
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/man-1.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">M. Agathe</h4>
                            <a href="tel:+41-21-978-24-24" class="person__contact">+41 21 978 24
                                24</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/man-2.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">M. Brut</h4>
                            <a href="mailto:brutmichel76@gmail.com" class="person__contact">brutmichel76@gmail.com</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/woman-1.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">J. François</h4>
                            <a href="tel:+41-01-357-21-35" class="person__contact">+41 01 357 21
                                35</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo photo--empty photo--female">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">L. Fugencio</h4>
                            <a href="#" class="person__contact">Pas de coordonnées</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="favourite__block">
                <h3 class="legend">hopitaux - cliniques <span class="favourite__clinic-number">(4)</span></h3>

                <ul class="favourite__list">
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/company-1.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">HFR Fribourg</h4>
                            <a href="tel:+41-26-306-00-00" class="person__contact">+41 26 306 00
                                00</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/company-2.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">HUG Genève</h4>
                            <a href="tel:+41-22-372-33-11" class="person__contact">+41 22 372 33
                                11</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/company-3.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">HU Zurich</h4>
                            <a href="tel:+41-44-255-11-11" class="person__contact">+41 44 255 11
                                11</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                    <li class="person">
                        <div class="photo" style="background-image: url(./img/company-4.png);">&nbsp;</div>
                        <div class="person__text-wrap">
                            <h4 class="person__name">Hôpital du Valais</h4>
                            <a href="#" class="person__contact">Pas de coordonnées</a>
                        </div>
                        <ul class="person__list">
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Voir</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Appeler</a></li>
                            <li><a href="#">Envoyer</a></li>
                            <li><a href="#">Retirer favoris</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
