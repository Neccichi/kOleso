@php
    $jsonFilePath = public_path('src' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'cars.json');
    $carsJson = file_get_contents($jsonFilePath);
    $carsArray = json_decode($carsJson);
@endphp

<x-base>
    <header class="header block d-flex flex-row justify-content-between align-items-center">
        <div class="header__left d-flex flex-row align-items-center" >
            <a href="/" class="header__logo">
                <img src="{{ asset('src/img/icons/logo.png')}}" alt="Logo" class="header__logo__img">
            </a>

            <input
                type="text"
                placeholder="Пошук"
                class="header__search"
            >
        </div>

        <div class="header__right d-flex flex-row align-items-center">
            <nav class="header__nav d-flex flex-row">
                <a href="#catalog" class="header__nav__item">
                    Каталог
                </a>

                <a href="#about" class="header__nav__item">
                    Про нас
                </a>

                <a href="/register" class="header__nav__item">
                    Реєстрація
                </a>
            </nav>

            <button class="header__btn button">
                Вхід в кабінет
            </button>
        </div>
    </header>

    <section class="top block position-relative">
        <h1 class="top__header">
            Досить мріяти про авто!
        </h1>

        <p class="top__desc">
            У КОЛЕСО для тебе завжди є <br> пропозиція
        </p>

        <div class="top__btns d-flex flex-row align-items-center">
            <a href="https://www.apple.com/app-store/" target="_blank" class="top__btns__link">
                <img src="{{ asset('src/img/icons/app-store.png')}}" alt="Завантажити з App Store" class="top__btns__link__img">
            </a>

            <a href="https://play.google.com/store/games?hl=uk&gl=US&pli=1" target="_blank" class="top__btns__link">
                <img src="{{ asset('src/img/icons/google-play.png')}}" alt="Завантажити з Google Play" class="top__btns__link__img">
            </a>
        </div>

        <img
            src="{{ asset('src/img/photo/car.png')}}"
            alt="Car"
            class="top__car position-absolute"
        >
    </section>

    <section class="filter block d-flex flex-column justify-content-center align-items-center">
        <img
            src="{{ asset('src/img/photo/brands.png')}}"
            alt="Car brands"
            class="filter__img"
        >

        <form class="filter__block d-flex flex-row justify-content-between">
            <div class="filter__block__left d-flex flex-column">
                <div class="filter__block__item">
                    <label for="Price">
                        Ціна:
                    </label>

                    <div id="Price" class="filter__block__item__price d-flex flex-row">
                        <input type="text" placeholder="Від">
                        <input type="text" placeholder="До">
                    </div>
                </div>

                <div class="filter__block__item">
                    <label for="Mileage">
                        Пробіг:
                    </label>

                    <input id="Mileage" type="text" placeholder="До">
                </div>

                <div class="filter__block__item">
                    <label for="Region">
                        Регіон:
                    </label>

                    <select id="Region">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати область</option>
                        <option value="Вінницька">Вінницька</option>
                        <option value="Волинська">Волинська</option>
                        <option value="Дніпропетровська">Дніпропетровська</option>
                        <option value="Донецька">Донецька</option>
                        <option value="Житомирська">Житомирська</option>
                        <option value="Закарпатська">Закарпатська</option>
                        <option value="Запорізька">Запорізька</option>
                        <option value="Івано-Франківська">Івано-Франківська</option>
                        <option value="Київська">Київська</option>
                        <option value="Київ">Київ</option>
                        <option value="Кіровоградська">Кіровоградська</option>
                        <option value="Луганська">Луганська</option>
                        <option value="Львівська">Львівська</option>
                        <option value="Миколаївська">Миколаївська</option>
                        <option value="Одеська">Одеська</option>
                        <option value="Полтавська">Полтавська</option>
                        <option value="Рівненська">Рівненська</option>
                        <option value="Сумська">Сумська</option>
                        <option value="Тернопільська">Тернопільська</option>
                        <option value="Харківська">Харківська</option>
                        <option value="Херсонська">Херсонська</option>
                        <option value="Хмельницька">Хмельницька</option>
                        <option value="Черкаська">Черкаська</option>
                        <option value="Чернівецька">Чернівецька</option>
                        <option value="Чернігівська">Чернігівська</option>
                    </select>
                </div>

                <div class="filter__block__item">
                    <label for="Engine-Size">
                        Об'єм двигуна:
                    </label>

                    <input id="Engine-Size" type="text" placeholder="До">
                </div>

                <div class="filter__block__item">
                    <label for="Brand">
                        Марка:
                    </label>

                    <select id="Brand">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати марку</option>
                        <option value="Acura">Acura</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Alpine">Alpine</option>
                        <option value="Apollo">Apollo</option>
                        <option value="Apple">Apple</option>
                        <option value="Aston Martin">Aston Martin</option>
                        <option value="Audi">Audi</option>
                        <option value="Automobili Pininfaring">Automobili Pininfaring</option>
                        <option value="Bentley">Bentley</option>
                        <option value="BMW">BMW</option>
                        <option value="Bollinger">Bollinger</option>
                        <option value="Bosch">Bosch</option>
                        <option value="Brilliance">Brilliance</option>
                        <option value="Bugatti">Bugatti</option>
                        <option value="Buick">Buick</option>
                        <option value="BYD">BYD</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chana">Chana</option>
                        <option value="Changan">Changan</option>
                        <option value="Chery">Chery</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Citroen">Citroen</option>
                        <option value="Continental">Continental</option>
                        <option value="CUPRA">CUPRA</option>
                        <option value="Dacia">Dacia</option>
                        <option value="Daewoo">Daewoo</option>
                        <option value="Daihatsu">Daihatsu</option>
                        <option value="Datsun">Datsun</option>
                        <option value="Delfast">Delfast</option>
                        <option value="Detroit Electric">Detroit Electric</option>
                        <option value="Dodge">Dodge</option>
                        <option value="DS Automobiles">DS Automobiles</option>
                        <option value="FAW">FAW</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Fisker">Fisker</option>
                        <option value="Ford">Ford</option>
                        <option value="Foxtron">Foxtron</option>
                        <option value="Geely">Geely</option>
                        <option value="Genesis">Genesis</option>
                        <option value="GMC">GMC</option>
                        <option value="Great Wall">Great Wall</option>
                        <option value="Haval">Haval</option>
                        <option value="Honda">Honda</option>
                        <option value="Hummer">Hummer</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Ineos">Ineos</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Iran Khodro">Iran Khodro</option>
                        <option value="Iveco">Iveco</option>
                        <option value="JAC">JAC</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Jeep">Jeep</option>
                        <option value="JETOUR">JETOUR</option>
                        <option value="KIA">KIA</option>
                        <option value="Koenigsegg">Koenigsegg</option>
                        <option value="Lada">Lada</option>
                        <option value="Lamborghini">Lamborghini</option>
                        <option value="Lancia">Lancia</option>
                        <option value="Land Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lifan">Lifan</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="Lordstown">Lordstown</option>
                        <option value="Lotus">Lotus</option>
                        <option value="Lusid">Lusid</option>
                        <option value="LvChi">LvChi</option>
                        <option value="Lynk&Co">Lynk&Co</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Maybach">Maybach</option>
                        <option value="Mazda">Mazda</option>
                        <option value="MCLaren">MCLaren</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="MG">MG</option>
                        <option value="MINI">MINI</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nikola">Nikola</option>
                        <option value="NIO">NIO</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Opel">Opel</option>
                        <option value="Pagani">Pagani</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Polestar">Polestar</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Qoros">Qoros</option>
                        <option value="Range Rover">Range Rover</option>
                        <option value="Ravon">Ravon</option>
                        <option value="Renault">Renault</option>
                        <option value="Rimac">Rimac</option>
                        <option value="Rivian">Rivian</option>
                        <option value="Rolls-Royce">Rolls-Royce</option>
                        <option value="Saab">Saab</option>
                        <option value="Saipa">Saipa</option>
                        <option value="SEAT">SEAT</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Smart">Smart</option>
                        <option value="SsangYong">SsangYong</option>
                        <option value="SSC North America">SSC North America</option>
                        <option value="Stellantis">Stellantis</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Tata">Tata</option>
                        <option value="Tesla">Tesla</option>
                        <option value="TOGG">TOGG</option>
                        <option value="Torsus">Torsus</option>
                        <option value="Toyota">Toyota</option>
                        <option value="VinFast">VinFast</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                        <option value="WOG">WOG</option>
                        <option value="Xpeng">Xpeng</option>
                        <option value="Yamaha">Yamaha</option>
                        <option value="Zotye">Zotye</option>
                        <option value="ЗАЗ">ЗАЗ</option>
                        <option value="КрАЗ">КрАЗ</option>
                        <option value="ЛуАЗ">ЛуАЗ</option>
                    </select>
                </div>
            </div>

            <div class="filter__block__right d-flex flex-column">
                <div class="filter__block__item">
                    <label for="Engine-Type">
                        Тип двигуна:
                    </label>

                    <select id="Engine-Type">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати</option>
                        <option value="Gasoline">Бензин</option>
                        <option value="Diesel">Дизель</option>
                        <option value="Gas">Газ</option>
                        <option value="Gas-Gasoline">Газ-Бензин</option>
                        <option value="Hybrid">Гібрид</option>
                        <option value="Electric">Електро</option>
                    </select>
                </div>

                <div class="filter__block__item">
                    <label for="Color">
                        Колір:
                    </label>

                    <select id="Color">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати колір</option>
                        <option value="White">Білий</option>
                        <option value="Black">Чорний</option>
                        <option value="Grey">Сірий</option>
                        <option value="Silver">Сріблястий</option>
                        <option value="Blue">Синій</option>
                        <option value="Red">Червоний</option>
                        <option value="Brown">Коричневий</option>
                        <option value="Beige">Бежевий</option>
                        <option value="Yellow">Жовтий</option>
                        <option value="Green">Зелений</option>
                    </select>
                </div>

                <div class="filter__block__item">
                    <label for="Year">
                        Рік випуску:
                    </label>

                    <select id="Year">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати рік</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>

                <div class="filter__block__item">
                    <label for="Car-Type">
                        Тип авто:
                    </label>

                    <select id="Car-Type">
                        <option value="def" selected hidden class="filter__block__item__default">Обрати тип</option>
                        <option value="All">Всі автомобілі</option>
                        <option value="Passenger">Легкові</option>
                        <option value="Sport">Спортивні</option>
                        <option value="Crossovers">Кросовери</option>
                        <option value="Minibuses">Мікроавтобуси</option>
                        <option value="Motorcycles">Мотоцикли</option>
                    </select>
                </div>

                <button type="submit" class="filter__btn button">
                    Шукати
                </button>
            </div>
        </form>
    </section>

    <section id="catalog" class="catalog d-flex flex-column align-items-center">
        <div class="catalog__cards d-grid">
            @foreach($carsArray as $key => $car)
                <div class="catalog__card">
                    <h3 class="catalog__card__title">
                        {{ $car->title }}
                    </h3>

                    <p class="catalog__card__type">
                        {{ $car->type }}
                    </p>

                    <img
                        loading="lazy"
                        src="{{ $car->photo }}"
                        alt="{{ $car->slug }}"
                        class="catalog__card__img"
                    >

                    <div class="catalog__card__desc d-grid">
                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Пробіг:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->mileage }}
                            </p>
                        </div>

                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Локація:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->location }}
                            </p>
                        </div>

                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Об'єм двигуна:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->engineSize }}
                            </p>
                        </div>

                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Трансмісія:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->trasmission }}
                            </p>
                        </div>

                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Рік:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->year }}
                            </p>
                        </div>

                        <div class="catalog__card__desc__item">
                            <p class="catalog__card__desc__title">
                                Привід:
                            </p>

                            <p class="catalog__card__desc__data">
                                {{ $car->drive }}
                            </p>
                        </div>
                    </div>

                    <div class="catalog__card__bottom d-flex flex-row align-items-center justify-content-between">
                        <h3 class="catalog__card__bottom__price">
                            {{ $car->price }}$
                        </h3>

                        <a href="#{{ $car->slug }}" class="catalog__card__bottom__btn button">
                            Більше
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="catalog__btn button">
            Показати ще
        </button>
    </section>

    <section class="benefits d-flex flex-row align-items-center justify-content-between">
        <div class="benefits__left">
            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Кредит та Лізинг
                    </h3>

                    <p class="benefits__item__text__desc">
                        Різноманітні опції фінансування: кредит, лізинг, програми забезпечені заставою автомобіля, TRADE-IN.
                    </p>
                </div>
            </div>

            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Надійність
                    </h3>

                    <p class="benefits__item__text__desc">
                        Кожен клієнт отримує гарантовані дані про автентичний стан автомобіля.
                    </p>
                </div>
            </div>

            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Європейські Стандарти
                    </h3>

                    <p class="benefits__item__text__desc">
                        Придбання авто у режимі онлайн із забезпеченням якості на рівні європейських норм.
                    </p>
                </div>
            </div>
        </div>

        <div class="benefits__right">
            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Зручність Оплати
                    </h3>

                    <p class="benefits__item__text__desc">
                        Гнучкі методи оплати: готівкові та безготівкові розрахунки, з ПДВ та без ПДВ.
                    </p>
                </div>
            </div>

            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Вигода
                    </h3>

                    <p class="benefits__item__text__desc">
                        Економія часу та коштів при виборі автомобіля.
                    </p>
                </div>
            </div>

            <div class="benefits__item d-flex flex-row align-items-center">
                <img src="{{ asset('src/img/icons/benefits-arrow.svg')}}" alt="Arrow" class="benefits__item__img">

                <div class="benefits__item__text">
                    <h3 class="benefits__item__text__title">
                        Досвід
                    </h3>

                    <p class="benefits__item__text__desc">
                        Понад 20 років досвіду у сфері автобізнесу.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about position-relative">
        <h2 class="about__title">
            Всеукраїнська асоціація автобізнесменів
        </h2>

        <div class="about__top d-flex flex-row align-items-center justify-content-between">
            <p class="about__top__text">
                Метою нашої організації є забезпечення <span>порядку, законності та надійності</span> в сфері автомобільного бізнесу в Україні. Ми прагнемо захищати права та інтереси покупців і продавців, забезпечувати прозорість угод та підвищувати якість обслуговування клієнтів.<br><br>
                Наша діяльність спрямована на розвиток інфраструктури, необхідної для комфорту автомобілістів. Запрошуємо кожного долучитися до нашої асоціації та докласти зусиль для того, щоб автомобільний ринок України став справді європейським.
            </p>

            <img src="{{ asset('src/img/photo/organization-logo.png')}}" alt="Всеукраїнська асоціація автобізнесменів" class="about__top__img">
        </div>

        <div class="about__bottom d-flex flex-row align-items-center justify-content-between">
            <img src="{{ asset('src/img/photo/photo.jpg')}}" alt="Володимир Кузьменко" class="about__bottom__img">

            <p class="about__bottom__text">
                “Автобізнес становить основу економічного розвитку України, відіграючи ключову роль у сплаті податків та підтриманні внутрішнього виробництва. Незважаючи на історичні труднощі, які беруть початок у 90-х, сьогодення пропонує нам виклики, які ми в змозі подолати, працюючи разом. <br><br>
                Наша мета — очистити ринок від нечесних практик, забезпечити права  автомобілістів і встановити нові стандарти роботи на ринку, що гарантуватимуть прозорість і справедливість для кожного учасника."
            </p>
        </div>

        <img src="{{ asset('src/img/icons/sign.png')}}" alt="Володимир Кузьменко" class="about__sign position-absolute">
    </section>

    <section class="map">
        <h2 class="map__text">
            Наша адреса: м.Київ, проспект Степана Бандери, 13
        </h2>

        <a href="https://maps.app.goo.gl/SLoHo27hGnvE9aJ57" target="_blank">
            <img src="{{ asset('src/img/photo/map.jpg')}}" alt="м.Київ, проспект Степана Бандери, 13" class="map__img">
        </a>
    </section>

    <footer class="footer">
        <div class="footer__top d-flex flex-row justify-content-between">
            <div class="footer__top__item d-flex flex-column">
                <h3 class="footer__top__item__title">
                    Контакти:
                </h3>

                <a href="tel:+380501234545" class="footer__top__item__text">
                    +38 050 123 45 45
                </a>

                <a href="tel:+380661234545" class="footer__top__item__text">
                    +38 066 123 45 45
                </a>

                <a href="tel:+380731234545" class="footer__top__item__text">
                    +38 073 123 45 45
                </a>

                <a href="tel:+380931234545" class="footer__top__item__text">
                    +38 093 123 45 45
                </a>
            </div>

            <div class="footer__top__item footer__top__item--second d-flex flex-column">
                <a href="tel:+380961234545" class="footer__top__item__text">
                    +38 096 123 45 45
                </a>

                <a href="tel:+380971234545" class="footer__top__item__text">
                    +38 097 123 45 45
                </a>

                <a href="tel:+380981234545" class="footer__top__item__text">
                    +38 098 123 45 45
                </a>
            </div>

            <div class="footer__top__item d-flex flex-column">
                <h3 class="footer__top__item__title">
                    Пошта:
                </h3>

                <a href="mailto:koleso@i.ua" target="_blank" class="footer__top__item__text">
                    koleso@i.ua
                </a>
            </div>

            <div class="footer__top__item d-flex flex-column">
                <h3 class="footer__top__item__title">
                    Адреса:
                </h3>

                <a href="https://maps.app.goo.gl/SLoHo27hGnvE9aJ57" target="_blank" class="footer__top__item__text">
                    м.Київ, проспект Степана Бандери, 13
                </a>
            </div>

            <div class="footer__top__item footer__top__item--media d-flex flex-row align-items-center">
                <h3 class="footer__top__item__title footer__top__item--media__title">
                    Соціальні мережі:
                </h3>

                <div class="footer__top__item__images d-flex flex-row">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__top__item__img">
                        <img src="{{ asset('src/img/icons/facebook.png')}}" alt="Facebook">
                    </a>

                    <a href="hhttps://www.instagram.com/" target="_blank" class="footer__top__item__img">
                        <img src="{{ asset('src/img/icons/telegram.png')}}" alt="Telegram">
                    </a>
                </div>

            </div>
        </div>

        <p class="footer__bottom text-center">
            ©2023 KOLESO
        </p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showAllCardsBtn = document.querySelector('.catalog__btn');
            const allCards = document.querySelectorAll('.catalog__card');
            const cardsContainer = document.querySelector('.catalog__cards');

            function showAll(items, btn) {
                items.forEach((item) => {
                    item.style.display = 'block';
                });

                btn.style.display = 'none';
            }

            showAllCardsBtn.addEventListener('click', function() {
                showAll(allCards, showAllCardsBtn);
            });

            allCards.forEach((card, index) => {
                cardsContainer.appendChild(card);

                if (window.innerWidth >= 1205 && index >= 12) {
                    card.style.display = 'none';
                    showAllCardsBtn.style.display = 'block';
                }
            });
        })
    </script>
</x-base>
