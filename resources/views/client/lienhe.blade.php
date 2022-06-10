<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('lh.store') }}" name="sentMessage" id="contactForm" novalidate method="post">
            @csrf
            <div class="  row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên Của bạn *" id="name" required
                            name="HoTen">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email của bạn *" id="email" required
                            name="Email">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Số điện thoại *" id="phone" required
                            name="SDT">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Nội dung *" id="message" required name="NoiDung"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <button class="btn btn-primary">Hoàn Thành</button>
                </div>
            </div>
        </form>
    </div>
</div>
