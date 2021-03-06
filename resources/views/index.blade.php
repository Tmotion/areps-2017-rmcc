<!DOCTYPE html>
<html lang="ja">
    <head>
        <base href="{{ config('app.url') }}" />
        <meta name="_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>アレップス</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjp.css">
        <link rel="stylesheet" href="{{ cached_asset('css/application.css') }}">

        {{-- http://realfavicongenerator.net/ --}}
        {{--<link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />--}}
        {{--<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon.png') }}" />--}}
        {{--<link rel="icon" type="image/png" href="{{ asset('favicons/favicon-32x32.png') }}" sizes="32x32" />--}}
        {{--<link rel="icon" type="image/png" href="{{ asset('favicons/favicon-16x16.png') }}" sizes="16x16" />--}}
        {{--<link rel="icon" type="image/png" href="{{ asset('favicons/android-chrome-144x144.png') }}" sizes="144x144" />--}}
        {{--<link rel="manifest" href="{{ asset('favicons/manifest.json') }}" />--}}
        {{--<link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#5bbad5">--}}
        {{--<meta name="msapplication-TileColor" content="#ffffff" />--}}
        {{--<meta name="msapplication-TileImage" content="{{ asset('favicons/mstile-150x150.png') }}" />--}}
        {{--<meta name="theme-color" content="#ffffff" />--}}
    </head>
<body>
    <section class="hero">
        <div class="hero-head">
            <nav class="nav">
                <div class="nav-left">
                    <a class="nav-item is-brand" href="#">
                        <img class="is-hidden-mobile" src="{{ asset('img/logo.jpg') }}">
                        <img class="is-hidden-tablet" src="{{ asset('img/logo.png') }}">
                    </a>
                </div>

                <span id="nav-toggle" class="nav-toggle">
                  <span></span>
                  <span></span>
                  <span></span>
              </span>

                <div id="nav-menu" class="nav-right nav-menu">
                    <a class="nav-item smooth-scroll blue" href="#contact">
                        お問い合わせ
                    </a>
                </div>
            </nav>
        </div>
        <div class="hero-body jumbotron">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column">
                        <div class="content">
                            <p class="title">
                                手数料・空室
                            </p>
                            <p class="subtitle">
                                オーナー様のお悩みを一括管理
                            </p>
                        </div>
                        <div>
                            <a href="#contact" class="button is-blue smooth-scroll">お問い合わせ・無料ダウンロードはこちら</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 特徴 -->
    <div class="characteristic">
        <div class="trouble">
            <div class="container">
                <div class="speech-ballon red flex-container">
                    <img class="is-hidden-mobile left" src="{{ asset('img/human1.png') }}" alt="Image">
                    <div class="has-text-centered flex-1">
                        <p class="subtitle is-5 is-bold">このような</p>
                        <p class="subtitle is-4 is-bold">
                            <span class="ruby-dot-white">お悩み</span>はありませんか？
                        </p>
                    </div>
                    <img class="is-hidden-mobile right" src="{{ asset('img/human2.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>

    <div class="characteristic">
        <section class="section padding-top-30 no-padding-bottom">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <div class="box no-border">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('img/checkmark.png') }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        この文章はダミーです文字の大きさや書体の参考となります
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box no-border">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('img/checkmark.png') }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        この文章はダミーです文字の大きさや書体の参考となります
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <div class="box no-border">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('img/checkmark.png') }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        この文章はダミーです文字の大きさや書体の参考となります
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box no-border">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ asset('img/checkmark.png') }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        この文章はダミーです文字の大きさや書体の参考となります
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container has-text-centered" style="margin-top: 50px;">
                <p class="title speech-ballon">アレップスなら</p>

                <p class="subtitle is-6 is-bold">独立管理会社として、グループ会社との連携で</p>
                <p class="subtitle is-4 is-bold text-areps">安定収入・24時間サポートの</p>
                <p class="subtitle is-4 is-bold text-areps">賃貸経営をご提供いたします</p>
            </div>

            <div class="container" style="margin-top: 20px;">
                <div class="columns">
                    <div class="column is-offset-2 is-8">
                        <figure class="image">
                            <img src="{{ asset('img/human.png') }}" alt="Image">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section bg-grey">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_left1.png') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_right1.png') }}" alt="Image">
                        </figure>
                    </div>
                </div>

                <a class="button is-blue is-bold is-fullwidth" style="margin-top: 30px" href="#contact">
                    お問い合わせ・無料ダウンロードはこちら
                </a>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section">
            <div class="container has-text-centered">
                <img src="{{ asset('img/hanena.png') }}" style="height: 55px; width: auto; margin-bottom: 15px;">
                <p class="title is-4">独立系管理会社とは？</p>
            </div>

            <div class="container" style="margin-top: 30px;">
                <p class="subtitle is-6" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。</p>
            </div>

            <div class="container" style="margin-top: 30px;">
                <div class="columns">
                    <div class="column is-6 padding-20">
                        <figure class="image">
                            <img src="{{ asset('img/areps.jpg') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="column is-6 padding-20">
                        <figure class="image">
                            <img src="{{ asset('img/townhousing.jpg') }}" alt="Image">
                        </figure>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6 padding-20">
                        <figure class="image">
                            <img src="{{ asset('img/townjyutakuhanbai.jpg') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="column is-6 padding-20">
                        <figure class="image">
                            <img src="{{ asset('img/aventhouse.jpg') }}" alt="Image">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section bg-green">
            <div class="container has-text-centered">
                <p class="title speech-ballon">アレップスが選ばれる6つの理由</p>
            </div>

            <div class="container">
                <div class="columns">
                    <div class="column is-6 padding-20">
                        <div class=" has-text-centered">
                            <img src="{{ asset('img/number1.png') }}" alt="Image" style="height: 80px; width: auto;">
                            <p class="subtitle is-5  is-bold text-yellow">業界屈指の集客力</p>
                        </div>

                        <figure class="image" style="margin: 20px 0;">
                            <img src="{{ asset('img/number1_illust.png') }}" alt="Image">
                        </figure>

                        <div style="padding: 5px;">
                            <p class="subtitle is-6 is-bold" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。</p>
                        </div>
                    </div>
                    <div class="column is-6 padding-20">
                        <div class=" has-text-centered">
                            <img src="{{ asset('img/number2.png') }}" alt="Image" style="height: 80px; width: auto;">
                            <p class="subtitle is-5  is-bold text-yellow">稼働率の実現</p>
                        </div>

                        <figure class="image" style="margin: 20px 0;">
                            <img src="{{ asset('img/number2_illust.png') }}" alt="Image">
                        </figure>

                        <div style="padding: 5px;">
                            <p class="subtitle is-6 is-bold" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。</p>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6 padding-20">
                        <div class=" has-text-centered">
                            <img src="{{ asset('img/number3.png') }}" alt="Image" style="height: 80px; width: auto;">
                            <p class="subtitle is-5  is-bold text-yellow">業界最低水準の滞納率</p>
                        </div>

                        <figure class="image" style="margin: 20px 0;">
                            <img src="{{ asset('img/number3_illust.png') }}" alt="Image">
                        </figure>

                        <div style="padding: 5px;">
                            <p class="subtitle is-6 is-bold" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。</p>
                        </div>
                    </div>
                    <div class="column is-6 padding-20">
                        <div class=" has-text-centered">
                            <img src="{{ asset('img/number4.png') }}" alt="Image" style="height: 80px; width: auto;">
                            <p class="subtitle is-5  is-bold text-yellow">24時間365日対応</p>
                        </div>

                        <figure class="image" style="margin: 20px 0;">
                            <img src="{{ asset('img/number4_illust.png') }}" alt="Image">
                        </figure>

                        <div style="padding: 5px;">
                            <p class="subtitle is-6 is-bold" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section">
            <div class="container has-text-centered">
                <p class="title is-4 no-margin ruby-dot-green">さらに</p>
                <p class="title speech-ballon">ご契約オーナー限定サービスも！</p>

                <p class="subtitle is-6 is-bold">賃貸経営に置ける</p>
                <p class="subtitle is-6 is-bold">オーナーライフに関する事を</p>
            </div>
        </section>

        <figure class="image">
            <img src="{{ asset('img/ownerservise.jpg') }}" alt="Image">
        </figure>
    </div>

    <div class="characteristic">
        <section class="section bg-grey">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_left2.png') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_right2.png') }}" alt="Image">
                        </figure>
                    </div>
                </div>

                <a class="button is-blue is-bold is-fullwidth" style="margin-top: 30px" href="#contact">
                    お問い合わせ・無料ダウンロードはこちら
                </a>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section">
            <div class="container has-text-centered">
                <p class="title speech-ballon">管理依頼をいただいた事例</p>
            </div>

            <div class="container">
                <figure class="image">
                    <img src="{{ asset('img/owner1.jpg') }}" alt="Image">
                </figure>

                <div style="margin: 20px 0; padding: 5px;">
                    <p class="subtitle is-6" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください</p>
                </div>

                <hr style="margin: 40px 0;" />

                <figure class="image">
                    <img src="{{ asset('img/owner2.jpg') }}" alt="Image">
                </figure>

                <div style="margin: 20px 0; padding: 5px;">
                    <p class="subtitle is-6" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください</p>
                </div>

                <hr style="margin: 40px 0;" />

                <figure class="image">
                    <img src="{{ asset('img/owner3.jpg') }}" alt="Image">
                </figure>

                <div style="margin: 20px 0; padding: 5px;">
                    <p class="subtitle is-6" style="line-height: 30px;">この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください。この文章はダミーです文字の大きさや書体の参考となりますのであらかじめご了承ください</p>
                </div>
            </div>
        </section>
    </div>

    <div class="characteristic">
        <section class="section bg-grey">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_left3.png') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('img/cta_right3.png') }}" alt="Image">
                        </figure>
                    </div>
                </div>

                <a class="button is-blue is-bold is-fullwidth" style="margin-top: 30px" href="#contact">
                    お問い合わせ・無料ダウンロードはこちら
                </a>
            </div>
        </section>
    </div>

    <!-- よくあるご質問 -->
    <div class="question" id="question">
        <section class="section">
            <div class="container has-text-centered">
                <h2 class="title is-4">よくあるご質問</h2>
            </div>

            <div class="container">
                <div style="margin-top: 40px">
                    <article class="message">
                        <div class="message-header is-bold">
                            Q. 納期はどのくらいですか？
                        </div>
                        <div class="message-body">
                            メールにてご発注と元データをいただいてから3営業日となっています。別途、修正をご希望の場合はこの限りではありません。
                        </div>
                    </article>

                    <article class="message">
                        <div class="message-header is-bold">
                            Q. お支払方法について
                        </div>
                        <div class="message-body">
                            銀行振込にて承っております。納品後、請求書をお送りさせていただきますので、月末締め翌月末までのお支払いをお願いいたします。
                        </div>
                    </article>

                    <article class="message">
                        <div class="message-header is-bold">
                            Q. 会社のルールで所定の契約書が必要なのですが、、、
                        </div>
                        <div class="message-body">
                            契約書のご要望があれば結ばせていただきますので、事前にご相談ください。
                        </div>
                    </article>

                    <article class="message">
                        <div class="message-header is-bold">
                            Q. 手書きでも大丈夫ですか？
                        </div>
                        <div class="message-body">
                            大丈夫です。ただ、本当にメモレベルではいい資料を作成することができませんので、資料づくりのための最低限の情報の書き込みはお願いいたします。
                        </div>
                    </article>

                    <article class="message">
                        <div class="message-header is-bold">
                            Q. 資料を作って、いい感じだったから会社案内やHPもお願いできる？
                        </div>
                        <div class="message-body">
                            お気軽にご相談ください。ご要望があればWEB系デザイン、紙系のデザインなど広く承ります。
                        </div>
                    </article>

                    <article class="message">
                        <div class="message-header is-bold">
                            Q. 該当する質問が載っていないんだけど・・・
                        </div>
                        <div class="message-body">
                            どんな小さな質問もお気軽にお問い合わせ・ご相談ください。早急にお返事し、出来る限りご対応いたします。
                        </div>
                    </article>
                </div>

            </div>
        </section>
    </div>

    <!-- お問い合わせ -->
    <div class="contact" id="contact">
        <section class="section bg-darkgrey">
            <div class="has-text-centered">
                <h2 class="title is-4">お問い合わせ</h2>

                <div class="columns" style="margin-top: 40px;">
                    <div class="is-offset-2 column is-8">
                        {{--<address>--}}
                            {{--<b>株式会社キュボス</b><br>--}}
                            {{--〒 170-0002<br>--}}
                            {{--東京都豊島区巣鴨1-11-5 ザ・スカイタワー7F<br>--}}
                            {{--<br>--}}
                            {{--<i class="fa fa-phone-square"></i> 03-4571-0860--}}
                        {{--</address>--}}

                        <form v-on:submit.prevent="submit">
                            <div class="contact-group">
                                <div class="control is-horizontal">
                                    <div class="control-label">
                                        <label class="label">お名前</label>
                                    </div>
                                    <div class="control has-icon">
                                        <input type="text" class="input is-large" name="name" v-model="name" />
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-offset-2 is-10">
                                        <p class="description">
                                            例) 田中 太郎
                                        </p>

                                        <span class="help is-danger" v-cloak>@{{ errors.name }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-group">
                                <div class="control is-horizontal">
                                    <div class="control-label">
                                        <label class="label">メールアドレス</label>
                                    </div>
                                    <div class="control has-icon">
                                        <input type="email" class="input is-large" name="email" v-model="email" />
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-offset-2 is-10">
                                        <p class="description">
                                            ※ 自動返信メールが届きます
                                        </p>

                                        <span class="help is-danger" v-cloak>@{{ errors.email }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-group">
                                <div class="control is-horizontal">
                                    <div class="control-label">
                                        <label class="label">お問い合わせ内容</label>
                                    </div>
                                    <div class="control">
                                        <textarea class="textarea" name="message" v-model="message" rows="3"  placeholder="1000文字以内"></textarea>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-offset-2 is-10">
                                        <p class="description">
                                            ご要望やご質問などご自由にご記載ください
                                        </p>

                                        <span class="help is-danger" v-cloak>@{{ errors.message }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="action">
                                <button type="submit" class="button is-blue is-bold button-submit">送信する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <div class="columns">
                    <div class="is-offset-2 column is-2">
                        <a href="#">運営会社</a>
                    </div>
                    <div class="column is-2">
                        <a href="#">利用規約</a>
                    </div>
                    <div class="column is-2">
                        <a href="#">特商法に基づく表記</a>
                    </div>
                    <div class="column is-2">
                        <a href="#">プライバシポリシー</a>
                    </div>
                </div>
            </div>

            <p class="copyright">© Areps Inc.</p>
        </div>
    </footer>

    <script src="{{ cached_asset('js/application.js') }}"></script>
</body>
</html>
