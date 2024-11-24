@extends('layouts.app')

@section('title', isset($category) ? $category->name : '话题列表')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="content">
                        <ul class="timeline">
                            <li class="event">
                                <h3>なぜ僕がこのホームページをつくたかの？</h3>
                                <p>外国人こそ、外国人のことを一番わかる。その同感さっていうものが感じられます。</p>
                            </li>
                            <li class="event">
                                <h3>外国人の仕事の大変さ</h3>
                                <p>車と接したことない外国人は、やっぱり最初の仕事すごく大変だと思います。言葉の壁だけじゃなくて、そもそも車を触ったことがない外国人が初めて車と接して、どこかどこか全く分からないと思います。僕だって最初こうでした。プログラミングをやったことがない人間。いきなりこれを見ても
                                    <b> ll | grep *a*
                                    </b>、わからないと思います。分からないのが分からないを正直に言うの外国人がするべきことです。恥ずかしくて言わずにそのまま行くとまた面倒なことになると思います。
                                </p>
                            </li>
                            <li class="event">
                                <h3>自分が一番感じたこと</h3>
                                <p>冷却水を交換するときに、エア抜きという手順が必要で、最初先輩たちにファンが回ったら終わりです。よく考えて、なぜファンが回ったらエア抜きが完了ですか。それを疑問を持って、調べに行って、やっぱこういうことですね。それをよく考えるのがすごく大事だと思います。
                                </p>
                            </li>
                            {{-- <li class="event">
                                <h3>日本人と違う考え方</h3>
                                <p>日本人ならどこかの一箇所でずっと働いて定年まで、ほぼ固定みたいな感じです。外国人なら、ここダメだったら、次のところへ行くかという考え方を持ちの外国人多分少なくはないと思います。今の日本でもだいぶ昔と違うから、職業の人手不足とかの原因もあるから、理由をつけて次の場所を探す。よくないはよくないけど、外国人たちやっぱそのよくないところがよく分からないです。あと言葉の壁で自分が今のところに対する不満のところを伝えたくてもなかなか伝えれないという原因も考えられます。難しいけど、リスクを冒して、考えて本当は次のところがいいのか自分が次のところへ行ったら新しい自分になれるのか、それを考えてから行動した方がいいと思います。
                                </p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-around flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text">
                        {{-- <h3 class="dark-color">Do some awsome stuff with me.</h3> --}}
                        <h4 class="theme-color">整備士 &amp; Web Developer</h4>
                        <p>日本に来てもう５年経つ。三十代前半。愛知県在住。愛知県どこかのディーラーで働いている。
                        </p>
                        <p>自動車短大を卒業して、派遣会社に入って、一年働いて、その後辞めて、仕事を探しに行って、愛知県に行って、１年間以上色々やってしまった。
                        </p>
                        <div class="btn-bar">
                            <a class="px-btn theme" href="https://mmasdas.github.io/" target="_blank">自分のブログ</a>
                            {{-- <a class="px-btn theme-t" href="#">Download CV</a> --}}
                        </div>
                        <div class="btn-bar">
                            <a class="px-btn theme" href="https://lorikon-seiya.github.io/" target="_blank">自己紹介</a>
                            {{-- <a class="px-btn theme-t" href="#">Download CV</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="about-img">
                        <img src="{{ asset("images/WechatIMG63.jpeg") }}" style="width: 280px">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<style>
    .timeline h2,
    .timeline h3,
    .timeline p {
        /* font-weight: 600; */
        font-size: x-small;
        margin-bottom: 10px;
    }

    .about-text p {
        font-size: 18px;
    }

    .about-img {
        box-shadow: 0 5px 14px 0 rgba(0, 0, 0, 0.06);
        padding: 10px;
        background: #ffffff;
    }

    @media (max-width: 991px) {
        .about-img {
            margin-top: 30px;
        }
    }

    .section {
        padding: 100px 0;
        position: relative;
    }
</style>
@endsection