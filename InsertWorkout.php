

<div id="insertWorkoutContainer">

    <div id="addActivityMetadata">
        <div id="dataInsertWorkout">
            <span>DATE:</span><input type="text" id="datepicker" size="20"/>
        </div>
        <div id="hourInsertWorkout">
            <span>H:</span><input type="text" id="hourGym" size="15"/>
        </div>
        <div id="durationInsertWorkout">
            <span>DURATION:</span><input type="number"  id="durationGym" size="15"/>
        </div>
    </div>

    <div id="select_BB_card">
        <span>Select BB CARD: </span>
        <select id="bb_card_value">
            <option value="null">Select a BB CARD</option>
            <?php
            include './BBCard.php';
            $cards = BBCard::getCardsFromDB(1);
            for ($i = 0; $i < count($cards); $i++) {
                $name = $cards[$i]->getName();
                echo '<option value="' . $name . ';' . $cards[$i]->getNumberOfday(). ';'. $cards[$i]->getId() . '">' . $name . '</option>';
            }
            ?>
        </select>
    </div>

    <div id="select_number_of_day">
        <span>Select BB  Day:  </span>
        <select id="select_BB_card_day">
            <option>A</option>
            <option>A</option>
        </select>
    </div>

    <div id="example" class="handsontable"></div>

    <button id="sendWorkout">SEND WORKOUT</button>


</div>



<script>

    $('[id=bb_card_value]').change(function() {
        loadBBCard();
    });
    
    $('[id=select_BB_card_day]').change(function() {
        loadExerciseBBCArdFromServer(1,2);
    });

<?php
include './GymTraining.php';

echo 'var exercises = [';
$exercises = GymTraining::getAllGymExerciseName();
for ($i = 0; $i < count($exercises); $i++) {
    echo '"' . $exercises[$i] . '"';
    if ($i != count($exercises) - 1) {
        echo ',';
    }
}
echo '];';
?>

    $(document).ready(function() {

        var data = [
            ["", "", ""]
        ];

        $('#example').handsontable({
            data: data,
            colHeaders: ["EXERCISE", "WEIGHT", "REPETITIONS"],
            minSpareRows: 2,
            rowHeaders: true,
            contextMenu: true,
            colWidths: [180, 60, 65],
            columns: [
                {
                    type: 'dropdown',
                    source: exercises
                },
                {type: 'numeric'},
                {type: 'numeric'}
            ]
        });


        /*function bindDumpButton() {
         $('body').on('click', 'button[name=dump]', function() {
         var dump = $(this).data('dump');
         var $container = $(dump);
         console.log('data of ' + dump, $container.handsontable('getData'));
         });
         }
         bindDumpButton();*/

        $('[id=sendWorkout]').click(function() {
            data = $('#example').handsontable('getData');
            dataActivity = $('[id=datepicker]').val();
            hourGym = $('[id=hourGym]').val();
            durationGym = $('[id=durationGym]').val();
            sendGymTrainingDataToServer(data, dataActivity, hourGym, durationGym, 1);
        });

        $(function() {
            $("#datepicker").datepicker();
        });

    });
</script>

