@extends('layouts.app')

@section('title', $settings['title']->value )
@section('description', $settings['description']->value)
@section('content')
        <div class="buttons_block container">
            <div class="buttons_block-buttons">
                <button class="button button_gray button_up">
                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.4544 12.7413L26.9374 11.2583L25.4544 9.77521L23.9713 11.2583L25.4544 12.7413ZM23.357 37.9094C23.357 39.0678 24.296 40.0068 25.4544 40.0068C26.6127 40.0068 27.5517 39.0678 27.5517 37.9094L23.357 37.9094ZM35.3268 19.6476L26.9374 11.2583L23.9713 14.2243L32.3607 22.6137L35.3268 19.6476ZM23.9713 11.2583L15.5819 19.6476L18.548 22.6137L26.9374 14.2243L23.9713 11.2583ZM23.357 12.7413L23.357 37.9094L27.5517 37.9094L27.5517 12.7413L23.357 12.7413Z"
                              fill="#33363F"/>
                    </svg>
                </button>
                <a href="https://wa.me/{{ $settings['whats_app']->value }}">
                    <button class="button button_social">
                        <img src="{{ asset('images/icons/whatsup_icon.svg') }}" alt="">
                    </button>
                </a>
                <button class="button button_gray button_basket-small">
                    <img src="{{ asset('images/icons/bag_icon.svg') }}" alt="">
                    <span class="cart_quantity">0</span>
                </button>
            </div>
        </div>
        <section>
            <div class="main_banner container">
                <div class="banner_info">
                    <h1 class="info_title">
                        {{ $settings['title_h1']->value }}
                    </h1>
                    <ul class="info_list">
                        <li class="info_item">
                            <svg width="25" height="25" viewBox="0 0 41 41" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4251 40.7441C31.5006 40.7441 40.4791 31.7656 40.4791 20.6901C40.4791 16.6051 39.2577 12.8054 37.1602 9.63626L21.2174 27.3505C19.674 29.0655 17.0768 29.3188 15.231 27.9345L7.94822 22.4724C6.96371 21.734 6.76419 20.3373 7.50257 19.3528C8.24095 18.3683 9.63763 18.1688 10.6221 18.9072L17.9049 24.3693L34.2718 6.18377C30.6721 2.74673 25.7951 0.636032 20.4251 0.636032C9.34958 0.636032 0.371094 9.61454 0.371094 20.6901C0.371094 31.7656 9.34958 40.7441 20.4251 40.7441Z"
                                      fill="currentColor"></path>
                            </svg>
                            <h3>
                                {{ $settings['utp_1']->value }}
                            </h3>
                        </li>
                        <li class="info_item">
                            <svg width="25" height="25" viewBox="0 0 41 41" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4251 40.7441C31.5006 40.7441 40.4791 31.7656 40.4791 20.6901C40.4791 16.6051 39.2577 12.8054 37.1602 9.63626L21.2174 27.3505C19.674 29.0655 17.0768 29.3188 15.231 27.9345L7.94822 22.4724C6.96371 21.734 6.76419 20.3373 7.50257 19.3528C8.24095 18.3683 9.63763 18.1688 10.6221 18.9072L17.9049 24.3693L34.2718 6.18377C30.6721 2.74673 25.7951 0.636032 20.4251 0.636032C9.34958 0.636032 0.371094 9.61454 0.371094 20.6901C0.371094 31.7656 9.34958 40.7441 20.4251 40.7441Z"
                                      fill="currentColor"></path>
                            </svg>
                            <h3>
                                {{ $settings['utp_2']->value }}
                            </h3>
                        </li>
                        <li class="info_item">
                            <svg width="25" height="25" viewBox="0 0 41 41" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4251 40.7441C31.5006 40.7441 40.4791 31.7656 40.4791 20.6901C40.4791 16.6051 39.2577 12.8054 37.1602 9.63626L21.2174 27.3505C19.674 29.0655 17.0768 29.3188 15.231 27.9345L7.94822 22.4724C6.96371 21.734 6.76419 20.3373 7.50257 19.3528C8.24095 18.3683 9.63763 18.1688 10.6221 18.9072L17.9049 24.3693L34.2718 6.18377C30.6721 2.74673 25.7951 0.636032 20.4251 0.636032C9.34958 0.636032 0.371094 9.61454 0.371094 20.6901C0.371094 31.7656 9.34958 40.7441 20.4251 40.7441Z"
                                      fill="currentColor"></path>
                            </svg>
                            <h3>
                                {{ $settings['utp_3']->value }}
                            </h3>
                        </li>
                    </ul>
                    <div class="info_buttons">
                        <button class="button button_green button_calc">
                            <span>
                                {{ $settings['calculate_button_name']->value }}
                            </span>
                        </button>
                    </div>
                </div>
                <div class="banner_img">
                    <img class="main_img" src="/storage/{{ $settings['first_screen_right_image']->image }}">

                </div>
            </div>
        </section>
        <section>
            <div class="quiz container">
                <div class="quiz_top">
                    <h2 class="quiz_title title">
                        {{ $settings['quiz_title']->value }}
                    </h2>
                    <div class="quiz_progress">
                        <div class="progress_bar">
                            <div class="current_progress" id="progress"></div>
                            @foreach($settings['quiz_list']->data as $step)
                                <div class="progress_circle @if ($loop->first) active @endif">{{ $loop->iteration }}</div>
                                @if ($loop->last)
                                    <div class="progress_circle progress_circle-prize">
                                        <svg width="51" height="52" viewBox="0 0 51 52" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M23.5097 17.5253H10.9458C8.97156 17.5253 7.98444 17.5253 7.37113 18.1386C6.75781 18.7519 6.75781 19.739 6.75781 21.7133V23.8073C6.75781 25.7815 6.75781 26.7686 7.37113 27.3819C7.95019 27.961 8.86247 27.9933 10.6242 27.9951H23.5097V17.5253ZM13.0398 32.1831V40.5592C13.0398 42.5334 13.0398 43.5205 13.6531 44.1338C14.2664 44.7472 15.2535 44.7472 17.2278 44.7472H23.5097V32.1831H13.0398ZM27.6977 44.7472H33.9797C35.9539 44.7472 36.941 44.7472 37.5543 44.1338C38.1676 43.5205 38.1676 42.5334 38.1676 40.5592V32.1831H27.6977V44.7472ZM40.5833 27.9951C42.3449 27.9933 43.2572 27.961 43.8363 27.3819C44.4496 26.7686 44.4496 25.7815 44.4496 23.8073V21.7133C44.4496 19.739 44.4496 18.7519 43.8363 18.1386C43.223 17.5253 42.2359 17.5253 40.2616 17.5253H27.6977V27.9951H40.5833Z"
                                                  fill="white"/>
                                            <path d="M40.2617 10.4737V10.0923C40.2617 7.56809 37.7887 5.78566 35.394 6.5839C32.3984 7.58245 29.6763 9.26477 27.4435 11.4976L25.6038 13.3373V15.4313H33.3001C33.7503 15.4313 34.1975 15.3587 34.6245 15.2164L37.545 14.2428C39.1674 13.7021 40.2617 12.1838 40.2617 10.4737Z"
                                                  fill="white"/>
                                            <path d="M10.9473 10.4737V10.0923C10.9473 7.56809 13.4202 5.78566 15.815 6.5839C18.8106 7.58245 21.5327 9.26477 23.7655 11.4976L25.6052 13.3373V15.4313H17.9088C17.4587 15.4313 17.0115 15.3587 16.5845 15.2164L13.6639 14.2428C12.0416 13.7021 10.9473 12.1838 10.9473 10.4737Z"
                                                  fill="white"/>
                                        </svg>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="quiz_bottom">
                    <div class="quiz_card">
                        <div class="quiz_steps">
                            @foreach($settings['quiz_list']->data as $step)
                                <fieldset class="quiz_variants @if ($loop->first) quiz_variants-active @endif">
                                    <div class="quiz_number">
                                        <span>{{ $step['question'] }}</span>
                                    </div>
                                    <div class="quiz_variants_container">
                                        @foreach($step['answers'] as $answer)
                                            <div class="variants_item">
                                                <label>
                                                    <img src="{{ getThumbnail($answer['image'], 'fit', '229x160', 'quiz') }}" alt="">
                                                    <input class="input_quiz" type="radio" value="{{ $answer['answer'] }}">
                                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M44.0616 22.6437C44.0616 34.0574 34.8093 43.3098 23.3961 43.3098C11.9829 43.3098 2.73062 34.0574 2.73062 22.6437C2.73062 11.2301 11.9829 1.97763 23.3961 1.97763C34.8093 1.97763 44.0616 11.2301 44.0616 22.6437Z"
                                                              stroke="#F6F6F6" stroke-width="3.59406"/>
                                                        <path d="M16.2079 25.2003L20.6313 28.5179L30.584 16.3535" stroke="white"
                                                              stroke-width="2.21174"/>
                                                    </svg>
                                                    <span>{{ $answer['answer'] }}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </fieldset>
                            @endforeach
                            <fieldset class="quiz_variants quiz_variants__last-page">
                                <div class="form_block-title">
                                    Отправить заявку
                                </div>
                                <input type="hidden" name="form_type" value="quiz">
                                <form action="" method="get" class="form__block">
                                    <textarea style="display: none" name="quiz_data"></textarea>
                                    <div class="form__name-input">
                                        <input placeholder="Ваше имя" type="text" name="name" required="">
                                    </div>
                                    <div class="form__phone-input">
                                        <input placeholder="Ваш телефон" type="text" name="phone" required="">
                                    </div>
                                    <div class="form__button">
                                        <button class="button button_green button_form" type="submit">
                                            Отправить
                                        </button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                        <div class="quiz_buttons">
                            <button class="button button-quiz button-prev" disabled>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.72656 6.83259L1.01469 6.12072L0.302819 6.83259L1.01469 7.54447L1.72656 6.83259ZM16.8274 7.83933C17.3834 7.83933 17.8342 7.3886 17.8342 6.83259C17.8342 6.27659 17.3834 5.82585 16.8274 5.82585V7.83933ZM7.05503 0.0803643L1.01469 6.12072L2.43844 7.54447L8.47878 1.50411L7.05503 0.0803643ZM1.01469 7.54447L7.05503 13.5848L8.47878 12.1611L2.43844 6.12072L1.01469 7.54447ZM1.72656 7.83933H16.8274V5.82585H1.72656V7.83933Z"
                                          fill="white"/>
                                </svg>
                                <span>Назад</span>
                            </button>
                            <button class="button button-quiz button-next">
                                <span>Вперед</span>
                                <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.957 6.83259L17.6689 6.12072L18.3808 6.83259L17.6689 7.54447L16.957 6.83259ZM1.85617 7.83933C1.30017 7.83933 0.849432 7.3886 0.849432 6.83259C0.849432 6.27659 1.30017 5.82585 1.85617 5.82585V7.83933ZM11.6286 0.0803643L17.6689 6.12072L16.2452 7.54447L10.2048 1.50411L11.6286 0.0803643ZM17.6689 7.54447L11.6286 13.5848L10.2048 12.1611L16.2452 6.12072L17.6689 7.54447ZM16.957 7.83933H1.85617V5.82585H16.957V7.83933Z"
                                          fill="white"/>
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="addition_info">
                        <div class="additional_card">
                            <div class="additional_card-info">
                                <img class="card_img" src="{{ getThumbnail($settings['quiz_consultant_photo']->image, 'fit', '120x120', 'quiz') }}" alt="">
                                <span class="additional_name">{{ $settings['quiz_consultant_name']->value }}</span>
                                <span class="additional_jobtitle">{{ $settings['quiz_consultant_job_title']->value }}</span>
                                <span class="additional_comment">{{ $settings['quiz_consultant_job_comment']->value }}</span>
                            </div>
                            <div class="prize_list">
                                <span class="prize_title">
                                    Призы за ответы на вопросы:
                                </span>
                                <ul class="prize_pool">
                                    <li class="prize_item">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.0304 9.01648V8.00975C17.0304 5.78575 15.2275 3.98285 13.0035 3.98285V3.98285C10.7795 3.98285 8.97656 5.78575 8.97656 8.00975V9.01648"
                                                  stroke="white" stroke-width="2.01345" stroke-linecap="round"/>
                                            <path d="M3.94141 14.0501C3.94141 11.2026 3.94141 9.77888 4.826 8.89429C5.71058 8.0097 7.13431 8.0097 9.98176 8.0097H16.0221C18.8696 8.0097 20.2933 8.0097 21.1779 8.89429C22.0625 9.77888 22.0625 11.2026 22.0625 14.0501V15.0568C22.0625 18.8534 22.0625 20.7517 20.883 21.9311C19.7036 23.1106 17.8053 23.1106 14.0087 23.1106H11.9952C8.19861 23.1106 6.30031 23.1106 5.12086 21.9311C3.94141 20.7517 3.94141 18.8534 3.94141 15.0568V14.0501Z"
                                                  fill="white"/>
                                        </svg>
                                        <span>
                                        {{ $settings['quiz_prize_1']->value }}
                                    </span>
                                    </li>
                                    <li class="prize_item">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.0304 9.01648V8.00975C17.0304 5.78575 15.2275 3.98285 13.0035 3.98285V3.98285C10.7795 3.98285 8.97656 5.78575 8.97656 8.00975V9.01648"
                                                  stroke="white" stroke-width="2.01345" stroke-linecap="round"/>
                                            <path d="M3.94141 14.0501C3.94141 11.2026 3.94141 9.77888 4.826 8.89429C5.71058 8.0097 7.13431 8.0097 9.98176 8.0097H16.0221C18.8696 8.0097 20.2933 8.0097 21.1779 8.89429C22.0625 9.77888 22.0625 11.2026 22.0625 14.0501V15.0568C22.0625 18.8534 22.0625 20.7517 20.883 21.9311C19.7036 23.1106 17.8053 23.1106 14.0087 23.1106H11.9952C8.19861 23.1106 6.30031 23.1106 5.12086 21.9311C3.94141 20.7517 3.94141 18.8534 3.94141 15.0568V14.0501Z"
                                                  fill="white"/>
                                        </svg>
                                        <span>
                                        {{ $settings['quiz_prize_2']->value }}
                                    </span>
                                    </li>
                                    <li class="prize_item">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.0304 9.01648V8.00975C17.0304 5.78575 15.2275 3.98285 13.0035 3.98285V3.98285C10.7795 3.98285 8.97656 5.78575 8.97656 8.00975V9.01648"
                                                  stroke="white" stroke-width="2.01345" stroke-linecap="round"/>
                                            <path d="M3.94141 14.0501C3.94141 11.2026 3.94141 9.77888 4.826 8.89429C5.71058 8.0097 7.13431 8.0097 9.98176 8.0097H16.0221C18.8696 8.0097 20.2933 8.0097 21.1779 8.89429C22.0625 9.77888 22.0625 11.2026 22.0625 14.0501V15.0568C22.0625 18.8534 22.0625 20.7517 20.883 21.9311C19.7036 23.1106 17.8053 23.1106 14.0087 23.1106H11.9952C8.19861 23.1106 6.30031 23.1106 5.12086 21.9311C3.94141 20.7517 3.94141 18.8534 3.94141 15.0568V14.0501Z"
                                                  fill="white"/>
                                        </svg>
                                        <span>
                                        {{ $settings['quiz_prize_3']->value }}
                                    </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="catalog container">
                <div class="catalog__top">
                    <h2 class="catalog__title title">
                        Товары
                    </h2>
                    <div class="catalog__buttons">
                        @foreach(explode(',', $settings['products_filters']->value) as $filter)
                            <a class="catalog__dropdown dropdown" href="/?order={{ trim($filter) }}&order_by={{ request()->get('order_by') && request()->get('order_by') === 'ASC' ? 'DESC' : 'ASC' }}">
                                <div class="catalog__filter select @if(request()->get('order') === trim($filter)) select-clicked @endif" >
                                    <span class="selected">{{ trim($filter) }}</span>
                                    <svg class="caret @if(request()->get('order') === trim($filter)) select-transform @endif" width="10" height="9" viewBox="0 0 10 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.07028 8.35024C4.45777 9.0214 5.42651 9.0214 5.814 8.35024L9.7373 1.55488C10.1248 0.883718 9.64042 0.0447683 8.86543 0.0447683H1.01885C0.243864 0.0447683 -0.240506 0.883718 0.146987 1.55488L4.07028 8.35024Z"
                                              fill="black"/>
                                    </svg>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="catalog__bottom">
                    @foreach($articles->where('active', false) as $article)
                        @include('articles.shared.item', $article)
                    @endforeach
                </div>
            </div>
            <div class="catalog_additional container">
                <h2 class="catalog_additional-title title">Сопутствующие товары</h2>
                <div class="catalog_additional-cards">
                    @foreach($articles->where('active', true) as $article)
                        @include('articles.shared.item', $article)
                    @endforeach
                </div>
                <div class="catalog_promotion">
                    <div class="promotion-text">
                        <h2 class="promotion-title">{{ $settings['stock_title']->value }}</h2>
                        <h3 class="promotion-desc">Нажми на любое из этих случайных слов и найди свой подарок!</h3>
                    </div>
                    <div class="promotion_action">
                        <div class="promotion_action-area">
                            @foreach($settings['stock_list']->data->chunk(6) as $stock_collection)
                                <div class="promo_action-row">
                                    @foreach($stock_collection as $stock)
                                        <button class="button button_gray button_action @if($stock['active']) active @endif">
                                            {{ $stock['link'] }}
                                        </button>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="#portfolio">
            <div class="portfolio container">
                <div class="portfolio__img">
                    <h2 class="img__title title">{{ $settings['portfolio_title']->value }}</h2>
                    <div class="img__gallery">
                        @foreach($settings['portfolio_images']->files as $image)
                            <div class="gallery-picture">
                                <a href="/storage/{{ $image }}"
                                   data-fancybox="clients-gallery">
                                    <img loading="lazy" src="{{ getThumbnail($image, 'fit', '375x252', 'portfolio') }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="portfolio_videos videos">
                    <h2 class="videos__title title">{{ $settings['video_title']->value }}</h2>
                    <div class="videos__block">
                        @foreach($settings['video_links']->data as $link)
                            <div class="videos__link">
                                <a href="{{ $link['link'] }}"
                                   class="videos__video" data-fancybox>
                                    <svg width="129" height="129" viewBox="0 0 129 129" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="64.3962" cy="64.3962" r="64.3962" fill="#00CA81"/>
                                        <path d="M92.5293 60.6483C95.4147 62.3142 95.4147 66.479 92.5293 68.1449L53.576 90.6345C50.6906 92.3004 47.0838 90.218 47.0838 86.8862L47.0838 41.9069C47.0838 38.5751 50.6906 36.4927 53.576 38.1586L92.5293 60.6483Z"
                                              fill="white"/>
                                    </svg>
                                    <img src="{{ getYouTubePreview($link['link'], 'sddefault') }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="prices">
            <div class="price_list container">
                <div class="application_form form">
                    <div class="form__title">
                        {!! $settings['send_request_title']->value !!}
                    </div>
                    <div class="form-bottom">
                        <div class="form_sideinfo sideinfo">
                            <div class="sideinfo__img">
                                <img src="/storage/{{ $settings['send_request_photo']->image }}" alt="">
                            </div>
                            <div class="sideinfo__about about">
                                <div class="about__name">
                                    {{ $settings['send_request_fio']->value }}
                                </div>
                                <div class="about__jobtitle">
                                    {{ $settings['send_request_role']->value }}
                                </div>
                                <div class="about__link">
                                    <a href="#">{{ $settings['send_reqeust_dashed_text']->value }}</a>
                                </div>
                                <div class="about__add">
                                    {!! $settings['send_reqeust_description']->value !!}
                                </div>
                            </div>
                        </div>
                        <div class="form__block">
                            <form action="" method="get" class="form__block">
                                <input type="hidden" name="form_type" value="smeta">
                                <div class="form__name-input">
                                    <input placeholder="Ваше имя" type="text" name="name" required/>
                                </div>
                                <div class="form__phone-input">
                                    <input placeholder="Ваш телефон" type="tel" name="phone" required/>
                                </div>
                                <div class="form__button">
                                    <button class="button button_green button_form" type="submit">
                                        Отправить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="prices-main">
                    <div class="prices__top">
                        <h2 class="prices_title title">{{ $settings['price_list_title']->value }}</h2>
                        <div class="prices_info">
                            <h3 class="info_text">{!! $settings['price_list_title_text']->value !!}</h3>
                            @if($settings['price_list_link_text']->value)
                                <div class="prices_button">
                                    <a class="button button_green button_download" href="{{ $settings['price_list_title_link']->value }}">
                                        {{ $settings['price_list_link_text']->value }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="prices_tabs">
                    @foreach($settings['price_list_prices']->data as $tab)
                        <div class="tabs__tab tab_dropdown">
                            <div class="tab__header">
                                {{ $tab['name'] }}
                                <svg class="caret" width="21" height="11" viewBox="0 0 21 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4607 10.2925L20.051 0.476897H0.870348L10.4607 10.2925Z" fill="black"/>
                                </svg>
                            </div>
                            <div class="tab__list">
                                <div class="list__top chars_list">
                                    @foreach($tab['columns_names'] as $columnNameData)
                                        <div class="chars_list-item">
                                            {!! $columnNameData['name'] !!}
                                        </div>
                                    @endforeach
                                </div>
                                <div class="list__bottom">
                                    @foreach($tab['rows'] as $rowData)
                                        <div class="list__bottom-options options">
                                            @foreach($rowData['columns'] as $columnData)
                                                <div class="options_item">
                                                    {{ $columnData['column_text'] }}
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="tariff_block container">
                @if($settings['rates_list'])
                    <h2 class="tariff_block-title title">{{ $settings['rates_title']->value }}</h2>
                    <div class="tariff_block-cards cards_block">
                        @foreach($settings['rates_list']->data as $rateData)
                            <div class="cards_block-card card_option">
                                <div class="card_option-content">
                                    <div class="card_option__img">
                                        <img src="{{ getThumbnail($rateData['image'], 'fit', '115x115', 'rates') }}" alt="">
                                    </div>
                                    <div class="card_option__title">
                                        <div class="card_option__title-top">
                                            {{ $rateData['title'] }}
                                        </div>
                                        <div class="card_option__title-bottom">
                                            {{ $rateData['sub_title'] }}
                                        </div>
                                    </div>
                                    <div class="card_option__desc">
                                        {!! $rateData['text'] !!}
                                    </div>
                                    <div class="card_option__list adv_list">
                                        @foreach($rateData['presents'] as $present)
                                            <div class="adv_list__item">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M14.9455 28.3978C22.684 28.3978 28.9573 22.1244 28.9573 14.3859C28.9573 11.532 28.1041 8.87736 26.6389 6.66317L15.4992 19.0406C14.4208 20.2388 12.6061 20.4158 11.3165 19.4486L6.22793 15.6322C5.54005 15.1163 5.40065 14.1405 5.91655 13.4526C6.43245 12.7647 7.4083 12.6253 8.09618 13.1412L13.1847 16.9576L24.6209 4.2508C22.1057 1.849 18.6978 0.374023 14.9455 0.374023C7.20692 0.374023 0.933594 6.64735 0.933594 14.3859C0.933594 22.1244 7.20692 28.3978 14.9455 28.3978Z"
                                                          fill="#00CA81"/>
                                                </svg>
                                                {{ $present['text'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="card_option__bottom option_bottom">
                                        <div class="option_bottom-expand">
                                            Развернуть
                                        </div>
                                        <div class="option_bottom-term">
                                            {{ $rateData['time'] }}
                                        </div>
                                        <div class="option_bottom-button">
                                            <button class="button button_green button-select" data-tariff="{{ $rateData['title'] }}">
                                                Выбрать
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.3418 7.13898L17.0537 6.42712L17.7655 7.13898L17.0537 7.85085L16.3418 7.13898ZM1.24092 8.14571C0.684918 8.14571 0.234192 7.69498 0.234192 7.13898C0.234192 6.58299 0.684918 6.13226 1.24092 6.13226V8.14571ZM11.0133 0.386771L17.0537 6.42712L15.6299 7.85085L9.58958 1.8105L11.0133 0.386771ZM17.0537 7.85085L11.0133 13.8912L9.58958 12.4675L15.6299 6.42712L17.0537 7.85085ZM16.3418 8.14571H1.24092V6.13226H16.3418V8.14571Z"
                                                          fill="white"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="tariff_block-form form_block">
                    <div class="form_block-content block_content">
                        <div class="block-content-left">
                            <div class="form_block-title">
                                {!! $settings['request_for_installments_title']->value !!}
                            </div>
                            <div class="tariff_block-desc">
                                {!! $settings['request_for_installments_text']->value !!}!
                            </div>
                            <div class="form_block-input">
                                <form action="" method="get" class="form_block">
                                    <input type="hidden" name="form_type" value="Рассрочка">
                                    <div class="form_block-input_name">
                                        <input placeholder="Ваше имя" type="text" name="name" required/>
                                    </div>
                                    <div class="form_block-input_phone">
                                        <input placeholder="Ваш телефон" type="tel" name="phone" required/>
                                    </div>
                                    <div class="form_block-checkbox">
                                        <label>
                                            <input type="checkbox" class="tariff_checkbox" value="1" name="check" required>
                                            <span></span>
                                            Согласие на обработку данных
                                        </label>
                                    </div>
                                    <div class="form__button">
                                        <button class="button button_green button_form" type="submit">
                                            Отправить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="block_content-right">
                            <div class="form_block-requirements requirements_list">
                                @foreach($settings['request_for_installments_list']->data as $requirement)
                                    <div class="requirements_list-item">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M13 26C20.1797 26 26 20.1797 26 13C26 10.3519 25.2082 7.88864 23.8484 5.8342L13.5127 17.3183C12.5122 18.43 10.8286 18.5942 9.63212 17.6968L4.91104 14.156C4.27284 13.6774 4.1435 12.772 4.62215 12.1338C5.1008 11.4956 6.00618 11.3663 6.64437 11.8449L11.3655 15.3857L21.976 3.5962C19.6425 1.36821 16.481 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z"
                                                  fill="#00CA81"/>
                                        </svg>
                                        {{ $requirement['text'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about_company">
            <div class="company_about about container">
                <h2 class="about-title title">{{ $settings['about_company_title']->value }}</h2>
                <div class="about_general general">
                    <div class="general-left">
                        <div class="general_img">
                            <img src="{{ getThumbnail($settings['about_company_director_photo']->image, 'fit', '375x376', 'about_company') }}" alt="">
                        </div>
                        <div class="general_name">
                            <div class="general_name-name">
                                {{ $settings['about_company_director_name']->value }}
                            </div>
                            <div class="general_name-jobtitle">
                                {{ $settings['about_company_director_job_title']->value }}
                            </div>
                        </div>
                        <div class="button button_green button-letter">
                            Написать
                        </div>
                    </div>
                    <div class="general-right">
                        <div class="general_desc">
                            <h3 class="general_desc-title">{!! $settings['about_company_subtitle']->value !!}</h3>
                            <h4 class="general_desc-desc">{!! $settings['about_company_text']->value !!}</h4>
                        </div>
                    </div>
                </div>

                <div class="about_team team">
                    <h2 class="team-title title">
                        {{ $settings['team_title']->value }}
                    </h2>
                    <div class="team_block">
                        @foreach($settings['team_list']->data as $teamUnit)
                            <div class="team_card">
                                <div class="team_card-img">
                                    <img src="{{ getThumbnail($teamUnit['image'], 'fit', '276x322', 'team') }}" alt="">
                                </div>
                                <div class="team_card-name">
                                    {{ $teamUnit['name'] }}
                                </div>
                                <div class="team_card-jobtitle">
                                    {{ $teamUnit['job_title'] }}
                                </div>
                                <div class="team_card-exp">
                                    {{ $teamUnit['exp'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="reviews container">
                <h2 class="reviews-title title">{{ $settings['reviews_title']->value }}</h2>
                <div class="reviews_block">
                    @foreach($settings['reviews_list']->data as $reviews)

                        <div class="reviews_column">
                            <h3 class="reviews_column-title">
                                Мы в <span class="green_text">{{ $reviews['name'] }}</span>
                            </h3>
                            <div class="reviews_column-rating">
                                <span>{{ $reviews['rating'] }}</span>
                                <img src="{{ asset('images/icons/reviews-rating.svg') }}" alt="">
                            </div>
                            <div class="reviews_column-review-block review_block">
                                @foreach($reviews['data'] as $review)
                                    <div class="review_block-card">
                                        <div class="review_block-card-content">
                                            <div class="review_block-card-top review_top">
                                                <img src="{{ getThumbnail($review['image'], 'fit', '85x94', 'review') }}" alt="">
                                                <div class="review_top-info">
                                                    <div class="review_top-name">
                                                        {{ $review['name'] }}
                                                    </div>
                                                    <div class="review_top-rate">
                                                        <div class="rate_number">
                                                            {{ $review['rating'] }}
                                                        </div>
                                                        <img src="{{ asset('images/icons/review_top-rate.svg') }}" alt="">
                                                    </div>
                                                    <div class="review_card-top-date">
                                                        @php
                                                        $date = now()::parse($review['date']);
                                                        $year = ($date > now()) ? now()->subYear()->year : now()->year;
                                                        $date = $date->setYear($year)->format('d m Y');
                                                        @endphp
                                                        <time datetime="{{ now()::parse($review['date'])->format('d m Y') }}">{{ now()::parse($review['date'])->format('d m Y') }}</time>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reviews_block-card-bottom review_bottom">
                                                <div class="review_bottom-text">
                                                    {!! $review['text'] !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="certificates container">
                <h2 class="certificates-title title">{{ $settings['certificates_title']->value }}</h2>
                <div class="certificates-block">
                    @foreach($settings['certificates_images']->files as $certificate)
                        <img src="{{ getThumbnail($certificate, 'fit', '280x406', 'certificates') }}" alt="">
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="delivery container">
                <h2 class="delivery_title title">{{ $settings['delivery_title']->value }}</h2>
                <h3 class="delivery_desc">{!! $settings['delivery_description']->value !!}</h3>
                <div class="delivery_action">
                    <div class="delivery_action-block">
                        <div class="delivery_action-btn_area btn_area">
                            @php
                            $citiesCollections = collect(explode(',', $settings['delivery_cities']->value))->chunk(13);
                            @endphp
                            @foreach($citiesCollections as $cities)
                                <div class="btn_area-row">
                                    @foreach($cities as $city)
                                        <button class="button button_gray button_delivery">{{ $city }}</button>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="information container">
                <div class="information-guarantees guarantees">
                    <h2 class="guarantees_title title">{{ $settings['conditions_title_1']->value }}</h2>
                    <div class="guarantees_main">
                        <div class="guarantees_img">
                            <img src="{{ getThumbnail($settings['conditions_image_1']->image, 'fit', '186x186', 'conditions') }}" alt="">
                        </div>
                        <div class="guarantees_desc">{!! $settings['conditions_text_1']->value !!}</div>
                    </div>
                </div>
                <div class="information_payment payment">
                    <h2 class="payment-title title">{{ $settings['conditions_title_2']->value }}</h2>
                    <div class="payment_main">
                        <div class="payment_img">
                            <img src="{{ getThumbnail($settings['conditions_image_2']->image, 'fit', '186x186', 'conditions') }}" alt="">
                        </div>
                        <div class="payment_desc">
                            {!! $settings['conditions_text_2']->value !!}
                            <div class="payment_ways">
                                <img src="{{ asset('images/icons/payment_ways.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discounts" id="discounts">
                    <h2 class="discounts_title title">
                        Скидки и акции
                    </h2>
                    <div class="discounts_block">
                        @foreach($settings['promotions_images']->files as $promotion)
                            <img src="{{ getThumbnail($promotion, 'fit', '375x252', 'promotions') }}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="product_rating rating">
                    <h2 class="rating_title title">{{ $settings['rating_title']->value }}</h2>
                    <h3 class="rating_desc">{!! $settings['rating_description']->value !!}</h3>
                    <div class="rating_cards">
                        @foreach($articles->whereIn('id', collect($settings['rating_list']->data)->pluck('product_id')) as $article)
                            <div class="rating__cards-card rating_card" data-id='{{ $article->id }}'>
                                <img class="rating_card-img" src="{{ $article->getThumbnail('thumbnail', 'fit', '137x155', 'articles') }}" alt="">
                                <div class="rating_card-name">
                                    {{ $article->name }}
                                </div>
                                <div class="rating_card-rate">
                                    {{ $article->rating }}
                                    <img src="{{ asset('images/icons/card_rating.svg') }}" alt="">
                                </div>
                                <div class="rating_card-price">
                                    Цена от
                                    <span>{{ number_format($article->price, 0, ',', ' ') }} руб.</span>
                                </div>
                                <div class="rating_card-button">
                                    <button class="button button_green button_order">
                                        <svg width="10" height="12" viewBox="0 0 10 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M3.85807 0.425781C2.96843 0.425781 2.24723 1.14698 2.24723 2.03662V2.03698C1.66815 2.03952 1.35056 2.05952 1.11398 2.2176C0.996724 2.29595 0.896047 2.39662 0.817699 2.51388C0.636719 2.78474 0.636719 3.16179 0.636719 3.9159V9.01681C0.636719 10.0293 0.636719 10.5355 0.951249 10.85C1.26578 11.1646 1.77201 11.1646 2.78447 11.1646H7.07996C8.09242 11.1646 8.59865 11.1646 8.91318 10.85C9.22771 10.5355 9.22771 10.0293 9.22771 9.01681V3.9159C9.22771 3.16179 9.22771 2.78474 9.04673 2.51388C8.96838 2.39662 8.8677 2.29595 8.75045 2.2176C8.5138 2.05947 8.19608 2.0395 7.61665 2.03698V2.03662C7.61665 1.14698 6.89546 0.425781 6.00582 0.425781H3.85807ZM3.85434 2.02929C3.85434 1.73275 4.09474 1.49235 4.39129 1.49235H5.46341C5.75996 1.49235 6.00036 1.73275 6.00036 2.02929C6.00036 2.32584 5.75996 2.56624 5.46341 2.56624H4.39129C4.09474 2.56624 3.85434 2.32584 3.85434 2.02929ZM3.31187 5.24674C3.01532 5.24674 2.77492 5.48714 2.77492 5.78369C2.77492 6.08023 3.01532 6.32063 3.31187 6.32063H6.53349C6.83003 6.32063 7.07043 6.08023 7.07043 5.78369C7.07043 5.48714 6.83003 5.24674 6.53349 5.24674H3.31187ZM3.31187 7.39449C3.01532 7.39449 2.77492 7.63489 2.77492 7.93144C2.77492 8.22799 3.01532 8.46839 3.31187 8.46839H5.45961C5.75616 8.46839 5.99656 8.22799 5.99656 7.93144C5.99656 7.63489 5.75616 7.3945 5.45961 7.3945L3.31187 7.39449Z"
                                                  fill="white"/>
                                        </svg>
                                        Заказать
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="description container">
                {!! $settings['seo_text']->value !!}
            </div>
        </section>
        <section>
            <div class="faq container">
                <h2 class="faq-title title">
                    FAQ
                </h2>
                <div class="faq-dropdown">
                    @foreach($settings['questions_list']->data as $question)
                        <div class="faq-dropdown__tab tab_dropdown">
                            <div class="tab__header">
                                {{ $question['question'] }}
                                <svg class="caret" width="21" height="11" viewBox="0 0 21 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4607 10.2925L20.051 0.476897H0.870348L10.4607 10.2925Z" fill="black"/>
                                </svg>
                            </div>
                            <div class="tab__list faq-text">
                                {!! $question['answer'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="contacts container">
                <h2 class="contacts-title title">
                    Наши контакты
                </h2>
                <div class="contacts_top">
                    <div class="contacts_number">
                        <div class="contacts_number-number">
                            <a class="contacts_number-link" href="tel:{{ $settings['phone']->value }}">
                                {{ $settings['phone']->value }}
                            </a>
                            <h3 class="contacts_number-hours">
                                {{ $settings['work_time']->value }}
                            </h3>
                            <button class="button button-contacts">
                                Заказать звонок
                            </button>
                        </div>
                        <div class="call_form-bottom">
                            <div class="call-form_area">
                                <div class="call_form-title">
                                    Мы вам перезвоним
                                </div>
                                <div class="call_form-actions">
                                    <input type="text" id="call_number-bottom">
                                    <label for="call_number-bottom"></label>
                                    <button class="button button_green button_phone-bottom">
                                        Заказать звонок
                                    </button>
                                </div>

                                <div class="call_text">
                                    Позвоним вам, чтобы уточнить детали. Это ни к чему вас не обязывает
                                </div>
                            </div>
                        </div>
                        <div class="contacts_info">
                            <div class="contacts_address">
                                <h3 class="contacts_address-title">
                                    Адрес офиса:
                                </h3>
                                <h4 class="contacts_address-address">
                                    {!! $settings['address']->value !!}
                                </h4>
                            </div>
                            <div class="contacts_email">
                                <h3 class="contacts_email-title">
                                    Email
                                </h3>
                                <h4 class="contacts_email-email">
                                    {{ $settings['email']->value }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="contacts_map">
                        <div class="contacts_map-map">
                            {!! $settings['map']->value  !!}
                        </div>
                        <div class="contacts_map-links">
                            <a href="#">Карта сайта</a>
                            <a href="#">Политика конфидециальности</a>
                        </div>
                    </div>
                </div>
                <div class="contacts_bottom">
                    <div class="contacts_requisites">
                        <h2 class="contacts_requisites-title">
                            Реквизиты
                        </h2>
                        <div class="contacts_requisites-list">
                            <div class="contacts_requisites-item">
                                <span class="bold_text">Наименование:</span>
                                {{ $settings['site_admin']->value }}
                            </div>
                            <div class="contacts_requisites-item">
                                <span class="bold_text">Адрес:</span>{!! $settings['address']->value !!}
                            </div>
                            <div class="contacts_requisites-item">
                                <span class="bold_text">ИНН:</span> {{ $settings['inn']->value }}
                            </div>
                            <div class="contacts_requisites-item">
                                <span class="bold_text">КПП:</span> {{ $settings['kpp']->value }}
                            </div>
                            <div class="contacts_requisites-item">
                                <span class="bold_text">ОГРН:</span> {{ $settings['ogrn']->value }}
                            </div>
                        </div>
                    </div>
                    <div class="contacts_vacancies">
                        <h3 class="contacts_vacancies-title">
                            Вакансии
                        </h3>
                        <div class="contacts_vacancies-list">
                            <button class="contacts_vacancies-link">
                                Менеджер по продажам
                            </button>
                            <button class="contacts_vacancies-link">
                                Производитель работ
                            </button>
                            <button class="contacts_vacancies-link">
                                Инженер замерщик
                            </button>
                        </div>
                        <div class="contacts_vacancies-button">
                            <button class="button button_green button_atf">
                                <a href="#" rel="sidebar" onclick="event.preventDefault(); alert('Нажмите Ctrl+D')">Добавить сайт в избранное</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
