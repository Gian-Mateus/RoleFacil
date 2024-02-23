<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Integrate Bootstrap Datepicker in Laravel </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker_modal').datepicker({
                dateFormat: 'dd-mm-yy',
                container: $(this).closest('.dateContainer'),
                todayHighlight: false
            });
        });
    </script>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-placement="bottom" title="Approve" data-target="#accept_1">
            Click to Show
        </button>
        <div class="modal fade" id="accept_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-accept modal-content">
                <div class="modal-header bg-success text-light">
                  <h5 class="modal-title" id="exampleModalLongTitle"><strong>ACCEPT </strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                </div>
                <form method="POST" action="">
                  <div class="modal-body">
                    <div class="form-group dateContainer">
                      <label for="date_pick">Date</label>
                      <input id="date_pick" placeholder="DD-MM-YYYY" type="text" class="form-control datepicker_modal" name="date_pick" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-success">ACCEPT</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </body>
    </html>
