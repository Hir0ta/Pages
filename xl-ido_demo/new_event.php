<div class="panel-body container">
    <div class="table table-responsive">
        <table class="table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Esemény:</th>
                    <th>Dátum:</th>
                    <th>Időpont:</th>
                    <th>Megjegyzés:</th>
                </tr>
                <tr>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="new btn btn-success" data-toggle="modal" data-target="#myModal">Új esemény</button>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Új esemény</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body container">
                    <div class="row event">
                        <input type="text" placeholder="Esemény neve" class="form-control col-xs-12 col-md-6 col-lg-6">
                    </div>
                    <div class="row">
                        <p class="text-center data border rounded col-xs-2 col-md-4 col-lg-4">Dátum:</p>
                        <input id="datepicker" type="text" class="col-xs-12 col-md-6 col-lg-6">
                    </div>
                    <div class="row">
                        <p class="text-center data border rounded col-xs-2 col-md-4 col-lg-4">Időpont:</p>
                        <input id="timepicker" type="text" class="col-xs-12 col-md-6 col-lg-6">
                    </div>
                    <div class="row">
                        <p class="text-center data comment border rounded col-xs-2 col-md-4 col-lg-4">Megjegyzés:</p>
                        <textarea rows="4" cols="15" class="commentInput float-right form-control col-xs-12 col-md-6 col-lg-6"></textarea>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="mr-auto btn btn-default" data-dismiss="modal">Mégse</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Rendben</button>
                </div>
            </div>
         </div>
    </div>
</div>