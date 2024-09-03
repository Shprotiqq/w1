<footer>
    <div class="footer_block container">
        <div class="footer_block-left">
            <img src="{{ asset('images/icons/footer-logo.png') }}" alt="Лого">
            <div class="footer-name">
                {{ $settings['site_name']->value }}
            </div>
            <div class="footer-data">
                2018-{{ now()->year }}
            </div>
        </div>
        <div class="footer_right">
            {{ $settings['footer_text']->value }}
        </div>
    </div>
    <div class="cart_modal">
        <div class="cart_modal-overlay"></div>
        <div class="cart_modal-area">
            <div class="cart_modal-content">
                <div class="modal-close"></div>
                <div class="cart_modal-title">
                    Корзина ваших товаров
                </div>
                <div class="cart_modal-list cart_list" data-simplebar></div>
                <div class="cart_modal-text">
                    Мы позвоним, и уточним детали заказа
                </div>
                <form class="cart_modal-input">
                    <input type="hidden" name="form_type" value="cart">
                    <textarea name="product_names" style="display: none"></textarea>
                    <input id="cart_phone" type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Сделать заказ
                    </button>
                </form>
                <div class="cart_modal-additional">
                    Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает.
                </div>
            </div>
        </div>
    </div>
    <div class="order_modal">
        <div class="order_modal-overlay"></div>
        <div class="order_modal-area">
            <div class="order_modal-content">
                <div class="modal-close"></div>
                <div class="order_modal-title">
                    Быстрое оформление заказа
                </div>
                <div class="order_modal-list order_list" data-simplebar></div>
                <div class="order_modal-text">
                    Мы позвоним, и уточним детали заказа
                </div>
                <form class="order_modal-input">
                    <input type="hidden" name="form_type" value="order">
                    <textarea style="display: none" name="product_names"></textarea>
                    <input id="order_phone" type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Сделать заказ
                    </button>
                </form>
                <div class="order_modal-additional">
                    Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает.
                </div>
            </div>
        </div>
    </div>
    <div class="favorite_modal">
        <div class="favorite_modal-overlay"></div>
        <div class="favorite_modal-area">
            <div class="favorite_modal-content">
                <div class="modal-close"></div>
                <div class="favorite_modal-title">
                    Список ваших избранных товаров
                </div>
                <div class="favorite_modal-list favorite_list" data-simplebar></div>
                <div class="favorite_modal-text">
                    Мы позвоним, и уточним детали заказа
                </div>
                <form class="favorite_modal-input">
                    <input type="hidden" name="form_type" value="favorite">
                    <textarea style="display: none" name="product_names"></textarea>
                    <input id="favorite_phone" type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Сделать заказ
                    </button>
                </form>
                <div class="favorite_modal-additional">
                    Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает.
                </div>
            </div>
        </div>
    </div>
    <div class="compare_modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title">
                    Список товаров для сравнения
                </div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заказа
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="compare">
                    <textarea style="display: none" name="product_names"></textarea>
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Сделать заказ
                    </button>
                </form>
                <div class="compare_modal-additional">
                    Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает.
                </div>
            </div>
        </div>
    </div>
    <div class="stock-modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title">
                    ВЫ ВЕЗУНЧИК!
                    Ваша скидка 10%
                </div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заказа
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="stock">
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Забрать скидку
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="vacancies-modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title"></div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заявки
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="vacancies">
                    <input type="hidden" name="vacancies" value="">
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="delivery-modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title"></div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заявки
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="delivery">
                    <input type="hidden" name="delivery" value="">
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="director-modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title">Письмо директору</div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заявки
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="director">
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="tariff-modal">
        <div class="compare_modal-overlay"></div>
        <div class="compare_modal-area">
            <div class="compare_modal-content">
                <div class="modal-close"></div>
                <div class="compare_modal-title"></div>
                <div class="compare_modal-list compare_list" data-simplebar></div>
                <div class="compare_modal-text">
                    Мы позвоним, и уточним детали заявки
                </div>
                <form class="compare_modal-input">
                    <input type="hidden" name="form_type" value="Тариф">
                    <input type="hidden" name="tariff" value="">
                    <input type="tel" placeholder="Ваш телефон" name="phone" required>
                    <button type="submit" class="button button_green button_submit">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
    {!! $settings['code_in_footer']->value !!}
</footer>
