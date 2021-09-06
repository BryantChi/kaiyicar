@extends('layouts.master')

@section('content_section')

    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">聯絡我們&nbsp;Contact Us</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>聯絡我們&nbsp;Contact Us</h2>
                <ol>
                    <li><a href="{{ Route('index') }}">Home</a></li>
                    <li>Contact Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-4">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Address:</span> 台南市南區中華南路2段151號</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-mobile-phone"></span>
                                </div>
                                <p><span>Phone:</span> <a href="tel://06262-8699">(06)262-8699</a></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> <a href="mailto:kaiyicar@gmail.com">kaiyicar@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 block-9 mb-md-5">
                    <form action="" method="post" role="form" name="contactUs" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="輸入您的姓名" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="聯絡手機" required>
                        </div>
                        <div class="form-group">
                            <select name="type" id="type" class="form-control" required>
                                <option value="">請選擇洽詢項目</option>
                                <option value="外匯車購買">外匯車購買</option>
                                <option value="上架型錄購買">上架型錄購買</option>
                                <option value="其他問題">其他問題</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="like" id="like" placeholder="是否有喜歡的車種，請在表格內敘述">
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="輸入信件內容" required></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="clientMail" id="clientMail">
                            <label class="form-check-label" for="clientMail">
                                發送一封副本至您的郵箱
                            </label>
                        </div>
                        <div class="form-group mt-2">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="submit" id="btnContactUs" value="發送" onclick="contactUsMailSend('{{ Route('ContactUsMail') }}')" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>

    <script>

        function contactUsMailSend(src) {
            if ($("#name").val() == "" || $("#phone").val() == "" || $("#email").val() == "" || $("#content").val() == "" || $("#type").val() == "") {
                swal("錯誤！", "欄位請勿空白！！！", "error");
                return;
            }
            $("#btnContactUs").html("sending...");
            $("#btnContactUs").attr("disabled", true);

            swal({
                title: "確定送出？",
                // html: "按下確定後資料會永久刪除",
                type: "question",
                showCancelButton: true //顯示取消按鈕
            }).then(
                function(result) {
                    if (result.value) {

                        $.ajax({
                            url: src,
                            type: 'POST',
                            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: $('form[name="contactUs"]').serialize(),
                            // {
                            //     _token: '{{ csrf_token() }}'
                            // },
                            success: function(res) {
                                var obj = $.parseJSON(res);
                                if (obj.status == "success") {
                                    swal("成功!", "聯絡信件已送出", "success").then(
                                        function(result) {
                                            if (result.value) {
                                                window.location.reload();
                                            }
                                        }
                                    );
                                } else {
                                    swal("錯誤!", "程序失敗", "error").then(
                                        function(result) {
                                            $("#btnContactUs").html("發送");
                                            $("#btnContactUs").attr("disabled", false);
                                    });
                                }
                            }
                        });
                    } else if (result.dismiss === "cancel") {
                        //使用者按下「取消」要做的事
                        swal("取消", "尚未送出", "error");
                    } //end else
                }); //end then
        }

    </script>

@endsection
