      <section>
        <div class="container pt-20">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fullwidth hidden-md" src="../images/course/Formpic.jpg" alt="">
                <img class="img-fullwidth hidden-xs hidden-sm hidden-lg" src="../images/about/1.png" alt="">
              </div>
              <div class="col-md-6">
                <div class="p-30 mt-0 bg-silver-light">
                  <h3 class="font-28 mt-0">
                    <span class="text-theme-colored2">Choose</span> Your Course </h3>
                  <!-- Appilication Form Start-->
                  <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action=""
                    novalidate="novalidate">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-20">
                          <input placeholder="Enter Name" id="reservation_name" name="reservation_name" required="" class="form-control" aria-required="true"
                            type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-20">
                          <input placeholder="Email" id="reservation_email" name="reservation_email" class="form-control" required="" aria-required="true"
                            type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-20">
                          <input placeholder="Phone" id="reservation_phone" name="reservation_phone" class="form-control" required="" aria-required="true"
                            type="text">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-20">
                          <div class="styled-select">
                            <select id="person_select" name="person_select" class="form-control" required="">
                              <option value="">Choose Course</option>
                              <option value="1 Person">Inter with IAS</option>
                              <option value="2 Person">Degree with IAS</option>
                              <option value="3 Person">Repeaters Intensive Batch</option>
                              <option value="Family Pack">Direct IAS</option>
                              <option value="Family Pack">Groups</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-20">
                          <input name="Date Of Birth" class="form-control required date-picker" placeholder="Date Of Birth" aria-required="true" type="text">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-0 mt-10">
                          <input name="form_botcheck" class="form-control" value="" type="hidden">
                          <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- Application Form End-->

                  <!-- Application Form Validation Start-->
                  <script>
                    $("#reservation_form").validate({
                      submitHandler: function (form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before(
                          '&amp;lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&amp;gt;&amp;lt;/div&amp;gt;'
                        );
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                          dataType: 'json',
                          success: function (data) {
                            if (data.status == 'true') {
                              $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function () {
                              $(form_result_div).fadeOut('slow')
                            }, 6000);
                          }
                        });
                      }
                    });
                  </script>
                  <!-- Application Form Validation Start -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
