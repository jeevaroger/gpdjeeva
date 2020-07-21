<!-- page footer start -->
<footer>
    <div class="container-fluid">
        <p class="text-right">&copy; Copyright 2018 WNS</p>
    </div>
</footer>
<!-- page footer end -->



<!-- Help Modal Start -->


<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="helpModalTitle">Help</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="min-height:250px;">
                <p> <strong><u>I need business support / I have questions about the data:</u></strong></p>
                <p> Martin Egger : megger@coca-cola.com </p>
                <p> Liz Morales : limorales@coca-cola.com </p>
                <p> <strong><u>I need technical support:</u></strong> </p>
                <p> Link to technical support - CCSN incident management (https://ccsn.service-now.com/ess/ ) </p>
            </div>
        </div>
    </div>
</div>


<!-- Help Modal End -->


<!-- Export Modal Start -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Export PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="min-height:350px;">
                <div class="form-group">
                    <label>Select any one option to export</label>
                    <div class="input-group">
                        <div id="radioBtn" class="btn-group radio-grp" style="width: 100%;">
                            <a class="btn btn-secondary btn-lg active" data-toggle="fun" data-title="Y">Summary</a>
                            <a class="btn btn-secondary btn-lg notActive" data-toggle="fun" data-title="X">Detail</a>
                            <a class="btn btn-secondary btn-lg notActive" data-toggle="fun" data-title="N">Summary &amp; Detail</a>
                        </div>
                        <input type="hidden" name="fun" id="fun">
                    </div>
                </div>
                <div class="form-group">
                    <label>Add one or more geographies</label>
                    <select class="multipleSelect" multiple name="language">
                        <option value="Bangladesh">Bangladesh</option>
                        <option selected value="Barbados">Barbados</option>
                        <option selected value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary shadow">Download</button>
            </div>
        </div>
    </div>
</div>
<!-- Export Modal End -->




