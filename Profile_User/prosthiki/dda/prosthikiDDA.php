
    <style>
        .btn-file {
          position: relative;
          overflow: hidden;
        }
        .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: right;
          filter: alpha(opacity=0);
          opacity: 0;
          background: red;
          cursor: inherit;
          display: block;
        }
        input[readonly] {
          background-color: white !important;
          cursor: text !important;
        }
    </style>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Προσθήκη ΔΔΑ</h4>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                Browse&hellip; <input type="file" multiple>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <span class="help-block">
                        Το αρχείο πρέπει να είναι σε PDF μορφή.
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h4>Προσθήκη Ετικέτας Προϊόντος</h4>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                Browse&hellip; <input type="file" multiple>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <span class="help-block">
                        Το αρχείο πρέπει να είναι σε PDF μορφή.
                    </span>
                </div>
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">
                <button type="button" class="btn btn-info" id="temp_save" onclick="addToDB(1);">Προσορηνή Αποθήκευση</button>
                <button type="button" class="btn btn-danger">Τελική Αποθήκευση</button>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious5" class="btn btn-default" type="button" value="Previous"  name="Step4" onclick="handleWizardPreviousStep5to4()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext5" class="btn btn-default" type="button" value="Next" disabled="disabled" />
                </div>
            </div>
        </div>


