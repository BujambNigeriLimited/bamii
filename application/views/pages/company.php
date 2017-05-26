<div id="page-content">
    <section class="container">
        <div class="row">
            <!--Content-->
            <div class="col-md-9" style="top: 60px;">
                <header>
                    <h1 class="page-title">Company Information</h1>
                </header>

                <?= validation_errors(); ?>
                <?=form_open_multipart(site_url('pages/company')); ?>
                    <section>
                        <div class="form-group large">
                            <label for="title">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </section>

                    <section>
                        <div class="form-group large">
                            <label for="desc">About</label>
                            <textarea class="form-control summernote" name="desc"></textarea>
                        </div>
                    </section>

                    <section>
                        <h3>Address &amp; Contact</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country">
                                </div>
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" id="street" name="address">
                                </div>
                            </div>
                            <!--/.col-md-4-->
                        </div>
                        <!--/.row-->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="phone-number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-number" name="phone" pattern="\d*">
                                </div>
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <!--/.col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="url">Website</label>
                                    <input type="text" class="form-control" id="website" name="url">
                                </div>
                            </div>
                            <!--/.col-md-4-->
                        </div>
                        <!--/.row-->
                    </section>

                    <section>
                        <div class="">
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" data-role="tagsinput" class="form-control" id="website" name="tags">
                            </div>
                        </div>
                    </section>
                    <input id="lat" type="hidden" name="lat" value="">
                    <input id="lng" type="hidden" name="lng" value="">
                    <section>
                        <h3>Map</h3>
                        <div id="map"></div>
                    </section>
                    
                    <section>
                        <h3>Gallery</h3>
                        <div class="droppable dz-clickable">
                        <div class="dz-default dz-message"><span>Click or Drop Images Here</span></div>
                            <div class="output"></div>
                        </div>
                    </section>
                    <!--
                    <section>
                        <h3>Opening Hours</h3>
                        <div class="opening-hours">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr class="day">
                                        <td class="day-name">Monday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480959"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480960"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day">
                                        <td class="day-name">Tuesday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480961"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480962"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day">
                                        <td class="day-name">Wednesday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480963"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480964"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day">
                                        <td class="day-name">Thursday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480965"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480966"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day">
                                        <td class="day-name">Friday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480967"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480968"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day weekend">
                                        <td class="day-name">Saturday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480969"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480970"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="day weekend">
                                        <td class="day-name">Sunday</td>
                                        <td class="from"><input class="oh-timepicker hasTimepicker" type="text" placeholder="From" name="open-hour-from[]" id="tp1487188480971"></td>
                                        <td class="to"><input class="oh-timepicker hasTimepicker" type="text" placeholder="To" name="open-hour-to[]" id="tp1487188480972"></td>
                                        <td class="non-stop"><div class="checkbox">
                                            <label>
                                                <div class="icheckbox"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>Non-stop
                                            </label>
                                        </div>
                                        </td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section> -->
                    

                    <hr>
                    <section>
                        <figure class="pull-left margin-top-15">
                            <p>By clicking the “Submit” button you agree to the <a href="terms-conditions.html" class="link">Terms &amp; Conditions</a></p>
                        </figure>
                        <div class="form-group">
                            <button type="submit" class="btn btn pull-right" id="submit" value="Submit">Submit
                            </button>
                        </div>
                        <!-- /.form-group -->
                    </section>
                <?=form_close();?>
                <!--/#form-submit-->
                <!--<?= $map['js']; ?> -->
            </div>
            <!--/.col-md-9-->
            <!--Sidebar-->
            <div class="col-md-3"></div>
        </div>
    </section>
</div>

<script type="text/javascript">
  (function(window) {
    function triggerCallback(e, callback) {
      if(!callback || typeof callback !== 'function') {
        return;
      }
      var files;
      if(e.dataTransfer) {
        files = e.dataTransfer.files;
      } else if(e.target) {
        files = e.target.files;
      }
      callback.call(null, files);
    }
    function makeDroppable(ele, callback) {
      var input = document.createElement('input');
      input.setAttribute('name', 'userFile[]');
      input.setAttribute('type', 'file');
      input.setAttribute('multiple', true);
      input.style.display = 'none';
      input.addEventListener('change', function(e) {
        triggerCallback(e, callback);
      });
      ele.appendChild(input);
      
      ele.addEventListener('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.add('dragover');
      });

      ele.addEventListener('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
      });

      ele.addEventListener('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
        triggerCallback(e, callback);
      });
      
      ele.addEventListener('click', function() {
        input.value = null;
        input.click();
      });
    }
    window.makeDroppable = makeDroppable;
  })(this);
  (function(window) {
    makeDroppable(window.document.querySelector('.droppable'), function(files) {
      console.log(files);
      var output = document.querySelector('.output');
      output.innerHTML = '';
      for(var i=0; i<files.length; i++) {
        if(files[i].type.indexOf('image/') === 0) {
          output.innerHTML += '<img width="150" src="' + URL.createObjectURL(files[i]) + '" />';
        }
        
      }
    });
  })(this);
</script>
<script>
$( "div.droppable" ).click(function() {
  $( "div.dz-message" ).remove();
});
</script>
