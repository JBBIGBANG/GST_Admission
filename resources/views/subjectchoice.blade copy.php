<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Subject Choice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="multiselectMoveOptions.js"></script>

    <style>
        #multiselect_right option{
            color:blue;
        }
        #multiselect_left option{
            color:red;
        }
        #multiselect_right {

        }
    </style>
</head>

<body>
    <center>
        <h1>Subject Choice List</h1>
    </center>
    <div class="panel panel-default" style="background-color:#fff; width: 800px; margin-left:15%;">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-5">
                    <h3>Eligible Subject</h3>
                    <select name="from" id="multiselect_left" class="form-control" size="15" multiple="multiple">


                        @foreach ($listOfSubject as $sub)
                            <option value="{{ $sub }}">{{ $sub }}</option>
                        @endforeach


                    </select>
                </div>
                <div class="col-sm-2">
                    <div></div> <br /><br /> <br /> <br /> <br />
                    <button type="button" id="btn_rightAll" class="btn btn-block btn-success"><i
                            class="glyphicon glyphicon-forward"></i></button>
                    <button type="button" id="btn_rightSelected" class="btn btn-block btn-success"><i
                            class="glyphicon glyphicon-chevron-right"></i></button>
                    <button type="button" id="btn_leftSelected" class="btn btn-block btn-danger"><i
                            class="glyphicon glyphicon-chevron-left"></i></button>
                    <button type="button" id="btn_leftAll" class="btn btn-block btn-danger"><i
                            class="glyphicon glyphicon-backward"></i></button>
                </div>
                <div class="col-sm-5">
                    <h3>Subject Choice Order</h3>

                    <form action="/choice-list" method="post">
                        @csrf
                        <select name="list[]" id="multiselect_right" class="form-control" size="15"
                            multiple="multiple">


                        </select>
                        <div class="row">
                            <br />
                            <div class="col-xs-6">
                                <button type="button" id="multiselect_move_up" class="btn btn-block btn-info"><i
                                        class="glyphicon glyphicon-arrow-up"></i></button>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" id="multiselect_move_down"
                                    class="btn btn-block btn-info col-sm-6"><i
                                        class="glyphicon glyphicon-arrow-down"></i></button>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary center" value="Next" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#btn_leftSelected').click(function() {
                // pass id select lists as parameters
                moveItemsToLeft('#multiselect_left', '#multiselect_right');
            });
            $('#btn_rightSelected').on('click', function() {
                moveItemsToRight('#multiselect_left', '#multiselect_right');
            });
            $('#btn_leftAll').on('click', function() {
                moveAllItemsToSource('#multiselect_left', '#multiselect_right');
            });

            $('#btn_rightAll').on('click', function() {
                moveAllItemsToDest('#multiselect_left', '#multiselect_right');
            });

            $('#multiselect_move_up').click(function() {
                moveUp('#multiselect_right');
            });

            $('#multiselect_move_down').click(function() {
                moveDown('#multiselect_right');
            });
        });



        function moveItemsToRight(sourseSelect, destSelect) { // move selected items from left to right select list
            $(destSelect).append($(sourseSelect + ' option:selected').clone());
            $(sourseSelect + ' option:selected').css("display", "none").removeAttr("selected");
        }


        function moveItemsToLeft(sourseSelect, destSelect) { // move back selected items from right to left select list
            $(destSelect + " option:selected").each(function() {
                $(sourseSelect + ' option[value=' + $(this).val() + ']').show().removeAttr("selected");
                $(this).remove();
            });
        }

        function moveAllItemsToDest(sourseSelect, destSelect) { // move all items from left to right select list
            $(destSelect).append($(sourseSelect + ' option').clone());
            $(sourseSelect + ' option').css("display", "none").removeAttr("selected");
            $(destSelect + ' option').filter(function() {
                if ($(this).css("display") == "none") {
                    $(this).remove();
                }

            });
        }

        function moveAllItemsToSource(sourseSelect,
            destSelect) { // move back all available items from right to left select list
            $(sourseSelect + ' option').show().removeAttr("selected");
            $(destSelect + ' option').remove();
        }

        function moveUp(destSelect) { // move selected items one step up in right select list
            var op = $(destSelect + ' option:selected');
            op.first().prev().before(op);
        }

        function moveDown(destSelect) { // move selected items one step down in right select list
            var op = $(destSelect + ' option:selected');
            op.last().next().after(op);
        }
        $('.option').setAttribute('selected');

    </script>
</body>

</html>
