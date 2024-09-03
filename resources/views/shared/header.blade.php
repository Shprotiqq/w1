<header>
    <div class="navigation__background">
        <nav class="navigation container">
            <div class="header_burger">
                <span></span>
            </div>
            <div class="navigation__menu">
                <ul class="navigation__list">
                    @foreach($menu as $menuItem)
                        <li class="navigation__item">
                            @if($menuItem->items->isNotEmpty())
                                <button class="button navigation__button sublist_button">
                            <span>
                                {{ $menuItem->title }}
                            </span>
                                    <span class="material-symbols-outlined"
                                          style="font-weight: 400; font-size: 15.09px; line-height: 34.82px; color: #353535; align-self: center">
                            keyboard_arrow_down
                            </span>
                                </button>
                                <ul class="navigation__sublist hidden">
                                    @foreach($menuItem->items as $menuChild)
                                        <li class="sublist__item">
                                            <a href="{{ $menuChild->link ?? $menuChild->scroll_to }}" class="sublist__link">{{ $menuChild->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <button class="button navigation__button">
                                    <a href="{{ $menuItem->link ?? $menuItem->scroll_to }}" class="navigation__link">
                                        {{ $menuItem->title }}
                                    </a>
                                </button>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="navigation__contacts">
                <div class="navigation__button">
                    <button class="button button_green button_call">
                        <img src="{{ asset('images/icons/phone_logo.svg') }}" alt="Изображение трубки телефона">
                        <span class="button_call__text">
                            Звонок
                        </span>
                    </button>
                </div>
                <div class="call_form">
                    <div class="call-form_area">
                        <div class="call_form-title">
                            Мы вам перезвоним
                        </div>
                        <form class="call_form-actions">
                            <input type="hidden" name="form_type" value="call">
                            <input type="tel" name="phone">
                            <button class="button button_green button_phone">
                                Заказать звонок
                            </button>
                        </form>

                        <div class="call_text">
                            Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает
                        </div>
                    </div>
                </div>
                <div class="navigation__number">
                    <a class="navigation__number" href="tel:{{ $settings['phone']->value }}">
                        <img class="number__pic" src="{{ asset('images/icons/phone_logo-black.svg') }}" alt="Изображение трубки телефона">
                        {{ $settings['phone']->value }}
                    </a>
                    <br>
                    <span class="number_hours">
                        {{ $settings['work_time']->value }}
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <div class="additional_buttons container">
        <div class="additional_buttons-left">
            <a class="company-logo_link" href="{{ route('home') }}">
                <div class="company-logo">
                    <img src="/storage/{{ $settings['logo']->image }}" alt="Логотип компании">
                    <span class="company_name">
                {{ $settings['site_name']->value }}
            </span>
                    <span class="company_additional">
                {!! $settings['logo_description']->value !!}
            </span>
                </div>
            </a>
            <div class="catalog_button">
                <button class="button button_green button_catalog">
                    <img src="{{ asset('images/icons/catalog.svg') }}" alt="Каталог">
                    <span>
                    Каталог
                </span>
                </button>
            </div>
        </div>
        <div class="catalog_block">
            <div class="catalog_area">
                <div class="catalog_area-left">
                    <ul>
                        @foreach($catalogMenu as $menuItem)
                            <li>
                                <button class="button button_option button_option-{{ $loop->iteration }}">
                                    {{ $menuItem->title }}
                                </button>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="catalog_area-right">
                    @foreach($catalogMenu as $menuItem)
                    <ul class="catalog_area-list catalog_list-{{ $loop->iteration }}">
                        @foreach($menuItem->items as $menuChild)
                            <li>
                                <a href="{{ $menuChild->link ?? $menuChild->scroll_to }}">
                                    <button class="button button_option">
                                        {{ $menuChild->title }}
                                    </button>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="additional_buttons-right">
            <div class="additional_features">
                <div class="search">
                    <input class="search-area" type="text" name="" placeholder="Поиск">
                    <a class="search-button" href="#">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.8327" cy="12.8334" r="8.16667" stroke="#353535" stroke-width="2.33333"/>
                            <path d="M23.334 23.3333L19.834 19.8333" stroke="#353535" stroke-width="2.33333" stroke-linecap="round"/>
                        </svg>
                        <span>
                    Поиск
                </span>
                    </a>
                </div>
                <div class="compare">
                    <button class="button button_gray button_compare">
                        <svg width="28" height="25" viewBox="0 0 28 25" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.93249 1.9516C0.773438 3.11065 0.773438 4.97613 0.773438 8.70707V16.6216C0.773438 20.3525 0.773438 22.218 1.93249 23.3771C3.09155 24.5361 4.95702 24.5361 8.68797 24.5361H19.2407C22.9716 24.5361 24.8371 24.5361 25.9962 23.3771C27.1552 22.218 27.1552 20.3525 27.1552 16.6216V8.70707C27.1552 4.97613 27.1552 3.11065 25.9962 1.9516C24.8371 0.792542 22.9716 0.792542 19.2407 0.792542H8.68797C4.95702 0.792542 3.09155 0.792542 1.93249 1.9516ZM19.24 7.38795C19.9686 7.38795 20.5591 7.97852 20.5591 8.70703V19.2597C20.5591 19.9883 19.9686 20.5788 19.24 20.5788C18.5115 20.5788 17.921 19.9883 17.921 19.2597V8.70703C17.921 7.97852 18.5115 7.38795 19.24 7.38795ZM10.0072 11.3452C10.0072 10.6167 9.41662 10.0261 8.6881 10.0261C7.95959 10.0261 7.36902 10.6167 7.36902 11.3452V19.2598C7.36902 19.9883 7.95959 20.5788 8.6881 20.5788C9.41662 20.5788 10.0072 19.9883 10.0072 19.2598V11.3452ZM15.2832 13.9834C15.2832 13.2549 14.6926 12.6643 13.9641 12.6643C13.2356 12.6643 12.645 13.2549 12.645 13.9834V19.2598C12.645 19.9883 13.2356 20.5789 13.9641 20.5789C14.6926 20.5789 15.2832 19.9883 15.2832 19.2598V13.9834Z"/>
                        </svg>
                    </button>
                    <span>
                    Сравнить
                </span>
                </div>
                <div class="favorites">
                    <button class="button button_gray button_favorites">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.84015 14.2313L11.7708 20.7418C12.0095 20.9661 12.1289 21.0782 12.2696 21.1058C12.333 21.1183 12.3982 21.1183 12.4616 21.1058C12.6023 21.0782 12.7217 20.9661 12.9604 20.7418L19.891 14.2313C21.841 12.3994 22.0778 9.38503 20.4378 7.27121L20.1294 6.87374C18.1674 4.34501 14.2293 4.76909 12.8507 7.65756C12.656 8.06558 12.0752 8.06558 11.8805 7.65756C10.5019 4.76909 6.56372 4.34501 4.60177 6.87374L4.2934 7.27121C2.65336 9.38503 2.89016 12.3994 4.84015 14.2313Z"/>
                        </svg>
                    </button>
                    <span>
                            Избранное
                        </span>
                </div>
            </div>
            <div class="acc">
                <button class="button button_gray button_acc">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M2.87305 21.5V7.5C2.87305 5.61438 2.87305 4.67157 3.45883 4.08579C4.04462 3.5 4.98743 3.5 6.87305 3.5H16.873C17.7047 3.5 18.3509 3.5 18.8767 3.52706C16.625 3.7741 14.873 5.68245 14.873 8V11.5002L14.7742 21.4671L11.873 20.5L8.87305 21.5L5.87305 20.5L2.87305 21.5ZM21.873 11.5L16.873 11.5V8C16.873 6.61929 17.9923 5.5 19.373 5.5C20.7538 5.5 21.873 6.61929 21.873 8V11.5ZM4.87305 7.5C4.87305 6.94772 5.32076 6.5 5.87305 6.5H11.873C12.4253 6.5 12.873 6.94772 12.873 7.5C12.873 8.05228 12.4253 8.5 11.873 8.5H5.87305C5.32076 8.5 4.87305 8.05228 4.87305 7.5ZM4.87305 11.5C4.87305 10.9477 5.32076 10.5 5.87305 10.5H7.87305C8.42533 10.5 8.87305 10.9477 8.87305 11.5C8.87305 12.0523 8.42533 12.5 7.87305 12.5H5.87305C5.32076 12.5 4.87305 12.0523 4.87305 11.5ZM4.87305 15.5C4.87305 14.9477 5.32076 14.5 5.87305 14.5H9.87305C10.4253 14.5 10.873 14.9477 10.873 15.5C10.873 16.0523 10.4253 16.5 9.87305 16.5H5.87305C5.32076 16.5 4.87305 16.0523 4.87305 15.5Z"/>
                    </svg>
                    <span>
                    Онлайн расчет
                </span>
                </button>
            </div>
        </div>
    </div>
</header>
